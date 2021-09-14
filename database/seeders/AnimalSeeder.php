<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('animals')->insert([
          'animalname' => 'Meowmi',
          'image' => 'http://lorempixel.com/400/200/sports/1',
          'species' => 'Bengal Cat',
    ]);

    }

}
