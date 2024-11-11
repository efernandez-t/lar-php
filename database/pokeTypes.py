import requests
import concurrent.futures

def get_pokemon_details(url):
    types = {"normal":1,"fire":2,"water":3,"electric":4,"grass":5,"ice":6,"fighting":7,"poison":8,"ground":9,"flying":10,"psychic":11,"bug":12,"rock":13,"ghost":14,"dragon":15,"dark":16,"steel":17,"fairy":18}
    response = requests.get(url)
    item = response.json()
    return {
        "id": item["id"],
        "Type1":types[item["types"][0]["type"]["name"]],
        "Type2":types[item["types"][1]["type"]["name"]] if len(item["types"]) == 2 else "Null",
    }

def write_to_file_typ1(file, item):
    print(item["id"])
    file.write('''DB::table("pokemon_types")->insert([\n''')
    file.write(f'''  "pokemon_id"=>"{item["id"]}",\n''')
    file.write(f'''  "type_id"=>"{item["Type1"]}",\n''')
    file.write(']);\n')

def write_to_file_typ2(file, item):
    print(item["id"])
    file.write('''DB::table("pokemon_types")->insert([\n''')
    file.write(f'''  "pokemon_id"=>"{item["id"]}",\n''')
    file.write(f'''  "type_id"=>"{item["Type2"]}",\n''')
    file.write(']);\n')

def main():
    base_url = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=2000'
    response = requests.get(base_url)
    items = response.json()["results"]

    with open('types.txt', 'a', encoding='utf-8') as f:
        with concurrent.futures.ThreadPoolExecutor() as executor:
            futures = [executor.submit(get_pokemon_details, item["url"]) for item in items]

            for future in concurrent.futures.as_completed(futures):
                item_data = future.result()
                write_to_file_typ1(f, item_data)
                if item_data["Type2"]:
                    write_to_file_typ2(f, item_data)

if __name__ == "__main__":
    main()
