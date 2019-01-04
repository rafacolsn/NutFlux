<!-- @extends( 'layout' )

@if( session( 'success' ) )
    {{ session( 'success' ) }}
@endif

@section( 'title' )
    Accounts index
@stop

@section( 'content' )
    <accounts-index :accounts="{{ json_encode( $accountsAll ) }}" csrf="{{ csrf_token() }}"></accounts-index>
@stop -->
