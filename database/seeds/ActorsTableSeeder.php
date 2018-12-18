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
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Emmanuelle_Bercot_au_Festival_des_Busters_2017_%28cropped%29.jpg/220px-Emmanuelle_Bercot_au_Festival_des_Busters_2017_%28cropped%29.jpg'
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
        ] );
    }
}
