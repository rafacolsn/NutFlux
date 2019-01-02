@extends( 'layout' )

@section( 'title' )
    Create a media
@stop

@section( 'content' )
    <medias-create csrf="{{ csrf_token() }}"></medias-create>
@stop
