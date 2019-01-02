@extends( 'layout' )

@section( 'title' )
{{ $accountObj->email.' '.$actorsObj->password }} 
@stop

@section( 'content' )
    <account-show :account="{{ $accountObj }}"></account-show>
    
@stop