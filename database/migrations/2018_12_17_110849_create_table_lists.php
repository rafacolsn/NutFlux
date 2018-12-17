<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'lists', function ( Blueprint $table ) {
            $table -> increments( 'id' );
            $table -> unsignedInteger( 'user_id' );
            $table -> unsignedInteger( 'media_id' );
            $table -> string( 'type' );
            $table -> timestamps();

            $table -> foreign( 'media_id' ) -> references( 'id' ) -> on( 'medias' ) -> onDelete( 'cascade' );
            $table -> foreign( 'user_id' ) -> references( 'id' ) -> on( 'users' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'lists' );
    }
}
