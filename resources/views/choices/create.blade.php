<h1>Add media to choice list</h1>

<form method="post" action="/choices">
    <div>
        <label for="mediaId">Media</label>
        <select name="mediaId">
            <option value=""> </option>
            @foreach ( $medias as $media )
                <option value="{{ $media -> id }}">{{ $media -> title }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="type">List</label>
        <select name="type">
            <option value=""> </option>
            <option value="favourites">Favourites</option>
            <option value="watched">Watched</option>
            <option value="later">To watch later</option>
        </select>
    </div>
    <input type="hidden" name="userId" value="{{ $user -> id }}" />
    @csrf
    <button type="submit">Add to list</button>
</form>
