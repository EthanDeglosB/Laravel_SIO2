<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <header>
        <h1> Ores </h1>
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <p> Copyright n/a </p>
    </footer>

</body>
</html>
