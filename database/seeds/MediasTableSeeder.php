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
        
        DB::table('medias')->insert([
            [
                'title' => 'Back To The Future',
                'summary' => "Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the maverick scientist Doc Brown.",
                'year' => 1985,
                'trailer' => 'qvsgGtivCgs',
                'is_serie' => 0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,643,1000_AL_.jpg',
                'director' => 'Robert Zemeckis',
                'producer' => 'Neil Canton'
            ],
            [
                'title' => 'Back To The Future Part II',
                'summary' => "After visiting 2015, Marty McFly must repeat his visit to 1955 to prevent disastrous changes to 1985...without interfering with his first trip.",
                'year' => 1989,
                'trailer' => 'MdENmefJRpw',
                'is_serie' => 0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BZTMxMGM5MjItNDJhNy00MWI2LWJlZWMtOWFhMjI5ZTQwMWM3XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'director' => 'Robert Zemeckis',
                'producer' => 'Neil Canton'
            ],
            [
                'title' => 'Back To The Future Part III',
                'summary' => "Enjoying a peaceable existence in 1885, Doctor Emmet Brown is about to be killed by Buford \"Mad Dog\" Tannen. Marty McFly travels back in time to save his friend.",
                'year' => 1990,
                'trailer' => '3C8c3EoEfw4',
                'is_serie' => 0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BYjhlMGYxNmMtOWFmMi00Y2M2LWE5NWYtZTdlMDRlMGEzMDA3XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,676,1000_AL_.jpg',
                'director' => 'Robert Zemeckis',
                'producer' => 'Neil Canton'
            ],
            [
                'title' => 'Before Sunrise',
                'summary' => "American tourist Jesse and French student Celine meet by chance on the train from Budapest to Vienna. Sensing that they are developing a connection, Jesse asks Celine to spend the day with him in Vienna, and she agrees. So they pass the time before his scheduled flight the next morning together. How do two perfect strangers connect so intimately over the course of a single day? What is that special thing that bonds two people so strongly? As their bond turns to love, what will happen to them the next morning when Jesse flies away?",
                'year' => 1995,
                'trailer' => '25v7N34d5HE',
                'is_serie' => 0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BZDdiZTAwYzAtMDI3Ni00OTRjLTkzN2UtMGE3MDMyZmU4NTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,672,1000_AL_.jpg',
                'director' => 'Richard Linklater',
                'producer' => 'Castle Rock Entertainment',
            ],
            [
                'title' => 'Boyhood',
                'summary' => "Filmed over 12 years with the same cast, Richard Linklater's BOYHOOD is a groundbreaking story of growing up as seen through the eyes of a child named Mason (a breakthrough performance by Ellar Coltrane), who literally grows up on screen before our eyes. Starring Ethan Hawke and Patricia Arquette as Mason's parents and newcomer Lorelei Linklater as his sister Samantha, BOYHOOD charts the rocky terrain of childhood like no other film has before. Snapshots of adolescence from road trips and family dinners to birthdays and graduations and all the moments in between become transcendent, set to a soundtrack spanning the years from Coldplay's Yellow to Arcade Fire's Deep Blue. BOYHOOD is both a nostalgic time capsule of the recent past and an ode to growing up and parenting.",
                'year' => 2014,
                'trailer' => 'Y0oX0xiwOv8',
                'is_serie' => 0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMTYzNDc2MDc0N15BMl5BanBnXkFtZTgwOTcwMDQ5MTE@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'director' => 'Richard Linklater',
                'producer' => 'IFC Productions',
            ],
            [
                'title' => 'Dark',
                'summary' => "Year 2019. Events take place in a small German town called Winden. Two months ago, Jonas returned to the school with his father committing suicide. A couple of weeks ago when he came back, he learns that a child is lost in the town. Days of searching have remained unsuccessful and the whole town is on the thorn. With the disappearance of one of the children who have gone out to have fun together in order to get away from the tension of their parents, things get mixed up in the town.",
                'year' => 2017,
                'trailer' => 'zy0b9e40tK8&t',
                'is_serie' => 1,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMTUzNjQ2MTY5NV5BMl5BanBnXkFtZTgwOTAzNTQxNDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
                'director' => 'Baran bo Odar, Jantje Friese',
                'producer' => 'NutFlux',
            ],
            [
                'title' => 'Stranger Things',
                'summary' => "In a small town where everyone knows everyone, a peculiar incident starts a chain of events that leads to the disappearance of a child, which begins to tear at the fabric of an otherwise peaceful community. Dark government agencies and seemingly malevolent supernatural forces converge on the town, while a few locals begin to understand that there's more going on than meets the eye.",
                'year' => 2016,
                'trailer' => 'XWxyRG_tckY',
                'is_serie' => 1,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjUwMDgzOTg3Nl5BMl5BanBnXkFtZTgwNTI4MDk5MzI@._V1_SY1000_CR0,0,669,1000_AL_.jpg',
                'director' => 'Matt Duffer, Ross Duffer',
                'producer' => 'NutFlux',
            ],

        ]);
    }
}
