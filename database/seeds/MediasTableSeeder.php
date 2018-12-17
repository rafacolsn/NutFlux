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
            'title' => string('Back To The Future'),
            'summary' =>string (''),
            'year' => string('1985'),
        ]);
    }
}
