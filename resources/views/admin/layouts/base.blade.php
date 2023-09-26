<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#f3f4f6">
    <title>KarirNote</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div x-data="{ sidebarOpen: false }" class="flex min-h-screen bg-gray-100">
        @include('admin.layouts.sidebar')

        <div class="flex flex-col flex-1 overflow-hidden">
            @include('admin.layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container px-6 py-8 mx-auto">
                    <h1>sfasfasdf</h1>
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
