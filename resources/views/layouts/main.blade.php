<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <a href="./">Home</a> |
        <a href="./about">About</a> | 
        <a href="./contact">Contact</a>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <small>© {{ date('Y') }}</small>
    </footer>

</body>
</html>