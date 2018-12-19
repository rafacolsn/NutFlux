@extends( 'layout' )

@section( 'title' )
    Liste des acteurs
@stop

@section( 'content' )
    <actors-index :actors="{{ json_encode( $actors ) }}"></actors-index>
@stop
