@extends( 'layout' )

@section( 'title' )
{{ $accountObj->email.' '.$accountObj->password }} 
@stop

@section( 'content' )
    <accounts-show :account="{{ json_encode($accountObj) }}"></accounts-show>
@stop

