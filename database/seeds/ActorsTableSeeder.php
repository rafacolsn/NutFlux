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
        DB::table('actors')->insert([
            [
                'firstname' => 'Michael',
                'lastname' => 'J. Fox',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTcwNzM0MjE4NF5BMl5BanBnXkFtZTcwMDkxMzEwMw@@._V1_UY317_CR1,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Christopher',
                'lastname' => 'Lloyd',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTkxNzQ0ODgxOV5BMl5BanBnXkFtZTcwMTAxMDY0Mg@@._V1_UY317_CR11,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Lea',
                'lastname' => 'Thompson',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BZjgzNmViYTktMjhjNy00NDc1LWI2MjMtNGUxYmFlZTNhODViXkEyXkFqcGdeQXVyMjA3MjIzMDA@._V1_UX214_CR0,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Thomas F.',
                'lastname' => 'Wilson',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTM3MzM4ODM4M15BMl5BanBnXkFtZTYwMDU1Mzky._V1_UY317_CR20,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Mary',
                'lastname' => 'Steenburgen',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTk1OTI5OTc0Nl5BMl5BanBnXkFtZTcwNjc5NDMwNA@@._V1_UY317_CR14,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Ethan',
                'lastname' => 'Hawke',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTk4NDMxMTI0MF5BMl5BanBnXkFtZTYwMjE3ODE0._V1_UY317_CR5,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Julie',
                'lastname' => 'Delpy',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTg4ODM0MjI5NV5BMl5BanBnXkFtZTYwNDQ5NjM1._V1_UY317_CR13,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Ellar',
                'lastname' => 'Coltrane',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTU4OTg5NTY2M15BMl5BanBnXkFtZTgwMjUwMDEwMTE@._V1_UX214_CR0,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Patricia',
                'lastname' => 'Arquette',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTQ5Njg0NjkxMV5BMl5BanBnXkFtZTcwMzc0NTI5NA@@._V1_UX214_CR0,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Oliver',
                'lastname' => 'Masucci',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMjM3OTIzMTc0NV5BMl5BanBnXkFtZTgwOTY1OTgyNDM@._V1_UY317_CR131,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Karoline',
                'lastname' => 'Eichhorn',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMjQ1MTE2ODc4N15BMl5BanBnXkFtZTgwNjAyNDkyNDM@._V1_UX214_CR0,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Jördis',
                'lastname' => 'Triebel',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTU5NjI4MzI4MV5BMl5BanBnXkFtZTgwNDI5MjIzNDM@._V1_UX214_CR0,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Winona',
                'lastname' => 'Ryder',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTQ3NzM3MTc2NF5BMl5BanBnXkFtZTcwODMxNjA0NA@@._V1_UY317_CR9,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Millie Bobby',
                'lastname' => 'Brown',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMzA3Nzk3MTUwOV5BMl5BanBnXkFtZTgwNDAyNzAzMDI@._V1_UY317_CR17,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'David',
                'lastname' => 'Harbour',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BZTc5ODUzMDAtZGFhZS00NmExLTlhYWYtZDY0NGI2MGMwYTIzXkEyXkFqcGdeQXVyODY0MzQyODc@._V1_UY317_CR20,0,214,317_AL_.jpg',
            ],
            [
                'firstname' => 'Finn',
                'lastname' => 'Wolfhard',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMTgyMTcxMjcyMF5BMl5BanBnXkFtZTgwMTk4MjM4MDI@._V1_UY317_CR136,0,214,317_AL_.jpg',
            ],
        ]);
    }
}
