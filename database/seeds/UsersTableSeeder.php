<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'users' ) -> insert( [
            [
                'firstname' => 'Admin',
                'lastname' => 'NutFlux',
                'avatar' => 'https://api.adorable.io/avatars/285/admin@nutflux.com.png',
                'account_id' => 1
            ],
            [
                'firstname' => 'Tanguy',
                'lastname' => 'Scholtes',
                'avatar' => 'https://api.adorable.io/avatars/285/tanguy@nutflux.com.png',
                'account_id' => 2
            ],
        ] );
    }
}
