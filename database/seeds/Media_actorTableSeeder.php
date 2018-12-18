<?php

use Illuminate\Database\Seeder;

class Media_actorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media_actor')->insert([
            [
                'media_id' => 1,
                'actor_id' => 1,
            ],
            [
                'media_id' => 1,
                'actor_id' => 2,
            ],
            [
                'media_id' => 1,
                'actor_id' => 3,
            ],
            [
                'media_id' => 1,
                'actor_id' => 4,
            ],
            [
                'media_id' => 2,
                'actor_id' => 1,
            ],
            [
                'media_id' => 2,
                'actor_id' => 2,
            ],
            [
                'media_id' => 2,
                'actor_id' => 3,
            ],
            [
                'media_id' => 2,
                'actor_id' => 4,
            ],
            [
                'media_id' => 3,
                'actor_id' => 1,
            ],
            [
                'media_id' => 3,
                'actor_id' => 2,
            ],
            [
                'media_id' => 3,
                'actor_id' => 3,
            ],
            [
                'media_id' => 3,
                'actor_id' => 4,
            ],
            [
                'media_id' => 3,
                'actor_id' => 5,
            ],
            [
                'media_id' => 4,
                'actor_id' => 6,
            ],
            [
                'media_id' => 4,
                'actor_id' => 7,
            ],
            [
                'media_id' => 5,
                'actor_id' => 8,
            ],
            [
                'media_id' => 5,
                'actor_id' => 9,
            ],
            [
                'media_id' => 6,
                'actor_id' => 10,
            ],
            [
                'media_id' => 6,
                'actor_id' => 11,
            ],
            [
                'media_id' => 6,
                'actor_id' => 12,
            ],
            [
                'media_id' => 7,
                'actor_id' => 13,
            ],
            [
                'media_id' => 7,
                'actor_id' => 14,
            ],
            [
                'media_id' => 7,
                'actor_id' => 15,
            ],
            [
                'media_id' => 7,
                'actor_id' => 16,
            ],
        ]);
    }
}
