@extends( 'layout' )

@section( 'title' )
{{ $accountObj->email }}
@stop

@section( 'content' )
<p>{{ $accountObj->email }}</p>    
@stop