@extends( 'layout' )

@section( 'title' )
    Create a user
@stop

@section( 'content' )
    <users-create csrf="{{ csrf_token() }}"></users-create>
@stop
