import requests

response = requests.get('https://pokeapi.co/api/v2/pokemon/?offset=0&limit=2000')
pokemons = response.json()
all = pokemons['results']
tots = []
generations = {"generation-i":1,"generation-ii":2,"generation-iii":3,"generation-iv":4,"generation-v":5,"generation-vi":6,"generation-vii":7,"generation-viii":8,"generation-ix":9}
types = {"normal":1,"fire":2,"water":3,"electric":4,"grass":5,"ice":6,"fighting":7,"poison":8,"ground":9,"flying":10,"psychic":11,"bug":12,"rock":13,"ghost":14,"dragon":15,"dark":16,"steel":17,"fairy":18}

for i in all:
    name=i['name']
    poke = requests.get(i["url"]).json()
    specie = requests.get(poke["species"]["url"]).json()
    print(poke["id"])
    tots.append({"id":poke["id"],
                 "Name":name,
                 "Type1":types[poke["types"][0]["type"]["name"]],
                 "Type2":types[poke["types"][1]["type"]["name"]] if len(poke["types"]) == 2 else "Null",
                 "Height":(poke["height"]/10),
                 "Weight":(poke["weight"]/10),
                 "HP":poke["stats"][0]["base_stat"],
                 "Attack":poke["stats"][1]["base_stat"],
                 "Defense":poke["stats"][2]["base_stat"],
                 "Sp_Atk":poke["stats"][3]["base_stat"],
                 "Sp_Def":poke["stats"][4]["base_stat"],
                 "Speed":poke["stats"][5]["base_stat"],
                 "Desc":specie["flavor_text_entries"][0]["flavor_text"],
                 "sprite":poke["sprites"]["other"]["official-artwork"]["front_default"],
                 "spriteS":poke["sprites"]["other"]["official-artwork"]["front_shiny"],
                 "Gen_id":generations[specie["generation"]["name"]]
                })
f = open('PokeList.txt', 'a', encoding='utf8')

def escriure(file,pokemon):
    file.write("")
    file.write('''DB::table("Pokemon")->insert([\n''')
    file.write(f"""  "id"=>"{pokemon["id"]}",\n""")
    file.write(f"""  "Name"=>"{pokemon["Name"]}",\n""")
    file.write(f"""  "Type1"=>"{pokemon["Type1"]}",\n""")
    file.write(f"""  "Type2"=>"{pokemon["Type2"]}",\n""")
    file.write(f"""  "Height"=>"{pokemon["Height"]}",\n""")
    file.write(f"""  "Weight"=>"{pokemon["Weight"]}",\n""")
    file.write(f"""  "Hp"=>"{pokemon["HP"]}",\n""")
    file.write(f"""  "Attack"=>"{pokemon["Attack"]}",\n""")
    file.write(f"""  "Defense"=>"{pokemon["Defense"]}",\n""")
    file.write(f"""  "Sp_Atk"=>"{pokemon["Sp_Atk"]}",\n""")
    file.write(f"""  "Sp_Def"=>"{pokemon["Sp_Def"]}",\n""")
    file.write(f"""  "Speed"=>"{pokemon["Speed"]}",\n""")
    file.write(f"""  "Desc"=>"{pokemon["Desc"].replace("\n"," ").replace("\f"," ")}",\n""")
    file.write(f"""  "Sprite"=>"{pokemon["sprite"]}",\n""")
    file.write(f"""  "Sprite_shiny"=>"{pokemon["spriteS"]}",\n""")
    file.write(f"""  "Gen_id"=>"{pokemon["Gen_id"]}",\n""")
    file.write("""]);\n""")

for i in tots:
    escriure(f,i)