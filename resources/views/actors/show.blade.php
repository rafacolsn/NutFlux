@extends( 'layout' )

@section( 'title' )
{{ $actorsObj->firstname.' '.$actorsObj->lastname }}
@stop

@section( 'content' )
    <actors-show :actor="{{ json_encode($actorsObj) }}"></actors-show>
    
@stop
