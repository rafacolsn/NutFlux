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
                'picture' => 'http://fr.web.img6.acsta.net/c_215_290/medias/nmedia/18/36/36/34/19720308.jpg'
            ],
            [
                'firstname' => 'Marion',
                'lastname' => 'Cotillard',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Marion_Cotillard_C%C3%A9sar_2018.jpg/220px-Marion_Cotillard_C%C3%A9sar_2018.jpg'
            ],
            [
                'firstname' => 'Jean-Pierre',
                'lastname' => 'Martins',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Jean-Pierre_Martins.jpg/220px-Jean-Pierre_Martins.jpg'
            ],
            [
                'firstname' => 'Gérard',
                'lastname' => 'Depardieu',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/G%C3%A9rard_Depardieu_avp_2016_3.jpg/220px-G%C3%A9rard_Depardieu_avp_2016_3.jpg'
            ],
            [
                'firstname' => 'Fabrice',
                'lastname' => 'Luchini',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Fabrice_Luchini_Cannes_2016.jpg/220px-Fabrice_Luchini_Cannes_2016.jpg'
            ],
            [
                'firstname' => 'Sandrine',
                'lastname' => 'Kiberlain',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Sandrine_Kiberlain_Deauville_2018.jpg/220px-Sandrine_Kiberlain_Deauville_2018.jpg'
            ],
            [
                'firstname' => 'Catherine',
                'lastname' => 'Frot',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/MJK34645_Catherine_Frot_%28Sage_Femme%2C_Berlinale_2017%29.jpg/220px-MJK34645_Catherine_Frot_%28Sage_Femme%2C_Berlinale_2017%29.jpg'
            ],
            [
                'firstname' => 'Déborah',
                'lastname' => 'François',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Deborah_Fran%C3%A7ois_Cannes_2018.jpg/220px-Deborah_Fran%C3%A7ois_Cannes_2018.jpg'
            ],
            [
                'firstname' => 'Emmanuelle',
                'lastname' => 'Bercot',
                'picture' => 'https://cineuropa.org/imgCache/2016/03/09/1457518802146_0570x0400_1457518839513.jpg'
            ],
            [
                'firstname' => 'Vincent',
                'lastname' => 'Cassel',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Vincent_Cassel_Cannes_2018.jpg/220px-Vincent_Cassel_Cannes_2018.jpg'
            ],
            [
                'firstname' => 'François',
                'lastname' => 'Cluzet',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Fran%C3%A7ois_Cluzet_C%C3%A9sars_2014.jpg/220px-Fran%C3%A7ois_Cluzet_C%C3%A9sars_2014.jpg'
            ],
            [
                'firstname' => 'Lola',
                'lastname' => 'Le Lann',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Lola_Le_Lann_Cabourg_2015.jpg/220px-Lola_Le_Lann_Cabourg_2015.jpg'
            ],
            [
                'firstname' => 'Elijah',
                'lastname' => 'Wood',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Elijah_Wood_%2836103089852%29_%28cropped%29.jpg/240px-Elijah_Wood_%2836103089852%29_%28cropped%29.jpg'
            ],
            [
                'firstname' => 'Ian',
                'lastname' => 'McKellen',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/SDCC13_-_Ian_McKellen.jpg/240px-SDCC13_-_Ian_McKellen.jpg'
            ],
            [
                'firstname' => 'Viggo',
                'lastname' => 'Mortensen',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Viggo_Mortensen_Cannes_2014.jpg/220px-Viggo_Mortensen_Cannes_2014.jpg'
            ],
            [
                'firstname' => 'Sean',
                'lastname' => 'Astin',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Sean_Astin_by_Gage_Skidmore.jpg/220px-Sean_Astin_by_Gage_Skidmore.jpg'
            ],
            [
                'firstname' => 'Orlando',
                'lastname' => 'Bloom',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Orlando_Bloom_Cannes_2013.jpg/220px-Orlando_Bloom_Cannes_2013.jpg'
            ],
            [
                'firstname' => 'Mark',
                'lastname' => 'Hamill',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Mark_Hamill_%282017%29.jpg/220px-Mark_Hamill_%282017%29.jpg'
            ],
            [
                'firstname' => 'Harrison',
                'lastname' => 'Ford',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Harrison_Ford_by_Gage_Skidmore_2.jpg/250px-Harrison_Ford_by_Gage_Skidmore_2.jpg'
            ],
            [
                'firstname' => 'Carrie',
                'lastname' => 'Fisher',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Carrie_Fisher_2013.jpg/250px-Carrie_Fisher_2013.jpg'
            ],
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
