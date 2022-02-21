<?php
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use App\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // metodo funzionante per inviare da un array al db
        //  inizialmente c'è stato un problema con il codice 
        //  Illegal string offset in quanto 
        //  non avevo messo i dati dentro le parentesi quadre

        // $trains = 
        // [
        //     ['agency' => 'Agenzia prova',
        //     'departure_station' => 'stazione partenza prova',
        //     'arrival_station' => 'stazione arrivo prova',
        //     'departure_day' => '2022/10/10',
        //     'departure_time' => '20:00:00',
        //     'arrival_time' => '21:00:00',
        //     'code' => '123456qdfg',
        //     'carriages' => 3,
        //     'in_time' => 1,
        //     'deleted' => 0
        //     ]
        // ];

        // foreach ($trains as  $train) {
        //     $newTrain = new Train();
        //     $newTrain ->agency = $train['agency'];
        //     $newTrain ->departure_station = $train['departure_station'];
        //     $newTrain ->arrival_station = $train['arrival_station'];
        //     $newTrain ->departure_day = $train['departure_day'];
        //     $newTrain ->departure_time = $train['departure_time'];
        //     $newTrain ->arrival_time = $train['arrival_time'];
        //     $newTrain ->code = $train['code'];
        //     $newTrain ->carriages = $train['carriages'];
        //     $newTrain ->in_time = $train['in_time'];
        //     $newTrain ->deleted = $train ['deleted'];

        //     $newTrain-> save();
        // }

        for ($i=0; $i < 10 ; $i++) { 
            $newTrain = new Train();
             $newTrain->agency = $faker->words(2, true);
             $newTrain ->departure_station = $faker->words(3, true) ;
             $newTrain ->arrival_station = $faker->words(3, true);
             $newTrain ->departure_day = $faker->date('Y/m/d');
             $newTrain ->departure_time = $faker->time();
             $newTrain ->arrival_time = $faker->time();
             $newTrain ->code = $faker->isbn10();
             $newTrain ->carriages = $faker->numberBetween(0, 10) ;
             $newTrain ->in_time = $faker->numberBetween(0, 1);
             $newTrain ->deleted = $faker->numberBetween(0, 1);

             $newTrain-> save();
        }
    }
    
}
