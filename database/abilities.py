import requests

response = requests.get('https://pokeapi.co/api/v2/ability?offset=0&limit=200000')
abilities = response.json()
all = abilities['results']
tots = []

for i in all:
    abiliti = requests.get(i["url"]).json()
    text = "null"
    print(abiliti["name"])
    if len(abiliti["effect_entries"]) == 0 and len(abiliti["flavor_text_entries"]) != 0:
        for i in abiliti["flavor_text_entries"]:
            if i["language"]["name"] == "en":
                text = i["flavor_text"]
    tots.append({"id":abiliti["id"],
                 "Name":abiliti["name"],
                 "Desc":abiliti["effect_entries"][1]["effect"] if len(abiliti["effect_entries"]) >= 2 else abiliti["effect_entries"][0]["effect"] if len(abiliti["effect_entries"]) != 0 else text,
                })
f = open('AbilitiList.txt', 'a', encoding='utf8')

def escriure(file,pokemon):
    file.write("")
    file.write('''DB::table("Pokemon")->insert([\n''')
    file.write(f"""  "id"=>"{pokemon["id"]}",\n""")
    file.write(f"""  "Name"=>"{pokemon["Name"]}",\n""")
    file.write(f"""  "Desc"=>"{pokemon["Desc"].replace("\n"," ").replace("\f"," ")}",\n""")
    file.write("""]);\n""")

for i in tots:
    escriure(f,i)