<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediasAll = Media::orderBy('title')->get();
        return view('medias.index', compact('mediasAll'));
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
    public function show($id)
    {
        $mediasObj = Media::find($id);
        return view('medias.show', compact('mediasObj'));
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

        $mediaIsSerie = 0;
        if ( $request -> get( 'mediaIsSerie' ) == true || $request -> get( 'mediaIsSerie' ) == 1 ) {
            $mediaIsSerie = 1;
        }
        $media = Media::find($id);

        $media->title = $request->get('mediaTitle');
        $media->summary = $request->get('mediaSummary');
        $media->year = $request->get('mediaYear');
        $media->trailer = $request->get('mediaTrailer');
        $media->is_serie = $mediaIsSerie;
        $media->poster = $request->get('mediaPoster');
        $media->director = $request->get('mediaDirector');
        $media->producer = $request->get('mediaProducer');

        $media->save();

        return redirect()->route('medias.index')->with('success','Media updated successfully');
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
