@extends( 'layout' )

@if ( session('success') )
    {{ session('success') }}
@endif

@section( 'title' )
    Choices index
@stop

@section( 'content' )
    <h1>Choices index</h1>

    {{ $choices }}
@stop
