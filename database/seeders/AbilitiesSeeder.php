<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Abilities")->insert([
            "id"=>"1",
            "Name"=>"stench",
            "Desc"=>"This Pokémon's damaging moves have a 10% chance to make the target flinch with each hit if they do not already cause flinching as a secondary effect.  This ability does not stack with a held item.  Overworld: The wild encounter rate is halved while this Pokémon is first in the party.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"2",
            "Name"=>"drizzle",
            "Desc"=>"The weather changes to rain when this Pokémon enters battle and does not end unless replaced by another weather condition.  If multiple Pokémon with this ability, drought, sand stream, or snow warning are sent out at the same time, the abilities will activate in order of Speed, respecting trick room.  Each ability's weather will cancel the previous weather, and only the weather summoned by the slowest of the Pokémon will stay.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"3",
            "Name"=>"speed-boost",
            "Desc"=>"This Pokémon's Speed rises one stage after each turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"4",
            "Name"=>"battle-armor",
            "Desc"=>"Moves cannot score critical hits against this Pokémon.  This ability functions identically to shell armor.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"5",
            "Name"=>"sturdy",
            "Desc"=>"When this Pokémon is at full HP, any hit that would knock it out will instead leave it with 1 HP.  Regardless of its current HP, it is also immune to the one-hit KO moves: fissure, guillotine, horn drill, and sheer cold.  If this Pokémon is holding a focus sash, this ability takes precedence and the item will not be consumed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"6",
            "Name"=>"damp",
            "Desc"=>"While this Pokémon is in battle, self destruct and explosion will fail and aftermath will not take effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"7",
            "Name"=>"limber",
            "Desc"=>"This Pokémon cannot be paralyzed.  If a Pokémon is paralyzed and acquires this ability, its paralysis is healed; this includes when regaining a lost ability upon leaving battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"8",
            "Name"=>"sand-veil",
            "Desc"=>"During a sandstorm, this Pokémon has 1.25× its evasion, and it does not take sandstorm damage regardless of type.  The evasion bonus does not count as a stat modifier.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is halved in a sandstorm.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"9",
            "Name"=>"static",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user has a 30% chance of being paralyzed.  Pokémon that are immune to electric-type moves can still be paralyzed by this ability.  Overworld: If the lead Pokémon has this ability, there is a 50% chance that encounters will be with an electric Pokémon, if applicable.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10",
            "Name"=>"volt-absorb",
            "Desc"=>"Whenever an electric-type move hits this Pokémon, it heals for 1/4 of its maximum HP, negating any other effect on it.  This ability will not take effect if this Pokémon is ground-type and thus immune to Electric moves.  Electric moves will ignore this Pokémon's substitute.  This effect includes non-damaging moves, i.e. thunder wave.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"11",
            "Name"=>"water-absorb",
            "Desc"=>"Whenever a water-type move hits this Pokémon, it heals for 1/4 of its maximum HP, negating any other effect on it.  Water moves will ignore this Pokémon's substitute.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"12",
            "Name"=>"oblivious",
            "Desc"=>"This Pokémon cannot be infatuated and is immune to captivate.  If a Pokémon is infatuated and acquires this ability, its infatuation is cleared.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"13",
            "Name"=>"cloud-nine",
            "Desc"=>"While this Pokémon is in battle, weather can still be in play, but will not have any of its effects.  This ability functions identically to air lock.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"14",
            "Name"=>"compound-eyes",
            "Desc"=>"This Pokémon's moves have 1.3× their accuracy.  This ability has no effect on the one-hit KO moves (fissure, guillotine, horn drill, and sheer cold).  Overworld: If the first Pokémon in the party has this ability, the chance of a wild Pokémon holding a particular item is raised from 50%, 5%, or 1% to 60%, 20%, or 5%, respectively.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"15",
            "Name"=>"insomnia",
            "Desc"=>"This Pokémon cannot be asleep.  This causes rest to fail altogether.  If a Pokémon is asleep and acquires this ability, it will immediately wake up; this includes when regaining a lost ability upon leaving battle.  This ability functions identically to vital spirit in battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"16",
            "Name"=>"color-change",
            "Desc"=>"Whenever this Pokémon takes damage from a move, the Pokémon's type changes to match the move.  If the Pokémon has two types, both are overridden.  The Pokémon must directly take damage; for example, moves blocked by a substitute will not trigger this ability, nor will moves that deal damage indirectly, such as spikes.  This ability takes effect on only the last hit of a multiple-hit attack.  In Pokémon Colosseum and XD: Gale of Darkness, this ability does not take effect on Shadow-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"17",
            "Name"=>"immunity",
            "Desc"=>"This Pokémon cannot be poisoned.  This includes bad poison.  If a Pokémon is poisoned and acquires this ability, its poison is healed; this includes when regaining a lost ability upon leaving battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"18",
            "Name"=>"flash-fire",
            "Desc"=>"This Pokémon is immune to fire-type moves.  Once this Pokémon has been hit by a Fire move, its own Fire moves will inflict 1.5× as much damage until it leaves battle.  This ability has no effect while the Pokémon is frozen.  The Fire damage bonus is retained even if the Pokémon is frozen and thawed or the ability is lost or disabled.  Fire moves will ignore this Pokémon's substitute.  This ability takes effect even on non-damaging moves, i.e. will o wisp.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"19",
            "Name"=>"shield-dust",
            "Desc"=>"This Pokémon is immune to the extra effects of moves used against it.  An extra effect is a move's chance, listed as an effect chance, to inflict a status ailment, cause a stat change, or make the target flinch in addition to the move's main effect.  For example, thunder shock's paralysis is an extra effect, but thunder wave's is not, nor are knock off's item removal and air cutter's increased critical hit rate.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"20",
            "Name"=>"own-tempo",
            "Desc"=>"This Pokémon cannot be confused.  If a Pokémon is confused and acquires this ability, its confusion will immediately be healed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"21",
            "Name"=>"suction-cups",
            "Desc"=>"This Pokémon cannot be forced out of battle by moves such as whirlwind.  dragon tail and circle throw still inflict damage against this Pokémon.  Overworld: If the lead Pokémon has this ability, the success rate while fishing is increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"22",
            "Name"=>"intimidate",
            "Desc"=>"When this Pokémon enters battle, the opponent's Attack is lowered by one stage.  In a double battle, both opponents are affected.  This ability also takes effect when acquired during a battle, but will not take effect again if lost and reobtained without leaving battle.  This ability has no effect on an opponent that has a substitute.  Overworld: If the first Pokémon in the party has this ability, any random encounter with a Pokémon five or more levels lower than it has a 50% chance of being skipped.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"23",
            "Name"=>"shadow-tag",
            "Desc"=>"While this Pokémon is in battle, opposing Pokémon cannot flee or switch out.  Other Pokémon with this ability are unaffected.  Pokémon with run away can still flee.  Pokémon can still switch out with the use of a move or item.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"24",
            "Name"=>"rough-skin",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user takes 1/8 of its maximum HP in damage.  This ability functions identically to iron barbs.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"25",
            "Name"=>"wonder-guard",
            "Desc"=>"This Pokémon is immune to damaging moves that are not super effective against it.  Moves that inflict fixed damage, such as night shade or seismic toss, are considered super effective if their types are.  Damage not directly dealt by moves, such as damage from weather, a status ailment, or spikes, is not prevented.  This ability cannot be copied with role play or traded away with skill swap, but it can be copied with trace, disabled with gastro acid, or changed with worry seed.  This Pokémon can still use Role Play itself to lose this ability, but not Skill Swap.  If this Pokémon has a substitute, this ability will block moves as usual and any moves not blocked will react to the Substitute as usual.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"26",
            "Name"=>"levitate",
            "Desc"=>"This Pokémon is immune to ground-type moves, spikes, toxic spikes, and arena trap.  This ability is disabled during gravity or ingrain, or while holding an iron ball.  This ability is not disabled during roost.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"27",
            "Name"=>"effect-spore",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user has a 30% chance of being paralyzed, poisoned, or put to sleep, chosen at random.  Nothing is done to compensate if the move's user is immune to one of these ailments; there is simply a lower chance that the move's user will be affected.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"28",
            "Name"=>"synchronize",
            "Desc"=>"Whenever this Pokémon is burned, paralyzed, or poisoned, the Pokémon who gave this Pokémon that ailment is also given the ailment.  This ability passes back bad poison when this Pokémon is badly poisoned.  This ability cannot pass on a status ailment that the Pokémon did not directly receive from another Pokémon, such as the poison from toxic spikes or the burn from a flame orb.  Overworld: If the lead Pokémon has this ability, wild Pokémon have a 50% chance of having the lead Pokémon's nature, and a 50% chance of being given a random nature as usual, including the lead Pokémon's nature.  This does not work on Pokémon received outside of battle or roaming legendaries.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"29",
            "Name"=>"clear-body",
            "Desc"=>"This Pokémon cannot have its stats lowered by other Pokémon.  This ability does not prevent any stat losses other than stat modifiers, such as the Speed cut from paralysis.  This Pokémon can still be passed negative stat modifiers through guard swap, heart swap, or power swap.  This ability functions identically to white smoke in battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"30",
            "Name"=>"natural-cure",
            "Desc"=>"This Pokémon is cured of any major status ailment when it is switched out for another Pokémon.  If this ability is acquired during battle, the Pokémon is cured upon leaving battle before losing the temporary ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"31",
            "Name"=>"lightning-rod",
            "Desc"=>"All other Pokémon's single-target electric-type moves are redirected to this Pokémon if it is an eligible target.  Other Pokémon's Electric moves raise this Pokémon's Special Attack one stage, negating any other effect on it, and cannot miss it.  If the move's intended target also has this ability, the move is not redirected.  When multiple Pokémon with this ability are possible targets for redirection, the move is redirected to the one with the highest Speed stat, or, in the case of a tie, to a random tied Pokémon.  follow me takes precedence over this ability.  If the Pokémon is a ground-type and thus immune to Electric moves, its immunity prevents the Special Attack boost.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"32",
            "Name"=>"serene-grace",
            "Desc"=>"This Pokémon's moves have twice their usual effect chance.  An effect chance is a move's chance to inflict a status ailment, cause a stat change, or make the target flinch in addition to the move's main effect.  For example, flamethrower's chance of burning the target is doubled, but protect's chance of success and air cutter's increased critical hit rate are unaffected.  secret power is unaffected.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"33",
            "Name"=>"swift-swim",
            "Desc"=>"This Pokémon's Speed is doubled during rain.  This bonus does not count as a stat modifier.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"34",
            "Name"=>"chlorophyll",
            "Desc"=>"This Pokémon's Speed is doubled during strong sunlight.  This bonus does not count as a stat modifier.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"35",
            "Name"=>"illuminate",
            "Desc"=>"Overworld: If the lead Pokémon has this ability, the wild encounter rate is doubled.  This ability has no effect in battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"36",
            "Name"=>"trace",
            "Desc"=>"When this Pokémon enters battle, it copies a random opponent's ability.  This ability cannot copy flower gift, forecast, illusion, imposter, multitype, trace, wonder guard, or zen mode.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"37",
            "Name"=>"huge-power",
            "Desc"=>"This Pokémon's Attack is doubled while in battle.  This bonus does not count as a stat modifier.  This ability functions identically to pure power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"38",
            "Name"=>"poison-point",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user has a 30% chance of being poisoned.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"39",
            "Name"=>"inner-focus",
            "Desc"=>"This Pokémon cannot flinch.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"40",
            "Name"=>"magma-armor",
            "Desc"=>"This Pokémon cannot be frozen.  If a Pokémon is frozen and acquires this ability, it will immediately thaw out; this includes when regaining a lost ability upon leaving battle.  Overworld: If any Pokémon in the party has this ability, each egg in the party has its hatch counter decreased by 2 (rather than 1) each step cycle, making eggs hatch roughly twice as quickly.  This effect does not stack if multiple Pokémon have this ability or flame body.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"41",
            "Name"=>"water-veil",
            "Desc"=>"This Pokémon cannot be burned.  If a Pokémon is burned and acquires this ability, its burn is healed; this includes when regaining a lost ability upon leaving battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"42",
            "Name"=>"magnet-pull",
            "Desc"=>"While this Pokémon is in battle, opposing steel-type Pokémon cannot flee or switch out.  Pokémon with run away can still flee.  Pokémon can still switch out with the use of a move or item.  Overworld: If the lead Pokémon has this ability, Steel-type Pokémon have a higher encounter rate.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"43",
            "Name"=>"soundproof",
            "Desc"=>"This Pokémon is immune to moves flagged as being sound-based.  heal bell is unaffected.  uproar still prevents this Pokémon from sleeping.  This Pokémon can still receive a Perish Song counter through baton pass, and will retain a Perish Song counter if it acquires this ability after Perish Song is used.  howl, roar of time, sonic boom, and yawn are not flagged as sound-based.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"44",
            "Name"=>"rain-dish",
            "Desc"=>"This Pokémon heals for 1/16 of its maximum HP after each turn during rain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"45",
            "Name"=>"sand-stream",
            "Desc"=>"The weather changes to a sandstorm when this Pokémon enters battle and does not end unless cancelled by another weather condition.  If multiple Pokémon with this ability, drizzle, drought, or snow warning are sent out at the same time, the abilities will activate in order of Speed, respecting trick room.  Each ability's weather will cancel the previous weather, and only the weather summoned by the slowest of the Pokémon will stay.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is halved in a sandstorm.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"46",
            "Name"=>"pressure",
            "Desc"=>"Moves targetting this Pokémon use one extra PP.  This ability stacks if multiple targets have it.  This ability still affects moves that fail or miss.  This ability does not affect ally moves that target either the entire field or just its side, nor this Pokémon's self-targetted moves; it does, however, affect single-targetted ally moves aimed at this Pokémon, ally moves that target all other Pokémon, and opponents' moves that target the entire field.  If this ability raises a move's PP cost above its remaining PP, it will use all remaining PP.  When this Pokémon enters battle, all participating trainers are notified that it has this ability.  Overworld: If the lead Pokémon has this ability, higher-levelled Pokémon have their encounter rate increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"47",
            "Name"=>"thick-fat",
            "Desc"=>"This Pokémon takes half as much damage from fire- and ice-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"48",
            "Name"=>"early-bird",
            "Desc"=>"This Pokémon's remaining sleep turn count falls by 2 rather than 1.  If this Pokémon's sleep counter is at 1, it will fall to 0 and then the Pokémon will wake up.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"49",
            "Name"=>"flame-body",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user has a 30% chance of being burned.  Overworld: If any Pokémon in the party has this ability, each egg in the party has its hatch counter decreased by 2 (rather than 1) each step cycle, making eggs hatch roughly twice as quickly.  This effect does not stack if multiple Pokémon have this ability or magma armor.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"50",
            "Name"=>"run-away",
            "Desc"=>"This Pokémon is always successful fleeing from wild battles, even if trapped by a move or ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"51",
            "Name"=>"keen-eye",
            "Desc"=>"This Pokémon cannot have its accuracy lowered.  This ability does not prevent any accuracy losses other than stat modifiers, such as the accuracy cut from fog; nor does it prevent other Pokémon's evasion from making this Pokémon's moves less accurate.  This Pokémon can still be passed negative accuracy modifiers through heart swap.  Overworld: If the first Pokémon in the party has this ability, any random encounter with a Pokémon five or more levels lower than it has a 50% chance of being skipped.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"52",
            "Name"=>"hyper-cutter",
            "Desc"=>"This Pokémon's Attack cannot be lowered by other Pokémon.  This ability does not prevent any Attack losses other than stat modifiers, such as the Attack cut from a burn.  This Pokémon can still be passed negative Attack modifiers through heart swap or power swap.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"53",
            "Name"=>"pickup",
            "Desc"=>"At the end of each turn, if another Pokémon consumed or Flung a held item that turn, this Pokémon picks up the item if it is not already holding one.  After each battle, this Pokémon has a 10% chance of picking up an item if it is not already holding one.  The air balloon and eject button cannot be picked up.  The items that may be found vary by game, and, since Pokémon Emerald, by the Pokémon's level.  This ability is checked after the battle ends, at which point any temporary ability changes have worn off.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"54",
            "Name"=>"truant",
            "Desc"=>"Every second turn on which this Pokémon should attempt to use a move, it will instead do nothing (loaf around).  Loafing around interrupts moves that take multiple turns the same way paralysis, flinching, etc do.  Most such moves, for example bide or rollout, are simply cut off upon loafing around.  Attacks with a recharge turn, such as hyper beam, do not have to recharge; attacks with a preparation turn, such as fly, do not end up being used.  Moves that are forced over multiple turns and keep going through failure, such as outrage, uproar, or any move forced by encore, keep going as usual.  If this Pokémon is confused, its confusion is not checked when loafing around; the Pokémon cannot hurt itself, and its confusion does not end or come closer to ending.  If this Pokémon attempts to move but fails, e.g. because of paralysis or gravity, it still counts as having moved and will loaf around the next turn.  If it does not attempt to move, e.g. because it is asleep or frozen, whatever it would have done will be postponed until its next attempt; that is, it will either loaf around or move as usual, depending on what it last did.  This ability cannot be changed with worry seed, but it can be disabled with gastro acid, changed with role play, or traded away with skill swap.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"55",
            "Name"=>"hustle",
            "Desc"=>"This Pokémon's physical moves do 1.5× as much regular damage, but have 0.8× their usual accuracy.  Special moves are unaffected.  Moves that do set damage, such as seismic toss, have their accuracy affected, but not their damage.  Overworld: If the lead Pokémon has this ability, higher-levelled Pokémon have their encounter rate increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"56",
            "Name"=>"cute-charm",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user has a 30% chance of being infatuated.  Overworld: If the first Pokémon in the party has this ability, any wild Pokémon whose species can be either gender has a 2/3 chance of being set to the opposite gender, and a 1/3 chance of having a random gender as usual.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"57",
            "Name"=>"plus",
            "Desc"=>"This Pokémon has 1.5× its Special Attack if any friendly Pokémon has plus or minus.  This bonus does not count as a stat modifier.  If either ability is disabled by gastro acid, both lose their effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"58",
            "Name"=>"minus",
            "Desc"=>"This Pokémon has 1.5× its Special Attack if any friendly Pokémon has plus or minus.  This bonus does not count as a stat modifier.  If either ability is disabled by gastro acid, both lose their effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"59",
            "Name"=>"forecast",
            "Desc"=>"During rain, strong sunlight, or hail, this Pokémon's type changes to water, fire, or ice, respectively, and its form changes to match.  This ability has no effect for any Pokémon other than castform.  If the weather ends or becomes anything that does not trigger this ability, or a Pokémon with air lock or cloud nine enters battle, this Pokémon's type and form revert to their default.  If this ability is lost or disabled, this Pokémon cannot change its current type and form until it regains its ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"60",
            "Name"=>"sticky-hold",
            "Desc"=>"This Pokémon's hold item cannot be removed by other Pokémon.  Damaging moves that would remove this Pokémon's item can still inflict damage against this Pokémon, e.g. knock off or pluck.  This Pokémon can still use moves that involve the loss of its own item, e.g. fling or trick.  Overworld: If the lead Pokémon has this ability, the encounter rate while fishing is increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"61",
            "Name"=>"shed-skin",
            "Desc"=>"After each turn, this Pokémon has a 33% of being cured of any major status ailment.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"62",
            "Name"=>"guts",
            "Desc"=>"Whenever this Pokémon is asleep, burned, paralyzed, or poisoned, it has 1.5× its Attack.  This Pokémon is not affected by the usual Attack cut from a burn.  This bonus does not count as a stat modifier.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"63",
            "Name"=>"marvel-scale",
            "Desc"=>"Whenever this Pokémon has a major status ailment, it has 1.5× its Defense.  This bonus does not count as a stat modifier.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"64",
            "Name"=>"liquid-ooze",
            "Desc"=>"Wenn ein Pokémon mit dieser Fähigkeit von einer absorbierenden Attacke wie absorb getroffen wird, erleidet der Gegner so viele hp Schaden wie ihn die Attacke geheilt hätte.  dream eater ist davon nicht betroffen.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"65",
            "Name"=>"overgrow",
            "Desc"=>"Wenn ein Pokémon mit dieser Fähigkeit nur noch 1/3 seiner maximalen hp oder weniger hat, werden all seine grass Attacken verstärkt, so dass sie 1,5× so viel regular damage anrichten wie sonst.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"66",
            "Name"=>"blaze",
            "Desc"=>"When this Pokémon has 1/3 or less of its HP remaining, its fire-type moves inflict 1.5× as much regular damage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"67",
            "Name"=>"torrent",
            "Desc"=>"When this Pokémon has 1/3 or less of its HP remaining, its water-type moves inflict 1.5× as much regular damage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"68",
            "Name"=>"swarm",
            "Desc"=>"When this Pokémon has 1/3 or less of its HP remaining, its bug-type moves inflict 1.5× as much regular damage.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"69",
            "Name"=>"rock-head",
            "Desc"=>"This Pokémon does not receive recoil damage from its recoil moves.  struggle's recoil is unaffected.  This ability does not prevent crash damage from missing with jump kick or high jump kick.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"70",
            "Name"=>"drought",
            "Desc"=>"The weather changes to strong sunlight when this Pokémon enters battle and does not end unless cancelled by another weather condition.  If multiple Pokémon with this ability, drizzle, sand stream, or snow warning are sent out at the same time, the abilities will activate in order of Speed, respecting trick room.  Each ability's weather will cancel the previous weather, and only the weather summoned by the slowest of the Pokémon will stay.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"71",
            "Name"=>"arena-trap",
            "Desc"=>"While this Pokémon is in battle, opposing Pokémon cannot flee or switch out.  flying-type Pokémon and Pokémon in the air, e.g. due to levitate or magnet rise, are unaffected.  Pokémon with run away can still flee.  Pokémon can still switch out with the use of a move or item.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is doubled.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"72",
            "Name"=>"vital-spirit",
            "Desc"=>"This Pokémon cannot be asleep.  This causes rest to fail altogether.  If a Pokémon is asleep and acquires this ability, it will immediately wake up; this includes when regaining a lost ability upon leaving battle.  This ability functions identically to insomnia in battle.  Overworld: If the lead Pokémon has this ability, higher-levelled Pokémon have their encounter rate increased.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"73",
            "Name"=>"white-smoke",
            "Desc"=>"This Pokémon cannot have its stats lowered by other Pokémon.  This ability does not prevent any stat losses other than stat modifiers, such as the Speed cut from paralysis; nor self-inflicted stat drops, such as the Special Attack drop from overheat; nor opponent-triggered stat boosts, such as the Attack boost from swagger.  This Pokémon can still be passed negative stat modifiers through guard swap, heart swap, or power swap.  This ability functions identically to clear body in battle.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is halved.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"74",
            "Name"=>"pure-power",
            "Desc"=>"This Pokémon's Attack is doubled in battle.  This bonus does not count as a stat modifier.  This ability functions identically to huge power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"75",
            "Name"=>"shell-armor",
            "Desc"=>"Moves cannot score critical hits against this Pokémon.  This ability functions identically to battle armor.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"76",
            "Name"=>"air-lock",
            "Desc"=>"While this Pokémon is in battle, weather can still be in play, but will not have any of its effects.  This ability functions identically to cloud nine.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"77",
            "Name"=>"tangled-feet",
            "Desc"=>"When this Pokémon is confused, it has twice its evasion.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"78",
            "Name"=>"motor-drive",
            "Desc"=>"Whenever an electric-type move hits this Pokémon, its Speed rises one stage, negating any other effect on it.  This ability will not take effect if this Pokémon is immune to Electric moves.  Electric moves will ignore this Pokémon's substitute.  This effect includes non-damaging moves, i.e. thunder wave.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"79",
            "Name"=>"rivalry",
            "Desc"=>"This Pokémon inflicts 1.25× as much regular damage against Pokémon of the same gender and 0.75× as much regular damage against Pokémon of the opposite gender.  If either Pokémon is genderless, damage is unaffected.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"80",
            "Name"=>"steadfast",
            "Desc"=>"Whenever this Pokémon flinches, its Speed rises one stage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"81",
            "Name"=>"snow-cloak",
            "Desc"=>"During hail, this Pokémon has 1.25× its evasion, and it does not take hail damage regardless of type.  The evasion bonus does not count as a stat modifier.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is halved in snow.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"82",
            "Name"=>"gluttony",
            "Desc"=>"This Pokémon eats any held Berry triggered by low HP when it falls below 50% of its HP, regardless of the Berry's usual threshold.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"83",
            "Name"=>"anger-point",
            "Desc"=>"Whenever this Pokémon receives a critical hit, its Attack rises to the maximum of 6 stages.  This ability will still take effect if the critical hit is received by a substitute.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"84",
            "Name"=>"unburden",
            "Desc"=>"When this Pokémon uses or loses its held item, its Speed is doubled.  If it gains another item or leaves battle, this bonus is lost.  This includes when the Pokémon drops its item because of knock off.  This bonus does not count as a stat modifier.  There is no notification when this ability takes effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"85",
            "Name"=>"heatproof",
            "Desc"=>"This Pokémon takes half as much damage from fire-type moves and burns.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"86",
            "Name"=>"simple",
            "Desc"=>"Each stage of this Pokémon's stat modifiers acts as two stages.  These doubled stages are still limited to a minimum of -6 and a maximum of 6.  This Pokémon can still accumulate less than -3 or more than 3 stages of stat modifiers, even though the extra ones have no effect after doubling.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"87",
            "Name"=>"dry-skin",
            "Desc"=>"This Pokémon takes 1/8 of its maximum HP in damage after each turn during strong sunlight, but it heals for 1/8 of its HP each turn during rain.  This Pokémon takes 1.25× as much damage from fire-type moves, but whenever a water move hits it, it heals for 1/4 its maximum HP instead.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"88",
            "Name"=>"download",
            "Desc"=>"When this Pokémon enters battle, its Attack or Special Attack, whichever corresponds to its opponents' weaker total defensive stat, rises one stage.  In the event of a tie, Special Attack is raised.  This ability also takes effect when acquired during a battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"89",
            "Name"=>"iron-fist",
            "Desc"=>"Moves flagged as being punch-based have 1.2× their base power for this Pokémon.  sucker punch is not flagged as punch-based; its original, Japanese name only means surprise attack.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"90",
            "Name"=>"poison-heal",
            "Desc"=>"If this Pokémon is poisoned, it will heal for 1/8 of its maximum HP after each turn rather than taking damage.  This includes bad poison.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"91",
            "Name"=>"adaptability",
            "Desc"=>"This Pokémon inflicts twice as much damage with moves whose types match its own, rather than the usual same-type attack bonus of 1.5×.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"92",
            "Name"=>"skill-link",
            "Desc"=>"This Pokémon always hits five times with two-to-five-hit moves, such as icicle spear.  It also bypasses the accuracy checks on triple kick's second and third hits.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"93",
            "Name"=>"hydration",
            "Desc"=>"This Pokémon is cured of any major status ailment after each turn during rain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"94",
            "Name"=>"solar-power",
            "Desc"=>"During strong sunlight, this Pokémon has 1.5× its Special Attack but takes 1/8 of its maximum HP in damage after each turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"95",
            "Name"=>"quick-feet",
            "Desc"=>"Whenever this Pokémon has a major status ailment, it has 1.5× its Speed.  This Pokémon is not affected by the usual Speed cut from paralysis.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is halved.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"96",
            "Name"=>"normalize",
            "Desc"=>"This Pokémon's moves all act as if they were normal-type.  Moves that inflict typeless damage do so as usual.  Moves of variable type, such as hidden power, are affected.  They otherwise work as usual, however; weather ball, for example, is always forced to be Normal, but it still has doubled power and looks different during weather.  As thunder wave is prevented by immunities, unlike most non-damaging moves, it does not affect ghost-type Pokémon under the effect of this ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"97",
            "Name"=>"sniper",
            "Desc"=>"This Pokémon inflicts triple damage with critical hits, rather than the usual double damage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"98",
            "Name"=>"magic-guard",
            "Desc"=>"This Pokémon is immune to damage not directly caused by a move.  For example, this Pokémon takes no damage from from weather, recoil, status ailments, or spikes, but it still suffers from the Attack cut when burned, and a life orb will still power up this Pokémon's moves without damaging it.  Anything that directly depends on such damage will also not happen; for example, leech seed will neither hurt this Pokémon nor heal the opponent, and Pokémon with a jaboca berry or rowap berry will not consume the berry when hit by this Pokémon.  The following are unaffected: struggle, pain split (whether used by or against this Pokémon), belly drum, substitute, curse, moves that knock the user out, and damage from confusion.  This Pokémon will neither lose nor regain HP if it drains HP from a Pokémon with liquid ooze.  If this Pokémon is badly poisoned, the poison counter is still increased each turn; if the Pokémon loses this ability, it will begin taking as much damage as it would be if it had been taking increasing damage each turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"99",
            "Name"=>"no-guard",
            "Desc"=>"Moves used by or against this Pokémon never miss.  One-hit KO moves are unaffected.  Moves affected by this ability can hit Pokémon during the preparation turn of moves like dig or fly.  Overworld: If the lead Pokémon has this ability, the wild encounter rate is doubled.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"100",
            "Name"=>"stall",
            "Desc"=>"This Pokémon moves last within its priority bracket.  Multiple Pokémon with this ability move in order of Speed amongst themselves.  The full incense and lagging tail take precedence over this ability; that is, Pokémon with these items move after Pokémon with this ability.  Pokémon with both this ability and one of these items are delayed as much as if they had only the item.  This ability works as usual during trick room: Pokémon with this ability will move in reverse order of Speed after Pokémon without it.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"101",
            "Name"=>"technician",
            "Desc"=>"This Pokémon's moves have 1.5× their power if their base power is 60 or less.  This includes moves of variable power, such as hidden power and magnitude, when their power is 60 or less.  helping hand's power boost is taken into account for any move, as is defense curl's power boost for rollout.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"102",
            "Name"=>"leaf-guard",
            "Desc"=>"This Pokémon cannot be given a major status ailment during strong sunlight.  This ability does not heal prior status ailments.  rest will fail altogether with this ability in effect.  yawn will immediately fail if used on this Pokémon during strong sunlight, and an already-used Yawn will fail if the weather turns to strong sunlight in the meantime.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"103",
            "Name"=>"klutz",
            "Desc"=>"Pokémon mit dieser Fähigkeit können im Kampf keine getragenen Items benutzen und diese haben auch keine passiven Effekte im Kampf, egal ob positiv oder negativ. Das Pokémon kann fling nicht einsetzen.  Der speed Malus einer iron ball und die EV Items (macho brace, power weight, power bracer, power belt, power lens, power band und power anklet) sind nicht betroffen. Items die den Kampf nicht direkt beeinflussen, wie der exp share, das amulet coin oder die soothe bell, funktionieren normal. Alle getragenen Items funktionieren normal außerhalb von Kämpfen.  Andere Attacken die getragene Items verwenden, wie z.B. natural gift und switcheroo, funktionieren ebenfalls normal.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"104",
            "Name"=>"mold-breaker",
            "Desc"=>"This Pokémon's moves completely ignore abilities that could hinder or prevent their effect on the target.  For example, this Pokémon's moves ignore abilities that would fully negate them, such as water absorb; abilities that would prevent any of their effects, such as clear body, shell armor, or sticky hold; and abilities that grant any general protective benefit, such as simple, snow cloak, or thick fat.  If an ability could either hinder or help this Pokémon's moves, e.g. dry skin or unaware, the ability is ignored either way.  Abilities that do not fit this description, even if they could hinder moves in some other way, are not affected.  For example, cursed body only affects potential future uses of the move, while liquid ooze and shadow tag can only hinder a move's effect on the user.  This ablity cannot ignore type or form changes granted by abilities, for example color change or forecast; nor effects that were caused by abilities but are no longer tied to an ability, such as the rain from drizzle.  This ability cannot ignore multitype at all.  An ability ignored by this ability is only nullified while the move is being used.  For example, this Pokémon's moves can paralyze a Pokémon with limber, but Limber will activate and heal the paralysis immediately thereafter, and this Pokémon's spikes are not affected by this ability after they have been placed.  When this Pokémon enters battle, all participating trainers are notified that it has this ability.  This ability functions identically to teravolt and turboblaze.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"105",
            "Name"=>"super-luck",
            "Desc"=>"This Pokémon's moves have critical hit rates one stage higher than normal.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"106",
            "Name"=>"aftermath",
            "Desc"=>"When this Pokémon is knocked out by a move that makes contact, the move's user takes 1/4 its maximum HP in damage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"107",
            "Name"=>"anticipation",
            "Desc"=>"When this Pokémon enters battle, if one of its opponents has a move that is super effective against it, self destruct, explosion, or a one-hit knockout move, all participating trainers are notified.  The move itself is not revealed; only that there is such a move.  Moves that inflict typeless damage, such as future sight, and moves of variable type, such as hidden power, count as their listed types.  counter, metal burst, mirror coat, and one-hit KO moves to which this Pokémon is immune do not trigger this ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"108",
            "Name"=>"forewarn",
            "Desc"=>"When this Pokémon enters battle, it reveals the move with the highest base power known by any opposing Pokémon to all participating trainers.  In the event of a tie, one is chosen at random.  Moves without a listed base power are assigned one as follows:  Power | Moves ----: | -----   160 | One-hit KO moves: fissure, guillotine, horn drill, and sheer cold   120 | Counter moves: counter, metal burst, and mirror coat    80 | Variable power or set damage: crush grip, dragon rage, electro ball, endeavor, final gambit, flail, frustration, grass knot, gyro ball, heat crash, heavy slam, hidden power, low kick, natural gift, night shade, psywave, return, reversal, seismic toss, sonic boom, trump card, and wring out     0 | Any such move not listed ",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"109",
            "Name"=>"unaware",
            "Desc"=>"This Pokémon ignores other Pokémon's stat modifiers for the purposes of damage and accuracy calculation.  Effectively, this affects modifiers of every stat except Speed.  The power of punishment and stored power is calculated as usual.  When this Pokémon hurts itself in confusion, its stat modifiers affect damage as usual.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"110",
            "Name"=>"tinted-lens",
            "Desc"=>"This Pokémon deals twice as much damage with moves that are not very effective against the target.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"111",
            "Name"=>"filter",
            "Desc"=>"This Pokémon takes 0.75× as much damage from moves that are super effective against it.  This ability functions identically to solid rock.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"112",
            "Name"=>"slow-start",
            "Desc"=>"This Pokémon's Attack and Speed are halved for five turns upon entering battle.  This ability also takes effect when acquired during battle.  If this Pokémon loses its ability before the five turns are up, its Attack and Speed return to normal; if it then regains this ability without leaving battle, its Attack and Speed are halved again, but the counter keeps counting from where it was.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"113",
            "Name"=>"scrappy",
            "Desc"=>"This Pokémon ignores ghost-type Pokémon's immunity to normal- and fighting-type moves.  Ghost Pokémon's other types affect damage as usual.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"114",
            "Name"=>"storm-drain",
            "Desc"=>"All other Pokémon's single-target water-type moves are redirected to this Pokémon, if it is an eligible target.  Other Pokémon's Water moves raise this Pokémon's Special Attack one stage, negating any other effect on it, and cannot miss it.  If the move's intended target also has this ability, the move is not redirected.  When multiple Pokémon with this ability are possible targets for redirection, the move is redirected to the one with the highest Speed stat, or, in the case of a tie, to a random tied Pokémon.  follow me takes precedence over this ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"115",
            "Name"=>"ice-body",
            "Desc"=>"This Pokémon heals for 1/16 of its maximum HP after each turn during hail, and it does not take hail damage regardless of type.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"116",
            "Name"=>"solid-rock",
            "Desc"=>"This Pokémon takes 0.75× as much damage from moves that are super effective against it.  This ability functions identically to filter.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"117",
            "Name"=>"snow-warning",
            "Desc"=>"The weather changes to hail when this Pokémon enters battle and does not end unless cancelled by another weather condition.  If multiple Pokémon with this ability, drizzle, drought, or sand stream are sent out at the same time, the abilities will activate in order of Speed, respecting trick room.  Each ability's weather will cancel the previous weather, and only the weather summoned by the slowest of the Pokémon will stay.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"118",
            "Name"=>"honey-gather",
            "Desc"=>"This Pokémon has a chance of picking up honey after each battle.  This chance starts at 5% and rises another 5% after every tenth level: 5% from level 1–10, 10% from 11–20, and so on, up to 50% from 91–100.  This ability is checked after the battle ends, at which point any temporary ability changes have worn off.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"119",
            "Name"=>"frisk",
            "Desc"=>"Wenn ein Pokémon mit dieser Fähigkeit den Kampf betritt, wird allen Trainern mitgeteilt, welches Item der Gegner hält.  Wenn bei Mehrfachkämpfen ein Gegner ein Item hält, wird dieses angezeigt, wenn mehr ein Item halten wird ein zufälliges angekündigt.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"120",
            "Name"=>"reckless",
            "Desc"=>"This Pokémon's recoil moves and crash moves have 1.2× their base power.  struggle is unaffected.  The crash moves are the moves that damage the user upon missing: jump kick and high jump kick.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"121",
            "Name"=>"multitype",
            "Desc"=>"If this Pokémon is holding an elemental Plate, its type and form change to match the Plate.  This Pokémon's held item, whether or not it is a Plate, cannot be taken by covet or thief, nor removed by knock off, nor traded by switcheroo or trick.  Covet, Thief, and Knock Off still inflict damage against this Pokémon.  Unlike with sticky hold, this Pokémon cannot use fling, Switcheroo, or Trick to lose its item itself, nor gain an item through Switcheroo or Trick if it does not have one.  This ability has no effect for any Pokémon other than arceus.  This ability cannot be traded with skill swap, nor copied with role play or trace, nor disabled with gastro acid, nor changed with worry seed.  This Pokémon cannot use Skill Swap or Role Play to lose its ability itself.  mold breaker cannot ignore this ability.  If a Pokémon Transforms into an Arceus with this ability, it will Transform into Arceus's default, normal-type form.  If the Transforming Pokémon is holding a Plate, this ability will then activate and change the Pokémon into the corresponding form.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"122",
            "Name"=>"flower-gift",
            "Desc"=>"Friendly Pokémon have 1.5× their Attack and Special Defense during strong sunlight if any friendly Pokémon has this ability.  Unlike forecast, multitype, and zen mode, this ability is not tied to its Pokémon's form change; cherrim will switch between its forms even if it loses this ability.  As such, this ability also works if obtained by a Pokémon other than Cherrim.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"123",
            "Name"=>"bad-dreams",
            "Desc"=>"Opposing Pokémon take 1/8 of their maximum HP in damage after each turn while they are asleep.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"124",
            "Name"=>"pickpocket",
            "Desc"=>"Whenever a move makes contact with this Pokémon, if it does not have a held item, it steals the attacker's held item.  This Pokémon cannot steal upon being knocked out.  It can steal if the attacker has a substitute, but cannot steal when its own Substitute is hit.  If a move hits multiple times, only the last hit triggers this ability.  If this Pokémon is wild, it cannot steal from a trained Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"125",
            "Name"=>"sheer-force",
            "Desc"=>"This Pokémon's moves with extra effects have 1.3× their power, but lose their extra effects.  An effect chance is a move's chance to inflict a status ailment, cause a stat change, or make the target flinch in addition to the move's main effect. For example, thunder shock's paralysis is an extra effect, but thunder wave's is not, nor are knock off's item removal and air cutter's increased critical hit rate.  Moves that lower the user's stats are unaffected.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"126",
            "Name"=>"contrary",
            "Desc"=>"Whenever this Pokémon's stats would be raised, they are instead lowered by the same amount, and vice versa.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"127",
            "Name"=>"unnerve",
            "Desc"=>"Opposing Pokémon cannot eat held Berries while this Pokémon is in battle.  Affected Pokémon can still use bug bite or pluck to eat a target's Berry.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"128",
            "Name"=>"defiant",
            "Desc"=>"When any of this Pokémon's stats are lowered, its Attack rises by two stages.  If multiple stats are lowered at once, this ability takes effect with each stat lowered.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"129",
            "Name"=>"defeatist",
            "Desc"=>"This Pokémon's Attack and Special Attack are halved when it has half its HP or less.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"130",
            "Name"=>"cursed-body",
            "Desc"=>"Moves that hit this Pokémon have a 30% chance of being Disabled afterward.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"131",
            "Name"=>"healer",
            "Desc"=>"Friendly Pokémon next to this Pokémon in double and triple battles each have a 30% chance of being cured of any major status ailment after each turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"132",
            "Name"=>"friend-guard",
            "Desc"=>"All friendly Pokémon take 0.75× as much direct damage from moves while this Pokémon is in battle.  This effect stacks if multiple allied Pokémon have it.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"133",
            "Name"=>"weak-armor",
            "Desc"=>"Whenever a physical move hits this Pokémon, its Speed rises one stage and its Defense falls one stage.  This ability triggers on every hit of a multiple-hit move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"134",
            "Name"=>"heavy-metal",
            "Desc"=>"This Pokémon has double the usual weight for its species.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"135",
            "Name"=>"light-metal",
            "Desc"=>"This Pokémon has half the usual weight for its species.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"136",
            "Name"=>"multiscale",
            "Desc"=>"This Pokémon takes half as much damage when it is hit having full HP.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"137",
            "Name"=>"toxic-boost",
            "Desc"=>"This Pokémon has 1.5× its Attack when poisoned.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"138",
            "Name"=>"flare-boost",
            "Desc"=>"This Pokémon has 1.5× its Special Attack when burned.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"139",
            "Name"=>"harvest",
            "Desc"=>"After each turn, if the last item this Pokémon consumed was a Berry and it is not currently holding an item, it has a 50% chance of regaining that Berry, or a 100% chance during strong sunlight.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"140",
            "Name"=>"telepathy",
            "Desc"=>"This Pokémon does not take damage from friendly Pokémon's moves, including single-target moves aimed at it.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"141",
            "Name"=>"moody",
            "Desc"=>"After each turn, one of this Pokémon's stats at random rises two stages, and another falls one stage.  If a stat is already at 6 or -6 stages, it will not be chosen to be increased or decreased, respectively.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"142",
            "Name"=>"overcoat",
            "Desc"=>"This Pokémon does not take damage from weather.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"143",
            "Name"=>"poison-touch",
            "Desc"=>"This Pokémon's contact moves have a 30% chance of poisoning the target with each hit.  This counts as an extra effect for the purposes of shield dust.  This ability takes effect before mummy.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"144",
            "Name"=>"regenerator",
            "Desc"=>"This Pokémon regains 1/3 of its maximum HP when it is switched out for another Pokémon under any circumstances other than having fainted.  This ability does not take effect when a battle ends.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"145",
            "Name"=>"big-pecks",
            "Desc"=>"Die defense von Pokémon mit dieser Fähigkeit kann nicht von anderen Pokémon gesenkt werden.  Das Pokémon kann nagative defense durch heart swap oder guard swap erhalten.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"146",
            "Name"=>"sand-rush",
            "Desc"=>"This Pokémon's Speed is doubled during a sandstorm, and it does not take sandstorm damage, regardless of type.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"147",
            "Name"=>"wonder-skin",
            "Desc"=>"Non-damaging moves have exactly 50% base accuracy against this Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"148",
            "Name"=>"analytic",
            "Desc"=>"This Pokémon's moves have 1.3× their power when it moves last in a turn.  future sight and doom desire are unaffected.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"149",
            "Name"=>"illusion",
            "Desc"=>"This Pokémon, upon being sent out, appears to have the species, nickname, and Poké Ball of the last Pokémon in the party that is able to battle.  This illusion breaks upon being hit by a damaging move.  Other damage, e.g. from weather or spikes, does not break the illusion, nor does damage done to a substitute.  If the party order becomes temporarily shuffled around as Pokémon are switched out in battle, this ability chooses the last Pokémon according to that shuffled order.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"150",
            "Name"=>"imposter",
            "Desc"=>"This Pokémon transforms into a random opponent upon entering battle.  This effect is identical to the move transform.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"151",
            "Name"=>"infiltrator",
            "Desc"=>"This Pokémon's moves ignore light screen, reflect, and safeguard.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"152",
            "Name"=>"mummy",
            "Desc"=>"Whenever a contact move hits this Pokémon, the attacking Pokémon's ability changes to Mummy.  multitype is unaffected.  If a Pokémon with moxie knocks this Pokémon out, the former's ability will change without taking effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"153",
            "Name"=>"moxie",
            "Desc"=>"This Pokémon's Attack rises one stage upon knocking out another Pokémon, even a friendly Pokémon.  This ability does not take effect when the Pokémon indirectly causes another Pokémon to faint, e.g. through poison or spikes.  If this Pokémon knocks out a Pokémon with mummy, the former's ability will change without taking effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"154",
            "Name"=>"justified",
            "Desc"=>"Whenever a dark-type move hits this Pokémon, its Attack rises one stage.  The move is not negated in any way.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"155",
            "Name"=>"rattled",
            "Desc"=>"This Pokémon's Speed rises one stage with each hit from a damaging dark-, ghost-, or bug-type move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"156",
            "Name"=>"magic-bounce",
            "Desc"=>"When this Pokémon is targeted by a move flagged as being reflectable, the move is redirected to its user.  All reflectable moves are non-damaging, and most non-damaging moves that target other Pokémon are reflectable.  A move reflected by this ability or magic coat cannot be reflected back.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"157",
            "Name"=>"sap-sipper",
            "Desc"=>"Whenever a grass-type move hits this Pokémon, its Attack rises one stage, negating any other effect on it.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"158",
            "Name"=>"prankster",
            "Desc"=>"This Pokémon's non-damaging moves have their priority increased by one stage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"159",
            "Name"=>"sand-force",
            "Desc"=>"During a sandstorm, this Pokémon's rock-, ground-, and steel-type moves have 1.3× their base power.  This Pokémon does not take sandstorm damage, regardless of type.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"160",
            "Name"=>"iron-barbs",
            "Desc"=>"Whenever a move makes contact with this Pokémon, the move's user takes 1/8 of its maximum HP in damage.  This ability functions identically to rough skin.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"161",
            "Name"=>"zen-mode",
            "Desc"=>"This Pokémon switches between Standard Mode and Zen Mode after each turn depending on its HP.  Below 50% of its maximum HP, it switches to Zen Mode, and at 50% or above, it switches to Standard Mode.  This Pokémon returns to Standard Mode upon leaving battle or losing this ability.  This ability has no effect if this Pokémon is not a darmanitan.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"162",
            "Name"=>"victory-star",
            "Desc"=>"All friendly Pokémon's moves, including this Pokémon's own moves, have 1.1× their usual accuracy while this Pokémon is in battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"163",
            "Name"=>"turboblaze",
            "Desc"=>"This Pokémon's moves completely ignore abilities that could hinder or prevent their effect on the target.  For example, this Pokémon's moves ignore abilities that would fully negate them, such as water absorb; abilities that would prevent any of their effects, such as clear body, shell armor, or sticky hold; and abilities that grant any general protective benefit, such as simple, snow cloak, or thick fat.  If an ability could either hinder or help this Pokémon's moves, e.g. dry skin or unaware, the ability is ignored either way.  Abilities that do not fit this description, even if they could hinder moves in some other way, are not affected.  For example, cursed body only affects potential future uses of the move, while liquid ooze and shadow tag can only hinder a move's effect on the user.  This ablity cannot ignore type or form changes granted by abilities, for example color change or forecast; nor effects that were caused by abilities but are no longer tied to an ability, such as the rain from drizzle.  This ability cannot ignore multitype at all.  An ability ignored by this ability is only nullified while the move is being used.  For example, this Pokémon's moves can paralyze a Pokémon with limber, but Limber will activate and heal the paralysis immediately thereafter, and this Pokémon's spikes are not affected by this ability after they have been placed.  When this Pokémon enters battle, all participating trainers are notified that it has this ability.  This ability functions identically to mold breaker and teravolt.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"164",
            "Name"=>"teravolt",
            "Desc"=>"This Pokémon's moves completely ignore abilities that could hinder or prevent their effect on the target.  For example, this Pokémon's moves ignore abilities that would fully negate them, such as water absorb; abilities that would prevent any of their effects, such as clear body, shell armor, or sticky hold; and abilities that grant any general protective benefit, such as simple, snow cloak, or thick fat.  If an ability could either hinder or help this Pokémon's moves, e.g. dry skin or unaware, the ability is ignored either way.  Abilities that do not fit this description, even if they could hinder moves in some other way, are not affected.  For example, cursed body only affects potential future uses of the move, while liquid ooze and shadow tag can only hinder a move's effect on the user.  This ablity cannot ignore type or form changes granted by abilities, for example color change or forecast; nor effects that were caused by abilities but are no longer tied to an ability, such as the rain from drizzle.  This ability cannot ignore multitype at all.  An ability ignored by this ability is only nullified while the move is being used.  For example, this Pokémon's moves can paralyze a Pokémon with limber, but Limber will activate and heal the paralysis immediately thereafter, and this Pokémon's spikes are not affected by this ability after they have been placed.  When this Pokémon enters battle, all participating trainers are notified that it has this ability.  This ability functions identically to mold breaker and turboblaze.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"165",
            "Name"=>"aroma-veil",
            "Desc"=>"Protects allies against moves that affect their mental state.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"166",
            "Name"=>"flower-veil",
            "Desc"=>"Protects friendly grass Pokémon from having their stats lowered by other Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"167",
            "Name"=>"cheek-pouch",
            "Desc"=>"Restores HP upon eating a Berry, in addition to the Berry's effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"168",
            "Name"=>"protean",
            "Desc"=>"Changes the bearer's type to match each move it uses.  The type change takes place just before the move is used.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"169",
            "Name"=>"fur-coat",
            "Desc"=>"Halves damage from physical attacks.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"170",
            "Name"=>"magician",
            "Desc"=>"Steals the target's held item when the bearer uses a damaging move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"171",
            "Name"=>"bulletproof",
            "Desc"=>"Protects against bullet, ball, and bomb-based moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"172",
            "Name"=>"competitive",
            "Desc"=>"Raises Special Attack by two stages upon having any stat lowered.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"173",
            "Name"=>"strong-jaw",
            "Desc"=>"Strengthens biting moves to 1.5× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"174",
            "Name"=>"refrigerate",
            "Desc"=>"Turns the bearer's normal-type moves into ice-type moves.  Moves changed by this ability have 1.3× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"175",
            "Name"=>"sweet-veil",
            "Desc"=>"Prevents friendly Pokémon from sleeping.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"176",
            "Name"=>"stance-change",
            "Desc"=>"Changes aegislash to Blade Forme before using a damaging move, or Shield Forme before using kings shield.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"177",
            "Name"=>"gale-wings",
            "Desc"=>"Raises flying moves' priority by one stage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"178",
            "Name"=>"mega-launcher",
            "Desc"=>"Strengthens aura and pulse moves to 1.5× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"179",
            "Name"=>"grass-pelt",
            "Desc"=>"Boosts Defense while grassy terrain is in effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"180",
            "Name"=>"symbiosis",
            "Desc"=>"Passes the bearer's held item to an ally when the ally uses up its item.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"181",
            "Name"=>"tough-claws",
            "Desc"=>"Strengthens moves that make contact to 1.33× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"182",
            "Name"=>"pixilate",
            "Desc"=>"Turns the bearer's normal-type moves into fairy moves.  Moves changed by this ability have 1.3× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"183",
            "Name"=>"gooey",
            "Desc"=>"Lowers attacking Pokémon's Speed by one stage on contact.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"184",
            "Name"=>"aerilate",
            "Desc"=>"Turns the bearer's normal-type moves into flying-type moves.  Moves changed by this ability have 1.3× their power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"185",
            "Name"=>"parental-bond",
            "Desc"=>"Lets the bearer hit twice with damaging moves.  The second hit has half power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"186",
            "Name"=>"dark-aura",
            "Desc"=>"Strengthens dark moves for all friendly and opposing Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"187",
            "Name"=>"fairy-aura",
            "Desc"=>"Strengthens fairy moves for all friendly and opposing Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"188",
            "Name"=>"aura-break",
            "Desc"=>"While this Pokémon is on the field, dark aura and fairy aura weaken moves of their respective types to 2/3 their power, rather than strengthening them.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"189",
            "Name"=>"primordial-sea",
            "Desc"=>"When this Pokémon enters battle or gains this ability, the weather becomes heavy rain.  Heavy rain has all the properties of rain dance and also causes damaging Fire moves to fail.  Heavy rain ends when this Pokémon leaves battle or loses this ability, or when this ability is nullified.  The weather cannot otherwise be changed except by the effects of delta stream and desolate land.  air lock and cloud nine will prevent the effects of heavy rain, including allowing Fire moves to work, but will not allow the weather to be changed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"190",
            "Name"=>"desolate-land",
            "Desc"=>"When this Pokémon enters battle or gains this ability, the weather becomes extremely harsh sunlight.  Extremely harsh sunlight has all the properties of sunny day and also causes damaging Water moves to fail.  Extremely harsh sunlight ends when this Pokémon leaves battle or loses this ability, or when this ability is nullified.  The weather cannot otherwise be changed except by the effects of delta stream and primordial sea.  air lock and cloud nine will prevent the effects of extremely harsh sunlight, including allowing Water moves to work, but will not allow the weather to be changed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"191",
            "Name"=>"delta-stream",
            "Desc"=>"When this Pokémon enters battle or gains this ability, the weather becomes a mysterious air current.  A mysterious air current causes moves to not be super effective against Flying; they do neutral damage instead.  anticipation and stealth rock are not affected.  The mysterious air current ends when this Pokémon leaves battle or loses this ability, or when this ability is nullified.  The weather cannot otherwise be changed except by the effects of desolate land and primordial sea.  air lock and cloud nine will prevent the effect of a mysterious air current, but will not allow the weather to be changed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"192",
            "Name"=>"stamina",
            "Desc"=>"Raises this Pokémon's Defense by one stage when it takes damage from a move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"193",
            "Name"=>"wimp-out",
            "Desc"=>"After this Pokémon is hit by a move, if that move caused this Pokémon's HP to drop below half, it switches out.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"194",
            "Name"=>"emergency-exit",
            "Desc"=>"After this Pokémon is hit by a move, if that move caused this Pokémon's HP to drop below half, it switches out.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"195",
            "Name"=>"water-compaction",
            "Desc"=>"Raises this Pokémon's Defense by two stages when it's hit by a Water move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"196",
            "Name"=>"merciless",
            "Desc"=>"This Pokémon's moves critical hit against poisoned targets.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"197",
            "Name"=>"shields-down",
            "Desc"=>"When this Pokémon enters battle and at the end of each turn, if its HP is 50% or above, it changes into Meteor Form; otherwise, it changes into Core Form.  In Meteor Form, it cannot be given a major status ailment (though existing ones are not cured), cannot become drowsy from yawn, and cannot use rest (which will simply fail).  This ability cannot be copied, replaced, or nullified.  This ability only takes effect for Minior.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"198",
            "Name"=>"stakeout",
            "Desc"=>"This Pokémon's moves have double power against Pokémon that switched in this turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"199",
            "Name"=>"water-bubble",
            "Desc"=>"When this Pokémon is hit by a Fire move, the damage is halved.  When this Pokémon uses a Water move, the power is doubled. This Pokémon cannot be burned, and if it becomes burned, the burn is immediately cured.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"200",
            "Name"=>"steelworker",
            "Desc"=>"This Pokémon's Steel moves have 1.5× power.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"201",
            "Name"=>"berserk",
            "Desc"=>"Whenever this Pokémon takes damage from a move that causes its HP to drop below 50%, its Special Attack rises by one stage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"202",
            "Name"=>"slush-rush",
            "Desc"=>"During Hail, this Pokémon has double Speed.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"203",
            "Name"=>"long-reach",
            "Desc"=>"A move used by this Pokémon will not make contact.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"204",
            "Name"=>"liquid-voice",
            "Desc"=>"When this Pokémon uses a move that is sound-based, that move's type is Water.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"205",
            "Name"=>"triage",
            "Desc"=>"This Pokémon's healing moves have their priority increased by 3.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"206",
            "Name"=>"galvanize",
            "Desc"=>"When this Pokémon uses a Normal moves, that move is Electric its power is 1.2×.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"207",
            "Name"=>"surge-surfer",
            "Desc"=>"Doubles this Pokémon's Speed on Electric Terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"208",
            "Name"=>"schooling",
            "Desc"=>"If this Pokémon is a wishiwashi and level 20 or above, then when it enters battle and at the start of each turn, it becomes Schooling Form if its HP is 25% or higher and Solo Form otherwise.  This ability cannot be replaced, copied, or nullified.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"209",
            "Name"=>"disguise",
            "Desc"=>"If this Pokémon is in its Disguised Form and takes damage from a move, it switches to its Busted Form and the damage is prevented.  Other effects are not prevented.  This ability cannot be copied or replaced.  This ability only takes effect for Mimikyu.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"210",
            "Name"=>"battle-bond",
            "Desc"=>"Transforms this Pokémon into Ash-Greninja after fainting an opponent.  Water Shuriken's power is 20 and always hits three times.  This ability cannot be copied or replaced.  This ability only takes effect for Greninja.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"211",
            "Name"=>"power-construct",
            "Desc"=>"Transforms 10% or 50% Zygarde into Complete Forme when its HP is below 50%.  This ability cannot be copied or replaced.  This ability only takes effect for Zygarde.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"212",
            "Name"=>"corrosion",
            "Desc"=>"This Pokémon's moves and item ignore the usual immunity of Poison and Steel Pokémon when attempting to inflict poison.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"213",
            "Name"=>"comatose",
            "Desc"=>"This Pokémon always acts as though it were Asleep.  It cannot be given another status ailment; it's unaffected by yawn; it can use sleep talk; and so on.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"214",
            "Name"=>"queenly-majesty",
            "Desc"=>"When an opposing Pokémon attempts to use a move that targets this Pokémon or an ally, and that move has priority, it will fail.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"215",
            "Name"=>"innards-out",
            "Desc"=>"When this Pokémon faints from an opponent's move, that opponent takes damage equal to the HP this Pokémon had remaining.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"216",
            "Name"=>"dancer",
            "Desc"=>"Whenever another Pokémon uses a dance move, this Pokémon will use the same move immediately afterwards.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"217",
            "Name"=>"battery",
            "Desc"=>"Ally Pokémon's moves have their power increased to 1.3×.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"218",
            "Name"=>"fluffy",
            "Desc"=>"Damage from contact moves is halved.  Damage from Fire moves is doubled.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"219",
            "Name"=>"dazzling",
            "Desc"=>"When an opposing Pokémon attempts to use a move that targets this Pokémon or an ally, and that move has priority, it will fail.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"220",
            "Name"=>"soul-heart",
            "Desc"=>"This Pokémon's Special Attack rises by one stage every time any Pokémon faints.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"221",
            "Name"=>"tangling-hair",
            "Desc"=>"When this Pokémon takes regular damage from a contact move, the attacking Pokémon's Speed lowers by one stage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"222",
            "Name"=>"receiver",
            "Desc"=>"When an ally faints, this Pokémon gains its Ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"223",
            "Name"=>"power-of-alchemy",
            "Desc"=>"When an ally faints, this Pokémon gains its Ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"224",
            "Name"=>"beast-boost",
            "Desc"=>"Raises this Pokémon's highest stat by one stage when it faints another Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"225",
            "Name"=>"rks-system",
            "Desc"=>"Changes this Pokémon's type to match its held Memory.  This ability cannot be copied, replaced, or nullified.  This ability only takes effect for Silvally.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"226",
            "Name"=>"electric-surge",
            "Desc"=>"When this Pokémon enters battle, it changes the terrain to electric terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"227",
            "Name"=>"psychic-surge",
            "Desc"=>"When this Pokémon enters battle, it changes the terrain to psychic terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"228",
            "Name"=>"misty-surge",
            "Desc"=>"When this Pokémon enters battle, it changes the terrain to misty terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"229",
            "Name"=>"grassy-surge",
            "Desc"=>"When this Pokémon enters battle, it changes the terrain to grassy terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"230",
            "Name"=>"full-metal-body",
            "Desc"=>"This Pokémon's stats cannot be lowered by other Pokémon's moves or abilities.  This effect only applies to normal stat modifications and not more exotic effects such as topsy turvy or power swap.  This Ability is not bypassed by mold breaker, teravolt, or turboblaze.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"231",
            "Name"=>"shadow-shield",
            "Desc"=>"When this Pokémon has full HP, regular damage (not fixed damage!) from moves is halved.  This ability cannot be nullified.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"232",
            "Name"=>"prism-armor",
            "Desc"=>"Super-effective damage this Pokémon takes is reduced to 0.75×.  This Ability is not bypassed by mold breaker, teravolt, or turboblaze.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"233",
            "Name"=>"neuroforce",
            "Desc"=>"Increases super-effective damage dealt to 1.25×.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"234",
            "Name"=>"intrepid-sword",
            "Desc"=>"Boosts the Pokémon’s Attack stat the first time the Pokémon enters a battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"235",
            "Name"=>"dauntless-shield",
            "Desc"=>"Boosts the Pokémon’s Defense stat the first time the Pokémon enters a battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"236",
            "Name"=>"libero",
            "Desc"=>"Changes the Pokémon's type to the type of the move it's about to use. This works only once each time the Pokémon enters battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"237",
            "Name"=>"ball-fetch",
            "Desc"=>"If the Pokémon is not holding an item, it will fetch the Poké Ball from the first failed throw of the battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"238",
            "Name"=>"cotton-down",
            "Desc"=>"When the Pokémon is hit by an attack, it scatters cotton fluff around and lowers the Speed stat of all Pokémon except itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"239",
            "Name"=>"propeller-tail",
            "Desc"=>"Ignores the effects of opposing Pokémon's Abilities and moves that draw in moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"240",
            "Name"=>"mirror-armor",
            "Desc"=>"Bounces back only the stat-lowering effects that the Pokémon receives.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"241",
            "Name"=>"gulp-missile",
            "Desc"=>"When the Pokémon uses Surf or Dive, it will come back with prey. When it takes damage, it will spit out the prey to attack.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"242",
            "Name"=>"stalwart",
            "Desc"=>"Ignores the effects of opposing Pokémon's Abilities and moves that draw in moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"243",
            "Name"=>"steam-engine",
            "Desc"=>"Boosts the Speed stat drastically when the Pokémon is hit by a Fire- or Water-type move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"244",
            "Name"=>"punk-rock",
            "Desc"=>"Boosts the power of sound-based moves. The Pokémon also takes half the damage from these kinds of moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"245",
            "Name"=>"sand-spit",
            "Desc"=>"The Pokémon creates a sandstorm when it's hit by an attack.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"246",
            "Name"=>"ice-scales",
            "Desc"=>"The Pokémon is protected by ice scales, which halve the damage taken from special moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"247",
            "Name"=>"ripen",
            "Desc"=>"Ripens Berries and doubles their effect.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"248",
            "Name"=>"ice-face",
            "Desc"=>"The Pokémon's ice head can take a physical attack as a substitute, but the attack also changes the Pokémon's appearance. The ice will be restored when it snows.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"249",
            "Name"=>"power-spot",
            "Desc"=>"Just being next to the Pokémon powers up moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"250",
            "Name"=>"mimicry",
            "Desc"=>"Changes the Pokémon’s type depending on the terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"251",
            "Name"=>"screen-cleaner",
            "Desc"=>"When the Pokémon enters a battle, the effects of Light Screen, Reflect, and Aurora Veil are nullified for both opposing and ally Pokémon.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"252",
            "Name"=>"steely-spirit",
            "Desc"=>"Powers up the Steel-type moves of the Pokémon and its allies.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"253",
            "Name"=>"perish-body",
            "Desc"=>"When hit by a move that makes direct contact, the Pokémon and the attacker will faint after three turns unless they switch out of battle.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"254",
            "Name"=>"wandering-spirit",
            "Desc"=>"The Pokémon exchanges Abilities with a Pokémon that hits it with a move that makes direct contact.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"255",
            "Name"=>"gorilla-tactics",
            "Desc"=>"Boosts the Pokémon’s Attack stat but only allows the use of the first selected move.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"256",
            "Name"=>"neutralizing-gas",
            "Desc"=>"While the Pokémon is in the battle, the effects of all other Pokémon's Abilities will be nullified or will not be triggered.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"257",
            "Name"=>"pastel-veil",
            "Desc"=>"Protects the Pokémon and its ally Pokémon from being poisoned.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"258",
            "Name"=>"hunger-switch",
            "Desc"=>"The Pokémon changes its form, alternating between its Full Belly Mode and Hangry Mode after the end of every turn.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"259",
            "Name"=>"quick-draw",
            "Desc"=>"Enables the Pokémon to move first occasionally.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"260",
            "Name"=>"unseen-fist",
            "Desc"=>"If the Pokémon uses moves that make direct contact, it can attack the target even if the target protects itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"261",
            "Name"=>"curious-medicine",
            "Desc"=>"When the Pokémon enters a battle, it scatters medicine from its shell, which removes all stat changes from allies.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"262",
            "Name"=>"transistor",
            "Desc"=>"Powers up Electric-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"263",
            "Name"=>"dragons-maw",
            "Desc"=>"Powers up Dragon-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"264",
            "Name"=>"chilling-neigh",
            "Desc"=>"When the Pokémon knocks out a target, it utters a chilling neigh, which boosts its Attack stat.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"265",
            "Name"=>"grim-neigh",
            "Desc"=>"When the Pokémon knocks out a target, it utters a terrifying neigh, which boosts its Sp. Atk stat.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"266",
            "Name"=>"as-one-glastrier",
            "Desc"=>"This Ability combines the effects of both Calyrex's Unnerve Ability and Glastrier's Chilling Neigh Ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"267",
            "Name"=>"as-one-spectrier",
            "Desc"=>"This Ability combines the effects of both Calyrex's Unnerve Ability and Spectrier's Grim Neigh Ability.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"268",
            "Name"=>"lingering-aroma",
            "Desc"=>"Contact with the Pokémon changes the attacker's Ability to Lingering Aroma.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"269",
            "Name"=>"seed-sower",
            "Desc"=>"Turns the ground into Grassy Terrain when the Pokémon is hit by an attack.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"270",
            "Name"=>"thermal-exchange",
            "Desc"=>"Boosts the Attack stat when the Pokémon is hit by a Fire-type move. The Pokémon also cannot be burned.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"271",
            "Name"=>"anger-shell",
            "Desc"=>"When an attack causes its HP to drop to half or less, the Pokémon gets angry. This lowers its Defense and Sp. Def stats but boosts its Attack, Sp. Atk, and Speed stats.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"272",
            "Name"=>"purifying-salt",
            "Desc"=>"The Pokémon's pure salt protects it from status conditions and halves the damage taken from Ghost-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"273",
            "Name"=>"well-baked-body",
            "Desc"=>"The Pokémon takes no damage when hit by Fire-type moves. Instead, its Defense stat is sharply boosted.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"274",
            "Name"=>"wind-rider",
            "Desc"=>"Boosts the Pokémon's Attack stat if Tailwind takes effect or if the Pokémon is hit by a wind move. The Pokémon also takes no damage from wind moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"275",
            "Name"=>"guard-dog",
            "Desc"=>"Boosts the Pokémon’s Attack stat if intimidated. Moves and items that would force the Pokémon to switch out also fail to work.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"276",
            "Name"=>"rocky-payload",
            "Desc"=>"Powers up Rock-type moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"277",
            "Name"=>"wind-power",
            "Desc"=>"The Pokémon becomes charged when it is hit by a wind move, boosting the power of the next Electric-type move the Pokémon uses.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"278",
            "Name"=>"zero-to-hero",
            "Desc"=>"The Pokémon transforms into its Hero Form when it switches out.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"279",
            "Name"=>"commander",
            "Desc"=>"When the Pokémon enters a battle, it goes inside the mouth of an ally Dondozo if one is on the field. The Pokémon then issues commands from there.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"280",
            "Name"=>"electromorphosis",
            "Desc"=>"The Pokémon becomes charged when it takes damage, boosting the power of the next Electric-type move the Pokémon uses.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"281",
            "Name"=>"protosynthesis",
            "Desc"=>"Boosts the Pokémon's most proficient stat in harsh sunlight or if the Pokémon is holding Booster Energy.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"282",
            "Name"=>"quark-drive",
            "Desc"=>"Boosts the Pokémon's most proficient stat on Electric Terrain or if the Pokémon is holding Booster Energy.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"283",
            "Name"=>"good-as-gold",
            "Desc"=>"A body of pure, solid gold gives the Pokémon full immunity to other Pokémon's status moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"284",
            "Name"=>"vessel-of-ruin",
            "Desc"=>"The power of the Pokémon's ruinous vessel lowers the Sp. Atk stats of all Pokémon except itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"285",
            "Name"=>"sword-of-ruin",
            "Desc"=>"The power of the Pokémon's ruinous sword lowers the Defense stats of all Pokémon except itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"286",
            "Name"=>"tablets-of-ruin",
            "Desc"=>"The power of the Pokémon's ruinous wooden tablets lowers the Attack stats of all Pokémon except itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"287",
            "Name"=>"beads-of-ruin",
            "Desc"=>"The power of the Pokémon's ruinous beads lowers the Sp. Def stats of all Pokémon except itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"288",
            "Name"=>"orichalcum-pulse",
            "Desc"=>"Turns the sunlight harsh when the Pokémon enters a battle. The ancient pulse thrumming through the Pokémon also boosts its Attack stat in harsh sunlight.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"289",
            "Name"=>"hadron-engine",
            "Desc"=>"Turns the ground into Electric Terrain when the Pokémon enters a battle. The futuristic engine within the Pokémon also boosts its Sp. Atk stat on Electric Terrain.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"290",
            "Name"=>"opportunist",
            "Desc"=>"If an opponent's stat is boosted, the Pokémon seizes the opportunity to boost the same stat for itself.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"291",
            "Name"=>"cud-chew",
            "Desc"=>"When the Pokémon eats a Berry, it will regurgitate that Berry at the end of the next turn and eat it one more time.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"292",
            "Name"=>"sharpness",
            "Desc"=>"Powers up slicing moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"293",
            "Name"=>"supreme-overlord",
            "Desc"=>"When the Pokémon enters a battle, its Attack and Sp. Atk stats are slightly boosted for each of the allies in its party that have already been defeated.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"294",
            "Name"=>"costar",
            "Desc"=>"When the Pokémon enters a battle, it copies an ally's stat changes.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"295",
            "Name"=>"toxic-debris",
            "Desc"=>"Scatters poison spikes at the feet of the opposing team when the Pokémon takes damage from physical moves.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"296",
            "Name"=>"armor-tail",
            "Desc"=>"The mysterious tail covering the Pokémon's head makes opponents unable to use priority moves against the Pokémon or its allies.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"297",
            "Name"=>"earth-eater",
            "Desc"=>"If hit by a Ground-type move, the Pokémon has its HP restored instead of taking damage.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"298",
            "Name"=>"mycelium-might",
            "Desc"=>"The Pokémon will always act more slowly when using status moves, but these moves will be unimpeded by the Ability of the target.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"299",
            "Name"=>"minds-eye",
            "Desc"=>"The Pokémon ignores changes to opponents' evasiveness, its accuracy can't be lowered, and it can hit Ghost types with Normal-type and Fighting-type moves",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"300",
            "Name"=>"supersweet-syrup",
            "Desc"=>"Lowers the evasion of opposing Pokémon by 1 stage when first sent into battle",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"301",
            "Name"=>"hospitality",
            "Desc"=>"When the Pokémon enters a battle, it showers its ally with hospitality, restoring a small amount of the ally's HP",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"302",
            "Name"=>"toxic-chain",
            "Desc"=>"The power of the Pokémon's toxic chain may badly poison any target the Pokémon hits with a move",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"303",
            "Name"=>"embody-aspect",
            "Desc"=>"The Pokémon's heart fills with memories, causing the Mask to shine and one of the Pokémon's stats to be boosted.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"304",
            "Name"=>"tera-shift",
            "Desc"=>"When the Pokémon enters a battle, it absorbs the energy around itself and transforms into its Terastal Form.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"305",
            "Name"=>"tera-shell",
            "Desc"=>"The Pokémon's shell contains the powers of each type. All damage-dealing moves that hit the Pokémon when its HP is full will not be very effective.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"306",
            "Name"=>"teraform-zero",
            "Desc"=>"When Terapagos changes into its Stellar Form, it uses its hidden powers to eliminate all effects of weather and terrain, reducing them to zero.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"307",
            "Name"=>"poison-puppeteer",
            "Desc"=>"Pokémon poisoned by Pecharunt's moves will also become confused.",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10001",
            "Name"=>"mountaineer",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10002",
            "Name"=>"wave-rider",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10003",
            "Name"=>"skater",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10004",
            "Name"=>"thrust",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10005",
            "Name"=>"perception",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10006",
            "Name"=>"parry",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10007",
            "Name"=>"instinct",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10008",
            "Name"=>"dodge",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10009",
            "Name"=>"jagged-edge",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10010",
            "Name"=>"frostbite",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10011",
            "Name"=>"tenacity",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10012",
            "Name"=>"pride",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10013",
            "Name"=>"deep-sleep",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10014",
            "Name"=>"power-nap",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10015",
            "Name"=>"spirit",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10016",
            "Name"=>"warm-blanket",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10017",
            "Name"=>"gulp",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10018",
            "Name"=>"herbivore",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10019",
            "Name"=>"sandpit",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10020",
            "Name"=>"hot-blooded",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10021",
            "Name"=>"medic",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10022",
            "Name"=>"life-force",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10023",
            "Name"=>"lunchbox",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10024",
            "Name"=>"nurse",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10025",
            "Name"=>"melee",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10026",
            "Name"=>"sponge",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10027",
            "Name"=>"bodyguard",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10028",
            "Name"=>"hero",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10029",
            "Name"=>"last-bastion",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10030",
            "Name"=>"stealth",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10031",
            "Name"=>"vanguard",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10032",
            "Name"=>"nomad",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10033",
            "Name"=>"sequence",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10034",
            "Name"=>"grass-cloak",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10035",
            "Name"=>"celebrate",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10036",
            "Name"=>"lullaby",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10037",
            "Name"=>"calming",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10038",
            "Name"=>"daze",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10039",
            "Name"=>"frighten",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10040",
            "Name"=>"interference",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10041",
            "Name"=>"mood-maker",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10042",
            "Name"=>"confidence",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10043",
            "Name"=>"fortune",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10044",
            "Name"=>"bonanza",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10045",
            "Name"=>"explode",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10046",
            "Name"=>"omnipotent",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10047",
            "Name"=>"share",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10048",
            "Name"=>"black-hole",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10049",
            "Name"=>"shadow-dash",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10050",
            "Name"=>"sprint",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10051",
            "Name"=>"disgust",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10052",
            "Name"=>"high-rise",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10053",
            "Name"=>"climber",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10054",
            "Name"=>"flame-boost",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10055",
            "Name"=>"aqua-boost",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10056",
            "Name"=>"run-up",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10057",
            "Name"=>"conqueror",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10058",
            "Name"=>"shackle",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10059",
            "Name"=>"decoy",
            "Desc"=>"null",
          ]);
          DB::table("Abilities")->insert([
            "id"=>"10060",
            "Name"=>"shield",
            "Desc"=>"null",
          ]);
        
    }
}