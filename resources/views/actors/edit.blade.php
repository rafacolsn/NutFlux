@extends( 'layout' )

@section( 'title' )
    Edit this actor
@stop

@section( 'content' )
    <actors-edit :actor="{{ json_encode( $actor ) }}" csrf="{{ csrf_token() }}"></actors-edit>
@stop
