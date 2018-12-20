@extends( 'layout' )

@section( 'title' )
    Actors index
@stop

@section( 'content' )
    <actors-index :actors="{{ json_encode( $actors ) }}"></actors-index>
@stop
