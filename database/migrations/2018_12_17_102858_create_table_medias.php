<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'medias', function ( Blueprint $table ) {
            $table -> increments( 'id' );
            $table -> string( 'title' );
            $table -> text( 'summary' );
            $table -> unsignedInteger( 'year' );
            $table -> string( 'trailer' );
            $table -> boolean( 'is_serie' )->default(false);
            $table -> string( 'poster' );
            $table -> string( 'director' );
            $table -> string( 'producer' );
            $table -> timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'medias' );
    }
}
