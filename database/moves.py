import requests

response = requests.get('https://pokeapi.co/api/v2/move?offset=0&limit=20000')
moves = response.json()
all = moves['results']
tots = []

for i in all:
    move = requests.get(i["url"]).json()
    text = "null"
    print(move["name"])
    if len(move["effect_entries"]) != 0 and len(move["flavor_text_entries"]) != 0:
        if len(move["effect_entries"]) != 0:
            text = move["effect_entries"][0]["effect"]
        else:
            for i in move["flavor_text_entries"]:
                if i["language"]["name"] == "en":
                    text = i["flavor_text"]
                    break
    tots.append({"id":move["id"],
                 "name":move["name"],
                 "power":move["power"],
                 "precision":move["accuracy"],
                 "pp":move["pp"],
                 "type":move["type"]["name"],
                 "class":move["damage_class"]["name"],
                 "desc":text,
                })
f = open('moves.txt', 'a', encoding='utf8')

def escriure(file,pokemon):
    file.write("")
    file.write('''DB::table("Pokemon")->insert([\n''')
    file.write(f"""  "id"=>"{pokemon["id"]}",\n""")
    file.write(f"""  "name"=>"{pokemon["name"]}",\n""")
    file.write(f"""  "power"=>"{pokemon["power"]}",\n""")
    file.write(f"""  "precision"=>"{pokemon["precision"]}",\n""")
    file.write(f"""  "pp"=>"{pokemon["pp"]}",\n""")
    file.write(f"""  "type"=>"{pokemon["type"]}",\n""")
    file.write(f"""  "class"=>"{pokemon["class"]}",\n""")
    file.write(f"""  "desc"=>"{pokemon["desc"].replace("\n"," ").replace("\f"," ")}",\n""")

    file.write("""]);\n""")

for i in tots:
    escriure(f,i)