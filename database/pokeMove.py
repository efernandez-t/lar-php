import requests
import concurrent.futures

def get_pokemon_data(pokemon_url):
    print("get", pokemon_url)
    """Descargar los detalles de un Pokémon dado su URL."""
    return requests.get(pokemon_url).json()

def get_move_details(pokemon_id, move_url):
    print("get move", move_url)
    """Descargar los detalles de un movimiento dado su URL."""
    move = requests.get(move_url).json()
    return {"id_poke": pokemon_id, "id_move": move["id"]}

def write_to_file(file, pokemon_move):
    print("escriure ",pokemon_move)
    """Escribir los detalles del movimiento de un Pokémon en el archivo."""
    file.write('''DB::table("poke-move")->insert([\n''')
    file.write(f'''  "id_poke"=>"{pokemon_move["id_poke"]}",\n''')
    file.write(f'''  "id_move"=>"{pokemon_move["id_move"]}",\n''')
    file.write(']);\n')

def main():
    # Obtener la lista de todos los Pokémon
    response = requests.get('https://pokeapi.co/api/v2/pokemon/?offset=0&limit=20000')
    pokemons = response.json()
    all_pokemons = pokemons['results']
    tots = []

    with open('PokeMove.txt', 'a', encoding='utf-8') as f:
        with concurrent.futures.ThreadPoolExecutor() as executor:
            future_pokemon_data = []

            # Obtener detalles de todos los Pokémon en paralelo
            for pokemon in all_pokemons:
                future = executor.submit(get_pokemon_data, pokemon["url"])
                future_pokemon_data.append(future)

            future_pokemon_moves = []

            # Procesar los resultados de los Pokémon tan pronto como estén disponibles
            for future in concurrent.futures.as_completed(future_pokemon_data):
                poke_data = future.result()
                pokemon_id = poke_data["id"]

                # Obtener los detalles de los movimientos del Pokémon en paralelo
                for move in poke_data["moves"]:
                    move_url = move["move"]["url"]
                    future_move = executor.submit(get_move_details, pokemon_id, move_url)
                    future_pokemon_moves.append(future_move)

            # Procesar los movimientos tan pronto como se completen
            for future in concurrent.futures.as_completed(future_pokemon_moves):
                pokemon_move = future.result()
                tots.append(pokemon_move)
                write_to_file(f, pokemon_move)

if __name__ == "__main__":
    main()
