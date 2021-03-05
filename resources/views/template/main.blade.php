<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rayane Ben</title>
    @include('partials.link')
</head>
<body>
    @include('partials.header')
    @yield('content')
    <main id="main">
        @yield('main')
    </main>
    @include('partials.footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    @include('partials.script')
</body>
</html>