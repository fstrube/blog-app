<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>The Laravel Dude</li>
                </ul>
                <ul>
                    <li><a href="{{ route('posts.index') }}">Blog</a></li>
                    <li><a href="{{ route('admin.home') }}">Admin</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &copy; Copyright {{ date('Y') }}, The Laravel Dude
        </footer>
    </body>
</html>
