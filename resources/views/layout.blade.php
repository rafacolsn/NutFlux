<!DOCTYPE html>
<html lang="fr-BE">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="NutFlux - a movie & tv shows details app">
        <meta name="author" content="Raphaël Colson, Marie Grosjean, Emilie Lamy, Tanguy Scholtes">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/png" href="{{ URL::asset('img/favicon.ico') }}" />

        <title>@yield( 'title' ) - NutFlux</title>
    </head>
    <body>

        <nav id="nav">
            <!-- include vue component -->
            <nav-menu :user="{{ json_encode(session("user")) }}"></nav-menu>
            
        </nav>

        <main id="app">
            @yield( 'content' )
        </main> <!-- .content -->

        <script src="/js/app.js" type="text/javascript"></script>
    </body>
</html>
