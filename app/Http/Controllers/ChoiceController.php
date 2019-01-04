<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Choice;
use App\Media;
use App\User;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $choices = Choice::orderBy( 'id' ) -> get();

        $choices = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('medias.title', 'medias.id', 'medias.poster', 'choices.type', 'choices.id')
                        ->where('choices.user_id', '=', '1')
                        ->get();

        return view( 'choices.index', compact( 'choices' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::orderBy( 'title' ) -> get();
        $user = User::find( 1 );
        return view( 'choices.create', compact( 'medias', 'user' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate( $request, [
            'mediaId' => 'required',
            'userId' => 'required',
            'type' => 'required'
        ] );

        $choice = new Choice( [
            'media_id' => $request -> get( 'mediaId' ),
            'user_id' => $request -> get( 'userId' ),
            'type' => $request -> get( 'type' )
        ] );
        $choice -> save();

        return redirect( '/choices' ) -> with( 'success', 'Your media has been added to your choices' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $choicesObj = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('medias.title', 'medias.id', 'medias.poster')
                        ->where('choices.type', '=', $type)
                        ->where('choices.user_id', '=', '1')
                        ->get();
        return view('choices.show', compact('choicesObj', 'type'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
