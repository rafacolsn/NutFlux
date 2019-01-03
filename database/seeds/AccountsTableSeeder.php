<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'accounts' ) -> insert( [
            [
                'email' => 'admin@nutflux.com',
                'password' => Hash::make( 'admin' )
            ],
            [
                'email' => 'tanguy@nutflux.com',
                'password' => Hash::make( 'toto' )
            ]
        ] );
    }
}
