@extends( 'layout' )

@section( 'title' )
    New actor
@stop

@section( 'content' )
    <actors-create csrf="{{csrf_token()}}"></actors-create>
    <meta name="csrf-token" content="{{ csrf_token() }}">

@stop
