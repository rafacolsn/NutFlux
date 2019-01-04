@extends( 'layout' )

@section( 'title' )
{{ $account->email }}
@stop

@section( 'content' )
<form method="post" action="/accounts/{{$account->id}}">
    @csrf
    @method("PATCH")
    <input type="text" name="email" value="{{ $account->email }}">
    <button type="submit">edit</button>

</form>
@stop