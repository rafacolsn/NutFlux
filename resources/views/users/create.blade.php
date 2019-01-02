
@extends( 'layout' )

@section( 'title' )
    Create a profile
@stop

@section( 'content' )
<form method="post" action={{ route('users.store') }}>
    @csrf
    <input type="text" name="firstname">
    <input type="text" name="lastname" >
    <input type="text" name="avatar" >
</form>
@stop