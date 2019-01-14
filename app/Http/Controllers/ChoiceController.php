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
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {

            $user =  $request->session()->get('user');

            $choices = DB::table('choices')
                            ->join('medias', 'medias.id', '=', 'choices.media_id')
                            ->select('choices.id as id_choice', 'medias.title', 'medias.poster', 'choices.type', 'medias.id as id_media')
                            ->where('choices.user_id', '=', $user->id)
                            ->get();
            return view( 'choices.index', compact( 'choices' ) );
        }
        return redirect('/users')->with('error', 'You have to choose your profile to see your choices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*
        $user =  $request->session()->get('user');
        $medias = Media::orderBy( 'title' ) -> get();
        $userid = User::find( $user->id );
        return view( 'choices.create', compact( 'medias', 'userid' ) );
        */
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
            'type' => 'required'
        ] );

        $user =  $request -> session() -> get('user');

        $choice = new Choice( [
            'media_id' => $request -> get( 'mediaId' ),
            'user_id' => $user -> id,
            'type' => $request -> get( 'type' )
        ] );
        $choice -> save();

        return redirect() -> back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $type)
    {
        $user =  $request->session()->get('user');
        $choicesObj = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('medias.title', 'medias.id', 'medias.poster')
                        ->where('choices.type', '=', $type)
                        ->where('choices.user_id', '=', $user->id)
                        ->get();
        return view('choices.show', compact('choicesObj', 'type'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        /*
        $choices = Choice::where('type', $type)->get();
        return view('choices.edit', compact('choices'));
        */
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
        $choice = Choice::find($id);
        $choice->delete();
        return redirect()->back();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
