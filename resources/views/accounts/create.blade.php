<form method="POST" action="{{ route('accounts.store') }}">
        @csrf
    <input type="email" name="email" placeholder="type email here...">
    <input type="text" name="password" placeholder="type password here...">
    <button type="submit">Go !</button>
</form>