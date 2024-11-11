import requests

response = requests.get('https://pokeapi.co/api/v2/evolution-chain/?offset=0&limit=20000')
evol_chain = response.json()
all = evol_chain['results']
tots = []

for i in all:
    evo = requests.get(i["url"]).json()
    pomeon_id1= requests.get(evo["chain"]["species"]["url"]).json()["id"]
    for j in evo["chain"]["evolves_to"]:
        poke = requests.get(j["species"]["url"]).json()["id"]
        print(pomeon_id1,poke)
        tots.append({"id_poke":pomeon_id1,
                     "id_poke_evo":poke
                    })
        if j["evolves_to"] != 0:
            for n in j["evolves_to"]:
                poke2 = requests.get(n["species"]["url"]).json()["id"]
                print(poke,poke2)
                tots.append({"id_poke":poke,
                        "id_poke_evo":poke2
                        })
f = open('evo.txt', 'a', encoding='utf8')

def escriure(file,pokemon):
    file.write("")
    file.write('''DB::table("Evolutions")->insert([\n''')
    file.write(f"""  "id_poke"=>"{pokemon["id_poke"]}",\n""")
    file.write(f"""  "id_poke_evo"=>"{pokemon["id_poke_evo"]}",\n""")
    file.write("""]);\n""")

for i in tots:
    escriure(f,i)