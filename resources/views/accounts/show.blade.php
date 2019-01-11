@extends( 'layout' )

@section( 'title' )
{{ $accountObj->email }} 
@stop

@section( 'content' )
    <accounts-show :account="{{ json_encode($accountObj) }}" csrf="{{ csrf_token()}}" :users="{{json_encode($users)}}"></accounts-show>
@stop

