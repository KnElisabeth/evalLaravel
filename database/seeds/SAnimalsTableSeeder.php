<?php

use Illuminate\Database\Seeder;

class SAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'PiouPiou',
            'sexe' => 'Male',
            'age' => 2,
            'weight' => 5,
            'height' => 4,
            'race_id'=>1,
        ]);
        DB::table('animals')->insert([
            'name' => 'Chaperlipopette',
            'sexe' => 'Female',
            'age' => 4,
            'weight' => 15,
            'height' => 4,
            'race_id'=>2,
        ]);
    }
}
