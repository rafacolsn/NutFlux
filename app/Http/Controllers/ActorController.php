<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Actor;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actorsAll = Actor::orderBy('lastname')->get();
        return view('actors.index', compact('actorsAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'picture' => 'required'
        ]);

        $actor = new Actor([
            'firstname' => $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'picture'=> $request->get('picture')
          ]);
          $actor->save();
          return redirect('/actors')->with('success', 'Actor has been added');

        // Actor::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $actorsObj = Actor::find( $id );
        $actorsObj -> medias = $actorsObj -> medias() -> get();
        $user =  $request->session()->get('user');
        $choices = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('choices.id as id', 'medias.title', 'medias.poster', 'choices.type', 'medias.id as media_id')
                        ->where('choices.user_id', '=', $user->id)
                        ->get();
        return view('actors.show', compact('actorsObj', 'choices'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Actor $actor )
    {
        return view('actors.edit', compact('actor'));
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
        $request->validate([
            'actorFirstname' => 'required',
            'actorLastname' => 'required',
            'actorPicture' => 'required',
        ]);

        $actor = Actor::find($id);
        $actor->firstname = $request->get('actorFirstname');
        $actor->lastname = $request->get('actorLastname');
        $actor->picture = $request->get('actorPicture');
        $actor->save();

        return redirect()->route('actors.index')->with('success','Actor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect()->route('actors.index')->with('success', $actor->firstname.' '.$actor->lastname.' has been deleted');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
