@extends( 'layout' )

@if( session( 'success' ) )
    {{ session( 'success' ) }}
@endif

@if( session( 'error' ) )
    {{ session( 'error' ) }}
@endif

@section( 'title' )
    Users index
@stop

@section( 'content' )
    <users-index :users="{{ json_encode( $usersAll ) }}" csrf="{{ csrf_token() }}"></users-index>
@stop
