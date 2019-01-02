@extends( 'layout' )

@section( 'title' )
    New actor
@stop

@section( 'content' )
    <actors-create csrf="{{csrf_token()}}"></actors-create>
@stop
