
<form method="POST" action="{{ route('actors.store') }}">
        @csrf
    <input type="text" name="firstname" placeholder="type firstname here...">
    <input type="text" name="lastname" placeholder="type lastname here...">
    <input type="text" name="picture" placeholder="paste url here...">
    <button type="submit">Go !</button>
</form>