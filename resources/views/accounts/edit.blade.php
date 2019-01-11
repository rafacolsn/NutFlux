@extends( 'layout' )

@section( 'title' )
    Edit this user
@stop

@section( 'content' )
    <accounts-edit :account="{{ json_encode( $account ) }}" csrf="{{ csrf_token() }}"></accounts-edit>
@stop
