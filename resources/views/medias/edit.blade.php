@extends( 'layout' )

@section( 'title' )
    Edit this media
@stop

@section( 'content' )
    <medias-edit :media="{{ json_encode( $media ) }}" csrf="{{ csrf_token() }}"></medias-edit>
@stop
