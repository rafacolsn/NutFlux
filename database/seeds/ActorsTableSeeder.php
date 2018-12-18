<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'actors' ) -> insert( [
            [
                'firstname' => 'Kristin',
                'lastname' => 'Scott Thomas',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Kristin_Scott_Thomas_Cabourg_2013.jpg/220px-Kristin_Scott_Thomas_Cabourg_2013.jpg'
            ],
            [
                'firstname' => 'Elsa',
                'lastname' => 'Zylberstein',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Elsa_Zylberstein_printemps_du_cin%C3%A9ma_2013_2.jpg/220px-Elsa_Zylberstein_printemps_du_cin%C3%A9ma_2013_2.jpg'
            ],
            [
                'firstname' => 'Serge',
                'lastname' => 'Hazanavicius',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Serge-Hazanavicius-Il-y-a-longtemps.JPG/220px-Serge-Hazanavicius-Il-y-a-longtemps.JPG'
            ]
        ] );
    }
}
