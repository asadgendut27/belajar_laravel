<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Bootstrap CSS-->
    <link href={{ asset("assets/vendor/bootstrap-5.3.8.min.css") }}  rel="stylesheet" media="all">
    <!-- Bootstrap core CSS -->
    <link href = {{ asset("assets/css/theme.css") }} rel="stylesheet" />

</head>
<body>

    <header>
        <a href="<?= url('') ?>">Home</a> |
        <a href="<?= url('about') ?>">About</a> | 
        <a href="<?= url('contact') ?>">Contact</a> | 
        <a href="<?= url('posts/show') ?>">Show Data</a>
    </header>

    <hr>

    <main>
        @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
        @endif
        @yield('content')
    </main>

    <hr>

    <footer>
        <small>© {{ date('Y') }}</small>
    </footer>

</body>
</html>