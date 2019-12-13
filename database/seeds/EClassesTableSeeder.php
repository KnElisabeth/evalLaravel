<?php

use Illuminate\Database\Seeder;

class EClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'name' => 'Mammifère',
        ]);
        DB::table('classes')->insert([
            'name' => 'Ovni',
        ]);
    }
}
