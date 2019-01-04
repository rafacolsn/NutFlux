@extends( 'layout' )

@section( 'title' )
    New account
@stop

@section( 'content' )
    <accounts-create csrf="{{csrf_token()}}"></accounts-create>
@stop
