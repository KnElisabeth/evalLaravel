<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'Caniche',
            'life' => 4,
            'class_id' => 2,
        ]);
        DB::table('races')->insert([
            'name' => 'Persan',
            'life' => 20,
            'class_id' => 2,
        ]);
    }
}
