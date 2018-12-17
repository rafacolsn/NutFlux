<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMediaActor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'media_actor', function ( Blueprint $table ) {
            $table -> increments( 'id' );
            $table -> unsignedInteger( 'media_id' );
            $table -> unsignedInteger( 'actor_id' );
            $table -> timestamps();

            $table -> foreign( 'media_id' ) -> references( 'id' ) -> on( 'medias' ) -> onDelete( 'cascade' );
            $table -> foreign( 'actor_id' ) -> references( 'id' ) -> on( 'actors' ) -> onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'media_actor' );
    }
}
