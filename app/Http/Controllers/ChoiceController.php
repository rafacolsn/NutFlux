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
        $user_id =  $request->session()->get('user_id');
        $medias = Media::orderBy( 'title' ) -> get();
        $user = User::find( $user_id );
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
    public function show(Request $request, $type)
    {
        $user_id =  $request->session()->get('user_id');
        $choicesObj = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('medias.title', 'medias.id', 'medias.poster')
                        ->where('choices.type', '=', $type)
                        ->where('choices.user_id', '=', $user_id)
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
        $choices = Choice::where('type', $type)->get();
        return view('choices.edit', compact('choices'));
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
        return redirect()->route('choices.index')->with('success', 'Choice has been deleted');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }  
}
