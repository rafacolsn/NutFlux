@extends( 'layout' )

@section( 'title' )
    Login
@stop

@section( 'content' )
    <form action="/login" method="post">
        @csrf
        <p class="input-wrapper">
            <label class="input-label" for="email">Email:</label>
            <input class="input-field" type="email" name="email" placeholder="Your email address">
        </p>

        <p class="input-wrapper">
            <label class="input-label" for="password">Password:</label>
            <input class="input-field" type="password" name="password" placeholder="Type your password">
        </p>
        <div class="container-button">
            <button class="btn" type="submit">Login</button>
        </div>
    </form>
    <!-- <accounts-login csrf="{{csrf_token()}}"></accounts-login> -->
@stop
