<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KarirNote</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/user/app.css', 'resources/js/user/app.js'])
</head>
<body class="antialiased bg-gray-100">
    <div>
        @include('user.layouts.nav')
    </div>
    <div class="max-w-screen-lg mx-auto">
        <div class="m-3 lg:m-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
