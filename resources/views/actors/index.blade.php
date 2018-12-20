   
@extends( 'layout' )

@if(session('success'))
{{session('success')}}
@endif

@section( 'title' )
    Actors index
@stop

@section( 'content' )
    <actors-index :actors="{{ json_encode($actorsAll) }}"></actors-index>
@stop
