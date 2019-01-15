<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Media;
use App\Actor;

class SearchController extends Controller
{
    public function __construct () {
        $this -> middleware( 'auth' );
    }

    /**
     * Display a listing of results based on a search field query.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $results = [];
        $keyword = $_GET[ 'keyword' ];

        if ( !isset( $_GET[ 'keyword' ] ) || $_GET[ 'keyword' ] === '' || $_GET[ 'keyword' ] === ' ' ) {
            //if keyword is empty
            return view( 'search', compact( 'keyword', 'results' ) );
        }

        $keywords = explode( ' ', $keyword );
        $skipwords = [ 'a', 'the', 'with', 'i', 'and', 'or', 'an', 'to' ];
        foreach ( $skipwords as $skip ) {
            $indexes = array_keys( $keywords, $skip );
            if ( $indexes ) {
                foreach ( $indexes as $match ) {
                    unset( $keywords[ $match ] );
                }
            }
        }
        array_unshift( $keywords, $keyword );

        //get datas matching each word of $keywords
        $actors = Actor::where( function ( $query ) use ( $keywords ) {
            foreach ( $keywords as $word ) {
                $query -> where( 'firstname', 'like', '%' . $word . '%' );
                $query -> orWhere( 'lastname', 'like', '%' . $word . '%' );
            }
        } ) -> get();

        //dd($actors);

        $mediasSecondary = Media::where( function ( $query ) use ( $keywords ) {
            foreach ( $keywords as $word ) {
                $query -> where( 'summary', 'like', '%' . $word . '%' );
            }
        } );

        $medias = Media::where( function ( $query ) use ( $keywords ) {
            foreach ( $keywords as $word ) {
                $query -> where( 'title', 'like', '%' . $word . '%' );
                $query -> orWhere( 'year', '=', intval( $word ) );
            }
        } ) -> union( $mediasSecondary ) -> get();


        foreach( $actors as $item ) {
            $results[] = $item;
        }
        foreach( $medias as $item ) {
            $results[] = $item;
        }

        return view( 'search', compact( 'keyword', 'results' ) );
    }
}
