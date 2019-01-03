@extends( 'layout' )

@section( 'title' )
    Create an actor
@stop

@section( 'content' )
    <actors-create csrf="{{ csrf_token() }}"></actors-create>
@stop
