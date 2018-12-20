   
@extends( 'layout' )

@if(session('success'))
{{session('success')}}
@endif

@section( 'title' )
    Liste des acteurs
@stop

@section( 'content' )
    <actors-index :actors="{{ json_encode($actorsAll) }}"></actors-index>
    
@stop
