<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EClassesTableSeeder::class,
            UsersTableSeeder::class,
            RacesTableSeeder::class,
            SAnimalsTableSeeder::class,
        ]);
    }
}
