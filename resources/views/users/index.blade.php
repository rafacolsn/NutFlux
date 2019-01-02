@extends( 'layout' )

@if(session('success'))
    {{session('success')}}
@endif

@section( 'title' )
    Users index
@stop

@section( 'content' )
    @foreach ($usersAll as $item)
    {{$item->firstname}} {{$item->lastname}}
    @endforeach
    
@stop