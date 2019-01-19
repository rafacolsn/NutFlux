<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Media;
use App\Actor;
use App\Choice;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        if ( !$request->session()->has('user') ) {
            return redirect('/users')->with('error', 'You have to choose your profile to see your choices');
        }
        $user =  $request->session()->get('user');
        $choices = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('choices.id as id', 'medias.title', 'medias.poster', 'choices.type', 'medias.id as media_id')
                        ->where('choices.user_id', '=', $user->id)
                        ->get();
        $mediasAll = Media::orderBy('title')->get();

        $movies = [];
        $tv_shows = [];
        foreach ( $mediasAll as $media ) {
            if ( $media -> is_serie == 0 ) {
                $movies[] = $media;
            } else {
                $tv_shows[] = $media;
            }
        }
        return view('medias.index', compact('mediasAll', 'user', 'choices', 'movies', 'tv_shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medias.create');
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
            'mediaTitle' => 'required',
            'mediaSummary' => 'required',
            'mediaYear' => 'required',
            'mediaTrailer' => 'required',
            'mediaIsSerie' => 'boolean',
            'mediaPoster' => 'required',
            'mediaDirector' => 'required',
            'mediaProducer' => 'required',
        ]);

        $mediaIsSerie = 0;
        if ( $request -> get( 'mediaIsSerie' ) == true || $request -> get( 'mediaIsSerie' ) == 1 ) {
            $mediaIsSerie = 1;
        }

        $media = new Media([
            'title' => $request->get('mediaTitle'),
            'summary'=> $request->get('mediaSummary'),
            'year'=> $request->get('mediaYear'),
            'trailer'=> $request->get('mediaTrailer'),
            'is_serie'=> $mediaIsSerie,
            'poster'=> $request->get('mediaPoster'),
            'director'=> $request->get('mediaDirector'),
            'producer'=> $request->get('mediaProducer')
          ]);
          $media->save();
          return redirect('/medias')->with('success', 'Media has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if ( !$request->session()->has('user') ) {
            return redirect('/users')->with('error', 'You have to choose your profile to see your choices');
        }
        $user =  $request->session()->get('user');
        $choices = DB::table('choices')
                        ->join('medias', 'medias.id', '=', 'choices.media_id')
                        ->select('choices.id as id', 'medias.title', 'medias.poster', 'choices.type', 'medias.id as media_id')
                        ->where('choices.user_id', '=', $user->id)
                        ->get();
        $mediasObj = Media::find($id);
        $mediasObj->actors = $mediasObj->actors()->get();
        return view('medias.show', compact('mediasObj', 'choices', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);
        return view('medias.edit', compact('media'));
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
        $this->validate($request, [
            'mediaTitle' => 'required',
            'mediaSummary' => 'required',
            'mediaYear' => 'required',
            'mediaTrailer' => 'required',
            'mediaIsSerie' => 'boolean',
            'mediaPoster' => 'required',
            'mediaDirector' => 'required',
            'mediaProducer' => 'required',
        ]);


        $media = Media::find($id);

        $media->title = $request->get('mediaTitle');
        $media->summary = $request->get('mediaSummary');
        $media->year = $request->get('mediaYear');
        $media->trailer = $request->get('mediaTrailer');
        $media->is_serie = $request->get('mediaIsSerie');
        $media->poster = $request->get('mediaPoster');
        $media->director = $request->get('mediaDirector');
        $media->producer = $request->get('mediaProducer');

        $media->save();

        return redirect('/medias/' . $media->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id);
        $media->delete();
        return redirect()->route('medias.index')->with('success', $media->title.' '.$media->year.' has been deleted');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
