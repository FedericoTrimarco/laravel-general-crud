<?php

use Illuminate\Database\Seeder;
use App\Pokemon;
class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemon = config('pokemons');

        foreach ($pokemon as $pkmn) {
            $new_pokemon = new Pokemon();

            $new_pokemon->fill($pkmn);

            $new_pokemon->save();
        }
    }
}
