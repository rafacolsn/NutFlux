<?php

use Illuminate\Database\Seeder;

class MediaActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'media_actor' ) -> insert( [
            [
                'media_id' => 1,
                'actor_id' => 1
            ],
            [
                'media_id' => 1,
                'actor_id' => 2
            ],
            [
                'media_id' => 1,
                'actor_id' => 3
            ],
        ] );
    }
}
