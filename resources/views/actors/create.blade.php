<<<<<<< HEAD
@extends( 'layout' )

@section( 'title' )
    New actor
@stop

@section( 'content' )
    <actors-create csrf="{{csrf_token()}}"></actors-create>
    <meta name="csrf-token" content="{{ csrf_token() }}">

@stop
=======

<form method="POST" action="{{ route('actors.store') }}">
        @csrf
    <input type="text" name="firstname" placeholder="type firstname here...">
    <input type="text" name="lastname" placeholder="type lastname here...">
    <input type="text" name="picture" placeholder="paste url here...">
    <button type="submit">Go !</button>
</form>
>>>>>>> 25fb8ae0efd08d5f835be066928b4ee2d2184067
