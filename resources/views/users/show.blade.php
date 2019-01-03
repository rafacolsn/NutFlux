@extends( 'layout' )

@section( 'title' )
    {{ $usersObj -> firstname }} {{ $usersObj -> lastname }}
@stop

@section( 'content' )
    <users-show :user="{{ json_encode( $usersObj ) }}"></users-show>
@stop
