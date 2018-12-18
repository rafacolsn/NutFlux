<?php

use Illuminate\Database\Seeder;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'medias' ) -> insert( [
            [
                'title' => 'Il y a longtemps que je t\'aime',
                'summary' => 'Deux sœurs, Juliette et Léa, se retrouvent après que Juliette a passé quinze années en prison. Léa, désormais mariée et avec deux enfants, l\'accueille dans sa maison à Nancy.',
                'year' => 2008,
                'trailer' => 'igLstFcgk5g',
                'is_serie' => false,
                'poster' => 'http://images.fan-de-cinema.com/affiches/large/38/58211.jpg',
                'director' => 'Philippe Claudel',
                'producer' => 'Yves Marmion'
            ]
        ] );
    }
}
