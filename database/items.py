import requests
import concurrent.futures

def get_item_details(url):
    response = requests.get(url)
    item = response.json()
    text = "null"
    for entry in item["flavor_text_entries"]:
        if entry["language"]["name"] == "en":
            text = entry["text"]
            break
    return {
        "id": item["id"],
        "name": item["name"],
        "desc": text,
        "sprite": item["sprites"]["default"]
    }

def write_to_file(file, item):
    print(item["id"])
    file.write('''DB::table("Items")->insert([\n''')
    file.write(f'''  "id"=>"{item["id"]}",\n''')
    file.write(f'''  "name"=>"{item["name"]}",\n''')
    file.write(f'''  "desc"=>"{item["desc"].replace("\n"," ").replace("\f"," ")}",\n''')
    file.write(f'''  "sprite"=>"{item["sprite"]}",\n''')
    file.write(']);\n')

def main():
    base_url = 'https://pokeapi.co/api/v2/item?offset=0&limit=20000'
    response = requests.get(base_url)
    items = response.json()["results"]
    
    with open('items.txt', 'a', encoding='utf-8') as f:
        with concurrent.futures.ThreadPoolExecutor() as executor:
            futures = [executor.submit(get_item_details, item["url"]) for item in items]
            
            for future in concurrent.futures.as_completed(futures):
                item_data = future.result()
                write_to_file(f, item_data)

if __name__ == "__main__":
    main()
