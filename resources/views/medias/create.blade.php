@extends( 'layout' )

@section( 'title' )
    Create a media
@stop

@section( 'content' )
    <medias-create csrf="{{ csrf_token() }}"></medias-create>

    {{-- <form method="post" action={{ route('medias.store') }}>
        @csrf
        <p>
            <label for="mediaTitle">Title</label>
            <input type="text" name="mediaTitle"  />
        </p>
        <p>
            <label for="mediaSummary">Summary</label>
            <textarea name="mediaSummary" ></textarea>
        </p>
        <p>
            <label for="mediaYear">Year</label>
            <input type="number" step="1" name="mediaYear"  />
        </p>
        <p>
            <label for="mediaTrailer">Trailer</label>
            <input type="text" name="mediaTrailer"  />
        </p>
        <p>
            <label for="mediaIsSerie">Is it part of a TV Show ?</label>
            <input type="checkbox" name="mediaIsSerie"  />
        </p>
        <p>
            <label for="mediaPoster">Poster</label>
            <input type="text" name="mediaPoster"  />
        </p>
        <p>
            <label for="mediaDirector">Director</label>
            <input type="text" name="mediaDirector"  />
        </p>
        <p>
            <label for="mediaProducer">Producer</label>
            <input type="text" name="mediaProducer"  />
        </p>

        

        <button type="submit">create</button>   
    </form> --}}
@stop
