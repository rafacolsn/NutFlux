@extends( 'layout' )

@section( 'title' )
    {{ $media -> title }}
@stop

@section( 'content' )
    <medias-show :media="{{ json_encode( $media ) }}"></medias-show>
@stop
