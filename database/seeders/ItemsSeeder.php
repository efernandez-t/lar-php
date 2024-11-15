<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Items")->insert([
            "id"=>"5",
            "name"=>"safari-ball",
            "desc"=>"A special BALL that is used only in the SAFARI ZONE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/safari-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"6",
            "name"=>"net-ball",
            "desc"=>"A BALL that works well on WATER- and BUG-type POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/net-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"4",
            "name"=>"poke-ball",
            "desc"=>"A tool used for catching wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1",
            "name"=>"master-ball",
            "desc"=>"The best BALL that catches a POKéMON without fail.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/master-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"3",
            "name"=>"great-ball",
            "desc"=>"A good BALL with a higher catch rate than a POKé BALL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/great-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2",
            "name"=>"ultra-ball",
            "desc"=>"A better BALL with a higher catch rate than a GREAT BALL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ultra-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"7",
            "name"=>"dive-ball",
            "desc"=>"A BALL that works better on POKéMON on the ocean floor.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dive-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"9",
            "name"=>"repeat-ball",
            "desc"=>"A BALL that works better on POKéMON caught before.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/repeat-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"10",
            "name"=>"timer-ball",
            "desc"=>"More effective as more turns are taken in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/timer-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"12",
            "name"=>"premier-ball",
            "desc"=>"A rare BALL made in commemoration of some event.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/premier-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"11",
            "name"=>"luxury-ball",
            "desc"=>"A cozy BALL that makes POKéMON more friendly.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/luxury-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"8",
            "name"=>"nest-ball",
            "desc"=>"A BALL that works better on weaker POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/nest-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"18",
            "name"=>"antidote",
            "desc"=>"Heals a poisoned POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/antidote.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"16",
            "name"=>"cherish-ball",
            "desc"=>"A quite rare Poké Ball that has been specially crafted to commemorate an occasion of some sort.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cherish-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"13",
            "name"=>"dusk-ball",
            "desc"=>"A somewhat different Poké Ball that makes it easier to catch wild Pokémon at night or in dark places like caves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dusk-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"19",
            "name"=>"burn-heal",
            "desc"=>"Heals POKéMON of a burn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/burn-heal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"22",
            "name"=>"paralyze-heal",
            "desc"=>"Heals a paralyzed POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/paralyze-heal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"17",
            "name"=>"potion",
            "desc"=>"Restores the HP of a POKéMON by 20 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/potion.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"14",
            "name"=>"heal-ball",
            "desc"=>"A remedial Poké Ball that restores the caught Pokémon’s HP and eliminates any status problem.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heal-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"23",
            "name"=>"full-restore",
            "desc"=>"Fully restores the HP and status of a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/full-restore.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"21",
            "name"=>"awakening",
            "desc"=>"Awakens a sleeping POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/awakening.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"15",
            "name"=>"quick-ball",
            "desc"=>"A somewhat different Poké Ball that provides a better catch rate if it is used at the start of a wild encounter.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/quick-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"24",
            "name"=>"max-potion",
            "desc"=>"Fully restores the HP of a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/max-potion.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"20",
            "name"=>"ice-heal",
            "desc"=>"Defrosts a frozen POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ice-heal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"28",
            "name"=>"revive",
            "desc"=>"Revives a fainted POKéMON with half its HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/revive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"25",
            "name"=>"hyper-potion",
            "desc"=>"Restores the HP of a POKéMON by 200 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hyper-potion.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"27",
            "name"=>"full-heal",
            "desc"=>"Heals all the status problems of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/full-heal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"26",
            "name"=>"super-potion",
            "desc"=>"Restores the HP of a POKéMON by 50 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/super-potion.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"29",
            "name"=>"max-revive",
            "desc"=>"Revives a fainted POKéMON with all its HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/max-revive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"33",
            "name"=>"moomoo-milk",
            "desc"=>"A nutritious milk that restores HP by 100 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/moomoo-milk.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"30",
            "name"=>"fresh-water",
            "desc"=>"A mineral water that restores HP by 50 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fresh-water.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"32",
            "name"=>"lemonade",
            "desc"=>"A very sweet drink that restores HP by 80 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lemonade.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"34",
            "name"=>"energy-powder",
            "desc"=>"A bitter powder that restores HP by 50 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/energy-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"31",
            "name"=>"soda-pop",
            "desc"=>"A fizzy soda drink that restores HP by 60 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/soda-pop.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"35",
            "name"=>"energy-root",
            "desc"=>"A bitter root that restores HP by 200 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/energy-root.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"37",
            "name"=>"revival-herb",
            "desc"=>"A very bitter herb that revives a fainted POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/revival-herb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"36",
            "name"=>"heal-powder",
            "desc"=>"A bitter powder that heals all status problems.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heal-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"41",
            "name"=>"max-elixir",
            "desc"=>"Fully restores the PP of a POKéMON’s moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/max-elixir.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"38",
            "name"=>"ether",
            "desc"=>"Restores the PP of a selected move by 10.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ether.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"44",
            "name"=>"sacred-ash",
            "desc"=>"Fully revives and restores all fainted POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sacred-ash.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"42",
            "name"=>"lava-cookie",
            "desc"=>"A local specialty that heals all status problems.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lava-cookie.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"40",
            "name"=>"elixir",
            "desc"=>"Restores the PP of all moves by 10.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/elixir.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"46",
            "name"=>"protein",
            "desc"=>"Raises the stat ATTACK of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/protein.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"43",
            "name"=>"berry-juice",
            "desc"=>"A 100% pure juice that restores HP by 20 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/berry-juice.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"39",
            "name"=>"max-ether",
            "desc"=>"Fully restores the PP of a selected move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/max-ether.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"45",
            "name"=>"hp-up",
            "desc"=>"Raises the HP of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hp-up.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"47",
            "name"=>"iron",
            "desc"=>"Raises the stat DEFENSE of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/iron.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"49",
            "name"=>"calcium",
            "desc"=>"Raises the stat SP. ATK of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/calcium.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"48",
            "name"=>"carbos",
            "desc"=>"Raises the stat SPEED of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/carbos.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"50",
            "name"=>"rare-candy",
            "desc"=>"Raises the level of a POKéMON by one.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rare-candy.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"51",
            "name"=>"pp-up",
            "desc"=>"Raises the maximum PP of a selected move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pp-up.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"53",
            "name"=>"pp-max",
            "desc"=>"Raises the PP of a move to its maximum points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pp-max.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"52",
            "name"=>"zinc",
            "desc"=>"Raises the base SP. DEF stat of one POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/zinc.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"60",
            "name"=>"x-accuracy",
            "desc"=>"Raises accuracy of attack moves during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-accuracy.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"54",
            "name"=>"old-gateau",
            "desc"=>"Old Chateau’s hidden specialty. It heals all the status problems of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/old-gateau.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"58",
            "name"=>"x-defense",
            "desc"=>"Raises the stat DEFENSE during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-defense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"57",
            "name"=>"x-attack",
            "desc"=>"Raises the stat ATTACK during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-attack.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"56",
            "name"=>"dire-hit",
            "desc"=>"Raises the critical-hit ratio during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dire-hit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"59",
            "name"=>"x-speed",
            "desc"=>"Raises the stat SPEED during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-speed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"61",
            "name"=>"x-sp-atk",
            "desc"=>"Raises the stat SP. ATK during one battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-atk.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"55",
            "name"=>"guard-spec",
            "desc"=>"Prevents stat reduction when used in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/guard-spec.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"62",
            "name"=>"x-sp-def",
            "desc"=>"An item that raises the Sp. Def stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-def.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"64",
            "name"=>"fluffy-tail",
            "desc"=>"Use to flee from any battle with a wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fluffy-tail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"63",
            "name"=>"poke-doll",
            "desc"=>"Use to flee from any battle with a wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-doll.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"65",
            "name"=>"blue-flute",
            "desc"=>"A glass flute that awakens sleeping POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"69",
            "name"=>"white-flute",
            "desc"=>"A glass flute that lures wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/white-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"66",
            "name"=>"yellow-flute",
            "desc"=>"A glass flute that snaps POKéMON out of confusion.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"68",
            "name"=>"black-flute",
            "desc"=>"A glass flute that keeps away wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/black-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"70",
            "name"=>"shoal-salt",
            "desc"=>"Salt obtained from deep inside the SHOAL CAVE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shoal-salt.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"67",
            "name"=>"red-flute",
            "desc"=>"A glass flute that snaps POKéMON out of attraction.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"71",
            "name"=>"shoal-shell",
            "desc"=>"A seashell that you found inside Shoal Cave.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shoal-shell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"73",
            "name"=>"blue-shard",
            "desc"=>"A shard from an ancient item. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"72",
            "name"=>"red-shard",
            "desc"=>"A shard from an ancient item. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"74",
            "name"=>"yellow-shard",
            "desc"=>"A shard from an ancient item. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"75",
            "name"=>"green-shard",
            "desc"=>"A shard from an ancient item. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/green-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"79",
            "name"=>"repel",
            "desc"=>"Repels weak wild POKéMON for 100 steps.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/repel.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"78",
            "name"=>"escape-rope",
            "desc"=>"Use to escape instantly from a cave or a dungeon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/escape-rope.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"80",
            "name"=>"sun-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sun-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"81",
            "name"=>"moon-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/moon-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"82",
            "name"=>"fire-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fire-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"77",
            "name"=>"max-repel",
            "desc"=>"Repels weak wild POKéMON for 250 steps.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/max-repel.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"85",
            "name"=>"leaf-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/leaf-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"84",
            "name"=>"water-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/water-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"83",
            "name"=>"thunder-stone",
            "desc"=>"Makes certain species of POKéMON evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/thunder-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"86",
            "name"=>"tiny-mushroom",
            "desc"=>"A plain, ordinary mushroom. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tiny-mushroom.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"76",
            "name"=>"super-repel",
            "desc"=>"Repels weak wild POKéMON for 200 steps.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/super-repel.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"87",
            "name"=>"big-mushroom",
            "desc"=>"A rare mushroom that would sell at a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/big-mushroom.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"88",
            "name"=>"pearl",
            "desc"=>"A pretty pearl. Can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pearl.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"90",
            "name"=>"stardust",
            "desc"=>"Beautiful red sand. Can be sold at a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/stardust.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"89",
            "name"=>"big-pearl",
            "desc"=>"A lovely large pearl that would sell at a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/big-pearl.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"91",
            "name"=>"star-piece",
            "desc"=>"A red gem shard. It would sell for a very high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/star-piece.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"92",
            "name"=>"nugget",
            "desc"=>"A nugget of pure gold. Can be sold at a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/nugget.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"93",
            "name"=>"heart-scale",
            "desc"=>"A lovely scale. It is coveted by collectors.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heart-scale.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"95",
            "name"=>"growth-mulch",
            "desc"=>"A plant fertilizer spread on soft soil. It speeds up the growth of Berries. However, it also dries the soil faster.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/growth-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"96",
            "name"=>"damp-mulch",
            "desc"=>"A plant fertilizer spread on soft soil. It slows the growth of Berries and causes the soil to dry slower.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/damp-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"98",
            "name"=>"gooey-mulch",
            "desc"=>"A plant fertilizer spread on soft soil. It ups the number of times new plants grow where mature plants withered.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gooey-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"94",
            "name"=>"honey",
            "desc"=>"A sweet honey with a lush aroma that attracts wild Pokémon when it is used in grass, caves, or on special trees.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/honey.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"97",
            "name"=>"stable-mulch",
            "desc"=>"A plant fertilizer spread on soft soil. It extends the time ripened Berries remain on their plants before falling.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/stable-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"99",
            "name"=>"root-fossil",
            "desc"=>"A fossil of an ancient, seafloor- dwelling POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/root-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"100",
            "name"=>"claw-fossil",
            "desc"=>"A fossil of an ancient, seafloor- dwelling POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/claw-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"102",
            "name"=>"dome-fossil",
            "desc"=>"A piece of an ancient marine POKéMON’s shell.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dome-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"103",
            "name"=>"old-amber",
            "desc"=>"A stone containing the genes of an ancient POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/old-amber.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"101",
            "name"=>"helix-fossil",
            "desc"=>"A piece of an ancient marine POKéMON’s seashell.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/helix-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"104",
            "name"=>"armor-fossil",
            "desc"=>"A fossil from a prehistoric Pokémon that lived on the land. It appears to be part of a collar.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/armor-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"109",
            "name"=>"dawn-stone",
            "desc"=>"A peculiar stone that makes certain species of Pokémon evolve. It sparkles like eyes.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dawn-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"108",
            "name"=>"dusk-stone",
            "desc"=>"A peculiar stone that makes certain species of Pokémon evolve. It is as dark as dark can be.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dusk-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"107",
            "name"=>"shiny-stone",
            "desc"=>"A peculiar stone that makes certain species of Pokémon evolve. It shines with a dazzling light.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shiny-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"105",
            "name"=>"skull-fossil",
            "desc"=>"A fossil from a prehistoric Pokémon that lived on the land. It appears to be part of a head.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/skull-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"106",
            "name"=>"rare-bone",
            "desc"=>"A bone that is extremely valuable for Pokémon archaeology. It can be sold for a high price to shops.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rare-bone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"112",
            "name"=>"adamant-orb",
            "desc"=>"A brightly gleaming orb to be held by DIALGA. It boosts the power of Dragon-​ and Steel-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/adamant-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"110",
            "name"=>"oval-stone",
            "desc"=>"A peculiar stone that makes certain species of Pokémon evolve. It is shaped like an egg.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/oval-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"111",
            "name"=>"odd-keystone",
            "desc"=>"A vital item that is needed to keep a stone tower from collapsing. Voices can be heard from it occasionally.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/odd-keystone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"113",
            "name"=>"lustrous-orb",
            "desc"=>"A beautifully glowing orb to be held by PALKIA. It boosts the power of Dragon-​ and Water-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lustrous-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"115",
            "name"=>"flame-mail",
            "desc"=>"Stationery featuring a print of flames in blazing red. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flame-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"114",
            "name"=>"grass-mail",
            "desc"=>"Stationery featuring a print of a refreshingly green field. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grass-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"116",
            "name"=>"bubble-mail",
            "desc"=>"Stationery featuring a print of a blue world underwater. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bubble-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"118",
            "name"=>"tunnel-mail",
            "desc"=>"Stationery featuring a print of a dimly lit coal mine. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tunnel-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"119",
            "name"=>"steel-mail",
            "desc"=>"Stationery featuring a print of cool mechanical designs. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steel-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"117",
            "name"=>"bloom-mail",
            "desc"=>"Stationery featuring a print of pretty floral patterns. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bloom-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"124",
            "name"=>"mosaic-mail",
            "desc"=>"Stationery featuring a print of a vivid rainbow pattern. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mosaic-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"120",
            "name"=>"heart-mail",
            "desc"=>"Stationery featuring a print of giant heart patterns. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heart-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"121",
            "name"=>"snow-mail",
            "desc"=>"Stationery featuring a print of a chilly, snow-covered world. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/snow-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"122",
            "name"=>"space-mail",
            "desc"=>"Stationery featuring a print depicting the huge expanse of space. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/space-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"123",
            "name"=>"air-mail",
            "desc"=>"Stationery featuring a print of colorful letter sets. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/air-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"125",
            "name"=>"brick-mail",
            "desc"=>"Stationery featuring a print of a tough-looking brick pattern. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/brick-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"128",
            "name"=>"pecha-berry",
            "desc"=>"A hold item that heals poisoning in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pecha-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"127",
            "name"=>"chesto-berry",
            "desc"=>"A hold item that awakens POKéMON in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/chesto-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"126",
            "name"=>"cheri-berry",
            "desc"=>"A hold item that heals paralysis in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cheri-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"134",
            "name"=>"lum-berry",
            "desc"=>"A hold item that heals status in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lum-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"130",
            "name"=>"aspear-berry",
            "desc"=>"A hold item that defrosts POKéMON in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aspear-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"129",
            "name"=>"rawst-berry",
            "desc"=>"A hold item that heals a burn in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rawst-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"136",
            "name"=>"figy-berry",
            "desc"=>"A hold item that restores HP but may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/figy-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"131",
            "name"=>"leppa-berry",
            "desc"=>"A hold item that restores 10 PP in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/leppa-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"133",
            "name"=>"persim-berry",
            "desc"=>"A hold item that heals confusion in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/persim-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"132",
            "name"=>"oran-berry",
            "desc"=>"A hold item that restores 10 HP in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/oran-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"135",
            "name"=>"sitrus-berry",
            "desc"=>"A hold item that restores 30 HP in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sitrus-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"137",
            "name"=>"wiki-berry",
            "desc"=>"A hold item that restores HP but may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wiki-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"138",
            "name"=>"mago-berry",
            "desc"=>"A hold item that restores HP but may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mago-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"140",
            "name"=>"iapapa-berry",
            "desc"=>"A hold item that restores HP but may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/iapapa-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"139",
            "name"=>"aguav-berry",
            "desc"=>"A hold item that restores HP but may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aguav-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"144",
            "name"=>"wepear-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow WEPEAR.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wepear-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"141",
            "name"=>"razz-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow RAZZ.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/razz-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"146",
            "name"=>"pomeg-berry",
            "desc"=>"A Berry to be consumed by Pokémon. Using it on a Pokémon makes it more friendly but lowers its base HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pomeg-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"145",
            "name"=>"pinap-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow PINAP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pinap-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"142",
            "name"=>"bluk-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow BLUK.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bluk-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"143",
            "name"=>"nanab-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow NANAB.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/nanab-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"147",
            "name"=>"kelpsy-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow KELPSY.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kelpsy-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"148",
            "name"=>"qualot-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow QUALOT.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/qualot-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"149",
            "name"=>"hondew-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow HONDEW.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hondew-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"151",
            "name"=>"tamato-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow TAMATO.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tamato-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"152",
            "name"=>"cornn-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow CORNN.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cornn-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"150",
            "name"=>"grepa-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow GREPA.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grepa-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"156",
            "name"=>"spelon-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow SPELON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/spelon-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"158",
            "name"=>"watmel-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow WATMEL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/watmel-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"155",
            "name"=>"nomel-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow NOMEL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/nomel-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"153",
            "name"=>"magost-berry",
            "desc"=>"A Berry which is very rare in the Unova region. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magost-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"154",
            "name"=>"rabuta-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow RABUTA.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rabuta-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"157",
            "name"=>"pamtre-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow PAMTRE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pamtre-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"160",
            "name"=>"belue-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow BELUE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/belue-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"161",
            "name"=>"occa-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Fire-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/occa-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"159",
            "name"=>"durin-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow DURIN.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/durin-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"162",
            "name"=>"passho-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Water-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/passho-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"163",
            "name"=>"wacan-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Electric-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wacan-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"164",
            "name"=>"rindo-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Grass-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rindo-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"170",
            "name"=>"payapa-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Psychic-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/payapa-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"167",
            "name"=>"kebia-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Poison-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kebia-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"169",
            "name"=>"coba-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Flying-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/coba-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"168",
            "name"=>"shuca-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Ground-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shuca-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"166",
            "name"=>"chople-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Fighting-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/chople-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"165",
            "name"=>"yache-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Ice-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yache-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"173",
            "name"=>"kasib-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Ghost-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kasib-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"172",
            "name"=>"charti-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Rock-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/charti-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"171",
            "name"=>"tanga-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Bug-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tanga-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"174",
            "name"=>"haban-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Dragon-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/haban-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"175",
            "name"=>"colbur-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Dark-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/colbur-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"176",
            "name"=>"babiri-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s supereffective Steel-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/babiri-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"178",
            "name"=>"liechi-berry",
            "desc"=>"A hold item that raises ATTACK in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/liechi-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"179",
            "name"=>"ganlon-berry",
            "desc"=>"A hold item that raises DEFENSE in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ganlon-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"177",
            "name"=>"chilan-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it weakens a foe’s Normal-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/chilan-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"185",
            "name"=>"enigma-berry",
            "desc"=>"POKéBLOCK ingredient. Plant in loamy soil to grow a mystery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/enigma-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"182",
            "name"=>"apicot-berry",
            "desc"=>"A hold item that raises SP. DEF in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/apicot-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"184",
            "name"=>"starf-berry",
            "desc"=>"A hold item that sharply boosts a stat in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/starf-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"180",
            "name"=>"salac-berry",
            "desc"=>"A hold item that raises SPEED in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/salac-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"183",
            "name"=>"lansat-berry",
            "desc"=>"A hold item that ups the critical- hit rate in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lansat-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"181",
            "name"=>"petaya-berry",
            "desc"=>"A hold item that raises SP. ATK in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/petaya-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"186",
            "name"=>"micle-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it raises the accuracy of a move just once in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/micle-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"187",
            "name"=>"custap-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, it gets to move first just once in a pinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/custap-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"189",
            "name"=>"rowap-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, and if a foe’s special attack lands, the foe also takes damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rowap-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"188",
            "name"=>"jaboca-berry",
            "desc"=>"A Poffin ingredient. If held by a Pokémon, and if a foe’s physical attack lands, the foe also takes damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/jaboca-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"193",
            "name"=>"exp-share",
            "desc"=>"A hold item that gets EXP. points from battles.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/exp-share.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"192",
            "name"=>"macho-brace",
            "desc"=>"A hold item that promotes growth, but reduces SPEED.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/macho-brace.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"196",
            "name"=>"mental-herb",
            "desc"=>"A hold item that snaps POKéMON out of infatuation.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mental-herb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"194",
            "name"=>"quick-claw",
            "desc"=>"A hold item that occasionally allows the first strike.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/quick-claw.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"191",
            "name"=>"white-herb",
            "desc"=>"A hold item that restores any lowered stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/white-herb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"197",
            "name"=>"choice-band",
            "desc"=>"Raises a move’s power, but permits only that move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/choice-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"190",
            "name"=>"bright-powder",
            "desc"=>"A hold item that casts a glare to reduce accuracy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bright-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"195",
            "name"=>"soothe-bell",
            "desc"=>"A hold item that calms spirits and fosters friendship.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/soothe-bell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"199",
            "name"=>"silver-powder",
            "desc"=>"A hold item that raises the power of BUG-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/silver-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"198",
            "name"=>"kings-rock",
            "desc"=>"A hold item that may cause flinching when the foe is hit.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kings-rock.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"200",
            "name"=>"amulet-coin",
            "desc"=>"Doubles money in battle if the holder takes part.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/amulet-coin.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"201",
            "name"=>"cleanse-tag",
            "desc"=>"A hold item that helps repel wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cleanse-tag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"209",
            "name"=>"scope-lens",
            "desc"=>"A hold item that raises the critical- hit rate.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/scope-lens.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"207",
            "name"=>"focus-band",
            "desc"=>"A hold item that occasionally prevents fainting.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/focus-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"205",
            "name"=>"smoke-ball",
            "desc"=>"A hold item that can be used to flee from a wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/smoke-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"206",
            "name"=>"everstone",
            "desc"=>"A wondrous stone & a hold item that prevents evolution.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/everstone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"202",
            "name"=>"soul-dew",
            "desc"=>"Hold item: Raises SP. ATK & SP. DEF of LATIOS & LATIAS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/soul-dew.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"208",
            "name"=>"lucky-egg",
            "desc"=>"A hold item that boosts EXP. points earned in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lucky-egg.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"203",
            "name"=>"deep-sea-tooth",
            "desc"=>"A hold item that raises the SP. ATK of CLAMPERL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/deep-sea-tooth.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"204",
            "name"=>"deep-sea-scale",
            "desc"=>"A hold item that raises the SP. DEF of CLAMPERL.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/deep-sea-scale.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"210",
            "name"=>"metal-coat",
            "desc"=>"A hold item that raises the power of STEEL-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/metal-coat.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"211",
            "name"=>"leftovers",
            "desc"=>"A hold item that gradually restores HP in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/leftovers.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"212",
            "name"=>"dragon-scale",
            "desc"=>"A strange scale held by DRAGON- type POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragon-scale.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"213",
            "name"=>"light-ball",
            "desc"=>"A hold item that raises the SP. ATK of PIKACHU.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/light-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"220",
            "name"=>"mystic-water",
            "desc"=>"A hold item that raises the power of WATER-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mystic-water.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"214",
            "name"=>"soft-sand",
            "desc"=>"A hold item that raises the power of GROUND-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/soft-sand.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"218",
            "name"=>"black-belt",
            "desc"=>"A hold item that boosts FIGHTING- type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/black-belt.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"217",
            "name"=>"black-glasses",
            "desc"=>"A hold item that raises the power of DARK-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/black-glasses.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"219",
            "name"=>"magnet",
            "desc"=>"A hold item that boosts ELECTRIC- type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magnet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"215",
            "name"=>"hard-stone",
            "desc"=>"A hold item that raises the power of ROCK-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hard-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"221",
            "name"=>"sharp-beak",
            "desc"=>"A hold item that raises the power of FLYING-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sharp-beak.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"216",
            "name"=>"miracle-seed",
            "desc"=>"A hold item that raises the power of GRASS-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/miracle-seed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"222",
            "name"=>"poison-barb",
            "desc"=>"A hold item that raises the power of POISON-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poison-barb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"223",
            "name"=>"never-melt-ice",
            "desc"=>"A hold item that raises the power of ICE-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/never-melt-ice.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"224",
            "name"=>"spell-tag",
            "desc"=>"A hold item that raises the power of GHOST-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/spell-tag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"225",
            "name"=>"twisted-spoon",
            "desc"=>"A hold item that boosts PSYCHIC- type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/twisted-spoon.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"229",
            "name"=>"up-grade",
            "desc"=>"A peculiar box made by SILPH CO.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/up-grade.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"231",
            "name"=>"sea-incense",
            "desc"=>"A hold item that slightly boosts WATER-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sea-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"230",
            "name"=>"shell-bell",
            "desc"=>"A hold item that restores HP upon striking the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shell-bell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"226",
            "name"=>"charcoal",
            "desc"=>"A hold item that raises the power of FIRE-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/charcoal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"233",
            "name"=>"lucky-punch",
            "desc"=>"A hold item that raises CHANSEY’s critical-hit rate.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lucky-punch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"232",
            "name"=>"lax-incense",
            "desc"=>"A hold item that slightly lowers the foe’s accuracy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lax-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"228",
            "name"=>"silk-scarf",
            "desc"=>"A hold item that raises the power of NORMAL-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/silk-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"227",
            "name"=>"dragon-fang",
            "desc"=>"A hold item that raises the power of DRAGON-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragon-fang.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"236",
            "name"=>"stick",
            "desc"=>"A stick of leek. It can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/stick.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"235",
            "name"=>"thick-club",
            "desc"=>"A bone of some sort. It can be sold cheaply.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/thick-club.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"234",
            "name"=>"metal-powder",
            "desc"=>"A hold item that raises DEFENSE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/metal-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"237",
            "name"=>"red-scarf",
            "desc"=>"A hold item that raises COOL in CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"245",
            "name"=>"expert-belt",
            "desc"=>"An item to be held by a Pokémon. It is a well-worn belt that slightly boosts the power of supereffective moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/expert-belt.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"243",
            "name"=>"muscle-band",
            "desc"=>"An item to be held by a Pokémon. It is a headband that slightly boosts the power of physical moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/muscle-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"239",
            "name"=>"pink-scarf",
            "desc"=>"A hold item that raises CUTE in CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pink-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"238",
            "name"=>"blue-scarf",
            "desc"=>"A hold item that raises BEAUTY in CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"247",
            "name"=>"life-orb",
            "desc"=>"An item to be held by a Pokémon. It boosts the power of moves, but at the cost of some HP on each hit.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/life-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"242",
            "name"=>"wide-lens",
            "desc"=>"An item to be held by a Pokémon. It is a magnifying lens that slightly boosts the accuracy of moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wide-lens.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"244",
            "name"=>"wise-glasses",
            "desc"=>"An item to be held by a Pokémon. It is a thick pair of glasses that slightly boosts the power of special moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wise-glasses.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"240",
            "name"=>"green-scarf",
            "desc"=>"A hold item that raises SMART in CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/green-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"241",
            "name"=>"yellow-scarf",
            "desc"=>"A hold item that raises TOUGH in CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"248",
            "name"=>"power-herb",
            "desc"=>"A single-use item to be held by a Pokémon. It allows the immediate use of a move that charges on the first turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-herb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"246",
            "name"=>"light-clay",
            "desc"=>"A Pokémon hold item that extends the duration of barrier moves like Light Screen and Reflect used by the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/light-clay.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"249",
            "name"=>"toxic-orb",
            "desc"=>"An item to be held by a Pokémon. It is a bizarre orb that badly poisons the holder in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/toxic-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"250",
            "name"=>"flame-orb",
            "desc"=>"An item to be held by a Pokémon. It is a bizarre orb that inflicts a burn on the holder in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flame-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"251",
            "name"=>"quick-powder",
            "desc"=>"An item to be held by DITTO. Extremely fine yet hard, this odd powder boosts the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/quick-powder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"252",
            "name"=>"focus-sash",
            "desc"=>"An item to be held by a Pokémon. If it has full HP, the holder will endure one potential KO attack, leaving 1 HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/focus-sash.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"254",
            "name"=>"metronome",
            "desc"=>"A Pokémon hold item that boosts a move used consecutively. Its effect is reset if another move is used.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/metronome.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"257",
            "name"=>"destiny-knot",
            "desc"=>"A long, thin, bright red string to be held by a Pokémon. If the holder becomes infatuated, the foe does too.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/destiny-knot.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"255",
            "name"=>"iron-ball",
            "desc"=>"A Pokémon hold item that cuts Speed. It makes Flying-type and levitating holders susceptible to Ground moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/iron-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"260",
            "name"=>"smooth-rock",
            "desc"=>"A Pokémon hold item that extends the duration of the move Sandstorm used by the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/smooth-rock.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"258",
            "name"=>"black-sludge",
            "desc"=>"A hold item that gradually restores the HP of Poison-type Pokémon. It inflicts damage on all other types.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/black-sludge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"261",
            "name"=>"heat-rock",
            "desc"=>"A Pokémon hold item that extends the duration of the move Sunny Day used by the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heat-rock.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"259",
            "name"=>"icy-rock",
            "desc"=>"A Pokémon hold item that extends the duration of the move Hail used by the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/icy-rock.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"256",
            "name"=>"lagging-tail",
            "desc"=>"An item to be held by a Pokémon. It is tremendously heavy and makes the holder move slower than usual.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lagging-tail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"253",
            "name"=>"zoom-lens",
            "desc"=>"An item to be held by a Pokémon. If the holder moves after the foe, its critical-hit ratio will be boosted.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/zoom-lens.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"262",
            "name"=>"damp-rock",
            "desc"=>"A Pokémon hold item that extends the duration of the move Rain Dance used by the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/damp-rock.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"263",
            "name"=>"grip-claw",
            "desc"=>"A Pokémon hold item that extends the duration of multiturn attacks like Bind and Wrap.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grip-claw.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"271",
            "name"=>"power-weight",
            "desc"=>"A Pokémon hold item that promotes HP gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-weight.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"269",
            "name"=>"power-band",
            "desc"=>"A Pokémon hold item that promotes Sp. Def gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"265",
            "name"=>"sticky-barb",
            "desc"=>"A hold item that damages the holder on every turn. It may latch on to foes that touch the holder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sticky-barb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"267",
            "name"=>"power-belt",
            "desc"=>"A Pokémon hold item that promotes Defense gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-belt.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"270",
            "name"=>"power-anklet",
            "desc"=>"A Pokémon hold item that promotes Speed gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-anklet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"272",
            "name"=>"shed-shell",
            "desc"=>"A tough, discarded carapace to be held by a Pokémon. It enables the holder to switch with a waiting Pokémon in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shed-shell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"273",
            "name"=>"big-root",
            "desc"=>"A Pokémon hold item that boosts the power of HP-stealing moves to let the holder recover more HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/big-root.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"266",
            "name"=>"power-bracer",
            "desc"=>"A Pokémon hold item that promotes Attack gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-bracer.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"268",
            "name"=>"power-lens",
            "desc"=>"A Pokémon hold item that promotes Sp. Atk gain on leveling, but reduces the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-lens.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"264",
            "name"=>"choice-scarf",
            "desc"=>"An item to be held by a Pokémon. This scarf boosts Speed, but allows the use of only one kind of move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/choice-scarf.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"276",
            "name"=>"splash-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Water-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/splash-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"275",
            "name"=>"flame-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Fire-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flame-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"277",
            "name"=>"zap-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Electric-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/zap-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"274",
            "name"=>"choice-specs",
            "desc"=>"An item to be held by a Pokémon. These distinctive glasses boost Sp. Atk, but allow only one kind of move to be used.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/choice-specs.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"278",
            "name"=>"meadow-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Grass-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meadow-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"279",
            "name"=>"icicle-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Ice-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/icicle-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"281",
            "name"=>"toxic-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Poison-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/toxic-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"280",
            "name"=>"fist-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Fighting-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fist-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"285",
            "name"=>"insect-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Bug-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/insect-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"284",
            "name"=>"mind-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Psychic-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mind-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"282",
            "name"=>"earth-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Ground-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/earth-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"283",
            "name"=>"sky-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Flying-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sky-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"286",
            "name"=>"stone-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Rock-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/stone-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"287",
            "name"=>"spooky-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Ghost-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/spooky-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"291",
            "name"=>"odd-incense",
            "desc"=>"An item to be held by a Pokémon. It is an exotic-smelling incense that boosts the power of Psychic-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/odd-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"294",
            "name"=>"wave-incense",
            "desc"=>"An item to be held by a Pokémon. It is an exotic-smelling incense that boosts the power of Water-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wave-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"290",
            "name"=>"iron-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Steel-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/iron-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"292",
            "name"=>"rock-incense",
            "desc"=>"An item to be held by a Pokémon. It is an exotic-smelling incense that boosts the power of Rock-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rock-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"289",
            "name"=>"dread-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Dark-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dread-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"293",
            "name"=>"full-incense",
            "desc"=>"An item to be held by a Pokémon. It is an exotic-smelling incense that makes the holder bloated and slow moving.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/full-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"288",
            "name"=>"draco-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Dragon-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/draco-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"295",
            "name"=>"rose-incense",
            "desc"=>"An item to be held by a Pokémon. It is an exotic-smelling incense that boosts the power of Grass-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rose-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"297",
            "name"=>"pure-incense",
            "desc"=>"An item to be held by a Pokémon. It helps keep wild Pokémon away if the holder is the first one in the party.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pure-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"296",
            "name"=>"luck-incense",
            "desc"=>"An item to be held by a Pokémon. It doubles a battle’s prize money if the holding Pokémon joins in.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/luck-incense.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"298",
            "name"=>"protector",
            "desc"=>"A protective item of some sort. It is extremely stiff and heavy. It is loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/protector.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"299",
            "name"=>"electirizer",
            "desc"=>"A box packed with a tremendous amount of electric energy. It is loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electirizer.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"303",
            "name"=>"razor-claw",
            "desc"=>"An item to be held by a Pokémon. It is a sharply hooked claw that ups the holder’s critical-hit ratio.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/razor-claw.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"305",
            "name"=>"tm01",
            "desc"=>"Powerful, but makes the user flinch if hit by the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"304",
            "name"=>"razor-fang",
            "desc"=>"An item to be held by a Pokémon. It may cause the foe to flinch when the holder inflicts damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/razor-fang.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"301",
            "name"=>"dubious-disc",
            "desc"=>"A transparent device overflowing with dubious data. Its producer is unknown.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dubious-disc.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"302",
            "name"=>"reaper-cloth",
            "desc"=>"A cloth imbued with horrifyingly strong spiritual energy. It is loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/reaper-cloth.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"306",
            "name"=>"tm02",
            "desc"=>"Hooks and slashes the foe with long, sharp claws.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"307",
            "name"=>"tm03",
            "desc"=>"Generates an ultrasonic wave that may confuse.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"308",
            "name"=>"tm04",
            "desc"=>"Raises SP. ATK and SP. DEF by focusing the mind.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"309",
            "name"=>"tm05",
            "desc"=>"A savage roar that makes the foe flee  to end the battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"300",
            "name"=>"magmarizer",
            "desc"=>"A box packed with a tremendous amount of magma energy. It is loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magmarizer.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"311",
            "name"=>"tm07",
            "desc"=>"Summons a hailstorm that hurts all types except ICE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"310",
            "name"=>"tm06",
            "desc"=>"Poisons the foe with a toxin that gradually worsens.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"313",
            "name"=>"tm09",
            "desc"=>"Shoots 2 to 5 seeds in a row to strike the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"315",
            "name"=>"tm11",
            "desc"=>"Raises the power of FIRE-type moves for 5 turns.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"316",
            "name"=>"tm12",
            "desc"=>"Enrages the foe so it can only use attack moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"312",
            "name"=>"tm08",
            "desc"=>"Bulks up the body to boost both ATTACK & DEFENSE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"319",
            "name"=>"tm15",
            "desc"=>"Powerful, but needs recharging the next turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"321",
            "name"=>"tm17",
            "desc"=>"Negates all damage, but may fail if used in succession.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"314",
            "name"=>"tm10",
            "desc"=>"The attack power varies among different POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"317",
            "name"=>"tm13",
            "desc"=>"Fires an icy cold beam that may freeze the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"318",
            "name"=>"tm14",
            "desc"=>"A vicious snow-and- wind attack that may freeze the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"322",
            "name"=>"tm18",
            "desc"=>"Raises the power of WATER-type moves for 5 turns.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"320",
            "name"=>"tm16",
            "desc"=>"Creates a wall of light that lowers SP. ATK damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"323",
            "name"=>"tm19",
            "desc"=>"Recovers half the HP of the damage  this move inflicts.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"330",
            "name"=>"tm26",
            "desc"=>"Causes a quake that has no effect on flying foes.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"327",
            "name"=>"tm23",
            "desc"=>"Slams the foe with a hard tail. It may lower DEFENSE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"329",
            "name"=>"tm25",
            "desc"=>"Strikes the foe with a thunderbolt. It may paralyze.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"331",
            "name"=>"tm27",
            "desc"=>"The more the user likes you, the more powerful this move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"324",
            "name"=>"tm20",
            "desc"=>"Prevents status abnormality with a mystical power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"325",
            "name"=>"tm21",
            "desc"=>"The less the user likes you, the more powerful this move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"328",
            "name"=>"tm24",
            "desc"=>"A powerful electric attack that may cause paralysis.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"326",
            "name"=>"tm22",
            "desc"=>"Absorbs sunlight in the 1st turn, then attacks next turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"334",
            "name"=>"tm30",
            "desc"=>"Hurls a dark lump at the foe. It may lower SP. DEF.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"333",
            "name"=>"tm29",
            "desc"=>"A powerful psychic attack that may lower SP. DEF.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"332",
            "name"=>"tm28",
            "desc"=>"Digs underground the 1st turn, then strikes next turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"335",
            "name"=>"tm31",
            "desc"=>"Destroys barriers like LIGHT SCREEN and causes damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"336",
            "name"=>"tm32",
            "desc"=>"Creates illusory copies to enhance elusiveness.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"338",
            "name"=>"tm34",
            "desc"=>"Zaps the foe with a jolt of electricity that never misses.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"341",
            "name"=>"tm37",
            "desc"=>"Causes a sandstorm that hits the foe over several turns.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"337",
            "name"=>"tm33",
            "desc"=>"Creates a wall of light that weakens physical attacks.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"344",
            "name"=>"tm40",
            "desc"=>"An extremely fast attack that can’t be avoided.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"342",
            "name"=>"tm38",
            "desc"=>"A powerful fire attack that may burn the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"345",
            "name"=>"tm41",
            "desc"=>"Prevents the foe from using the same move in a row.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"340",
            "name"=>"tm36",
            "desc"=>"Hurls sludge at the foe. It may poison the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"346",
            "name"=>"tm42",
            "desc"=>"Raises ATTACK when poisoned, burned, or paralyzed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"343",
            "name"=>"tm39",
            "desc"=>"Stops the foe from moving with rocks. May lower SPEED.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"339",
            "name"=>"tm35",
            "desc"=>"Looses a stream of fire that may burn the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"347",
            "name"=>"tm43",
            "desc"=>"Adds an effect to attack depending on the location.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"349",
            "name"=>"tm45",
            "desc"=>"Makes it tough to attack a foe of the opposite gender.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"348",
            "name"=>"tm44",
            "desc"=>"The user sleeps for 2 turns to restore health and status.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"350",
            "name"=>"tm46",
            "desc"=>"While attacking, it may steal the foe’s held item.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"355",
            "name"=>"tm51",
            "desc"=>"The user lands and rests its body. It restores the user’s HP by up to half of its top HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"353",
            "name"=>"tm49",
            "desc"=>"Steals the effects of the move the foe is trying to use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"357",
            "name"=>"tm53",
            "desc"=>"The user draws power from nature and fires it at the foe. It may also lower the target’s Sp. Def.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"352",
            "name"=>"tm48",
            "desc"=>"Switches abilities with the foe on the turn this is used.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"356",
            "name"=>"tm52",
            "desc"=>"The user attacks at full power. It may also lower the foe’s Sp. Def stat if it hits.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"354",
            "name"=>"tm50",
            "desc"=>"Enables full-power attack, but sharply lowers SP. ATK.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"351",
            "name"=>"tm47",
            "desc"=>"Spreads hard-edged wings and slams into the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"358",
            "name"=>"tm54",
            "desc"=>"A restrained attack that prevents the foe from fainting. The target is left with at least 1 HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"359",
            "name"=>"tm55",
            "desc"=>"If the foe’s HP is down to under half, this attack will hit with double the power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"360",
            "name"=>"tm56",
            "desc"=>"The user flings its held item at the foe to attack. Its power and effects depend on the item.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"363",
            "name"=>"tm59",
            "desc"=>"The foe is attacked with a shock wave generated by the user’s gaping mouth.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"362",
            "name"=>"tm58",
            "desc"=>"The user endures any attack, leaving 1 HP. Its chance of failing rises if it is used in succession.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"366",
            "name"=>"tm62",
            "desc"=>"The foe is attacked with powdery scales blown by wind. It may also raise all the user’s stats.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"364",
            "name"=>"tm60",
            "desc"=>"An energy-draining punch. The user’s HP is restored by half the damage taken by the target.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"361",
            "name"=>"tm57",
            "desc"=>"The user attacks with an electric charge. The user may use any remaining electricity to raise its Sp. Atk stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"367",
            "name"=>"tm63",
            "desc"=>"It prevents the foe from using its held item. Its Trainer is also prevented from using items on it.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"365",
            "name"=>"tm61",
            "desc"=>"The user shoots a sinister, bluish white flame at the foe to inflict a burn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"369",
            "name"=>"tm65",
            "desc"=>"The user slashes with a sharp claw made from shadows. It has a high critical-hit ratio.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"368",
            "name"=>"tm64",
            "desc"=>"The user explodes to inflict damage on all Pokémon in battle. The user faints upon using this move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"370",
            "name"=>"tm66",
            "desc"=>"The user stores power, then attacks. If the user can use this attack after the foe, its power is doubled.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"371",
            "name"=>"tm67",
            "desc"=>"The user recycles a single-use item that has been used in battle so it can be used again.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"372",
            "name"=>"tm68",
            "desc"=>"The user charges the foe using every bit of its power. It must rest on the next turn to recover.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"373",
            "name"=>"tm69",
            "desc"=>"The user polishes its body to reduce drag. It sharply raises the Speed stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"376",
            "name"=>"tm72",
            "desc"=>"An attack move that inflicts double the damage if the user has been hurt by the foe in the same turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"374",
            "name"=>"tm70",
            "desc"=>"The user flashes a light that cuts the foe’s accuracy. It can also be used to illuminate caves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"377",
            "name"=>"tm73",
            "desc"=>"A weak electric charge is launched at the foe. It causes paralysis if it hits.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"375",
            "name"=>"tm71",
            "desc"=>"The user stabs the foe with a sharpened stone from below. It has a high critical-hit ratio.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"378",
            "name"=>"tm74",
            "desc"=>"The user tackles the foe from a high-speed spin. The slower the user, the greater the damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"380",
            "name"=>"tm76",
            "desc"=>"The user lays a trap of levitating stones around the foe. The trap hurts foes that switch into battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"379",
            "name"=>"tm75",
            "desc"=>"A frenetic dance to uplift the fighting spirit. It sharply raises the user’s Attack stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"381",
            "name"=>"tm77",
            "desc"=>"The user hypnotizes itself into copying any stat change made by the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"385",
            "name"=>"tm81",
            "desc"=>"The user slashes at the foe by crossing its scythes or claws as if they were a pair of scissors.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"383",
            "name"=>"tm79",
            "desc"=>"The user releases a horrible aura imbued with dark thoughts. It may also make the target flinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"384",
            "name"=>"tm80",
            "desc"=>"Large boulders are hurled at the foe to inflict damage. It may also make the target flinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"382",
            "name"=>"tm78",
            "desc"=>"If it is the opposite gender of the user, the foe is charmed into sharply lowering its Sp. Atk stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"386",
            "name"=>"tm82",
            "desc"=>"While it is asleep, the user randomly uses one of the moves it knows.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"392",
            "name"=>"tm88",
            "desc"=>"The user pecks the foe. If the foe is holding a Berry, the user plucks it and gains its effect.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"388",
            "name"=>"tm84",
            "desc"=>"The foe is stabbed with a tentacle or arm seeped with poison. It may also poison the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"387",
            "name"=>"tm83",
            "desc"=>"The user draws power from the Berry it is holding to attack. The Berry determines its type and power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"389",
            "name"=>"tm85",
            "desc"=>"An attack that works only on a sleeping foe. It absorbs half the damage caused to heal the user’s HP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"391",
            "name"=>"tm87",
            "desc"=>"The user enrages the foe into confusion. However, it also sharply raises the foe’s Attack stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"390",
            "name"=>"tm86",
            "desc"=>"The user snares the foe with grass and trips it. The heavier the foe, the greater the damage.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"393",
            "name"=>"tm89",
            "desc"=>"After making its attack, the user rushes back to switch places with a party Pokémon in waiting.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"397",
            "name"=>"hm01",
            "desc"=>"Attacks the foe with sharp blades or claws.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"396",
            "name"=>"tm92",
            "desc"=>"The user creates a bizarre space in which slower Pokémon get to move first for five turns.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"398",
            "name"=>"hm02",
            "desc"=>"Flies up on the first turn, then attacks next turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"395",
            "name"=>"tm91",
            "desc"=>"The user gathers all its light energy and releases it in one shot. It may also lower the foe’s Sp. Def stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"394",
            "name"=>"tm90",
            "desc"=>"The user makes a copy of itself using some of its HP. The copy serves as the user’s decoy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"399",
            "name"=>"hm03",
            "desc"=>"Creates a huge wave, then crashes it down on the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"400",
            "name"=>"hm04",
            "desc"=>"Builds enormous power, then slams the foe.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"401",
            "name"=>"hm05",
            "desc"=>"Looses a powerful blast of light that reduces accuracy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"402",
            "name"=>"hm06",
            "desc"=>"A rock-crushingly tough attack that may lower DEFENSE.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"404",
            "name"=>"hm08",
            "desc"=>"Dives underwater the 1st turn, then attacks next turn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"403",
            "name"=>"hm07",
            "desc"=>"Attacks the foe with enough power to climb waterfalls.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/hm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"405",
            "name"=>"explorer-kit",
            "desc"=>"A bag filled with convenient tools for exploring. It provides access to the Underground.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/explorer-kit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"406",
            "name"=>"loot-sack",
            "desc"=>"A sturdy, spacious bag that is used to carry loot obtained in the coal mine.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/loot-sack.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"409",
            "name"=>"point-card",
            "desc"=>"A card that lists the Battle Points you have earned. ",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/point-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"408",
            "name"=>"poke-radar",
            "desc"=>"A tool that can search out Pokémon that are hiding in grass. Its battery is recharged as you walk.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-radar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"407",
            "name"=>"rule-book",
            "desc"=>"It lists the rules for holding battles. For linked battles, you may choose which set of rules you wish to use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rule-book.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"410",
            "name"=>"journal",
            "desc"=>"A notebook that keeps a day-to-day record of your adventure so far. ",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/journal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"412",
            "name"=>"fashion-case",
            "desc"=>"A fancy case for the tidy and organized storage of colorful Pokémon Accessories.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fashion-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"411",
            "name"=>"seal-case",
            "desc"=>"A case for storing Seals that can be applied to the capsule cases of Poké Balls.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/seal-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"413",
            "name"=>"seal-bag",
            "desc"=>"A tiny bag that can hold ten Seals for decorating Poké Balls.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/seal-bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"416",
            "name"=>"old-charm",
            "desc"=>"An ancient good-luck charm made of Pokémon bones to be taken to the elder of Celestic Town.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/old-charm.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"414",
            "name"=>"pal-pad",
            "desc"=>"A convenient notepad that is used for registering your friends and keeping a record of game play.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pal-pad.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"415",
            "name"=>"works-key",
            "desc"=>"A large key for operating the doors of the Valley Windworks in the canyon. It was held by a Team Galactic Grunt.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/works-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"417",
            "name"=>"galactic-key",
            "desc"=>"A card key for disengaging security systems in the Galactic HQ. Losing it can result in punishment, apparently.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/galactic-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"418",
            "name"=>"red-chain",
            "desc"=>"A mythical chain that is said to link the legendary Pokémon that created the Sinnoh region.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-chain.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"421",
            "name"=>"coin-case",
            "desc"=>"A case that holds up to 9,999 COINS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/coin-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"420",
            "name"=>"vs-seeker",
            "desc"=>"A rechargeable unit that flags battle- ready TRAINERS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/vs-seeker.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"422",
            "name"=>"old-rod",
            "desc"=>"Use by any body of water to fish for wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/old-rod.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"419",
            "name"=>"town-map",
            "desc"=>"Can be viewed anytime. Shows your present location.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/town-map.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"425",
            "name"=>"sprayduck",
            "desc"=>"A watering can shaped like a PSYDUCK. It helps promote healthy growth of Berries planted in soft soil.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sprayduck.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"427",
            "name"=>"bicycle",
            "desc"=>"A folding bicycle that is faster than the RUNNING SHOES.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bicycle.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"428",
            "name"=>"suite-key",
            "desc"=>"A key to one of the suites at the luxury hotel by a lake. For some odd reason, it often disappears.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/suite-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"426",
            "name"=>"poffin-case",
            "desc"=>"A case for storing Poffin cooked from Berries. ",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poffin-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"424",
            "name"=>"super-rod",
            "desc"=>"The best fishing rod for catching wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/super-rod.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"423",
            "name"=>"good-rod",
            "desc"=>"A decent fishing rod for catching wild POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/good-rod.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"429",
            "name"=>"oaks-letter",
            "desc"=>"A letter from Prof. Oak. Written in it is a request for you to go to Rt. 224.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/oaks-letter.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"430",
            "name"=>"lunar-wing",
            "desc"=>"A feather that glows like the moon. It is said to possess the power to dispel nightmares.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lunar-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"431",
            "name"=>"member-card",
            "desc"=>"A card needed for entering the inn in Canalave City. Oddly, the last date marked on it was 50 years ago.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/member-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"432",
            "name"=>"azure-flute",
            "desc"=>"A flute that puts out echoing sounds that do not seem to be of this world. It is unknown who made it.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/azure-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"434",
            "name"=>"contest-pass",
            "desc"=>"The pass required for entering POKéMON CONTESTS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/contest-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"433",
            "name"=>"ss-ticket",
            "desc"=>"The ticket required for sailing on a ferry.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ss-ticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"435",
            "name"=>"magma-stone",
            "desc"=>"A stone formed when boulders melted in intensely hot magma, then hardened. Magma remains sealed inside.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magma-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"441",
            "name"=>"secret-potion",
            "desc"=>"A fantastic medicine dispensed by the pharmacy in Cianwood City. It fully heals a Pokémon of any ailment.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/secret-potion.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"437",
            "name"=>"coupon-1",
            "desc"=>"A coupon to be exchanged for a Pokémon Watch (Pokétch for short). Three coupons are needed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/coupon-1.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"440",
            "name"=>"storage-key",
            "desc"=>"The key to the storage inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/storage-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"439",
            "name"=>"coupon-3",
            "desc"=>"A coupon to be exchanged for a Pokémon Watch (Pokétch for short). Three coupons are needed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/coupon-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"436",
            "name"=>"parcel",
            "desc"=>"A parcel entrusted into your care. You’re supposed to deliver it to your childhood friend who left Twinleaf Town.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/parcel.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"438",
            "name"=>"coupon-2",
            "desc"=>"A coupon to be exchanged for a Pokémon Watch (Pokétch for short). Three coupons are needed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/coupon-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"442",
            "name"=>"griseous-orb",
            "desc"=>"A glowing orb to be held by GIRATINA. It boosts the power of Dragon- and Ghost-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/griseous-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"443",
            "name"=>"vs-recorder",
            "desc"=>"An amazing device that can record a battle either between friends or at a special battle facility.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/vs-recorder.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"447",
            "name"=>"berry-pots",
            "desc"=>"Handy containers for cultivating Berries wherever you go.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/berry-pots.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"445",
            "name"=>"secret-key",
            "desc"=>"The key to the CINNABAR ISLAND GYM’s entrance.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/secret-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"444",
            "name"=>"gracidea",
            "desc"=>"A flower sometimes bundled in bouquets to convey gratitude on special occasions like birthdays.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gracidea.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"446",
            "name"=>"apricorn-box",
            "desc"=>"A handy box where you can store up to 99 Apricorns of each kind.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/apricorn-box.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"449",
            "name"=>"lure-ball",
            "desc"=>"A Poké Ball for catching Pokémon hooked by a Rod when fishing.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lure-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"450",
            "name"=>"level-ball",
            "desc"=>"A Poké Ball for catching Pokémon that are a lower level than your own.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/level-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"452",
            "name"=>"heavy-ball",
            "desc"=>"A Poké Ball for catching very heavy Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heavy-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"453",
            "name"=>"fast-ball",
            "desc"=>"A Poké Ball that makes it easier to catch fast Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fast-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"451",
            "name"=>"moon-ball",
            "desc"=>"A Poké Ball for catching Pokémon that evolve using the Moon Stone.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/moon-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"448",
            "name"=>"squirt-bottle",
            "desc"=>"A bottle used for watering plants in the Berry Pots.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/squirt-bottle.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"455",
            "name"=>"love-ball",
            "desc"=>"Poké Ball for catching Pokémon that are the opposite gender of your Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/love-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"454",
            "name"=>"friend-ball",
            "desc"=>"A Poké Ball that makes caught Pokémon more friendly.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/friend-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"461",
            "name"=>"green-apricorn",
            "desc"=>"A green Apricorn. It has a mysterious, aromatic scent.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/green-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"457",
            "name"=>"sport-ball",
            "desc"=>"A special Poké Ball for the Bug-Catching Contest.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sport-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"456",
            "name"=>"park-ball",
            "desc"=>"A special Poké Ball for the Pal Park.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/park-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"460",
            "name"=>"yellow-apricorn",
            "desc"=>"A yellow Apricorn. It has an invigorating scent.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"458",
            "name"=>"red-apricorn",
            "desc"=>"A red Apricorn. It assails your nostrils.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"459",
            "name"=>"blue-apricorn",
            "desc"=>"A blue Apricorn. It smells a bit like grass.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"465",
            "name"=>"dowsing-machine",
            "desc"=>"A device that signals an invisible item by sound.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dowsing-machine.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"462",
            "name"=>"pink-apricorn",
            "desc"=>"A pink Apricorn. It has a nice, sweet scent.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pink-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"463",
            "name"=>"white-apricorn",
            "desc"=>"A white Apricorn. It doesn’t smell like anything.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/white-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"464",
            "name"=>"black-apricorn",
            "desc"=>"A black Apricorn It has an indescribable scent.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/black-apricorn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"466",
            "name"=>"rage-candy-bar",
            "desc"=>"A famous candy in Mahogany Town. Many tourists like to buy them to take home.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rage-candy-bar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"467",
            "name"=>"red-orb",
            "desc"=>"A red, glowing orb said to contain an ancient power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"470",
            "name"=>"enigma-stone",
            "desc"=>"A crystal ball that was excavated from the ground. A very beautiful stone that is covered with bits of rock and earth.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/enigma-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"468",
            "name"=>"blue-orb",
            "desc"=>"A blue, glowing orb said to contain an ancient power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"473",
            "name"=>"slowpoke-tail",
            "desc"=>"A very tasty tail of something. It sells for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/slowpoke-tail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"475",
            "name"=>"card-key",
            "desc"=>"A card-type door key used in SILPH CO’s office.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/card-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"472",
            "name"=>"blue-card",
            "desc"=>"A card to save points for the Buena’s Password show.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"471",
            "name"=>"unown-report",
            "desc"=>"A report of all the discovered kinds of UNOWN.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/unown-report.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"474",
            "name"=>"clear-bell",
            "desc"=>"A very old-fashioned bell that makes a gentle ringing.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/clear-bell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"476",
            "name"=>"basement-key",
            "desc"=>"The key for NEW MAUVILLE beneath MAUVILLE CITY.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/basement-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"469",
            "name"=>"jade-orb",
            "desc"=>"A shiny green orb that is said to have a legend and has a deep connection with the Hoenn region.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/jade-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"478",
            "name"=>"lost-item",
            "desc"=>"The Mime Jr. doll that was lost by the Copycat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lost-item.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"477",
            "name"=>"red-scale",
            "desc"=>"A scale from the red GYARADOS. It glows red like a flame.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-scale.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"479",
            "name"=>"pass",
            "desc"=>"A ticket required for riding the Magnet Train. It allows you to ride whenever and however much you’d like.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"484",
            "name"=>"gb-sounds",
            "desc"=>"A music player that allows you to listen to nostalgic songs. It’s operated with a single switch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gb-sounds.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"487",
            "name"=>"data-card-02",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many losses you’ve had.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"483",
            "name"=>"mystery-egg",
            "desc"=>"A mysterious Egg obtained from Mr. Pokémon. What’s in the Egg is unknown.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mystery-egg.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"482",
            "name"=>"rainbow-wing",
            "desc"=>"A mystical, rainbow feather that sparkles.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rainbow-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"488",
            "name"=>"data-card-03",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon have dashed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"481",
            "name"=>"silver-wing",
            "desc"=>"A strange, silvery feather that sparkles.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/silver-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"486",
            "name"=>"data-card-01",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many victories you’ve had.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"480",
            "name"=>"machine-part",
            "desc"=>"An important machine part for the Power Plant that was stolen.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/machine-part.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"485",
            "name"=>"tidal-bell",
            "desc"=>"An old-fashioned bell with a gentle, soothing sound.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tidal-bell.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"489",
            "name"=>"data-card-04",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon have jumped.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"491",
            "name"=>"data-card-06",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won the Relay Run.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"490",
            "name"=>"data-card-05",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won the Hurdle Dash.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"492",
            "name"=>"data-card-07",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Pennant Capture.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"493",
            "name"=>"data-card-08",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Block Smash.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"494",
            "name"=>"data-card-09",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Disc Catch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"497",
            "name"=>"data-card-12",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon have failed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"496",
            "name"=>"data-card-11",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many points your Pokémon scored.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"495",
            "name"=>"data-card-10",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Snow Throw.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"498",
            "name"=>"data-card-13",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon impeded themselves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"499",
            "name"=>"data-card-14",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon have tackled.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"500",
            "name"=>"data-card-15",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon have fallen down.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"501",
            "name"=>"data-card-16",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Ring Drop.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"502",
            "name"=>"data-card-17",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Lamp Jump.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"503",
            "name"=>"data-card-18",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Circle Push.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"505",
            "name"=>"data-card-20",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many Link Pokéathlon losses you’ve had.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"507",
            "name"=>"data-card-22",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times  you’ve lost an event.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"504",
            "name"=>"data-card-19",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many  Link Pokéathlon wins you’ve had.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"506",
            "name"=>"data-card-21",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won an event.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"508",
            "name"=>"data-card-23",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve switched Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"511",
            "name"=>"data-card-26",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve instructed your Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"510",
            "name"=>"data-card-25",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times your Pokémon won individual prizes.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"512",
            "name"=>"data-card-27",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how much time you’ve spent in the Pokéathlon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"509",
            "name"=>"data-card-24",
            "desc"=>"It holds Pokéathlon records. It’s a card that shows how many times you’ve won Goal Roll.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/data-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"515",
            "name"=>"orange-mail",
            "desc"=>"A ZIGZAGOON-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/orange-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"514",
            "name"=>"photo-album",
            "desc"=>"A nice photo album for storing all the photos taken along your adventure.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/photo-album.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"513",
            "name"=>"lock-capsule",
            "desc"=>"A sturdy Capsule that can only be opened with a special key.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lock-capsule.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"518",
            "name"=>"mech-mail",
            "desc"=>"A MAGNEMITE-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mech-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"520",
            "name"=>"wave-mail",
            "desc"=>"A WAILMER-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wave-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"517",
            "name"=>"glitter-mail",
            "desc"=>"A PIKACHU-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/glitter-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"516",
            "name"=>"harbor-mail",
            "desc"=>"A WINGULL-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/harbor-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"519",
            "name"=>"wood-mail",
            "desc"=>"A SLAKOTH-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wood-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"521",
            "name"=>"bead-mail",
            "desc"=>"MAIL featuring a sketch of the holding POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bead-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"524",
            "name"=>"dream-mail",
            "desc"=>"MAIL featuring a sketch of the holding POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dream-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"522",
            "name"=>"shadow-mail",
            "desc"=>"A DUSKULL-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shadow-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"525",
            "name"=>"fab-mail",
            "desc"=>"A gorgeous-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fab-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"523",
            "name"=>"tropic-mail",
            "desc"=>"A BELLOSSOM-print MAIL to be held by a POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tropic-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"526",
            "name"=>"retro-mail",
            "desc"=>"MAIL featuring the drawings of three POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/retro-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"527",
            "name"=>"mach-bike",
            "desc"=>"A folding bicycle that more than doubles foot speed.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mach-bike.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"528",
            "name"=>"acro-bike",
            "desc"=>"A folding bicycle capable of jumps and wheelies.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/acro-bike.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"529",
            "name"=>"wailmer-pail",
            "desc"=>"A tool used for watering BERRIES and plants.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/wailmer-pail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"532",
            "name"=>"pokeblock-case",
            "desc"=>"A case for holding POKéBLOCKS made with a BERRY BLENDER.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pokeblock-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"533",
            "name"=>"letter",
            "desc"=>"A letter to STEVEN from the PRESIDENT of the DEVON CORP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/letter.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"530",
            "name"=>"devon-goods",
            "desc"=>"A package that contains DEVON’s machine parts.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/devon-goods.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"531",
            "name"=>"soot-sack",
            "desc"=>"A sack used to gather and hold volcanic ash.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/soot-sack.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"534",
            "name"=>"eon-ticket",
            "desc"=>"The ticket for a ferry to a distant southern island.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eon-ticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"535",
            "name"=>"scanner",
            "desc"=>"A device found inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/scanner.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"536",
            "name"=>"go-goggles",
            "desc"=>"Nifty goggles that protect eyes from desert sandstorms.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/go-goggles.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"537",
            "name"=>"meteorite",
            "desc"=>"A meteorite found at METEOR FALLS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meteorite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"539",
            "name"=>"rm-2-key",
            "desc"=>"A key that opens a door inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rm-2-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"538",
            "name"=>"rm-1-key",
            "desc"=>"A key that opens a door inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rm-1-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"541",
            "name"=>"rm-6-key",
            "desc"=>"A key that opens a door inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rm-6-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"540",
            "name"=>"rm-4-key",
            "desc"=>"A key that opens a door inside the ABANDONED SHIP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rm-4-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"542",
            "name"=>"devon-scope",
            "desc"=>"A device by DEVON that signals any unseeable POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/devon-scope.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"543",
            "name"=>"oaks-parcel",
            "desc"=>"A parcel for PROF. OAK from a POKéMON MART’s clerk.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/oaks-parcel.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"544",
            "name"=>"poke-flute",
            "desc"=>"A sweet-sounding flute that awakens POKéMON.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"546",
            "name"=>"gold-teeth",
            "desc"=>"Gold dentures lost by the SAFARI ZONE’s WARDEN.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gold-teeth.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"545",
            "name"=>"bike-voucher",
            "desc"=>"A voucher for obtaining a bicycle from the BIKE SHOP.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bike-voucher.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"547",
            "name"=>"lift-key",
            "desc"=>"An elevator key used in TEAM ROCKET’s HIDEOUT.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lift-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"549",
            "name"=>"fame-checker",
            "desc"=>"Stores information on famous people for instant recall.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fame-checker.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"550",
            "name"=>"tm-case",
            "desc"=>"A convenient case  that holds TMs and HMs.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"548",
            "name"=>"silph-scope",
            "desc"=>"SILPH CO’s scope makes unseeable POKéMON visible.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/silph-scope.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"551",
            "name"=>"berry-pouch",
            "desc"=>"A convenient container that holds BERRIES.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/berry-pouch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"552",
            "name"=>"teachy-tv",
            "desc"=>"A TV set tuned to an advice program for TRAINERS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/teachy-tv.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"553",
            "name"=>"tri-pass",
            "desc"=>"A pass for ferries between ONE, TWO, and THREE ISLAND.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tri-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"554",
            "name"=>"rainbow-pass",
            "desc"=>"For ferries serving VERMILION and the SEVII ISLANDS.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rainbow-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"555",
            "name"=>"tea",
            "desc"=>"A thirst-quenching tea prepared by an old lady.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tea.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"559",
            "name"=>"ruby",
            "desc"=>"An exquisite, red- glowing gem that symbolizes passion.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ruby.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"556",
            "name"=>"mysticticket",
            "desc"=>"A ticket required to board the ship to NAVEL ROCK.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mysticticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"557",
            "name"=>"auroraticket",
            "desc"=>"A ticket required to board the ship to BIRTH ISLAND.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/auroraticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"558",
            "name"=>"powder-jar",
            "desc"=>"Stores BERRY POWDER made using a BERRY CRUSHER.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/powder-jar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"560",
            "name"=>"sapphire",
            "desc"=>"A brilliant blue gem that symbolizes honesty.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sapphire.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"561",
            "name"=>"magma-emblem",
            "desc"=>"A medal-like item in the same shape as TEAM MAGMA’s mark.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magma-emblem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"563",
            "name"=>"douse-drive",
            "desc"=>"A cassette to be held by Genesect. It changes Techno Blast to a Water-type move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/douse-drive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"562",
            "name"=>"old-sea-map",
            "desc"=>"A faded sea chart that shows the way to a certain island.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/old-sea-map.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"564",
            "name"=>"shock-drive",
            "desc"=>"A cassette to be held by Genesect. It changes Techno Blast to an Electric-type move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shock-drive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"565",
            "name"=>"burn-drive",
            "desc"=>"A cassette to be held by Genesect. It changes Techno Blast to a Fire-type move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/burn-drive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"566",
            "name"=>"chill-drive",
            "desc"=>"A cassette to be held by Genesect. It changes Techno Blast to an Ice-type move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/chill-drive.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"567",
            "name"=>"sweet-heart",
            "desc"=>"Very sweet chocolate.   It restores the HP of one Pokémon by only 20 points.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sweet-heart.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"573",
            "name"=>"like-mail",
            "desc"=>"Stationery designed for writing recommendations. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/like-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"569",
            "name"=>"favored-mail",
            "desc"=>"Stationery designed for writing about your favorite things. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/favored-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"570",
            "name"=>"rsvp-mail",
            "desc"=>"Stationery designed for invitations. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rsvp-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"571",
            "name"=>"thanks-mail",
            "desc"=>"Stationery designed for a thank-you note. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/thanks-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"568",
            "name"=>"greet-mail",
            "desc"=>"Stationery designed for introductory greetings. Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/greet-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"572",
            "name"=>"inquiry-mail",
            "desc"=>"Stationery designed for writing questions.  Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/inquiry-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"574",
            "name"=>"reply-mail",
            "desc"=>"Stationery designed for writing a reply.  Let a Pokémon hold it for delivery.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/reply-mail.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"575",
            "name"=>"bridge-mail-s",
            "desc"=>"Stationery featuring a print of  a sky-piercing bridge.   Let a Pokémon hold it for use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bridge-mail-s.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"577",
            "name"=>"bridge-mail-t",
            "desc"=>"Stationery featuring a print of a steel suspension bridge.  Let a Pokémon hold it for use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bridge-mail-t.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"578",
            "name"=>"bridge-mail-v",
            "desc"=>"Stationery featuring a print of a brick bridge. Let a Pokémon hold it for use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bridge-mail-v.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"579",
            "name"=>"bridge-mail-m",
            "desc"=>"Stationery featuring a print of an arched bridge. Let a Pokémon hold it for use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bridge-mail-m.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"584",
            "name"=>"air-balloon",
            "desc"=>"When held by a Pokémon, the Pokémon will float into the air. When the holder is attacked, this item will burst.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/air-balloon.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"583",
            "name"=>"rocky-helmet",
            "desc"=>"If the holder of this item takes damage, the attacker will also be damaged upon contact.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rocky-helmet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"576",
            "name"=>"bridge-mail-d",
            "desc"=>"Stationery featuring a print of a red drawbridge.  Let a Pokémon hold it for use.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bridge-mail-d.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"582",
            "name"=>"float-stone",
            "desc"=>"A very light stone. It reduces the weight of a Pokémon when held.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/float-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"581",
            "name"=>"eviolite",
            "desc"=>"A mysterious evolutionary lump. When held, it raises the Defense and Sp. Def of a Pokémon that can still evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eviolite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"585",
            "name"=>"red-card",
            "desc"=>"A card with a mysterious power. When the holder is struck by a foe, the attacker is removed from battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"580",
            "name"=>"prism-scale",
            "desc"=>"A mysterious scale that evolves certain Pokémon. It shines in rainbow colors.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/prism-scale.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"586",
            "name"=>"ring-target",
            "desc"=>"Moves that would otherwise have no effect will land on the Pokémon that holds it.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ring-target.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"587",
            "name"=>"binding-band",
            "desc"=>"A band that increases the power of binding moves when held.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/binding-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"588",
            "name"=>"absorb-bulb",
            "desc"=>"A consumable bulb. If the holder is hit by a Water-type move, its Sp. Atk will rise.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/absorb-bulb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"590",
            "name"=>"eject-button",
            "desc"=>"If the holder is hit by an attack, it will switch with another Pokémon in your party.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eject-button.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"591",
            "name"=>"fire-gem",
            "desc"=>"A gem with an essence of fire. When held, it strengthens the power of a Fire-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fire-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"592",
            "name"=>"water-gem",
            "desc"=>"A gem with an essence of water. When held, it strengthens the power of a Water-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/water-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"589",
            "name"=>"cell-battery",
            "desc"=>"A consumable battery. If the holder is hit by an Electric-type move, its Attack will rise.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cell-battery.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"594",
            "name"=>"grass-gem",
            "desc"=>"A gem with an essence of nature. When held, it strengthens the power of a Grass-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grass-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"597",
            "name"=>"poison-gem",
            "desc"=>"A gem with an essence of poison. When held, it strengthens the power of a Poison-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poison-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"595",
            "name"=>"ice-gem",
            "desc"=>"A gem with an essence of ice. When held, it strengthens the power of an Ice-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ice-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"598",
            "name"=>"ground-gem",
            "desc"=>"A gem with an essence of land. When held, it strengthens the power of a Ground-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ground-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"596",
            "name"=>"fighting-gem",
            "desc"=>"A gem with an essence of combat. When held, it strengthens the power of a Fighting-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fighting-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"593",
            "name"=>"electric-gem",
            "desc"=>"A gem with an essence of electricity. When held, it strengthens the power of an Electric-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electric-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"602",
            "name"=>"rock-gem",
            "desc"=>"A gem with an essence of rock. When held, it strengthens the power of a Rock-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rock-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"599",
            "name"=>"flying-gem",
            "desc"=>"A gem with an essence of air. When held, it strengthens the power of a Flying-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flying-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"604",
            "name"=>"dark-gem",
            "desc"=>"A gem with an essence of darkness. When held, it strengthens the power of a Dark-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dark-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"601",
            "name"=>"bug-gem",
            "desc"=>"A gem with an insect-like essence. When held, it strengthens the power of a Bug-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bug-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"603",
            "name"=>"ghost-gem",
            "desc"=>"A gem with a spectral essence. When held, it strengthens the power of a Ghost-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ghost-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"600",
            "name"=>"psychic-gem",
            "desc"=>"A gem with an essence of the mind. When held, it strengthens the power of a Psychic-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/psychic-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"609",
            "name"=>"genius-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base Sp. Atk stat of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/genius-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"608",
            "name"=>"resist-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base Defense stat of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/resist-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"606",
            "name"=>"health-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base HP of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/health-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"610",
            "name"=>"clever-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base Sp. Def stat of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/clever-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"605",
            "name"=>"steel-gem",
            "desc"=>"A gem with an essence of steel. When held, it strengthens the power of a Steel-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steel-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"607",
            "name"=>"muscle-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base Attack stat of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/muscle-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"614",
            "name"=>"plume-fossil",
            "desc"=>"A fossil of an ancient Pokémon that flew in the sky in ancient times. It appears to be part of its wing.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/plume-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"611",
            "name"=>"swift-wing",
            "desc"=>"An item for use on a Pokémon. It slightly increases the base Speed stat of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/swift-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"613",
            "name"=>"cover-fossil",
            "desc"=>"A fossil of an ancient Pokémon that lived in the sea in ancient times. It appears to be part of its back.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cover-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"615",
            "name"=>"liberty-pass",
            "desc"=>"A special pass to go to Liberty Garden. Board the ship in Castelia City.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/liberty-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"616",
            "name"=>"pass-orb",
            "desc"=>"A mysterious orb containing the power of the Unova region, to be used when generating Pass Power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pass-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"617",
            "name"=>"dream-ball",
            "desc"=>"A special Poké Ball that appears out of nowhere in a bag at the Entree Forest. It can catch any Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dream-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"612",
            "name"=>"pretty-wing",
            "desc"=>"Though this feather is beautiful, it’s just a regular feather and has no effect on Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pretty-wing.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"619",
            "name"=>"prop-case",
            "desc"=>"A lovely case to store colorful Props for your Pokémon to wear in a musical.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/prop-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"620",
            "name"=>"dragon-skull",
            "desc"=>"A skull of a Pokémon which was said to have braved the angry waters to fly around the world.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragon-skull.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"621",
            "name"=>"balm-mushroom",
            "desc"=>"A rare mushroom which gives off a nice fragrance. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/balm-mushroom.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"618",
            "name"=>"poke-toy",
            "desc"=>"An item that attracts Pokémon. Use it to flee from any battle with a wild Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-toy.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"622",
            "name"=>"big-nugget",
            "desc"=>"A big nugget of pure gold that gives off a lustrous gleam. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/big-nugget.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"624",
            "name"=>"comet-shard",
            "desc"=>"A shard which fell to the ground when a comet approached. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/comet-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"623",
            "name"=>"pearl-string",
            "desc"=>"Very large pearls that sparkle in a pretty silver color.  A maniac will buy them for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pearl-string.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"626",
            "name"=>"relic-silver",
            "desc"=>"A silver coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-silver.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"625",
            "name"=>"relic-copper",
            "desc"=>"A copper coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-copper.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"629",
            "name"=>"relic-band",
            "desc"=>"A bracelet made in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-band.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"627",
            "name"=>"relic-gold",
            "desc"=>"A gold coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-gold.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"628",
            "name"=>"relic-vase",
            "desc"=>"A vase made in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-vase.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"630",
            "name"=>"relic-statue",
            "desc"=>"A stone figure made in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-statue.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"631",
            "name"=>"relic-crown",
            "desc"=>"A crown made in a civilization about 3,000 years ago. A maniac will buy it for a high price.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/relic-crown.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"633",
            "name"=>"dire-hit-2",
            "desc"=>"It can be used many times to raise the critical-hit ratio of one Pokémon. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dire-hit-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"632",
            "name"=>"casteliacone",
            "desc"=>"Castelia City’s specialty, soft-serve ice cream. It heals all the status problems of a single Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/casteliacone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"639",
            "name"=>"x-accuracy-2",
            "desc"=>"It sharply raises the accuracy of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-accuracy-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"636",
            "name"=>"x-sp-def-2",
            "desc"=>"It sharply raises the Sp. Def stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-def-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"637",
            "name"=>"x-defense-2",
            "desc"=>"It sharply raises the Defense stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-defense-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"634",
            "name"=>"x-speed-2",
            "desc"=>"It sharply raises the Speed stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-speed-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"640",
            "name"=>"x-speed-3",
            "desc"=>"It drastically raises the Speed stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-speed-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"638",
            "name"=>"x-attack-2",
            "desc"=>"It sharply raises the Attack stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-attack-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"635",
            "name"=>"x-sp-atk-2",
            "desc"=>"It sharply raises the Sp. Atk stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-atk-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"641",
            "name"=>"x-sp-atk-3",
            "desc"=>"It drastically raises the Sp. Atk stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-atk-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"642",
            "name"=>"x-sp-def-3",
            "desc"=>"It drastically raises the Sp. Def stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-def-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"644",
            "name"=>"x-attack-3",
            "desc"=>"It drastically raises the Attack stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-attack-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"646",
            "name"=>"x-speed-6",
            "desc"=>"It raises the Speed stat of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-speed-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"645",
            "name"=>"x-accuracy-3",
            "desc"=>"It drastically raises the accuracy of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-accuracy-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"643",
            "name"=>"x-defense-3",
            "desc"=>"It drastically raises the Defense stat of a Pokémon in battle. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-defense-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"647",
            "name"=>"x-sp-atk-6",
            "desc"=>"It raises the Sp. Atk stat of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-atk-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"651",
            "name"=>"x-accuracy-6",
            "desc"=>"It raises the accuracy of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-accuracy-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"652",
            "name"=>"ability-urge",
            "desc"=>"When used, it activates the Ability of an ally Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ability-urge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"648",
            "name"=>"x-sp-def-6",
            "desc"=>"It raises the Sp. Def stat of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-sp-def-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"650",
            "name"=>"x-attack-6",
            "desc"=>"It raises the Attack stat of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-attack-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"653",
            "name"=>"item-drop",
            "desc"=>"When used, it causes an ally Pokémon to drop a held item.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/item-drop.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"649",
            "name"=>"x-defense-6",
            "desc"=>"It raises the Defense stat of a Pokémon in battle immensely. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/x-defense-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"654",
            "name"=>"item-urge",
            "desc"=>"When used, it causes an ally Pokémon to use its held item.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/item-urge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"658",
            "name"=>"dark-stone",
            "desc"=>"Zekrom’s body was destroyed and changed into this stone. It is said to be waiting for the emergence of a hero.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dark-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"656",
            "name"=>"dire-hit-3",
            "desc"=>"It can be used many times to greatly raise a Pokémon’s critical-hit ratio. It wears off if the Pokémon is withdrawn.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dire-hit-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"665",
            "name"=>"gram-2",
            "desc"=>"An important letter that Wingull delivers.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gram-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"663",
            "name"=>"god-stone",
            "desc"=>"A rare stone.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/god-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"664",
            "name"=>"gram-1",
            "desc"=>"An important letter which Wingull delivers.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gram-1.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"662",
            "name"=>"xtransceiver",
            "desc"=>"A high-tech transceiver with a  camera function. It allows up to four-way calls.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/xtransceiver.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"657",
            "name"=>"light-stone",
            "desc"=>"Reshiram’s body was destroyed and changed into this stone. It is said to be waiting for the emergence of a hero.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/light-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"661",
            "name"=>"tm95",
            "desc"=>"The user yells as if it is ranting about something, making the target’s Sp. Atk stat decrease.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"655",
            "name"=>"reset-urge",
            "desc"=>"When used, it restores any stat changes of an ally Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/reset-urge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"659",
            "name"=>"tm93",
            "desc"=>"The user shrouds itself in electricity and smashes into its target. It also damages the user a little.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"660",
            "name"=>"tm94",
            "desc"=>"The user attacks with a punch that can shatter a rock. It may also lower the target’s Defense stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"666",
            "name"=>"gram-3",
            "desc"=>"An important letter which Wingull delivers.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gram-3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"668",
            "name"=>"dragon-gem",
            "desc"=>"A gem with a draconic essence.  When held, it strengthens the power of a Dragon-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragon-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"677",
            "name"=>"grubby-hanky",
            "desc"=>"A handkerchief dropped by a regular at Café Warehouse. It smells faintly like a Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grubby-hanky.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"675",
            "name"=>"shiny-charm",
            "desc"=>"A shiny charm said to increase the chance of finding a Shiny Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shiny-charm.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"678",
            "name"=>"colress-machine",
            "desc"=>"A special device that wrings out the potential of Pokémon. It is an imperfect prototype.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/colress-machine.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"670",
            "name"=>"medal-box",
            "desc"=>"A box-shaped machine that stores Medals and Medal information.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/medal-box.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"674",
            "name"=>"oval-charm",
            "desc"=>"An oval charm said to increase the chance of Eggs being found at the Day Care.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/oval-charm.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"669",
            "name"=>"normal-gem",
            "desc"=>"A gem with an ordinary essence. When held, it strengthens the power of a Normal-type move only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/normal-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"671",
            "name"=>"dna-splicers",
            "desc"=>"A splicer that fuses Kyurem and a certain Pokémon. They are said to have been one in the beginning.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dna-splicers.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"673",
            "name"=>"permit",
            "desc"=>"A permit needed to enter the Nature Preserve. Only a few know about this place.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/permit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"679",
            "name"=>"dropped-item",
            "desc"=>"The Xtransceiver found at the Nimbasa City amusement park. It seems it belongs to a boy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dropped-item.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"676",
            "name"=>"plasma-card",
            "desc"=>"A card key needed to enter the password inside the Plasma Frigate.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/plasma-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"681",
            "name"=>"reveal-glass",
            "desc"=>"A glass that reveals the truth. It is a mysterious glass that returns a Pokémon back to its original shape.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/reveal-glass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"683",
            "name"=>"assault-vest",
            "desc"=>"An item to be held by a Pokémon. This offensive vest raises Sp. Def but prevents the use of status moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/assault-vest.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"682",
            "name"=>"weakness-policy",
            "desc"=>"An item to be held by a Pokémon. Attack and Sp. Atk sharply increase if the holder is hit with a move it’s weak to.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/weakness-policy.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"685",
            "name"=>"ability-capsule",
            "desc"=>"A capsule that allows a Pokémon with two Abilities to switch between these Abilities when it is used.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ability-capsule.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"689",
            "name"=>"snowball",
            "desc"=>"An item to be held by a Pokémon. It boosts Attack if hit with an Ice-type attack. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/snowball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"688",
            "name"=>"luminous-moss",
            "desc"=>"An item to be held by a Pokémon. It boosts Sp. Def if hit with a Water- type attack. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/luminous-moss.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"687",
            "name"=>"sachet",
            "desc"=>"A sachet filled with fragrant perfumes that are just slightly too overwhelming. Yet it’s loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sachet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"684",
            "name"=>"pixie-plate",
            "desc"=>"An item to be held by a Pokémon. It is a stone tablet that boosts the power of Fairy-type moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pixie-plate.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"686",
            "name"=>"whipped-dream",
            "desc"=>"A soft and sweet treat made of fluffy, puffy, whipped and whirled cream. It’s loved by a certain Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/whipped-dream.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"690",
            "name"=>"safety-goggles",
            "desc"=>"An item to be held by a Pokémon. These goggles protect the holder from both weather-related damage and powder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/safety-goggles.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"691",
            "name"=>"rich-mulch",
            "desc"=>"Mulch to be used in a Berry field. It increases the Berry harvest without the need for particularly diligent care.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rich-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"692",
            "name"=>"surprise-mulch",
            "desc"=>"Mulch to be used in a Berry field. It causes strange, sudden mutations based on the combination of Berries.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/surprise-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"694",
            "name"=>"amaze-mulch",
            "desc"=>"Mulch to be used in a Berry field. An amazing Mulch with the effects of Rich, Surprise, and Boost Mulch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/amaze-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"693",
            "name"=>"boost-mulch",
            "desc"=>"Mulch to be used in a Berry field. It increases the Berry harvest that can be grown by diligent watering.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/boost-mulch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"697",
            "name"=>"ampharosite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Ampharos hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ampharosite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"700",
            "name"=>"blastoisinite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Blastoise hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blastoisinite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"699",
            "name"=>"charizardite-x",
            "desc"=>"One variety of the mysterious Mega Stones. Have Charizard hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/charizardite-x.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"696",
            "name"=>"gardevoirite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Gardevoir hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gardevoirite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"702",
            "name"=>"mewtwonite-y",
            "desc"=>"One variety of the mysterious Mega Stones. Have Mewtwo hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mewtwonite-y.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"703",
            "name"=>"blazikenite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Blaziken hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blazikenite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"695",
            "name"=>"gengarite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Gengar hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gengarite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"701",
            "name"=>"mewtwonite-x",
            "desc"=>"One variety of the mysterious Mega Stones. Have Mewtwo hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mewtwonite-x.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"704",
            "name"=>"medichamite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Medicham hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/medichamite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"705",
            "name"=>"houndoominite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Houndoom hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/houndoominite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"706",
            "name"=>"aggronite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Aggron hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aggronite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"707",
            "name"=>"banettite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Banette hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/banettite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"708",
            "name"=>"tyranitarite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Tyranitar hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tyranitarite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"710",
            "name"=>"pinsirite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Pinsir hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pinsirite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"713",
            "name"=>"abomasite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Abomasnow hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/abomasite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"711",
            "name"=>"aerodactylite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Aerodactyl hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aerodactylite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"715",
            "name"=>"gyaradosite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Gyarados hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gyaradosite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"709",
            "name"=>"scizorite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Scizor hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/scizorite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"712",
            "name"=>"lucarionite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Lucario hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lucarionite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"714",
            "name"=>"kangaskhanite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Kangaskhan hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kangaskhanite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"716",
            "name"=>"absolite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Absol hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/absolite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"722",
            "name"=>"garchompite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Garchomp hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/garchompite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"720",
            "name"=>"mawilite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Mawile hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mawilite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"718",
            "name"=>"alakazite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Alakazam hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/alakazite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"717",
            "name"=>"charizardite-y",
            "desc"=>"One variety of the mysterious Mega Stones. Have Charizard hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/charizardite-y.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"719",
            "name"=>"heracronite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Heracross hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/heracronite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"723",
            "name"=>"roseli-berry",
            "desc"=>"If held by a Pokémon, this Berry will lessen the damage taken from one supereffective Fairy-type attack.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roseli-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"725",
            "name"=>"maranga-berry",
            "desc"=>"If held by a Pokémon, this Berry will increase the holder’s Sp. Def if it’s hit with a special move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/maranga-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"721",
            "name"=>"manectite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Manectric hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/manectite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"724",
            "name"=>"kee-berry",
            "desc"=>"If held by a Pokémon, this Berry will increase the holder’s Defense if it’s hit with a physical move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kee-berry.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"726",
            "name"=>"discount-coupon",
            "desc"=>"This special coupon allows you to buy items at a discount when you are shopping at a boutique.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/discount-coupon.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"727",
            "name"=>"strange-souvenir",
            "desc"=>"An ornament depicting a Pokémon that is venerated as a protector in some region far from Kalos.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/strange-souvenir.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"698",
            "name"=>"venusaurite",
            "desc"=>"One variety of the mysterious Mega Stones. Have Venusaur hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/venusaurite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"728",
            "name"=>"lumiose-galette",
            "desc"=>"A popular treat in Lumiose City. It can be used once to heal all the status conditions of a Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lumiose-galette.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"729",
            "name"=>"jaw-fossil",
            "desc"=>"A fossil from a prehistoric Pokémon that once lived on the land. It looks as if it could be a piece of a large jaw.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/jaw-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"730",
            "name"=>"sail-fossil",
            "desc"=>"A fossil from a prehistoric Pokémon that once lived on the land. It looks like the impression from a skin sail.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sail-fossil.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"734",
            "name"=>"holo-caster",
            "desc"=>"A device that allows users to receive and view hologram clips at any time. It is also used to chat with others.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/holo-caster.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"731",
            "name"=>"fairy-gem",
            "desc"=>"A gem with an essence of the fey. When held, it strengthens the power of a Fairy-type move one time.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fairy-gem.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"733",
            "name"=>"elevator-key",
            "desc"=>"A card key that activates the elevator in Lysandre Labs. It is emblazoned with Team Flare’s logo.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/elevator-key.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"737",
            "name"=>"lens-case",
            "desc"=>"A rather chic-looking case for carrying contact lenses.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lens-case.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"736",
            "name"=>"intriguing-stone",
            "desc"=>"A rather curious stone that might appear to be valuable to some. It’s all in the eye of the beholder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/intriguing-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"732",
            "name"=>"adventure-rules",
            "desc"=>"This book contains all the points a new Trainer needs to know on a journey. It was handmade by a kind friend.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/adventure-rules.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"735",
            "name"=>"honor-of-kalos",
            "desc"=>"A precious symbol that is awarded only to an individual who has done great things for the Kalos region.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/honor-of-kalos.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"739",
            "name"=>"mega-ring",
            "desc"=>"This ring contains an untold power that somehow enables Pokémon carrying Mega Stones to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-ring.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"738",
            "name"=>"looker-ticket",
            "desc"=>"A ticket that was handmade by Looker. It’s decorated with a liberal amount of glittery paint.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/looker-ticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"740",
            "name"=>"power-plant-pass",
            "desc"=>"This pass serves as an ID card for gaining access to the power plant that lies along Route 13.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/power-plant-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"743",
            "name"=>"sprinklotad",
            "desc"=>"A watering can shaped like a Lotad. It helps promote the healthy growth of any Berries planted in good, soft soil.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sprinklotad.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"742",
            "name"=>"roller-skates",
            "desc"=>"Attaches roller skates to the bottom of your shoes, allowing you to glide quickly around and perform tricks.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roller-skates.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"741",
            "name"=>"profs-letter",
            "desc"=>"A letter that Professor Sycamore wrote to your mother. A faint but pleasant perfume seems to cling to the paper.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/profs-letter.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"744",
            "name"=>"tmv-pass",
            "desc"=>"A commuter pass that allows the holder to ride the TMV between Lumiose City and Kiloude City at any time.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tmv-pass.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"745",
            "name"=>"tm96",
            "desc"=>"An attack that makes use of nature’s power. Its effects vary depending on the user’s environment.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"746",
            "name"=>"tm97",
            "desc"=>"The user releases a horrible aura imbued with dark thoughts. This may also make the target flinch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"749",
            "name"=>"tm100",
            "desc"=>"The user tells the target a secret, and the target loses its ability to concentrate. This lowers the target’s Sp. Atk stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"747",
            "name"=>"tm98",
            "desc"=>"Striking opponents over and over makes the user’s fists harder. Hitting a target raises the Attack stat.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"748",
            "name"=>"tm99",
            "desc"=>"The user damages opposing Pokémon by emitting a powerful flash.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"760",
            "name"=>"latiasite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Latias hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/latiasite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"761",
            "name"=>"latiosite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Latios hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/latiosite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"764",
            "name"=>"travel-trunk",
            "desc"=>"A light and yet incredibly effective trunk, which can contain every last piece of clothing that can be bought.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/travel-trunk.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"765",
            "name"=>"shalour-sable",
            "desc"=>"Shalour City’s famous shortbread. It can be used once to heal all the status conditions of a Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/shalour-sable.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"762",
            "name"=>"common-stone",
            "desc"=>"A perfectly normal stone that might appear to be valuable to some. It’s all in the eye of the beholder.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/common-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"768",
            "name"=>"mega-charm",
            "desc"=>"This charm contains an untold power that somehow enables Pokémon carrying Mega Stones to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-charm.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"763",
            "name"=>"makeup-bag",
            "desc"=>"A rather chic-looking case for carrying lipsticks.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/makeup-bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"769",
            "name"=>"mega-glove",
            "desc"=>"This glove contains an untold power that somehow enables Pokémon carrying Mega Stones to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-glove.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"774",
            "name"=>"key-to-room-2",
            "desc"=>"A key that opens a door inside Sea Mauville.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/key-to-room-2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"772",
            "name"=>"pokeblock-kit",
            "desc"=>"A set containing a Berry Blender for making Pokéblocks and a Pokéblock Case for storing Pokéblocks.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pokeblock-kit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"770",
            "name"=>"devon-parts",
            "desc"=>"A case that contains mechanical parts of some sort made by the Devon Corporation.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/devon-parts.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"773",
            "name"=>"key-to-room-1",
            "desc"=>"A key that opens a door inside Sea Mauville.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/key-to-room-1.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"775",
            "name"=>"key-to-room-4",
            "desc"=>"A key that opens a door inside Sea Mauville.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/key-to-room-4.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"779",
            "name"=>"devon-scuba-gear",
            "desc"=>"A device made by Devon Corporation that provides oxygen to users during the use of Dive.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/devon-scuba-gear.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"783",
            "name"=>"aqua-suit",
            "desc"=>"A suit made with the collective technological know-how of Team Aqua. It can withstand any impact.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aqua-suit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"780",
            "name"=>"contest-costume--jacket",
            "desc"=>"A very cool suit to be worn during the Contest Spectacular.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/contest-costume--jacket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"782",
            "name"=>"magma-suit",
            "desc"=>"A suit made with the collective technological know-how of Team Magma. It can withstand any impact.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/magma-suit.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"776",
            "name"=>"key-to-room-6",
            "desc"=>"A key that opens a door inside Sea Mauville.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/key-to-room-6.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"785",
            "name"=>"mega-bracelet",
            "desc"=>"This cuff contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-bracelet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"784",
            "name"=>"pair-of-tickets",
            "desc"=>"Tickets for two to the astronomical show being held at the Mossdeep Space Center.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pair-of-tickets.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"786",
            "name"=>"mega-pendant",
            "desc"=>"This necklace contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-pendant.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"788",
            "name"=>"mega-anchor",
            "desc"=>"This anchor contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-anchor.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"787",
            "name"=>"mega-glasses",
            "desc"=>"These glasses contain an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-glasses.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"790",
            "name"=>"mega-tiara",
            "desc"=>"This tiara contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-tiara.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"789",
            "name"=>"mega-stickpin",
            "desc"=>"This stickpin contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-stickpin.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"795",
            "name"=>"sablenite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Sableye hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sablenite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"793",
            "name"=>"swampertite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Swampert hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/swampertite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"791",
            "name"=>"mega-anklet",
            "desc"=>"This anklet contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-anklet.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"794",
            "name"=>"sceptilite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Sceptile hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sceptilite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"799",
            "name"=>"metagrossite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Metagross hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/metagrossite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"798",
            "name"=>"audinite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Audino hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/audinite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"796",
            "name"=>"altarianite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Altaria hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/altarianite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"802",
            "name"=>"steelixite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Steelix hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steelixite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"803",
            "name"=>"pidgeotite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Pidgeot hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pidgeotite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"797",
            "name"=>"galladite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Gallade hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/galladite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"800",
            "name"=>"sharpedonite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Sharpedo hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sharpedonite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"801",
            "name"=>"slowbronite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Slowbro hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/slowbronite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"804",
            "name"=>"glalitite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Glalie hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/glalitite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"805",
            "name"=>"diancite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Diancie hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/diancite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"807",
            "name"=>"mega-cuff",
            "desc"=>"This bracelet contains an untold power that somehow enables Pokémon carrying a Mega Stone to Mega Evolve in battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mega-cuff.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"806",
            "name"=>"prison-bottle",
            "desc"=>"A bottle believed to have been used to seal away the power of a certain Pokémon long, long ago.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/prison-bottle.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"808",
            "name"=>"cameruptite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Camerupt hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/cameruptite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"809",
            "name"=>"lopunnite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Lopunny hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lopunnite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"811",
            "name"=>"beedrillite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Beedrill hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/beedrillite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"815",
            "name"=>"meteorite-shard",
            "desc"=>"One of the fragments of a Meteorite from Granite Cave. It’s faintly warm to the touch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meteorite-shard.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"810",
            "name"=>"salamencite",
            "desc"=>"One of a variety of mysterious Mega Stones. Have Salamence hold it, and this stone will enable it to Mega Evolve during battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/salamencite.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"817",
            "name"=>"normalium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Normal-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/normalium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"816",
            "name"=>"eon-flute",
            "desc"=>"A flute that can be used to summon Latios or Latias no matter where you are.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eon-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"818",
            "name"=>"firium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Fire-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/firium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"814",
            "name"=>"key-stone",
            "desc"=>"A stone filled with an unexplained power. It makes Pokémon that battle with a Mega Stone Mega Evolve.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/key-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"821",
            "name"=>"grassium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Grass-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grassium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"819",
            "name"=>"waterium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Water-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/waterium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"822",
            "name"=>"icium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Ice-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/icium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"823",
            "name"=>"fightinium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Fighting-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fightinium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"820",
            "name"=>"electrium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Electric-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electrium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"824",
            "name"=>"poisonium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Poison-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poisonium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"827",
            "name"=>"psychium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Psychic-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/psychium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"829",
            "name"=>"rockium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Rock-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rockium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"826",
            "name"=>"flyinium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Flying-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flyinium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"828",
            "name"=>"buginium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Bug-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/buginium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"825",
            "name"=>"groundium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Ground-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/groundium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"830",
            "name"=>"ghostium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Ghost-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ghostium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"831",
            "name"=>"dragonium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Dragon-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragonium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"833",
            "name"=>"steelium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Steel-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steelium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"832",
            "name"=>"darkinium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Dark-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/darkinium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"834",
            "name"=>"fairium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Fairy-type moves to Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fairium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"835",
            "name"=>"pikanium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Pikachu’s Volt Tackle to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pikanium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"836",
            "name"=>"bottle-cap",
            "desc"=>"A beautiful bottle cap that gives off a silver gleam. Some people are happy to receive one.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bottle-cap.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"837",
            "name"=>"gold-bottle-cap",
            "desc"=>"A beautiful bottle cap that gives off a golden gleam. Some people are happy to receive one.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/gold-bottle-cap.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"838",
            "name"=>"z-ring",
            "desc"=>"A mysterious ring that enables Pokémon to use Z-Power. It requires both the willpower and the physical power of the Trainer wearing it.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/z-ring.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"839",
            "name"=>"decidium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Decidueye’s Spirit Shackle to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/decidium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"841",
            "name"=>"primarium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Primarina’s Sparkling Aria to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/primarium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"840",
            "name"=>"incinium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Incineroar’s Darkest Lariat to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/incinium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"842",
            "name"=>"tapunium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades the tapu’s Nature’s Madness to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tapunium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"843",
            "name"=>"marshadium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Marshadow’s Spectral Thief to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/marshadium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"847",
            "name"=>"mewnium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Mew’s Psychic to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mewnium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"846",
            "name"=>"eevium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Eevee’s Last Resort to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eevium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"844",
            "name"=>"aloraichium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Alolan Raichu’s Thunderbolt to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aloraichium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"845",
            "name"=>"snorlium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Snorlax’s Giga Impact to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/snorlium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"877",
            "name"=>"pikashunium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades a Thunderbolt by Pikachu in a cap to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pikashunium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"882",
            "name"=>"sparkling-stone",
            "desc"=>"A stone entrusted by a Pokémon that has been venerated as a guardian deity in the Alola region. There is said to be some secret in how it sparkles.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sparkling-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"880",
            "name"=>"professors-mask",
            "desc"=>"The mask that belongs to The Masked Royal.  This pro wrestler apparently sews his mask on a machine himself.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/professors-mask.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"881",
            "name"=>"festival-ticket",
            "desc"=>"A ticket that allows you to host a mission in Festival Plaza.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/festival-ticket.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"879",
            "name"=>"fishing-rod",
            "desc"=>"A Fishing Rod made by Captain Lana. Cast a line over piles of underwater rocks to fish for wild aquatic Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fishing-rod.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"878",
            "name"=>"forage-bag",
            "desc"=>"A bag to carry ingredients gathered during Mallow’s trial in the jungle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/forage-bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"883",
            "name"=>"adrenaline-orb",
            "desc"=>"Using it makes wild Pokémon more likely to call for help. If held by a Pokémon, it boosts Speed when intimidated. It can be used only once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/adrenaline-orb.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"884",
            "name"=>"zygarde-cube",
            "desc"=>"An item to store Zygarde Cores and Cells. You can also use it to teach Zygarde moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/zygarde-cube.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"887",
            "name"=>"beast-ball",
            "desc"=>"A special Poké Ball designed to catch Ultra Beasts. It has a low success rate for catching others.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/beast-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"889",
            "name"=>"red-nectar",
            "desc"=>"A flower nectar obtained at Ula’ula Meadow. It changes the form of certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-nectar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"886",
            "name"=>"ride-pager",
            "desc"=>"By entering certain numbers on this pager, you can summon Ride Pokémon in an instant.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ride-pager.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"885",
            "name"=>"ice-stone",
            "desc"=>"A peculiar stone that can make certain species of Pokémon evolve. It has an unmistakable snowflake pattern.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ice-stone.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"888",
            "name"=>"big-malasada",
            "desc"=>"The Alola region’s local specialty—fried bread. It can be used once to heal all the status conditions of a Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/big-malasada.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"890",
            "name"=>"yellow-nectar",
            "desc"=>"A flower nectar obtained at Melemele Meadow. It changes the form of certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-nectar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"891",
            "name"=>"pink-nectar",
            "desc"=>"The flower nectar obtained at the flowering shrubs on Royal Avenue. It changes the form of certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pink-nectar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"892",
            "name"=>"purple-nectar",
            "desc"=>"A flower nectar obtained at Poni Meadow. It changes the form of certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/purple-nectar.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"894",
            "name"=>"moon-flute",
            "desc"=>"It is said that the tones it produces were offered up as an expression of gratitude to the Legendary Pokémon of the moon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/moon-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"895",
            "name"=>"enigmatic-card",
            "desc"=>"A mysterious card. Written on it is a request for you to go to a guest room in an Akala motel on Route 8.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/enigmatic-card.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"893",
            "name"=>"sun-flute",
            "desc"=>"It is said that the tones it produces were offered up as an expression of gratitude to the Legendary Pokémon of the sun.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/sun-flute.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"896",
            "name"=>"terrain-extender",
            "desc"=>"An item to be held by a Pokémon. It extends the duration of the terrain caused by the holder’s move or Ability.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/terrain-extender.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"900",
            "name"=>"misty-seed",
            "desc"=>"An item to be held by a Pokémon. It boosts Sp. Def on Misty Terrain. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/misty-seed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"903",
            "name"=>"flying-memory",
            "desc"=>"A memory disc that contains Flying-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flying-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"901",
            "name"=>"grassy-seed",
            "desc"=>"An item to be held by a Pokémon. It boosts Defense on Grassy Terrain. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grassy-seed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"897",
            "name"=>"protective-pads",
            "desc"=>"An item to be held by a Pokémon. These pads protect the holder from effects caused by making direct contact with the target.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/protective-pads.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"898",
            "name"=>"electric-seed",
            "desc"=>"An item to be held by a Pokémon. It boosts Defense on Electric Terrain. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electric-seed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"902",
            "name"=>"fighting-memory",
            "desc"=>"A memory disc that contains Fighting-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fighting-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"899",
            "name"=>"psychic-seed",
            "desc"=>"An item to be held by a Pokémon. It boosts Sp. Def on Psychic Terrain. It can only be used once.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/psychic-seed.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"904",
            "name"=>"poison-memory",
            "desc"=>"A memory disc that contains Poison-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poison-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"905",
            "name"=>"ground-memory",
            "desc"=>"A memory disc that contains Ground-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ground-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"906",
            "name"=>"rock-memory",
            "desc"=>"A memory disc that contains Rock-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rock-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"908",
            "name"=>"ghost-memory",
            "desc"=>"A memory disc that contains Ghost-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ghost-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"907",
            "name"=>"bug-memory",
            "desc"=>"A memory disc that contains Bug-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bug-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"914",
            "name"=>"psychic-memory",
            "desc"=>"A memory disc that contains Psychic-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/psychic-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"915",
            "name"=>"ice-memory",
            "desc"=>"A memory disc that contains Ice-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ice-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"911",
            "name"=>"water-memory",
            "desc"=>"A memory disc that contains Water-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/water-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"916",
            "name"=>"dragon-memory",
            "desc"=>"A memory disc that contains Dragon-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragon-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"918",
            "name"=>"fairy-memory",
            "desc"=>"A memory disc that contains Fairy-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fairy-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"912",
            "name"=>"grass-memory",
            "desc"=>"A memory disc that contains Grass-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grass-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"910",
            "name"=>"fire-memory",
            "desc"=>"A memory disc that contains Fire-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fire-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"917",
            "name"=>"dark-memory",
            "desc"=>"A memory disc that contains Dark-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dark-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"909",
            "name"=>"steel-memory",
            "desc"=>"A memory disc that contains Steel-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steel-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"913",
            "name"=>"electric-memory",
            "desc"=>"A memory disc that contains Electric-type data. It changes the type of the holder if held by a certain species of Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electric-memory.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"919",
            "name"=>"bike--green",
            "desc"=>"A folding Bike that enables a rider to get around much faster than with Running Shoes.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bike--green.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"920",
            "name"=>"storage-key--galactic-warehouse",
            "desc"=>"The key to Team Galactic’s sinister warehouse located at the edge of Veilstone City.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/storage-key--galactic-warehouse.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"930",
            "name"=>"holo-caster--red",
            "desc"=>"A device that allows users to receive and view hologram clips at any time. It’s also used to chat with others.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/holo-caster--red.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"921",
            "name"=>"basement-key--goldenrod",
            "desc"=>"A key that opens a door in the Goldenrod Tunnel.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/basement-key--goldenrod.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"927",
            "name"=>"dropped-item--yellow",
            "desc"=>"The Xtransceiver found at the Nimbasa City amusement park. It seems it belongs to a girl.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dropped-item--yellow.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"928",
            "name"=>"holo-caster--green",
            "desc"=>"A device that allows users to receive and view hologram clips at any time. It’s also used to chat with others.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/holo-caster--green.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"922",
            "name"=>"xtransceiver--red",
            "desc"=>"A high-tech transceiver with a camera function. It allows up to four-way calls.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"925",
            "name"=>"dna-splicers--split",
            "desc"=>"A splicer that separates Kyurem and a certain Pokémon when they have been fused.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dna-splicers--split.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"926",
            "name"=>"dropped-item--red",
            "desc"=>"The Xtransceiver found at the Nimbasa City amusement park. It seems it belongs to a boy.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dropped-item--red.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"929",
            "name"=>"bike--yellow",
            "desc"=>"A folding bike that enables a rider to get around much faster than with Running Shoes.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/bike--yellow.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"923",
            "name"=>"xtransceiver--yellow",
            "desc"=>"A high-tech transceiver with a camera function. It allows up to four-way calls.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"924",
            "name"=>"dna-splicers--merge",
            "desc"=>"A splicer that fuses Kyurem and a certain Pokémon. They are said to have been one in the beginning.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dna-splicers--merge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"932",
            "name"=>"storage-key--sea-mauville",
            "desc"=>"A key that opens the storage hold inside Sea Mauville.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/storage-key--sea-mauville.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"931",
            "name"=>"basement-key--new-mauville",
            "desc"=>"The key to New Mauville, which was constructed beneath Mauville City.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/basement-key--new-mauville.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"938",
            "name"=>"normalium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Normal-type moves to Normal-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/normalium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"935",
            "name"=>"meteorite--2",
            "desc"=>"A Meteorite that you got at Mt. Chimney. It gives off a faint glow.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meteorite--2.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"936",
            "name"=>"meteorite--3",
            "desc"=>"A Meteorite that you got at Mt. Chimney. It continues to give off a faint glow and is slightly warm to the touch.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meteorite--3.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"939",
            "name"=>"firium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Fire-type moves to Fire-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/firium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"937",
            "name"=>"meteorite--4",
            "desc"=>"A Meteorite that you got at Mt. Chimney. Some sort of pattern has risen to the surface, and it’s shining with seven colors of light.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/meteorite--4.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"940",
            "name"=>"waterium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Water-type moves to Water-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/waterium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"933",
            "name"=>"ss-ticket--hoenn",
            "desc"=>"Ticket required for sailing on a ferry.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ss-ticket--hoenn.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"941",
            "name"=>"electrium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Electric-type moves to Electric-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/electrium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"942",
            "name"=>"grassium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Grass-type moves to Grass-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/grassium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"934",
            "name"=>"contest-costume--dress",
            "desc"=>"A very cute dress to be worn during the Contest Spectacular.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/contest-costume--dress.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"943",
            "name"=>"icium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Ice-type moves to Ice-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/icium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"944",
            "name"=>"fightinium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Fighting-type moves to Fighting-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fightinium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"946",
            "name"=>"groundium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Ground-type moves to Ground-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/groundium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"950",
            "name"=>"rockium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Rock-type moves to Rock-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rockium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"948",
            "name"=>"psychium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Psychic-type moves to Psychic-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/psychium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"947",
            "name"=>"flyinium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Flying-type moves to Flying-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/flyinium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"945",
            "name"=>"poisonium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Poison-type moves to Poison-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poisonium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"951",
            "name"=>"ghostium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Ghost-type moves to Ghost-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ghostium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"949",
            "name"=>"buginium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Bug-type moves to Bug-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/buginium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"953",
            "name"=>"darkinium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Dark-type moves to Dark-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/darkinium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"954",
            "name"=>"steelium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Steel-type moves to Steel-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/steelium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"952",
            "name"=>"dragonium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Dragon-type moves to Dragon-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/dragonium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"955",
            "name"=>"fairium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Fairy-type moves to Fairy-type Z-Moves.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/fairium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"956",
            "name"=>"pikanium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Pikachu’s Volt Tackle to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pikanium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"957",
            "name"=>"decidium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Decidueye’s Spirit Shackle to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/decidium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"960",
            "name"=>"tapunium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade the tapu’s Nature’s Madness to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tapunium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"958",
            "name"=>"incinium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Incineroar’s Darkest Lariat to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/incinium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"959",
            "name"=>"primarium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Primarina’s Sparkling Aria to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/primarium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"963",
            "name"=>"snorlium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Snorlax’s Giga Impact to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/snorlium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"961",
            "name"=>"marshadium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Marshadow’s Spectral Thief to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/marshadium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"962",
            "name"=>"aloraichium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Alolan Raichu’s Thunderbolt to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/aloraichium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"964",
            "name"=>"eevium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Eevee’s Last Resort to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/eevium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"967",
            "name"=>"solganium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Solgaleo’s Sunsteel Strike to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/solganium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"965",
            "name"=>"mewnium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Mew’s Psychic to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mewnium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"968",
            "name"=>"lunalium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Lunala’s Moongeist Beam to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lunalium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"966",
            "name"=>"pikashunium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade a Thunderbolt by Pikachu in a cap to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pikashunium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"969",
            "name"=>"ultranecrozium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Necrozma’s Photon Geyser to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ultranecrozium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"971",
            "name"=>"lycanium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Lycanroc’s Stone Edge to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lycanium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"974",
            "name"=>"lunalium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Lunala’s Moongeist Beam to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lunalium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"970",
            "name"=>"mimikium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Mimikyu’s Play Rough to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mimikium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"972",
            "name"=>"kommonium-z--held",
            "desc"=>"This is a crystallized form of Z-Power. It upgrades Kommo-o’s Clanging Scales to a Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kommonium-z--held.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"973",
            "name"=>"solganium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Solgaleo’s Sunsteel Strike to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/solganium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"975",
            "name"=>"ultranecrozium-z--bag",
            "desc"=>"It’s a crystal that turns Necrozma fused with Solgaleo or Lunala into a new form.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ultranecrozium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"976",
            "name"=>"mimikium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Mimikyu’s Play Rough to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/mimikium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"979",
            "name"=>"z-power-ring",
            "desc"=>"A mysterious ring that enables Pokémon to use Z-Power. It requires both the willpower and the physical power of the Trainer wearing it.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/z-power-ring.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"978",
            "name"=>"kommonium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Kommo-o’s Clanging Scales to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/kommonium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"980",
            "name"=>"pink-petal",
            "desc"=>"A pressed flower petal you receive from Mina during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/pink-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"977",
            "name"=>"lycanium-z--bag",
            "desc"=>"It converts Z-Power into crystals that upgrade Lycanroc’s Stone Edge to an exclusive Z-Move.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lycanium-z--bag.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"982",
            "name"=>"blue-petal",
            "desc"=>"A pressed flower petal you receive from Lana  during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/blue-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"981",
            "name"=>"orange-petal",
            "desc"=>"A pressed flower petal you receive from Ilima during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/orange-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"985",
            "name"=>"yellow-petal",
            "desc"=>"A pressed flower petal you receive from Sophocles during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/yellow-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"984",
            "name"=>"green-petal",
            "desc"=>"A pressed flower petal you receive from Mallow during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/green-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"983",
            "name"=>"red-petal",
            "desc"=>"A pressed flower petal you receive from Kiawe during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/red-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"986",
            "name"=>"purple-petal",
            "desc"=>"A pressed flower petal you receive from Nanu during Mina’s trial. The goal is to collect seven different kinds of petals.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/purple-petal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"988",
            "name"=>"surge-badge",
            "desc"=>"A novelty badge that you can receive at the Kantonian Gym. Rumor has it that it imitates the Badge of a Gym somewhere.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/surge-badge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"987",
            "name"=>"rainbow-flower",
            "desc"=>"A flower made of the petals you received from captains. It’s proof that your growth has been recognized by them.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/rainbow-flower.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"989",
            "name"=>"n-solarizer--merge",
            "desc"=>"A machine to fuse Necrozma, which needs light, and Solgaleo.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/n-solarizer--merge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"991",
            "name"=>"n-solarizer--split",
            "desc"=>"A machine to separate Necrozma, which needed light, from Solgaleo.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/n-solarizer--split.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"992",
            "name"=>"n-lunarizer--split",
            "desc"=>"A machine to separate Necrozma, which needed light, from Lunala.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/n-lunarizer--split.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"990",
            "name"=>"n-lunarizer--merge",
            "desc"=>"A machine to fuse Necrozma, which needs light, and Lunala.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/n-lunarizer--merge.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"995",
            "name"=>"roto-hatch",
            "desc"=>"One of the Rotom Powers. It helps Eggs hatch faster.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-hatch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"996",
            "name"=>"roto-bargain",
            "desc"=>"One of the Rotom Powers. It reduces the prices of products at Poké Marts by half.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-bargain.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"994",
            "name"=>"left-poke-ball",
            "desc"=>"A Poké Ball with a Pokémon that lost its Trainer inside. It seems to be from Ula’ula Island.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/left-poke-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"997",
            "name"=>"roto-prize-money",
            "desc"=>"One of the Rotom Powers. It triples the prize money you receive after battle.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-prize-money.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"993",
            "name"=>"ilimas-normalium-z",
            "desc"=>"The Normalium Z you were entrusted with by Ilima. You were asked to place it on the pedestal at the back of Verdant Cavern.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/ilimas-normalium-z.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"998",
            "name"=>"roto-exp-points",
            "desc"=>"One of the Rotom Powers. It increases the Exp. Points your Pokémon receive after battle a little.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-exp-points.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1000",
            "name"=>"roto-encounter",
            "desc"=>"One of the Rotom Powers. It increases the chance of encountering high-level wild Pokémon a lot for a certain period of time.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-encounter.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"999",
            "name"=>"roto-friendship",
            "desc"=>"One of the Rotom Powers. It helps Pokémon in your party grow friendly faster.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-friendship.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1001",
            "name"=>"roto-stealth",
            "desc"=>"One of the Rotom Powers. It prevents you from encountering wild Pokémon for a certain period of time.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-stealth.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1004",
            "name"=>"roto-boost",
            "desc"=>"One of the Rotom Powers. It raises all stats of your battling Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-boost.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1003",
            "name"=>"roto-pp-restore",
            "desc"=>"One of the Rotom Powers. It fully restores the PP of your battling Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-pp-restore.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1002",
            "name"=>"roto-hp-restore",
            "desc"=>"One of the Rotom Powers. It fully restores the HP of your battling Pokémon.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-hp-restore.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1005",
            "name"=>"roto-catch",
            "desc"=>"One of the Rotom Powers. It increases the chance to catch Pokémon a lot.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/roto-catch.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1006",
            "name"=>"autograph",
            "desc"=>"The autograph you got from the Vermilion City Gym Leader, Lt. Surge. He wrote, “Good luck!”",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1012",
            "name"=>"catching-pocket",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1007",
            "name"=>"pokemon-box",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1010",
            "name"=>"power-up-pocket",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1009",
            "name"=>"candy-jar",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1011",
            "name"=>"clothing-trunk",
            "desc"=>"A very light trunk that can carry clothing for you and your Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1013",
            "name"=>"battle-pocket",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1008",
            "name"=>"medicine-pocket",
            "desc"=>"- - -",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1016",
            "name"=>"silver-nanab-berry",
            "desc"=>"A Berry that calms wild Pokémon you’re trying to catch when given to them.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1015",
            "name"=>"golden-razz-berry",
            "desc"=>"A Berry that makes it drastically easier to catch Pokémon when given to them.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1014",
            "name"=>"silver-razz-berry",
            "desc"=>"A Berry that makes it easier to catch Pokémon when given to them.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1019",
            "name"=>"golden-pinap-berry",
            "desc"=>"A Berry that makes you drastically more likely to get an item when given to Pokémon you’re trying to catch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1018",
            "name"=>"silver-pinap-berry",
            "desc"=>"A Berry that makes you more likely to get an item when given to Pokémon you’re trying to catch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1022",
            "name"=>"parcel--letsgo",
            "desc"=>"A parcel to be delivered to Professor Oak from Viridian City’s Poké Mart.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1017",
            "name"=>"golden-nanab-berry",
            "desc"=>"A Berry that calms wild Pokémon you’re trying to catch drastically when given to them.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1020",
            "name"=>"secret-key--letsgo",
            "desc"=>"The key that unlocks the front door of the Pokémon Gym on Cinnabar Island. It has a red decoration.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1023",
            "name"=>"card-key--letsgo",
            "desc"=>"A card key that unlocks doors in Silph Co.’s head office in Saffron City.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1021",
            "name"=>"ss-ticket--letsgo",
            "desc"=>"The ticket required to board the S.S. Anne. It has a drawing of a ship on it.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1024",
            "name"=>"stretchy-spring",
            "desc"=>"A thin small spring. It’s totally stretched out, and what it’s used for is unknown.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1025",
            "name"=>"chalky-stone",
            "desc"=>"A small whitish stone picked up at the edge of the road.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1026",
            "name"=>"marble",
            "desc"=>"A round glass marble. You can see colored glass inside the transparent marble.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1027",
            "name"=>"lone-earring",
            "desc"=>"A single earring that somebody dropped.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1028",
            "name"=>"beach-glass",
            "desc"=>"A piece of colored glass. Waves have rounded its edges. It’s slightly rough to the touch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1036",
            "name"=>"lure",
            "desc"=>"A glass bottle of perfume that makes rare Pokémon more likely to appear.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1030",
            "name"=>"silver-leaf",
            "desc"=>"A mysterious silver leaf. No trees with this leaf have been found yet.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1034",
            "name"=>"leaf-letter--eevee",
            "desc"=>"A letter written on a leaf. Something is written using Eevee’s footprints.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1029",
            "name"=>"gold-leaf",
            "desc"=>"A mysterious gold leaf. No trees with this leaf have been found yet.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1038",
            "name"=>"max-lure",
            "desc"=>"A glass bottle of perfume that makes rare Pokémon more likely to appear. It lasts longer than a Super Lure.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1033",
            "name"=>"leaf-letter--pikachu",
            "desc"=>"A letter written on a leaf. Something is written using Pikachu’s footprints.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1032",
            "name"=>"tropical-shell",
            "desc"=>"A beautiful white shell that may have drifted from a sea in a warm region.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1031",
            "name"=>"polished-mud-ball",
            "desc"=>"A ball made of mud. It had been polished for such a long time that the surface is very shiny.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1037",
            "name"=>"super-lure",
            "desc"=>"A glass bottle of perfume that makes rare Pokémon more likely to appear. It lasts longer than a Lure.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1035",
            "name"=>"small-bouquet",
            "desc"=>"A small bouquet that was made with heart and soul for a single Trainer.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1039",
            "name"=>"pewter-crunchies",
            "desc"=>"Pewter City’s famous crunchy snack. They can be used to heal all status conditions of a single Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1040",
            "name"=>"health-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s HP.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1044",
            "name"=>"courage-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1043",
            "name"=>"smart-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1041",
            "name"=>"mighty-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s Attack stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1046",
            "name"=>"health-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s HP.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1045",
            "name"=>"quick-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s Speed stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1042",
            "name"=>"tough-candy",
            "desc"=>"A candy that is packed with energy. When given to a Pokémon, it will increase that Pokémon’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1049",
            "name"=>"smart-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1047",
            "name"=>"mighty-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s Attack stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1052",
            "name"=>"health-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s HP.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1050",
            "name"=>"courage-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1048",
            "name"=>"tough-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1051",
            "name"=>"quick-candy-l",
            "desc"=>"A big candy that is packed with energy. When given to a Pokémon at Lv. 30 or higher, it will increase that Pokémon’s Speed stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1055",
            "name"=>"smart-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1060",
            "name"=>"squirtle-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1054",
            "name"=>"tough-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1059",
            "name"=>"charmander-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1064",
            "name"=>"rattata-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1056",
            "name"=>"courage-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1057",
            "name"=>"quick-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s Speed stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1058",
            "name"=>"bulbasaur-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1062",
            "name"=>"weedle-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1053",
            "name"=>"mighty-candy-xl",
            "desc"=>"A huge candy that is packed with energy. When given to a Pokémon at Lv. 60 or higher, it will increase that Pokémon’s Attack stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1063",
            "name"=>"pidgey-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1061",
            "name"=>"caterpie-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1073",
            "name"=>"jigglypuff-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1068",
            "name"=>"sandshrew-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1075",
            "name"=>"oddish-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1070",
            "name"=>"nidoran-m-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1071",
            "name"=>"clefairy-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1065",
            "name"=>"spearow-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1066",
            "name"=>"ekans-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1072",
            "name"=>"vulpix-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1076",
            "name"=>"paras-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1069",
            "name"=>"nidoran-f-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1067",
            "name"=>"pikachu-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1074",
            "name"=>"zubat-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1087",
            "name"=>"tentacool-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1083",
            "name"=>"poliwag-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1084",
            "name"=>"abra-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1085",
            "name"=>"machop-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1086",
            "name"=>"bellsprout-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1077",
            "name"=>"venonat-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1088",
            "name"=>"geodude-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1078",
            "name"=>"diglett-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1080",
            "name"=>"psyduck-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1082",
            "name"=>"growlithe-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1079",
            "name"=>"meowth-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1081",
            "name"=>"mankey-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1095",
            "name"=>"grimer-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1090",
            "name"=>"slowpoke-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1089",
            "name"=>"ponyta-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1091",
            "name"=>"magnemite-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1092",
            "name"=>"farfetchd-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1097",
            "name"=>"gastly-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1094",
            "name"=>"seel-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1093",
            "name"=>"doduo-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1099",
            "name"=>"drowzee-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1096",
            "name"=>"shellder-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1098",
            "name"=>"onix-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1100",
            "name"=>"krabby-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1101",
            "name"=>"voltorb-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1104",
            "name"=>"hitmonlee-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1102",
            "name"=>"exeggcute-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1103",
            "name"=>"cubone-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1110",
            "name"=>"tangela-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1111",
            "name"=>"kangaskhan-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1107",
            "name"=>"koffing-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1106",
            "name"=>"lickitung-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1108",
            "name"=>"rhyhorn-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1109",
            "name"=>"chansey-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1105",
            "name"=>"hitmonchan-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1112",
            "name"=>"horsea-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1113",
            "name"=>"goldeen-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1114",
            "name"=>"staryu-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1116",
            "name"=>"scyther-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1121",
            "name"=>"magikarp-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1120",
            "name"=>"tauros-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1118",
            "name"=>"electabuzz-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1117",
            "name"=>"jynx-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1115",
            "name"=>"mr-mime-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1119",
            "name"=>"pinsir-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1122",
            "name"=>"lapras-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1123",
            "name"=>"ditto-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1124",
            "name"=>"eevee-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1125",
            "name"=>"porygon-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1126",
            "name"=>"omanyte-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1128",
            "name"=>"aerodactyl-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1127",
            "name"=>"kabuto-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1135",
            "name"=>"mew-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1134",
            "name"=>"mewtwo-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1129",
            "name"=>"snorlax-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1133",
            "name"=>"dratini-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1131",
            "name"=>"zapdos-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1130",
            "name"=>"articuno-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1132",
            "name"=>"moltres-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1136",
            "name"=>"meltan-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1137",
            "name"=>"magmar-candy",
            "desc"=>"A candy that is packed with energy. When given to certain Pokémon, it will increase all their stats at once.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1140",
            "name"=>"wishing-star",
            "desc"=>"A stone found in the Galar region with a mysterious power. It’s said that your dreams come true if you find one.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1139",
            "name"=>"pokemon-box-link",
            "desc"=>"A device that allows you to access the Pokémon storage system. There are some places where it won’t work.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1138",
            "name"=>"endorsement",
            "desc"=>"A letter of recommendation that you’ll need in order to participate in the Gym Challenge.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1141",
            "name"=>"dynamax-band",
            "desc"=>"A Wishing Star has been affixed to it. It lets out a light that allows Pokémon to Dynamax when at a Power Spot.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1142",
            "name"=>"fishing-rod--galar",
            "desc"=>"Use it by the water to fish up various kinds of Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1144",
            "name"=>"sausages",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. These sausages should be boiled before eating.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1145",
            "name"=>"bobs-food-tin",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The tinned food that Bob sells is curiously popular in Galar.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1146",
            "name"=>"bachs-food-tin",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The tinned food that Bach sells is curiously popular in Galar.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1143",
            "name"=>"rotom-bike",
            "desc"=>"This bike can be combined with the Pokémon Rotom to use a turbo boost.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1148",
            "name"=>"bread",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. An indispensable tool for mopping up that extra curry left on your plate.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1147",
            "name"=>"tin-of-beans",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. When simmered, the beans suffuse a dish with their mild flavor.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1149",
            "name"=>"pasta",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. These flour noodles make for a surprisingly good match with curry.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1150",
            "name"=>"mixed-mushrooms",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The chewy texture of the mushrooms transforms any dish they’re added to.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1151",
            "name"=>"smoke-poke-tail",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. When a Slowpoke’s tail falls off, it grows back quickly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1154",
            "name"=>"brittle-bones",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The taste boiled off from the bones is sure to give a dish a light umami taste.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1153",
            "name"=>"fancy-apple",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. An apple chosen above others. It has spectacular form and a brilliant sheen.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1152",
            "name"=>"large-leek",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Whether this is the kind of vegetable stalk that Farfetch’d like is unknown.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1156",
            "name"=>"pungent-root",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Though carelessly picked, these herbs can add a fragrant accent to a dish.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1155",
            "name"=>"pack-of-potatoes",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Potatoes help mellow out a spicy taste, to make a dish more mild.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1158",
            "name"=>"fried-food",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. It’s been a while since it was fried, so it’s gotten greasy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1157",
            "name"=>"salad-mix",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The assortment of vegetables looks quite appealing and healthy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1159",
            "name"=>"boiled-egg",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Even just one boiled egg can really enhance a dish.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1161",
            "name"=>"rusted-sword",
            "desc"=>"It is said that a hero used this sword to halt a terrible disaster in ancient times. But it’s grown rusty and worn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1160",
            "name"=>"camping-gear",
            "desc"=>"Everything you need to set up a tent and get cooking in a Wild Area or at a camping spot.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1162",
            "name"=>"rusted-shield",
            "desc"=>"It is said that a hero used this shield to halt a terrible disaster in ancient times. But it’s grown rusty and worn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1164",
            "name"=>"fossilized-fish",
            "desc"=>"The fossil of an ancient Pokémon that once lived in the sea. What it looked like is a mystery.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1165",
            "name"=>"fossilized-drake",
            "desc"=>"The fossil of an ancient Pokémon that once roamed the land. What it looked like is a mystery.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1163",
            "name"=>"fossilized-bird",
            "desc"=>"The fossil of an ancient Pokémon that once soared through the sky. What it looked like is a mystery.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1168",
            "name"=>"love-sweet",
            "desc"=>"A heart-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1166",
            "name"=>"fossilized-dino",
            "desc"=>"The fossil of an ancient Pokémon that once lived in the sea. What it looked like is a mystery.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1167",
            "name"=>"strawberry-sweet",
            "desc"=>"A strawberry-shaped sweet. When a Milcery holds this, it will spin around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1169",
            "name"=>"berry-sweet",
            "desc"=>"A berry-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1170",
            "name"=>"clover-sweet",
            "desc"=>"A clover-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1171",
            "name"=>"flower-sweet",
            "desc"=>"A flower-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1172",
            "name"=>"star-sweet",
            "desc"=>"A star-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1173",
            "name"=>"ribbon-sweet",
            "desc"=>"A ribbon-shaped sweet. When a Milcery holds this, it spins around happily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1175",
            "name"=>"tart-apple",
            "desc"=>"A peculiar apple that can make a certain species of Pokémon evolve. It’s exceptionally tart.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1174",
            "name"=>"sweet-apple",
            "desc"=>"A peculiar apple that can make a certain species of Pokémon evolve. It’s exceptionally sweet.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1176",
            "name"=>"throat-spray",
            "desc"=>"Raises Sp. Atk when a Pokémon uses a sound-based move.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1177",
            "name"=>"eject-pack",
            "desc"=>"An item to be held by a Pokémon. When the holder’s stats are lowered, it will be switched out of battle.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1182",
            "name"=>"exp-candy-xs",
            "desc"=>"A candy that is packed with energy. When consumed, it will grant a single Pokémon a very small amount of Exp. Points.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1181",
            "name"=>"utility-umbrella",
            "desc"=>"An item to be held by a Pokémon. This sturdy umbrella protects the holder from the effects of rain and harsh sunlight.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1180",
            "name"=>"room-service",
            "desc"=>"An item to be held by a Pokémon. Lowers Speed when Trick Room takes effect.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1183",
            "name"=>"exp-candy-s",
            "desc"=>"A candy that is packed with energy. When consumed, it will grant a single Pokémon a small amount of Exp. Points.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1178",
            "name"=>"heavy-duty-boots",
            "desc"=>"These boots prevent the effects of traps set on the battlefield.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1179",
            "name"=>"blunder-policy",
            "desc"=>"Raises Speed sharply when a Pokémon misses with a move because of accuracy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1184",
            "name"=>"exp-candy-m",
            "desc"=>"A candy that is packed with energy. When consumed, it will grant a single Pokémon a moderate amount of Exp. Points.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1185",
            "name"=>"exp-candy-l",
            "desc"=>"A candy that is packed with energy. When consumed, it will grant a single Pokémon a large amount of Exp. Points.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1186",
            "name"=>"exp-candy-xl",
            "desc"=>"A candy that is packed with energy. When consumed, it will grant a single Pokémon a very large amount of Exp. Points.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1188",
            "name"=>"tr00",
            "desc"=>"A frenetic dance to uplift the fighting spirit. This sharply raises the user’s Attack stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1187",
            "name"=>"dynamax-candy",
            "desc"=>"A candy that is packed with energy. When consumed, it will raise the Dynamax Level of a single Pokémon by one. A higher level means higher HP when Dynamaxed.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1190",
            "name"=>"tr02",
            "desc"=>"The target is scorched with an intense blast of fire. This may also leave the target with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1189",
            "name"=>"tr01",
            "desc"=>"The user drops onto the target with its full body weight. This may also leave the target with paralysis.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1193",
            "name"=>"tr05",
            "desc"=>"The target is struck with an icy-cold beam of energy. This may also leave the target frozen.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1191",
            "name"=>"tr03",
            "desc"=>"The target is blasted by a huge volume of water launched under great pressure.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1194",
            "name"=>"tr06",
            "desc"=>"A howling blizzard is summoned to strike opposing Pokémon. This may also leave the opposing Pokémon frozen.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1195",
            "name"=>"tr07",
            "desc"=>"A powerful low kick that makes the target fall over. The heavier the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1196",
            "name"=>"tr08",
            "desc"=>"A strong electric blast crashes down on the target. This may also leave the target with paralysis.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1192",
            "name"=>"tr04",
            "desc"=>"The user attacks everything around it by swamping its surroundings with a giant wave.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1197",
            "name"=>"tr09",
            "desc"=>"A wicked thunderbolt is dropped on the target to inflict damage. This may also leave the target with paralysis.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1198",
            "name"=>"tr10",
            "desc"=>"The user sets off an earthquake that strikes every Pokémon around it.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1199",
            "name"=>"tr11",
            "desc"=>"The target is hit by a strong telekinetic force. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1202",
            "name"=>"tr14",
            "desc"=>"The user waggles a finger and stimulates its brain into randomly using nearly any move.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1201",
            "name"=>"tr13",
            "desc"=>"The user takes a deep breath and focuses so that critical hits land more easily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1205",
            "name"=>"tr17",
            "desc"=>"The user temporarily empties its mind to forget its concerns. This sharply raises the user’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1204",
            "name"=>"tr16",
            "desc"=>"The user charges at the target and may make it flinch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1206",
            "name"=>"tr18",
            "desc"=>"The user drains the target’s blood. The user’s HP is restored by half the damage taken by the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1207",
            "name"=>"tr19",
            "desc"=>"The user strikes with a simultaneous three-beam attack. This may also burn, freeze, or paralyze the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1203",
            "name"=>"tr15",
            "desc"=>"The target is attacked with an intense blast of all-consuming fire. This may also leave the target with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1208",
            "name"=>"tr20",
            "desc"=>"The user creates a substitute for itself using some of its HP. The substitute serves as the user’s decoy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1209",
            "name"=>"tr21",
            "desc"=>"An all-out attack that becomes more powerful the less HP the user has.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1200",
            "name"=>"tr12",
            "desc"=>"The user relaxes and lightens its body to move faster. This sharply raises the Speed stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1210",
            "name"=>"tr22",
            "desc"=>"Unsanitary sludge is hurled at the target. This may also poison the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1213",
            "name"=>"tr25",
            "desc"=>"The user materializes an odd psychic wave to attack the target. This attack does physical damage.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1212",
            "name"=>"tr24",
            "desc"=>"The user rampages and attacks for two to three turns. The user then becomes confused.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1211",
            "name"=>"tr23",
            "desc"=>"The user lays a trap of spikes at the opposing team’s feet. The trap hurts Pokémon that switch into battle.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1217",
            "name"=>"tr29",
            "desc"=>"The user switches places with a party Pokémon in waiting and passes along any stat changes.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1214",
            "name"=>"tr26",
            "desc"=>"The user endures any attack with at least 1 HP. Its chance of failing rises if it is used in succession.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1216",
            "name"=>"tr28",
            "desc"=>"Using its tough and impressive horn, the user rams into the target with no letup.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1218",
            "name"=>"tr30",
            "desc"=>"The user compels the target to keep using the move it encored for three turns.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1219",
            "name"=>"tr31",
            "desc"=>"The target is slammed with a steel-hard tail. This may also lower the target’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1215",
            "name"=>"tr27",
            "desc"=>"While it is asleep, the user randomly uses one of the moves it knows.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1221",
            "name"=>"tr33",
            "desc"=>"The user hurls a shadowy blob at the target. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1220",
            "name"=>"tr32",
            "desc"=>"The user crunches up the target with sharp fangs. This may also lower the target’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1222",
            "name"=>"tr34",
            "desc"=>"Two turns after this move is used, a hunk of psychic energy attacks the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1225",
            "name"=>"tr37",
            "desc"=>"The target is taunted into a rage that allows it to use only attack moves for three turns.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1224",
            "name"=>"tr36",
            "desc"=>"The user attacks by exhaling hot breath on opposing Pokémon. This may also leave those Pokémon with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1223",
            "name"=>"tr35",
            "desc"=>"The user attacks in an uproar for three turns. During that time, no Pokémon can fall asleep.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1229",
            "name"=>"tr41",
            "desc"=>"The user launches a kick that lands a critical hit more easily. This may also leave the target with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1226",
            "name"=>"tr38",
            "desc"=>"The user catches the target off guard and swaps its held item with its own.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1231",
            "name"=>"tr43",
            "desc"=>"The user attacks the target at full power. The attack’s recoil harshly lowers the user’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1233",
            "name"=>"tr45",
            "desc"=>"The user attacks by shooting muddy water at opposing Pokémon. This may also lower their accuracy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1234",
            "name"=>"tr46",
            "desc"=>"The user hardens its body’s surface like iron, sharply raising its Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1227",
            "name"=>"tr39",
            "desc"=>"The user attacks the target with great power. However, this also lowers the user’s Attack and Defense stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1228",
            "name"=>"tr40",
            "desc"=>"The user employs its psychic power to exchange Abilities with the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1230",
            "name"=>"tr42",
            "desc"=>"The user lets loose a horribly echoing shout with the power to inflict damage.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1232",
            "name"=>"tr44",
            "desc"=>"The user absorbs a mystical power from space to raise its Defense and Sp. Def stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1236",
            "name"=>"tr48",
            "desc"=>"The user tenses its muscles to bulk up its body, raising both its Attack and Defense stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1237",
            "name"=>"tr49",
            "desc"=>"The user quietly focuses its mind and calms its spirit to raise its Sp. Atk and Sp. Def stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1235",
            "name"=>"tr47",
            "desc"=>"The user slashes the target with huge sharp claws.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1238",
            "name"=>"tr50",
            "desc"=>"The user handles a sharp leaf like a sword and attacks by cutting its target. Critical hits land more easily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1244",
            "name"=>"tr56",
            "desc"=>"The user lets loose a blast of aura power from deep within its body at the target. This attack never misses.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1241",
            "name"=>"tr53",
            "desc"=>"The user fights the target up close without guarding itself. This also lowers the user’s Defense and Sp. Def stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1242",
            "name"=>"tr54",
            "desc"=>"The user lays a trap of poison spikes at the feet of the opposing team. The spikes will poison opposing Pokémon that switch into battle.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1239",
            "name"=>"tr51",
            "desc"=>"The user vigorously performs a mystic, powerful dance that raises its Attack and Speed stats.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1246",
            "name"=>"tr58",
            "desc"=>"The user releases a horrible aura imbued with dark thoughts. This may also make the target flinch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1245",
            "name"=>"tr57",
            "desc"=>"The target is stabbed with a tentacle, arm, or the like steeped in poison. This may also poison the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1243",
            "name"=>"tr55",
            "desc"=>"The user cloaks itself in fire and charges the target. This also damages the user quite a lot. This attack may leave the target with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1240",
            "name"=>"tr52",
            "desc"=>"The user tackles the target with a high-speed spin. The slower the user compared to the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1249",
            "name"=>"tr61",
            "desc"=>"The user generates a damaging sound wave by vibration. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1247",
            "name"=>"tr59",
            "desc"=>"The user slams a barrage of hard-shelled seeds down on the target from above.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1248",
            "name"=>"tr60",
            "desc"=>"The user slashes at the target by crossing its scythes or claws as if they were a pair of scissors.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1250",
            "name"=>"tr62",
            "desc"=>"The target is attacked with a shock wave generated by the user’s gaping mouth.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1251",
            "name"=>"tr63",
            "desc"=>"The user attacks with a ray of light that sparkles as if it were made of gemstones.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1252",
            "name"=>"tr64",
            "desc"=>"The user heightens its mental focus and unleashes its power. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1254",
            "name"=>"tr66",
            "desc"=>"The user tucks in its wings and charges from a low altitude. This also damages the user quite a lot.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1256",
            "name"=>"tr68",
            "desc"=>"The user stimulates its brain by thinking bad thoughts. This sharply raises the user’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1253",
            "name"=>"tr65",
            "desc"=>"The user draws power from nature and fires it at the target. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1259",
            "name"=>"tr71",
            "desc"=>"The user whips up a storm of leaves around the target. The attack’s recoil harshly lowers the user’s Sp. Atk stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1257",
            "name"=>"tr69",
            "desc"=>"The user focuses its willpower to its head and attacks the target. This may also make the target flinch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1255",
            "name"=>"tr67",
            "desc"=>"The user makes the ground under the target erupt with power. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1258",
            "name"=>"tr70",
            "desc"=>"The user gathers all its light energy and releases it all at once. This may also lower the target’s Sp. Def stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1261",
            "name"=>"tr73",
            "desc"=>"The user shoots filthy garbage at the target to attack. This may also poison the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1260",
            "name"=>"tr72",
            "desc"=>"The user violently whirls its vines, tentacles, or the like to harshly lash the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1263",
            "name"=>"tr75",
            "desc"=>"The user stabs the target from below with sharpened stones. Critical hits land more easily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1262",
            "name"=>"tr74",
            "desc"=>"The user slams the target with its steel-hard head. This may also make the target flinch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1265",
            "name"=>"tr77",
            "desc"=>"The user snares the target with grass and trips it. The heavier the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1264",
            "name"=>"tr76",
            "desc"=>"The user lays a trap of levitating stones around the opposing team. The trap hurts opposing Pokémon that switch into battle.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1266",
            "name"=>"tr78",
            "desc"=>"The user strikes everything around it by swamping the area with a giant sludge wave. This may also poison those hit.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1273",
            "name"=>"tr85",
            "desc"=>"The user is roused, and its Attack and Sp. Atk stats increase.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1268",
            "name"=>"tr80",
            "desc"=>"The user hurls an electric orb at the target. The faster the user is than the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1267",
            "name"=>"tr79",
            "desc"=>"The user slams into the target with its heavy body. The more the user outweighs the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1269",
            "name"=>"tr81",
            "desc"=>"The user turns the target’s power against it. The higher the target’s Attack stat, the greater the damage it deals.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1272",
            "name"=>"tr84",
            "desc"=>"The user shoots boiling hot water at its target. This may also leave the target with a burn.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1271",
            "name"=>"tr83",
            "desc"=>"The user teleports using a strange power and switches places with one of its allies.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1270",
            "name"=>"tr82",
            "desc"=>"The user attacks the target with stored power. The more the user’s stats are raised, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1274",
            "name"=>"tr86",
            "desc"=>"The user shrouds itself in electricity and smashes into its target. This also damages the user a little.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1277",
            "name"=>"tr89",
            "desc"=>"The user attacks by wrapping its opponent in a fierce wind that flies up into the sky. This may also confuse the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1275",
            "name"=>"tr87",
            "desc"=>"The user crashes into its target while rotating its body like a drill. Critical hits land more easily.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1276",
            "name"=>"tr88",
            "desc"=>"The user slams its target with its flame-covered body. The more the user outweighs the target, the greater the move’s power.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1279",
            "name"=>"tr91",
            "desc"=>"Opposing Pokémon are drenched in an odd poisonous liquid. This lowers the Attack, Sp. Atk, and Speed stats of a poisoned target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1280",
            "name"=>"tr92",
            "desc"=>"The user damages opposing Pokémon by emitting a powerful flash.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1278",
            "name"=>"tr90",
            "desc"=>"The user plays rough with the target and attacks it. This may also lower the target’s Attack stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1283",
            "name"=>"tr95",
            "desc"=>"The user attacks the target’s throat, and the resultant suffering prevents the target from using moves that emit sound for two turns.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1284",
            "name"=>"tr96",
            "desc"=>"The user attacks the enemy with a pollen puff that explodes. If the target is an ally, it gives the ally a pollen puff that restores its HP instead.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1282",
            "name"=>"tr94",
            "desc"=>"The user fiercely attacks the target using its entire body.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1281",
            "name"=>"tr93",
            "desc"=>"The user swings both arms and hits the target. The target’s stat changes don’t affect this attack’s damage.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1285",
            "name"=>"tr97",
            "desc"=>"The user bites the target with its psychic capabilities. This can also destroy Light Screen and Reflect.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1288",
            "name"=>"tm00",
            "desc"=>"The target is slugged by a punch thrown with muscle-packed power.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1290",
            "name"=>"adamant-mint",
            "desc"=>"When a Pokémon smells this mint, its Attack will grow more easily, but its Sp. Atk will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1286",
            "name"=>"tr98",
            "desc"=>"The user slams into the target using a full-force blast of water. This may also lower the target’s Defense stat.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1287",
            "name"=>"tr99",
            "desc"=>"The user attacks by slamming its body into the target. The higher the user’s Defense, the more damage it can inflict on the target.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1289",
            "name"=>"lonely-mint",
            "desc"=>"When a Pokémon smells this mint, its Attack will grow more easily, but its Defense will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1291",
            "name"=>"naughty-mint",
            "desc"=>"When a Pokémon smells this mint, its Attack will grow more easily, but its Sp. Def will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1292",
            "name"=>"brave-mint",
            "desc"=>"When a Pokémon smells this mint, its Attack will grow more easily, but its Speed will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1293",
            "name"=>"bold-mint",
            "desc"=>"When a Pokémon smells this mint, its Defense will grow more easily, but its Attack will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1294",
            "name"=>"impish-mint",
            "desc"=>"When a Pokémon smells this mint, its Defense will grow more easily, but its Sp. Atk will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1297",
            "name"=>"modest-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Atk will grow more easily, but its Attack will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1295",
            "name"=>"lax-mint",
            "desc"=>"When a Pokémon smells this mint, its Defense will grow more easily, but its Sp. Def will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1296",
            "name"=>"relaxed-mint",
            "desc"=>"When a Pokémon smells this mint, its Defense will grow more easily, but its Speed will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1298",
            "name"=>"mild-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Atk will grow more easily, but its Defense will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1299",
            "name"=>"rash-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Atk will grow more easily, but its Sp. Def will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1302",
            "name"=>"gentle-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Def will grow more easily, but its Defense will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1301",
            "name"=>"calm-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Def will grow more easily, but its Attack will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1300",
            "name"=>"quiet-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Atk will grow more easily, but its Speed will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1304",
            "name"=>"sassy-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Def will grow more easily, but its Speed will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1305",
            "name"=>"timid-mint",
            "desc"=>"When a Pokémon smells this mint, its Speed will grow more easily, but its Attack will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1303",
            "name"=>"careful-mint",
            "desc"=>"When a Pokémon smells this mint, its Sp. Def will grow more easily, but its Sp. Atk will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1306",
            "name"=>"hasty-mint",
            "desc"=>"When a Pokémon smells this mint, its Speed will grow more easily, but its Defense will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1307",
            "name"=>"jolly-mint",
            "desc"=>"When a Pokémon smells this mint, its Speed will grow more easily, but its Sp. Atk will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1308",
            "name"=>"naive-mint",
            "desc"=>"When a Pokémon smells this mint, its Speed will grow more easily, but its Sp. Def will grow more slowly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1309",
            "name"=>"serious-mint",
            "desc"=>"When a Pokémon smells this mint, all of its stats will grow at an equal rate.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1313",
            "name"=>"hi-tech-earbuds",
            "desc"=>"Strange earbuds that allow you to freely control the volume of various sounds.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1310",
            "name"=>"wishing-piece",
            "desc"=>"Throw one into a Pokémon Den to attract a wild Dynamax Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1311",
            "name"=>"cracked-pot",
            "desc"=>"A peculiar teapot that can make a certain species of Pokémon evolve. It may be cracked, but tea poured from it is delicious.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1314",
            "name"=>"fruit-bunch",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The syrupy fruits give off a strong tropical feel.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1312",
            "name"=>"chipped-pot",
            "desc"=>"A peculiar teapot that can make a certain species of Pokémon evolve. It may be chipped, but tea poured from it is delicious.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1317",
            "name"=>"fresh-cream",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Add some whipped cream to a spicy curry to give it some sweetness.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1319",
            "name"=>"coconut-milk",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. The refined sweetness of this coconut milk makes it quite popular.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1316",
            "name"=>"spice-mix",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. There are over fifty spices contained within this ingredient’s hot flavor.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1315",
            "name"=>"moomoo-cheese",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Melted cheese can really give a curry some richness.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1318",
            "name"=>"packaged-curry",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. Using packaged curry helps make sure there are no slipups when cooking.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1320",
            "name"=>"instant-noodles",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. It has a junk-food sort of taste, but it goes well with curry.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1321",
            "name"=>"precooked-burger",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. If you’re unsure about what to cook, you can’t go wrong with some burger.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1323",
            "name"=>"wishing-chip",
            "desc"=>"Toss a number of them into a Pokémon Den for the chance to attract a wild Dynamax Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1322",
            "name"=>"gigantamix",
            "desc"=>"One of the many ingredients that can be used for cooking at your camp. A mysterious spice. Even a tiny sprinkle is sure to make a curry gigantic.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1326",
            "name"=>"old-letter",
            "desc"=>"A letter entrusted to you by a girl, to be delivered to a boy. Strangely, it looks old to you.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1325",
            "name"=>"catching-charm",
            "desc"=>"Holding it is said to increase the chance of getting a critical catch. Curiously, the charm doesn’t shake much.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1329",
            "name"=>"rotom-catalog",
            "desc"=>"A catalog of devices that Rotom like. Use the catalog to have Rotom hop in and out of the various devices listed within.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1324",
            "name"=>"rotom-bike--water-mode",
            "desc"=>"This bike can be combined with the Pokémon Rotom to not only do a turbo boost but also run on the water.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1331",
            "name"=>"dynamax-crystal-and15",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1330",
            "name"=>"dynamax-crystal-and458",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1333",
            "name"=>"dynamax-crystal-and603",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1327",
            "name"=>"band-autograph",
            "desc"=>"It’s signed by all members of the Galar region’s most charismatic band, the Maximizers.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1328",
            "name"=>"sonias-book",
            "desc"=>"Professor Sonia’s published writings. Her new discoveries about the Galar region’s legends are recorded in this enjoyable read.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1332",
            "name"=>"dynamax-crystal-and337",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1334",
            "name"=>"dynamax-crystal-and390",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1335",
            "name"=>"dynamax-crystal-sgr6879",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1339",
            "name"=>"dynamax-crystal-sgr7121",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1337",
            "name"=>"dynamax-crystal-sgr6913",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1336",
            "name"=>"dynamax-crystal-sgr6859",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1338",
            "name"=>"dynamax-crystal-sgr7348",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1340",
            "name"=>"dynamax-crystal-sgr6746",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1345",
            "name"=>"dynamax-crystal-sgr7116",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1343",
            "name"=>"dynamax-crystal-sgr7343",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1344",
            "name"=>"dynamax-crystal-sgr6812",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1341",
            "name"=>"dynamax-crystal-sgr7194",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1347",
            "name"=>"dynamax-crystal-sgr7597",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1342",
            "name"=>"dynamax-crystal-sgr7337",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1346",
            "name"=>"dynamax-crystal-sgr7264",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1349",
            "name"=>"dynamax-crystal-del7906",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1350",
            "name"=>"dynamax-crystal-del7852",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1348",
            "name"=>"dynamax-crystal-del7882",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1352",
            "name"=>"dynamax-crystal-psc361",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1351",
            "name"=>"dynamax-crystal-psc596",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1353",
            "name"=>"dynamax-crystal-psc510",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1354",
            "name"=>"dynamax-crystal-psc437",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1356",
            "name"=>"dynamax-crystal-lep1865",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1355",
            "name"=>"dynamax-crystal-psc8773",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1357",
            "name"=>"dynamax-crystal-lep1829",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1358",
            "name"=>"dynamax-crystal-boo5340",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1361",
            "name"=>"dynamax-crystal-boo5602",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1359",
            "name"=>"dynamax-crystal-boo5506",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1362",
            "name"=>"dynamax-crystal-boo5733",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1363",
            "name"=>"dynamax-crystal-boo5235",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1364",
            "name"=>"dynamax-crystal-boo5351",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1360",
            "name"=>"dynamax-crystal-boo5435",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1366",
            "name"=>"dynamax-crystal-hya3903",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1365",
            "name"=>"dynamax-crystal-hya3748",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1368",
            "name"=>"dynamax-crystal-hya3482",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1367",
            "name"=>"dynamax-crystal-hya3418",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1371",
            "name"=>"dynamax-crystal-eri472",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1370",
            "name"=>"dynamax-crystal-eri1084",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1369",
            "name"=>"dynamax-crystal-hya3845",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1373",
            "name"=>"dynamax-crystal-eri897",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1374",
            "name"=>"dynamax-crystal-eri1231",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1372",
            "name"=>"dynamax-crystal-eri1666",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1375",
            "name"=>"dynamax-crystal-eri874",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1376",
            "name"=>"dynamax-crystal-eri1298",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1377",
            "name"=>"dynamax-crystal-eri1325",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1378",
            "name"=>"dynamax-crystal-eri984",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1379",
            "name"=>"dynamax-crystal-eri1464",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1380",
            "name"=>"dynamax-crystal-eri1393",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1381",
            "name"=>"dynamax-crystal-eri850",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1382",
            "name"=>"dynamax-crystal-tau1409",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1386",
            "name"=>"dynamax-crystal-tau1910",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1388",
            "name"=>"dynamax-crystal-tau1373",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1389",
            "name"=>"dynamax-crystal-tau1412",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1383",
            "name"=>"dynamax-crystal-tau1457",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1387",
            "name"=>"dynamax-crystal-tau1346",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1384",
            "name"=>"dynamax-crystal-tau1165",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1385",
            "name"=>"dynamax-crystal-tau1791",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1392",
            "name"=>"dynamax-crystal-cma2294",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1391",
            "name"=>"dynamax-crystal-cma2693",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1390",
            "name"=>"dynamax-crystal-cma2491",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1395",
            "name"=>"dynamax-crystal-cma2618",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1394",
            "name"=>"dynamax-crystal-cma2282",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1396",
            "name"=>"dynamax-crystal-cma2657",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1393",
            "name"=>"dynamax-crystal-cma2827",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1401",
            "name"=>"dynamax-crystal-uma5054",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1399",
            "name"=>"dynamax-crystal-uma4301",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1398",
            "name"=>"dynamax-crystal-uma4905",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1403",
            "name"=>"dynamax-crystal-uma4660",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1397",
            "name"=>"dynamax-crystal-cma2646",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1400",
            "name"=>"dynamax-crystal-uma5191",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1404",
            "name"=>"dynamax-crystal-uma4554",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1402",
            "name"=>"dynamax-crystal-uma4295",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1406",
            "name"=>"dynamax-crystal-uma3569",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1405",
            "name"=>"dynamax-crystal-uma4069",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1408",
            "name"=>"dynamax-crystal-uma4033",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1407",
            "name"=>"dynamax-crystal-uma3323",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1409",
            "name"=>"dynamax-crystal-uma4377",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1412",
            "name"=>"dynamax-crystal-uma3594",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1411",
            "name"=>"dynamax-crystal-uma4518",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1413",
            "name"=>"dynamax-crystal-vir5056",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1410",
            "name"=>"dynamax-crystal-uma4375",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1414",
            "name"=>"dynamax-crystal-vir4825",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1416",
            "name"=>"dynamax-crystal-vir4540",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1415",
            "name"=>"dynamax-crystal-vir4932",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1418",
            "name"=>"dynamax-crystal-vir5338",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1420",
            "name"=>"dynamax-crystal-vir5315",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1417",
            "name"=>"dynamax-crystal-vir4689",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1419",
            "name"=>"dynamax-crystal-vir4910",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1421",
            "name"=>"dynamax-crystal-vir5359",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1425",
            "name"=>"dynamax-crystal-ari553",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1426",
            "name"=>"dynamax-crystal-ari546",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1422",
            "name"=>"dynamax-crystal-vir5409",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1424",
            "name"=>"dynamax-crystal-ari617",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1428",
            "name"=>"dynamax-crystal-ori1713",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1427",
            "name"=>"dynamax-crystal-ari951",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1423",
            "name"=>"dynamax-crystal-vir5107",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1429",
            "name"=>"dynamax-crystal-ori2061",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1430",
            "name"=>"dynamax-crystal-ori1790",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1431",
            "name"=>"dynamax-crystal-ori1903",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1432",
            "name"=>"dynamax-crystal-ori1948",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1433",
            "name"=>"dynamax-crystal-ori2004",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1434",
            "name"=>"dynamax-crystal-ori1852",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1435",
            "name"=>"dynamax-crystal-ori1879",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1438",
            "name"=>"dynamax-crystal-cas21",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1440",
            "name"=>"dynamax-crystal-cas403",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1437",
            "name"=>"dynamax-crystal-ori1543",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1439",
            "name"=>"dynamax-crystal-cas168",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1436",
            "name"=>"dynamax-crystal-ori1899",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1441",
            "name"=>"dynamax-crystal-cas153",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1442",
            "name"=>"dynamax-crystal-cas542",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1444",
            "name"=>"dynamax-crystal-cas265",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1446",
            "name"=>"dynamax-crystal-cnc3208",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1443",
            "name"=>"dynamax-crystal-cas219",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1450",
            "name"=>"dynamax-crystal-cnc3627",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1449",
            "name"=>"dynamax-crystal-cnc3429",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1448",
            "name"=>"dynamax-crystal-cnc3449",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1447",
            "name"=>"dynamax-crystal-cnc3461",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1445",
            "name"=>"dynamax-crystal-cnc3572",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1452",
            "name"=>"dynamax-crystal-cnc3249",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1453",
            "name"=>"dynamax-crystal-com4968",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1451",
            "name"=>"dynamax-crystal-cnc3268",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1454",
            "name"=>"dynamax-crystal-crv4757",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1456",
            "name"=>"dynamax-crystal-crv4662",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1455",
            "name"=>"dynamax-crystal-crv4623",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1457",
            "name"=>"dynamax-crystal-crv4786",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1459",
            "name"=>"dynamax-crystal-aur2088",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1461",
            "name"=>"dynamax-crystal-aur2095",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1458",
            "name"=>"dynamax-crystal-aur1708",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1462",
            "name"=>"dynamax-crystal-aur1577",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1460",
            "name"=>"dynamax-crystal-aur1605",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1463",
            "name"=>"dynamax-crystal-aur1641",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1464",
            "name"=>"dynamax-crystal-aur1612",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1465",
            "name"=>"dynamax-crystal-pav7790",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1466",
            "name"=>"dynamax-crystal-cet911",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1467",
            "name"=>"dynamax-crystal-cet681",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1472",
            "name"=>"dynamax-crystal-cep8162",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1469",
            "name"=>"dynamax-crystal-cet539",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1468",
            "name"=>"dynamax-crystal-cet188",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1470",
            "name"=>"dynamax-crystal-cet804",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1471",
            "name"=>"dynamax-crystal-cep8974",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1475",
            "name"=>"dynamax-crystal-cen5267",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1473",
            "name"=>"dynamax-crystal-cep8238",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1474",
            "name"=>"dynamax-crystal-cep8417",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1476",
            "name"=>"dynamax-crystal-cen5288",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1477",
            "name"=>"dynamax-crystal-cen551",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1478",
            "name"=>"dynamax-crystal-cen5459",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1479",
            "name"=>"dynamax-crystal-cen5460",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1481",
            "name"=>"dynamax-crystal-cmi2845",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1480",
            "name"=>"dynamax-crystal-cmi2943",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1489",
            "name"=>"dynamax-crystal-lyr7001",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1487",
            "name"=>"dynamax-crystal-umi6789",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1486",
            "name"=>"dynamax-crystal-umi5735",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1484",
            "name"=>"dynamax-crystal-umi424",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1488",
            "name"=>"dynamax-crystal-crt4287",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1485",
            "name"=>"dynamax-crystal-umi5563",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1483",
            "name"=>"dynamax-crystal-vul7405",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1490",
            "name"=>"dynamax-crystal-lyr7178",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1491",
            "name"=>"dynamax-crystal-lyr7106",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1492",
            "name"=>"dynamax-crystal-lyr7298",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1493",
            "name"=>"dynamax-crystal-ara6585",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1482",
            "name"=>"dynamax-crystal-equ8131",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1499",
            "name"=>"dynamax-crystal-sco6508",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1498",
            "name"=>"dynamax-crystal-sco5984",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1501",
            "name"=>"dynamax-crystal-sco5944",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1494",
            "name"=>"dynamax-crystal-sco6134",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1496",
            "name"=>"dynamax-crystal-sco6553",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1497",
            "name"=>"dynamax-crystal-sco5953",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1500",
            "name"=>"dynamax-crystal-sco6084",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1495",
            "name"=>"dynamax-crystal-sco6527",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1503",
            "name"=>"dynamax-crystal-sco6027",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1502",
            "name"=>"dynamax-crystal-sco6630",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1504",
            "name"=>"dynamax-crystal-sco6247",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1505",
            "name"=>"dynamax-crystal-sco6252",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1507",
            "name"=>"dynamax-crystal-sco6241",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1508",
            "name"=>"dynamax-crystal-sco6165",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1509",
            "name"=>"dynamax-crystal-tri544",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1513",
            "name"=>"dynamax-crystal-leo4057",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1510",
            "name"=>"dynamax-crystal-leo3982",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1511",
            "name"=>"dynamax-crystal-leo4534",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1514",
            "name"=>"dynamax-crystal-leo4359",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1512",
            "name"=>"dynamax-crystal-leo4357",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1506",
            "name"=>"dynamax-crystal-sco5928",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1515",
            "name"=>"dynamax-crystal-leo4031",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1516",
            "name"=>"dynamax-crystal-leo3852",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1517",
            "name"=>"dynamax-crystal-leo3905",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1518",
            "name"=>"dynamax-crystal-leo3773",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1521",
            "name"=>"dynamax-crystal-gru8353",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1519",
            "name"=>"dynamax-crystal-gru8425",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1522",
            "name"=>"dynamax-crystal-lib5685",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1523",
            "name"=>"dynamax-crystal-lib5531",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1524",
            "name"=>"dynamax-crystal-lib5787",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1526",
            "name"=>"dynamax-crystal-pup3165",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1527",
            "name"=>"dynamax-crystal-pup3185",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1520",
            "name"=>"dynamax-crystal-gru8636",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1525",
            "name"=>"dynamax-crystal-lib5603",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1528",
            "name"=>"dynamax-crystal-pup3045",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1530",
            "name"=>"dynamax-crystal-cyg7417",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1529",
            "name"=>"dynamax-crystal-cyg7924",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1531",
            "name"=>"dynamax-crystal-cyg7796",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1532",
            "name"=>"dynamax-crystal-cyg8301",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1534",
            "name"=>"dynamax-crystal-cyg7528",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1535",
            "name"=>"dynamax-crystal-oct7228",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1536",
            "name"=>"dynamax-crystal-col1956",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1533",
            "name"=>"dynamax-crystal-cyg7949",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1538",
            "name"=>"dynamax-crystal-col2177",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1540",
            "name"=>"dynamax-crystal-gem2891",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1537",
            "name"=>"dynamax-crystal-col2040",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1539",
            "name"=>"dynamax-crystal-gem2990",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1542",
            "name"=>"dynamax-crystal-gem2473",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1543",
            "name"=>"dynamax-crystal-gem2216",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1541",
            "name"=>"dynamax-crystal-gem2421",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1545",
            "name"=>"dynamax-crystal-gem2650",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1544",
            "name"=>"dynamax-crystal-gem2777",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1548",
            "name"=>"dynamax-crystal-gem2930",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1547",
            "name"=>"dynamax-crystal-gem2484",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1546",
            "name"=>"dynamax-crystal-gem2286",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1552",
            "name"=>"dynamax-crystal-peg8308",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1549",
            "name"=>"dynamax-crystal-peg8775",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1550",
            "name"=>"dynamax-crystal-peg8781",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1551",
            "name"=>"dynamax-crystal-peg39",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1555",
            "name"=>"dynamax-crystal-peg8684",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1554",
            "name"=>"dynamax-crystal-peg8634",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1553",
            "name"=>"dynamax-crystal-peg8650",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1556",
            "name"=>"dynamax-crystal-peg8450",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1557",
            "name"=>"dynamax-crystal-peg8880",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1558",
            "name"=>"dynamax-crystal-peg8905",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1559",
            "name"=>"dynamax-crystal-oph6556",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1561",
            "name"=>"dynamax-crystal-oph6603",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1564",
            "name"=>"dynamax-crystal-oph6075",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1562",
            "name"=>"dynamax-crystal-oph6149",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1560",
            "name"=>"dynamax-crystal-oph6378",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1563",
            "name"=>"dynamax-crystal-oph6056",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1566",
            "name"=>"dynamax-crystal-ser7141",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1565",
            "name"=>"dynamax-crystal-ser5854",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1569",
            "name"=>"dynamax-crystal-her6148",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1568",
            "name"=>"dynamax-crystal-her6406",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1567",
            "name"=>"dynamax-crystal-ser5879",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1570",
            "name"=>"dynamax-crystal-her6410",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1571",
            "name"=>"dynamax-crystal-her6526",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1573",
            "name"=>"dynamax-crystal-her6008",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1574",
            "name"=>"dynamax-crystal-per936",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1575",
            "name"=>"dynamax-crystal-per1017",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1576",
            "name"=>"dynamax-crystal-per1131",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1572",
            "name"=>"dynamax-crystal-her6117",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1578",
            "name"=>"dynamax-crystal-per834",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1577",
            "name"=>"dynamax-crystal-per1228",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1580",
            "name"=>"dynamax-crystal-phe99",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1579",
            "name"=>"dynamax-crystal-per941",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1581",
            "name"=>"dynamax-crystal-phe338",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1582",
            "name"=>"dynamax-crystal-vel3634",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1583",
            "name"=>"dynamax-crystal-vel3485",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1585",
            "name"=>"dynamax-crystal-aqr8232",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1584",
            "name"=>"dynamax-crystal-vel3734",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1587",
            "name"=>"dynamax-crystal-aqr8709",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1586",
            "name"=>"dynamax-crystal-aqr8414",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1588",
            "name"=>"dynamax-crystal-aqr8518",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1589",
            "name"=>"dynamax-crystal-aqr7950",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1590",
            "name"=>"dynamax-crystal-aqr8499",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1591",
            "name"=>"dynamax-crystal-aqr8610",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1593",
            "name"=>"dynamax-crystal-cru4853",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1594",
            "name"=>"dynamax-crystal-cru4730",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1592",
            "name"=>"dynamax-crystal-aqr8264",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1596",
            "name"=>"dynamax-crystal-cru4700",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1595",
            "name"=>"dynamax-crystal-cru4763",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1601",
            "name"=>"dynamax-crystal-cap7754",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1599",
            "name"=>"dynamax-crystal-tra6217",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1597",
            "name"=>"dynamax-crystal-cru4656",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1602",
            "name"=>"dynamax-crystal-cap8278",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1598",
            "name"=>"dynamax-crystal-psa8728",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1600",
            "name"=>"dynamax-crystal-cap7776",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1605",
            "name"=>"dynamax-crystal-sge7479",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1604",
            "name"=>"dynamax-crystal-cap7773",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1603",
            "name"=>"dynamax-crystal-cap8322",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1606",
            "name"=>"dynamax-crystal-car2326",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1607",
            "name"=>"dynamax-crystal-car3685",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1610",
            "name"=>"dynamax-crystal-dra5744",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1609",
            "name"=>"dynamax-crystal-car3699",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1611",
            "name"=>"dynamax-crystal-dra5291",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1608",
            "name"=>"dynamax-crystal-car3307",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1612",
            "name"=>"dynamax-crystal-dra6705",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1614",
            "name"=>"dynamax-crystal-dra7310",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1613",
            "name"=>"dynamax-crystal-dra6536",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1615",
            "name"=>"dynamax-crystal-dra6688",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1616",
            "name"=>"dynamax-crystal-dra4434",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1617",
            "name"=>"dynamax-crystal-dra6370",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1619",
            "name"=>"dynamax-crystal-dra6396",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1618",
            "name"=>"dynamax-crystal-dra7462",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1623",
            "name"=>"dynamax-crystal-cvn4785",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1621",
            "name"=>"dynamax-crystal-dra6636",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1620",
            "name"=>"dynamax-crystal-dra6132",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1622",
            "name"=>"dynamax-crystal-cvn4915",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1626",
            "name"=>"dynamax-crystal-aql7557",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1627",
            "name"=>"dynamax-crystal-aql7525",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1628",
            "name"=>"dynamax-crystal-aql7602",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1624",
            "name"=>"dynamax-crystal-cvn4846",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1625",
            "name"=>"dynamax-crystal-aql7595",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1629",
            "name"=>"dynamax-crystal-aql7235",
            "desc"=>"An item that causes [VAR (0000)] to appear from the Watchtower Lair in the Wild Area until the end of the day.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1630",
            "name"=>"max-honey",
            "desc"=>"Honey that Dynamax Vespiquen produces. Adding this honey to Max Soup makes the taste very smooth. It also has the same effect as a Max Revive.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1634",
            "name"=>"style-card",
            "desc"=>"A card that increases the selection in boutiques and hair salons.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1635",
            "name"=>"armor-pass",
            "desc"=>"A pass to go to the Isle of Armor. Show it to the rail staff at Wedgehurst Station.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1631",
            "name"=>"max-mushrooms",
            "desc"=>"Mushrooms that have the power of changing Dynamax forms. They boost all stats of a Pokémon during battle.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1632",
            "name"=>"galarica-twig",
            "desc"=>"A twig from a species of tree called Galarica that grows in certain areas around the Galar region. It’s a material for an accessory for a certain Pokémon.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1633",
            "name"=>"galarica-cuff",
            "desc"=>"A cuff made from woven-together Galarica Twigs. Giving it to Galarian Slowpoke makes the Pokémon very happy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1636",
            "name"=>"rotom-bike--sparkling-white",
            "desc"=>"This bike can do a turbo boost and run on the water using Rotom’s power. It’s a sparkling white that shines brilliantly.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1637",
            "name"=>"rotom-bike--glistening-black",
            "desc"=>"This bike can do a turbo boost and run on the water using Rotom’s power. It’s a glistening black that shines reddish-black.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1638",
            "name"=>"exp-charm",
            "desc"=>"A charm that increases the Exp. Points that Pokémon can get. A machine-like object is inside the charm.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1639",
            "name"=>"armorite-ore",
            "desc"=>"Rare ore that can be obtained on the Isle of Armor. Something good will happen if you give it to a collector on the Isle of Armor.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1640",
            "name"=>"mark-charm",
            "desc"=>"A mysterious and unique charm that increases the chance of finding a Pokémon with a mark.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1641",
            "name"=>"reins-of-unity--merge",
            "desc"=>"Reins that people presented to the king. They enhance Calyrex’s power over bountiful harvests and unite Calyrex with its beloved steed.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1645",
            "name"=>"legendary-clue-2",
            "desc"=>"A clue about the legend of giants. It’s written by Peony and has unique drawings.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1646",
            "name"=>"legendary-clue-3",
            "desc"=>"A clue about the legend of bird Pokémon. It’s written by Peony and has a unique drawing.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1643",
            "name"=>"galarica-wreath",
            "desc"=>"A wreath made from woven-together Galarica Twigs. Placing it on the head of a Galarian Slowpoke makes the Pokémon very happy.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1644",
            "name"=>"legendary-clue-1",
            "desc"=>"A clue about the King of Bountiful Harvests. It’s written by Peony, and an old photo is attached to it.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1647",
            "name"=>"legendary-clue-question",
            "desc"=>"A mysterious clue that Peony seems to have dropped. There’s a photo attached to it showing a shining hole opening above the Max Lair.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1642",
            "name"=>"reins-of-unity--split",
            "desc"=>"Reins that people presented to the king. They enable those who are connected to communicate with each other. The reins separate Calyrex and its beloved steed.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1649",
            "name"=>"wooden-crown",
            "desc"=>"A mysterious object made of wood. Part of it seems to be chipped. Maybe it’s meant to be part of something.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1651",
            "name"=>"white-mane-hair",
            "desc"=>"Mane hair that belonged to the King of Bountiful Harvests’ beloved steed, Glastrier. The hair is strong and very flexible.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1652",
            "name"=>"black-mane-hair",
            "desc"=>"Mane hair that belonged to the King of Bountiful Harvests’ beloved steed, Spectrier. The hair is very smooth to the touch.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1650",
            "name"=>"radiant-petal",
            "desc"=>"A single petal that the King of Bountiful Harvests gave you. It radiates faint light.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1648",
            "name"=>"crown-pass",
            "desc"=>"A pass to go to the Crown Tundra. Show it to the rail staff at Wedgehurst Station.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1653",
            "name"=>"iceroot-carrot",
            "desc"=>"Produce that the King of Bountiful Harvests’ beloved steed likes to eat. It grew in a field covered in snow.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1654",
            "name"=>"shaderoot-carrot",
            "desc"=>"Produce that the King of Bountiful Harvests’ beloved steed likes to eat. It grew in a gloomy field.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1659",
            "name"=>"adamant-crystal",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1656",
            "name"=>"carrot-seeds",
            "desc"=>"Seeds to plant in a field. The kind of carrot you’ll get is determined by which field you plant the seeds in.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1657",
            "name"=>"ability-patch",
            "desc"=>"A patch that allows a Pokémon with a regular Ability to have a rare Ability.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1658",
            "name"=>"reins-of-unity",
            "desc"=>"Cords that shine when you hold them up to the light. The people of old times presented these to the King of Bountiful Harvests to express their gratitude.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1655",
            "name"=>"dynite-ore",
            "desc"=>"Mysterious ore that can be obtained in the Max Lair. Something good will happen if you give it to a collector in the Crown Tundra.",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1660",
            "name"=>"lustrous-globe",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1662",
            "name"=>"blank-plate",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1661",
            "name"=>"griseous-core",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1663",
            "name"=>"strange-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1665",
            "name"=>"rotom-phone",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1667",
            "name"=>"koraidon’s-poké-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1668",
            "name"=>"miraidon’s-poké-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1671",
            "name"=>"violet-book",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1666",
            "name"=>"sandwich",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1664",
            "name"=>"legend-plate",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1670",
            "name"=>"scarlet-book",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1669",
            "name"=>"tera-orb",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1673",
            "name"=>"tiny-bamboo-shoot",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1672",
            "name"=>"kofu’s-wallet",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1674",
            "name"=>"big-bamboo-shoot",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1675",
            "name"=>"scroll-of-darkness",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1679",
            "name"=>"fire-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1681",
            "name"=>"electric-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1678",
            "name"=>"normal-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1677",
            "name"=>"malicious-armor",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1680",
            "name"=>"water-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1682",
            "name"=>"grass-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1676",
            "name"=>"scroll-of-waters",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1683",
            "name"=>"ice-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1685",
            "name"=>"poison-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1687",
            "name"=>"flying-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1684",
            "name"=>"fighting-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1686",
            "name"=>"ground-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1690",
            "name"=>"rock-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1688",
            "name"=>"psychic-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1689",
            "name"=>"bug-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1693",
            "name"=>"dark-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1692",
            "name"=>"dragon-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1691",
            "name"=>"ghost-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1694",
            "name"=>"steel-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1695",
            "name"=>"fairy-tera-shard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1696",
            "name"=>"booster-energy",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1697",
            "name"=>"ability-shield",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1698",
            "name"=>"clear-amulet",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1699",
            "name"=>"mirror-herb",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1703",
            "name"=>"baguette",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1705",
            "name"=>"ketchup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1700",
            "name"=>"punching-glove",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1701",
            "name"=>"covert-cloak",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1702",
            "name"=>"loaded-dice",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1706",
            "name"=>"mustard",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1704",
            "name"=>"mayonnaise",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1709",
            "name"=>"chili-sauce",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1707",
            "name"=>"butter",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1710",
            "name"=>"salt",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1708",
            "name"=>"peanut-butter",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1711",
            "name"=>"pepper",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1717",
            "name"=>"olive-oil",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1719",
            "name"=>"sweet-herba-mystica",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1715",
            "name"=>"jam",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1713",
            "name"=>"whipped-cream",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1712",
            "name"=>"yogurt",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1716",
            "name"=>"marmalade",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1714",
            "name"=>"cream-cheese",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1718",
            "name"=>"vinegar",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1723",
            "name"=>"spicy-herba-mystica",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1722",
            "name"=>"bitter-herba-mystica",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1721",
            "name"=>"sour-herba-mystica",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1720",
            "name"=>"salty-herba-mystica",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1725",
            "name"=>"tomato",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1724",
            "name"=>"lettuce",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1729",
            "name"=>"onion",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1728",
            "name"=>"pickle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1726",
            "name"=>"cherry-tomatoes",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1730",
            "name"=>"red-onion",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1731",
            "name"=>"green-bell-pepper",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1727",
            "name"=>"cucumber",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1733",
            "name"=>"yellow-bell-pepper",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1734",
            "name"=>"avocado",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1735",
            "name"=>"bacon",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1732",
            "name"=>"red-bell-pepper",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1737",
            "name"=>"prosciutto",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1736",
            "name"=>"ham",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1740",
            "name"=>"hamburger",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1742",
            "name"=>"smoked-fillet",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1738",
            "name"=>"chorizo",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1739",
            "name"=>"herbed-sausage",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1743",
            "name"=>"fried-fillet",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1741",
            "name"=>"klawf-stick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1744",
            "name"=>"egg",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1746",
            "name"=>"tofu",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1747",
            "name"=>"rice",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1745",
            "name"=>"potato-tortilla",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1748",
            "name"=>"noodles",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1749",
            "name"=>"potato-salad",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1751",
            "name"=>"banana",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1753",
            "name"=>"apple",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1750",
            "name"=>"cheese",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1754",
            "name"=>"kiwi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1752",
            "name"=>"strawberry",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1755",
            "name"=>"pineapple",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1756",
            "name"=>"jalapeño",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1758",
            "name"=>"curry-powder",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1759",
            "name"=>"wasabi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1757",
            "name"=>"horseradish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1760",
            "name"=>"watercress",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1761",
            "name"=>"basil",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1762",
            "name"=>"venonat-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1764",
            "name"=>"meowth-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1763",
            "name"=>"diglett-dirt",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1765",
            "name"=>"psyduck-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1769",
            "name"=>"magnemite-screw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1770",
            "name"=>"grimer-toxin",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1771",
            "name"=>"shellder-pearl",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1767",
            "name"=>"growlithe-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1768",
            "name"=>"slowpoke-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1766",
            "name"=>"mankey-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1772",
            "name"=>"gastly-gas",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1773",
            "name"=>"drowzee-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1774",
            "name"=>"voltorb-sparks",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1776",
            "name"=>"tauros-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1777",
            "name"=>"magikarp-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1775",
            "name"=>"scyther-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1781",
            "name"=>"pichu-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1783",
            "name"=>"mareep-wool",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1780",
            "name"=>"dratini-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1778",
            "name"=>"ditto-goo",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1779",
            "name"=>"eevee-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1782",
            "name"=>"igglybuff-fluff",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1784",
            "name"=>"hoppip-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1785",
            "name"=>"sunkern-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1788",
            "name"=>"girafarig-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1787",
            "name"=>"misdreavus-tears",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1789",
            "name"=>"pineco-husk",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1786",
            "name"=>"murkrow-bauble",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1790",
            "name"=>"dunsparce-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1795",
            "name"=>"delibird-parcel",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1792",
            "name"=>"heracross-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1791",
            "name"=>"qwilfish-spines",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1793",
            "name"=>"sneasel-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1794",
            "name"=>"teddiursa-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1796",
            "name"=>"houndour-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1797",
            "name"=>"phanpy-nail",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1801",
            "name"=>"ralts-dust",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1799",
            "name"=>"larvitar-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1798",
            "name"=>"stantler-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1800",
            "name"=>"wingull-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1807",
            "name"=>"sableye-gem",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1806",
            "name"=>"azurill-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1802",
            "name"=>"surskit-syrup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1803",
            "name"=>"shroomish-spores",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1804",
            "name"=>"slakoth-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1808",
            "name"=>"meditite-sweat",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1805",
            "name"=>"makuhita-sweat",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1809",
            "name"=>"gulpin-mucus",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1812",
            "name"=>"spoink-pearl",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1811",
            "name"=>"torkoal-coal",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1814",
            "name"=>"swablu-fluff",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1810",
            "name"=>"numel-lava",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1815",
            "name"=>"zangoose-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1813",
            "name"=>"cacnea-needle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1816",
            "name"=>"seviper-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1817",
            "name"=>"barboach-slime",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1819",
            "name"=>"tropius-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1820",
            "name"=>"snorunt-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1821",
            "name"=>"luvdisc-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1818",
            "name"=>"shuppet-scrap",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1822",
            "name"=>"bagon-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1823",
            "name"=>"starly-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1826",
            "name"=>"combee-honey",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1827",
            "name"=>"pachirisu-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1825",
            "name"=>"shinx-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1824",
            "name"=>"kricketot-shell",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1830",
            "name"=>"drifloon-gas",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1828",
            "name"=>"buizel-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1831",
            "name"=>"stunky-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1832",
            "name"=>"bronzor-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1829",
            "name"=>"shellos-mucus",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1833",
            "name"=>"bonsly-tears",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1834",
            "name"=>"happiny-dust",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1835",
            "name"=>"spiritomb-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1837",
            "name"=>"riolu-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1839",
            "name"=>"croagunk-poison",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1836",
            "name"=>"gible-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1838",
            "name"=>"hippopotas-sand",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1842",
            "name"=>"rotom-sparks",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1841",
            "name"=>"snover-berries",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1840",
            "name"=>"finneon-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1843",
            "name"=>"petilil-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1844",
            "name"=>"basculin-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1846",
            "name"=>"zorua-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1845",
            "name"=>"sandile-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1848",
            "name"=>"deerling-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1847",
            "name"=>"gothita-eyelash",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1850",
            "name"=>"alomomola-mucus",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1849",
            "name"=>"foongus-spores",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1853",
            "name"=>"cubchoo-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1854",
            "name"=>"cryogonal-ice",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1852",
            "name"=>"axew-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1851",
            "name"=>"tynamo-slime",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1855",
            "name"=>"pawniard-blade",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1856",
            "name"=>"rufflet-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1857",
            "name"=>"deino-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1859",
            "name"=>"fletchling-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1858",
            "name"=>"larvesta-fuzz",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1861",
            "name"=>"litleo-tuft",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1860",
            "name"=>"scatterbug-powder",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1864",
            "name"=>"skrelp-kelp",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1867",
            "name"=>"dedenne-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1866",
            "name"=>"hawlucha-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1862",
            "name"=>"flabébé-pollen",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1865",
            "name"=>"clauncher-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1863",
            "name"=>"skiddo-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1868",
            "name"=>"goomy-goo",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1870",
            "name"=>"bergmite-ice",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1869",
            "name"=>"klefki-key",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1871",
            "name"=>"noibat-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1873",
            "name"=>"crabrawler-shell",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1874",
            "name"=>"oricorio-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1872",
            "name"=>"yungoos-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1875",
            "name"=>"rockruff-rock",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1876",
            "name"=>"mareanie-spike",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1881",
            "name"=>"oranguru-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1878",
            "name"=>"fomantis-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1880",
            "name"=>"bounsweet-sweat",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1877",
            "name"=>"mudbray-mud",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1879",
            "name"=>"salandit-gas",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1882",
            "name"=>"passimian-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1884",
            "name"=>"komala-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1883",
            "name"=>"sandygast-sand",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1885",
            "name"=>"mimikyu-scrap",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1886",
            "name"=>"bruxish-tooth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1887",
            "name"=>"chewtle-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1890",
            "name"=>"rookidee-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1888",
            "name"=>"skwovet-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1892",
            "name"=>"falinks-sweat",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1889",
            "name"=>"arrokuda-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1894",
            "name"=>"rolycoly-coal",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1891",
            "name"=>"toxel-sparks",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1893",
            "name"=>"cufant-tarnish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1895",
            "name"=>"silicobra-sand",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1898",
            "name"=>"snom-thread",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1896",
            "name"=>"indeedee-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1899",
            "name"=>"impidimp-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1897",
            "name"=>"pincurchin-spines",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1900",
            "name"=>"applin-juice",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1903",
            "name"=>"stonjourner-stone",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1902",
            "name"=>"hatenna-dust",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1904",
            "name"=>"eiscue-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1901",
            "name"=>"sinistea-chip",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1905",
            "name"=>"dreepy-powder",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1907",
            "name"=>"tarountula-thread",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1906",
            "name"=>"lechonk-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1908",
            "name"=>"nymble-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1909",
            "name"=>"rellor-mud",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1911",
            "name"=>"flittle-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1910",
            "name"=>"greavard-wax",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1916",
            "name"=>"smoliv-oil",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1912",
            "name"=>"wiglett-sand",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1915",
            "name"=>"finizen-mucus",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1914",
            "name"=>"veluza-fillet",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1917",
            "name"=>"capsakid-seed",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1913",
            "name"=>"dondozo-whisker",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1918",
            "name"=>"tadbulb-mucus",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1919",
            "name"=>"varoom-fume",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1920",
            "name"=>"orthworm-tarnish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1921",
            "name"=>"tandemaus-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1922",
            "name"=>"cetoddle-grease",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1923",
            "name"=>"frigibax-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1928",
            "name"=>"bombirdier-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1927",
            "name"=>"wattrel-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1926",
            "name"=>"pawmi-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1929",
            "name"=>"squawkabilly-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1924",
            "name"=>"tatsugiri-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1925",
            "name"=>"cyclizar-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1932",
            "name"=>"nacli-salt",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1931",
            "name"=>"klawf-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1930",
            "name"=>"flamigo-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1933",
            "name"=>"glimmet-crystal",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1934",
            "name"=>"shroodle-ink",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1936",
            "name"=>"maschiff-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1939",
            "name"=>"tinkatink-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1935",
            "name"=>"fidough-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1940",
            "name"=>"charcadet-soot",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1937",
            "name"=>"bramblin-twig",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1938",
            "name"=>"gimmighoul-coin",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1941",
            "name"=>"toedscool-flaps",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1944",
            "name"=>"tm101",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1942",
            "name"=>"wooper-slime",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"1943",
            "name"=>"tm100",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1945",
            "name"=>"tm102",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1946",
            "name"=>"tm103",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1948",
            "name"=>"tm105",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1947",
            "name"=>"tm104",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1949",
            "name"=>"tm106",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1951",
            "name"=>"tm108",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1950",
            "name"=>"tm107",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1953",
            "name"=>"tm110",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1952",
            "name"=>"tm109",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1954",
            "name"=>"tm111",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1955",
            "name"=>"tm112",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1956",
            "name"=>"tm113",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1957",
            "name"=>"tm114",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1961",
            "name"=>"tm118",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1960",
            "name"=>"tm117",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1958",
            "name"=>"tm115",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1962",
            "name"=>"tm119",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1964",
            "name"=>"tm121",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1963",
            "name"=>"tm120",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1965",
            "name"=>"tm122",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1959",
            "name"=>"tm116",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1967",
            "name"=>"tm124",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1966",
            "name"=>"tm123",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1968",
            "name"=>"tm125",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1969",
            "name"=>"tm126",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1971",
            "name"=>"tm128",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1972",
            "name"=>"tm129",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1973",
            "name"=>"tm130",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1974",
            "name"=>"tm131",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1977",
            "name"=>"tm134",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1976",
            "name"=>"tm133",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1975",
            "name"=>"tm132",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1970",
            "name"=>"tm127",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1979",
            "name"=>"tm136",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1978",
            "name"=>"tm135",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1981",
            "name"=>"tm138",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1980",
            "name"=>"tm137",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1982",
            "name"=>"tm139",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1984",
            "name"=>"tm141",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1986",
            "name"=>"tm143",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1983",
            "name"=>"tm140",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1987",
            "name"=>"tm144",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1985",
            "name"=>"tm142",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1988",
            "name"=>"tm145",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1989",
            "name"=>"tm146",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1990",
            "name"=>"tm147",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1991",
            "name"=>"tm148",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1993",
            "name"=>"tm150",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1992",
            "name"=>"tm149",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1994",
            "name"=>"tm151",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1996",
            "name"=>"tm153",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1995",
            "name"=>"tm152",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1997",
            "name"=>"tm154",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2000",
            "name"=>"tm157",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1998",
            "name"=>"tm155",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"1999",
            "name"=>"tm156",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2001",
            "name"=>"tm158",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2002",
            "name"=>"tm159",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2004",
            "name"=>"tm161",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2003",
            "name"=>"tm160",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2006",
            "name"=>"tm163",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2005",
            "name"=>"tm162",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2007",
            "name"=>"tm164",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2011",
            "name"=>"tm168",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2009",
            "name"=>"tm166",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2010",
            "name"=>"tm167",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2008",
            "name"=>"tm165",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2012",
            "name"=>"tm169",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2013",
            "name"=>"tm170",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2015",
            "name"=>"picnic-set",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2014",
            "name"=>"tm171",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2016",
            "name"=>"academy-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2017",
            "name"=>"academy-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2018",
            "name"=>"polka-dot-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2022",
            "name"=>"academy-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2021",
            "name"=>"academy-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2023",
            "name"=>"striped-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2024",
            "name"=>"polka-dot-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2020",
            "name"=>"diamond-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2025",
            "name"=>"flower-pattern-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2019",
            "name"=>"striped-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2026",
            "name"=>"academy-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2027",
            "name"=>"academy-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2028",
            "name"=>"whimsical-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2030",
            "name"=>"spooky-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2029",
            "name"=>"leafy-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2035",
            "name"=>"cyber-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2036",
            "name"=>"gold-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2037",
            "name"=>"silver-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2031",
            "name"=>"academy-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2032",
            "name"=>"academy-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2034",
            "name"=>"yarn-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2033",
            "name"=>"marill-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2039",
            "name"=>"blue-flag-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2038",
            "name"=>"red-flag-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2040",
            "name"=>"pika-pika-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2049",
            "name"=>"yellow-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2043",
            "name"=>"smiling-vee-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2046",
            "name"=>"leader’s-crest",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2048",
            "name"=>"blue-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2044",
            "name"=>"blue-poké-ball-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2047",
            "name"=>"pink-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2042",
            "name"=>"vee-vee-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2045",
            "name"=>"auspicious-armor",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2041",
            "name"=>"winking-pika-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2050",
            "name"=>"steel-bottle-(r)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2051",
            "name"=>"steel-bottle-(y)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2052",
            "name"=>"steel-bottle-(b)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2053",
            "name"=>"silver-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2054",
            "name"=>"barred-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2057",
            "name"=>"pink-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2059",
            "name"=>"yellow-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2056",
            "name"=>"fire-pattern-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2058",
            "name"=>"blue-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2055",
            "name"=>"diamond-pattern-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2061",
            "name"=>"eevee-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2062",
            "name"=>"slowpoke-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2063",
            "name"=>"silver-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2060",
            "name"=>"pikachu-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2064",
            "name"=>"exercise-ball",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2069",
            "name"=>"battle-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2071",
            "name"=>"striped-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2065",
            "name"=>"plaid-tablecloth-(y)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2066",
            "name"=>"plaid-tablecloth-(b)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2068",
            "name"=>"b&w-grass-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2070",
            "name"=>"monstrous-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2074",
            "name"=>"lilac-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2073",
            "name"=>"polka-dot-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2075",
            "name"=>"mint-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2072",
            "name"=>"diamond-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2067",
            "name"=>"plaid-tablecloth-(r)",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2076",
            "name"=>"peach-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2082",
            "name"=>"gold-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2077",
            "name"=>"yellow-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2078",
            "name"=>"blue-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2084",
            "name"=>"green-poké-ball-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2081",
            "name"=>"bronze-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2080",
            "name"=>"gold-bottle",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2083",
            "name"=>"bronze-cup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2087",
            "name"=>"heroic-sword-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2079",
            "name"=>"pink-tablecloth",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2085",
            "name"=>"red-poké-ball-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2086",
            "name"=>"party-sparkler-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2088",
            "name"=>"magical-star-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2090",
            "name"=>"parasol-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2092",
            "name"=>"sunset-flower-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2089",
            "name"=>"magical-heart-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2091",
            "name"=>"blue-sky-flower-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2093",
            "name"=>"sunrise-flower-pick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2094",
            "name"=>"blue-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2095",
            "name"=>"green-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2098",
            "name"=>"white-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2097",
            "name"=>"red-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2096",
            "name"=>"orange-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2099",
            "name"=>"yellow-dish",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2100",
            "name"=>"roto-stick",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2103",
            "name"=>"glimmering-charm",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2102",
            "name"=>"teal-mask",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2101",
            "name"=>"teal-style-card",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2106",
            "name"=>"wellspring-mask",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2104",
            "name"=>"cyrstal-cluster",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2107",
            "name"=>"hearthflame-mask",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2110",
            "name"=>"unremarkable-teacup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2105",
            "name"=>"fairy-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2108",
            "name"=>"cornerstone-mask",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2109",
            "name"=>"syrupy-apple",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2111",
            "name"=>"masterpiece-teacup",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2112",
            "name"=>"health-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2115",
            "name"=>"genius-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2114",
            "name"=>"resist-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2116",
            "name"=>"clever-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2113",
            "name"=>"muscle-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2118",
            "name"=>"fresh-start-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2117",
            "name"=>"swift-mochi",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2119",
            "name"=>"ekans-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2121",
            "name"=>"cleffa-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2122",
            "name"=>"vulpix-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2120",
            "name"=>"sandshrew-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2123",
            "name"=>"poliwag-slime",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2124",
            "name"=>"bellsprout-vine",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2126",
            "name"=>"koffing-gas",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2127",
            "name"=>"munchlax-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2125",
            "name"=>"geodude-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2128",
            "name"=>"sentret-fur",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2130",
            "name"=>"spinarak-thread",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2131",
            "name"=>"aipom-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2132",
            "name"=>"yanma-spike",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2129",
            "name"=>"hoothoot-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2133",
            "name"=>"gligar-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2134",
            "name"=>"slugma-lava",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2135",
            "name"=>"swinub-hair",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2136",
            "name"=>"poochyena-fang",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2139",
            "name"=>"nosepass-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2138",
            "name"=>"seedot-stem",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2137",
            "name"=>"lotad-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2142",
            "name"=>"corphish-shell",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2140",
            "name"=>"volbeat-fluid",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2145",
            "name"=>"chingling-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2144",
            "name"=>"duskull-fragment",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2143",
            "name"=>"feebas-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2141",
            "name"=>"illumise-fluid",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2146",
            "name"=>"timburr-sweat",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2147",
            "name"=>"sewaddle-leaf",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2148",
            "name"=>"ducklett-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2154",
            "name"=>"grubbin-thread",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2149",
            "name"=>"litwick-soot",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2150",
            "name"=>"mienfoo-claw",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2155",
            "name"=>"cutiefly-powder",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2153",
            "name"=>"phantump-twig",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2152",
            "name"=>"carbink-jewel",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2157",
            "name"=>"cramorant-down",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2151",
            "name"=>"vullaby-feather",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2156",
            "name"=>"jangmo-o-scales",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2158",
            "name"=>"morpeko-snack",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2160",
            "name"=>"linking-cord",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2159",
            "name"=>"poltchageist-powder",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2161",
            "name"=>"tm172",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2168",
            "name"=>"tm179",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2162",
            "name"=>"tm173",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2167",
            "name"=>"tm178",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2165",
            "name"=>"tm176",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2166",
            "name"=>"tm177",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2164",
            "name"=>"tm175",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2169",
            "name"=>"tm180",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2163",
            "name"=>"tm174",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2170",
            "name"=>"tm181",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2172",
            "name"=>"tm183",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2173",
            "name"=>"tm184",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2180",
            "name"=>"tm191",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2175",
            "name"=>"tm186",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2174",
            "name"=>"tm185",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2176",
            "name"=>"tm187",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2179",
            "name"=>"tm190",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2178",
            "name"=>"tm189",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2181",
            "name"=>"tm192",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2177",
            "name"=>"tm188",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2171",
            "name"=>"tm182",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2182",
            "name"=>"tm193",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2184",
            "name"=>"tm195",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2183",
            "name"=>"tm194",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2191",
            "name"=>"tm202",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2192",
            "name"=>"tm203",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2193",
            "name"=>"tm204",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2185",
            "name"=>"tm196",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2187",
            "name"=>"tm198",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2190",
            "name"=>"tm201",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2189",
            "name"=>"tm200",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2188",
            "name"=>"tm199",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2186",
            "name"=>"tm197",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2194",
            "name"=>"tm205",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2196",
            "name"=>"tm207",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2195",
            "name"=>"tm206",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2205",
            "name"=>"tm216",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2197",
            "name"=>"tm208",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2200",
            "name"=>"tm211",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2198",
            "name"=>"tm209",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2202",
            "name"=>"tm213",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2199",
            "name"=>"tm210",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2204",
            "name"=>"tm215",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2201",
            "name"=>"tm212",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2203",
            "name"=>"tm214",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2206",
            "name"=>"tm217",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2207",
            "name"=>"tm218",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2208",
            "name"=>"tm219",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2209",
            "name"=>"tm220",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2210",
            "name"=>"tm221",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2212",
            "name"=>"tm223",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2211",
            "name"=>"tm222",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2213",
            "name"=>"tm224",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2216",
            "name"=>"tm227",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2215",
            "name"=>"tm226",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2218",
            "name"=>"tm229",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2214",
            "name"=>"tm225",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2217",
            "name"=>"tm228",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/tm-normal.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2220",
            "name"=>"lapoke-ball",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lapoke-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2221",
            "name"=>"lagreat-ball",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lagreat-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2219",
            "name"=>"lastrange-ball",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lastrange-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2223",
            "name"=>"laheavy-ball",
            "desc"=>"Doesn't fly far, but is more effective if the Pokémon hasn't noticed the player.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/laheavy-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2222",
            "name"=>"laultra-ball",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/laultra-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2229",
            "name"=>"laorigin-ball",
            "desc"=>"null",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/laorigin-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2225",
            "name"=>"lagigaton-ball",
            "desc"=>"Upgraded version of the Leaden Ball. Doesn't fly far, but is more effective if the Pokémon hasn't noticed the player.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lagigaton-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2226",
            "name"=>"lafeather-ball",
            "desc"=>"Can be thrown further than a regular Poké Ball. Is more effective for catching Pokémon that fly high in the air.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lafeather-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2227",
            "name"=>"lawing-ball",
            "desc"=>"Can be thrown further than a Feather Ball. Is more effective for catching Pokémon that fly high in the air.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lawing-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"2224",
            "name"=>"laleaden-ball",
            "desc"=>"Upgraded version of the Heavy Ball. Doesn't fly far, but is more effective if the Pokémon hasn't noticed the player.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/laleaden-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"10001",
            "name"=>"black-augurite",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
        DB::table("Items")->insert([
            "id"=>"2228",
            "name"=>"lajet-ball",
            "desc"=>"Can be thrown further than a Wing Ball. Is more effective for catching Pokémon that fly high in the air.",
            "sprite"=>"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/lajet-ball.png",
        ]);
        DB::table("Items")->insert([
            "id"=>"10002",
            "name"=>"peat-block",
            "desc"=>"null",
            "sprite"=>"None",
        ]);
          
    }
}
