<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    @include('partials.header')


    <main>
        @yield('main-content')
    </main>



    @include('partials.footer')
    @vite('resources/js/app.js')
</body>
</html>