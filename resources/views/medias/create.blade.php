
<form method="POST" action="{{ route('medias.store') }}">
    @csrf
<input type="text" name="title" placeholder="type title here...">
<input type="text" name="summary" placeholder="paste summary here...">
<input type="text" name="picture" placeholder="paste url here...">
<button type="submit">Go !</button>
</form>