@extends( 'layout' )

@section( 'title' )
    {{ $actor -> firstname }} {{ $actor -> lastname }}
@stop

@section( 'content' )
    <actors-show :actor="{{ json_encode( $actor ) }}"></actors-show>
@stop
