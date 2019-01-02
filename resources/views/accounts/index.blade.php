@extends( 'layout' )

@if(session('success'))
{{session('success')}}
@endif

@section( 'title' )
    Account index
@stop

@section( 'content' )
<p> {{ $accountsAll }}</p>
    
@stop