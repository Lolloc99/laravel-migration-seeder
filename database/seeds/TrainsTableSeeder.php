<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $train = new Train();
            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->state();
            $train->Stazione_di_arrivo = $faker->state();
            $train->Orario_di_partenza = $faker->time('H_i_s');;
            $train->Orario_di_arrivo = $faker->time('H_i_s');;
            $train->Codice_treno = $faker->lexify('??') . $faker->numerify();
            $train->Numero_carrozze = rand(5, 10);
            $train->save();
        }
    }
}
