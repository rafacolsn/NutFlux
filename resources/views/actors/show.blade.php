@extends( 'layout' )

@section( 'title' )
{{ $actorsObj->firstname.' '.$actorsObj->lastname }}
@stop

@section( 'content' )
    <actors-show :actor="{{ json_encode($actorsObj) }}" :choices="{{ json_encode( $choices ) }}"></actors-show>

@stop
