<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //istanzio un nuovo oggetto del modello
        $new_train = new Train();
        $new_train->company = $faker->randomElement(['Italo','Trenitalia']);
        $new_train->departure_station = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_code =$faker->numberBetween(1,20);
        $new_train->carriages =$faker->numberBetween(1,10);
        $new_train->on_time = $faker->rand(0,1);
        $new_train->canceled = $faker->rand(0,1);


        $new_train->save();
    }
}


