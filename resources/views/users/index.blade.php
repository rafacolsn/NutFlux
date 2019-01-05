@extends( 'layout' )

@if( session( 'success' ) )
    {{ session( 'success' ) }}
@endif

@section( 'title' )
    Users index
@stop

@section( 'content' )
    <users-index :users="{{ json_encode( $usersAll ) }}" csrf="{{ csrf_token() }}"></users-index>
    @foreach ($usersAll as $item)
        <a href="login/{{ $item->id }}"> GO !</a>
    @endforeach
    
    @stop
