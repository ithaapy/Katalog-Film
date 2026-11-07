<!DOCTYPE html>
<html lang="id" data-theme="katalog" class="h-full bg-base-200">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - Katalog Film Indonesia</title>
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen flex-col">

    <x-navbar></x-navbar>

    @unless (request()->routeIs('home', 'about'))
        <x-header>{{ $title }}</x-header>
    @endunless

    <main class="flex-1">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <x-footer></x-footer>

</body>
</html>