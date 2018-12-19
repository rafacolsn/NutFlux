
<form method="POST" action="{{ route('actors.destroy', $actor->id) }}">
        @csrf
        @method('DELETE')
    <button type="submit">delete</button>
</form>

