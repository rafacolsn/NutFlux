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
                'title' => 'I\'ve Loved You So Long',
                'summary' => 'A woman struggles to interact with her family and find her place in society after spending fifteen years in prison.',
                'year' => 2008,
                'trailer' => 'O6KYXAf6MXs',
                'is_serie' => false,
                'poster' => 'http://images.fan-de-cinema.com/affiches/large/38/58211.jpg',
                'director' => 'Philippe Claudel',
                'producer' => 'Yves Marmion'
            ],
            [
                'title' => 'La Vie En Rose',
                'summary' => 'Biopic of the iconic French singer Édith Piaf. Raised by her grandmother in a brothel, she was discovered while singing on a street corner at the age of 19. Despite her success, Piaf\'s life was filled with tragedy.',
                'year' => 2007,
                'trailer' => 'uzEJ7NV_g98',
                'is_serie' => false,
                'poster' => 'http://fr.web.img2.acsta.net/r_1920_1080/medias/nmedia/18/60/15/65/18700879.jpg',
                'director' => 'Olivier Dahan',
                'producer' => 'Legende Films'
            ],
            [
                'title' => 'Nothing about Robert',
                'summary' => "Didier never knew that a wrong film review of a film which he did not bother to watch would land him in numerous troubles.",
                'year' => 1999,
                'trailer' => '_HUn8hQ_RsQ',
                'is_serie' => false,
                'poster' => 'http://fr.web.img4.acsta.net/r_1920_1080/medias/03/43/55/034355_af.jpg',
                'director' => 'Pascal Bonitzer',
                'producer' => 'Catherine Chouridis'
            ],
            [
                'title' => 'The Page Turner',
                'summary' => "After failing the audition to a prestigious music school because of the rude behavior of one of the testers, a girl takes revenge by gaining the trust of the same woman some years later and becoming indispensable for her.",
                'year' => 2006,
                'trailer' => 'fANWrJPhqWw',
                'is_serie' => false,
                'poster' => 'http://fr.web.img6.acsta.net/r_1920_1080/medias/nmedia/18/36/35/31/18649138.jpg',
                'director' => 'Denis Dercourt',
                'producer' => 'France 3 Cinéma'
            ],
            [
                'title' => 'My king',
                'summary' => "Tony is admitted to a rehabilitation center after a serious skiing accident. Dependent of medical staff and painkillers, she takes the time to remember the tumultuous love story she lived with Georgio.",
                'year' => 2015,
                'trailer' => 'wVkn58_wiM4',
                'is_serie' => false,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjEzOTI2NzQ1Ml5BMl5BanBnXkFtZTgwNjI0NjI4OTE@._V1_SY1000_CR0,0,671,1000_AL_.jpg',
                'director' => 'Maïwenn',
                'producer' => 'Alain Attal'
            ],
            [
                'title' => 'One Wild Moment',
                'summary' => "Two friends bring their daughters with them on a beach vacation and find themselves in an awkward situation. A remake of the 1977 film \"Un moment d'égarement\".",
                'year' => 2015,
                'trailer' => '7TtfBZNfvpk',
                'is_serie' => false,
                'poster' => 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/15/06/01/12/29/207428.jpg',
                'director' => 'Jean-François Richet',
                'producer' => 'La Petite Reine'
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'summary' => "A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.",
                'year' => 2001,
                'trailer' => 'V75dMMIW2B4',
                'is_serie' => false,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/9d/The_Lord_of_the_Rings_The_Fellowship_of_the_Ring_%282001%29_theatrical_poster.jpg',
                'director' => 'Peter Jackson',
                'producer' => 'WingNut Films'
            ],
            [
                'title' => 'The Lord of the Rings: The Two Towers',
                'summary' => "While Frodo and Sam edge closer to Mordor with the help of the shifty Gollum, the divided fellowship makes a stand against Sauron's new ally, Saruman, and his hordes of Isengard.",
                'year' => 2002,
                'trailer' => 'hYcw5ksV8YQ',
                'is_serie' => false,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/a/ad/Lord_of_the_Rings_-_The_Two_Towers.jpg',
                'director' => 'Peter Jackson',
                'producer' => 'WingNut Films'
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'summary' => "Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.",
                'year' => 2003,
                'trailer' => 'r5X-hFf6Bwo',
                'is_serie' => false,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/9d/Lord_of_the_Rings_-_The_Return_of_the_King.jpg',
                'director' => 'Peter Jackson',
                'producer' => 'WingNut Films'
            ],
            [
                'title' => 'Star Wars',
                'summary' => "Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.",
                'year' => 1977,
                'trailer' => 'vZ734NWnAHA',
                'is_serie' => false,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,643,1000_AL_.jpg',
                'director' => 'George Lucas',
                'producer' => 'Gary Kurtz'
            ],
            [
                'title' => 'The Empire Strikes Back',
                'summary' => "After the rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued by Darth Vader.",
                'year' => 1980,
                'trailer' => 'JNwNXF9Y6kY',
                'is_serie' => false,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,641,1000_AL_.jpg',
                'director' => 'Irvin Kershner',
                'producer' => 'Gary Kurtz'
            ],
            [
                'title' => 'Return of the Jedi',
                'summary' => "After a daring mission to rescue Han Solo from Jabba the Hutt, the rebels dispatch to Endor to destroy a more powerful Death Star. Meanwhile, Luke struggles to help Darth Vader back from the dark side without falling into the Emperor's trap.",
                'year' => 1983,
                'trailer' => 'XgB4gaY2dWE',
                'is_serie' => false,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SY999_CR0,0,644,999_AL_.jpg',
                'director' => 'Richard Marquand',
                'producer' => 'George Lucas'
            ],
        ] );
    }
}
