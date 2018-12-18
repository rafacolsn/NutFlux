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
        $this->call(MediasTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(Media_actorTableSeeder::class);
    }
}
