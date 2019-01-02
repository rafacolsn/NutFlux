@extends( 'layout' )

@section( 'title' )
    Edit this user
@stop

@section( 'content' )
    <users-edit :user="{{ json_encode( $user ) }}" csrf="{{ csrf_token() }}"></users-edit>
@stop
