import requests
import os
import threading

response = requests.get('https://pokeapi.co/api/v2/pokemon/?offset=0&limit=2000')
pokemons = response.json()
all_pokemons = pokemons['results']

def download_sprite(pokemon_id, sprite_url, file_name):
    response = requests.get(sprite_url, stream=True)
    if response.ok:
        with open(file_name, 'wb') as file:
            for block in response.iter_content(1024):
                if not block:
                    break
                file.write(block)
    else:
        print(f"Error al descargar el sprite de Pokémon ID {pokemon_id}")

def handle_pokemon(pokemon):
    poke = requests.get(pokemon["url"]).json()

    pokemon_data = {
        "id": poke["id"],
        "Name": pokemon["name"],
        "sprite": poke["sprites"]["other"]["official-artwork"]["front_default"],
        "spriteS": poke["sprites"]["other"]["official-artwork"]["front_shiny"]
    }

    normal_sprite_path = f"C:/Users/edgar/OneDrive/Desktop/php/lar-php/storage/app/public/Pokemon/sprite/{pokemon_data['id']}.wb"
    shiny_sprite_path = f"C:/Users/edgar/OneDrive/Desktop/php/lar-php/storage/app/public/Pokemon/spriteS/{pokemon_data['id']}S.wb"

    if pokemon_data["sprite"]:
        download_sprite(pokemon_data["id"], pokemon_data["sprite"], normal_sprite_path)
    if pokemon_data["spriteS"]:
        download_sprite(pokemon_data["id"], pokemon_data["spriteS"], shiny_sprite_path)

def download_all_sprites(pokemons):
    threads = []
    for pokemon in pokemons:
        thread = threading.Thread(target=handle_pokemon, args=(pokemon,))
        threads.append(thread)
        thread.start()

    for thread in threads:
        thread.join()

download_all_sprites(all_pokemons)
