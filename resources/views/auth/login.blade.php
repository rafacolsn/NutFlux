@extends( 'layout' )

@section( 'title' )
    Login
@stop

@section( 'content' )
    <accounts-login csrf="{{csrf_token()}}"></accounts-login>
@stop
