<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden">
    <div class="bg-layer"></div>
    <x-nav />
    <main class="min-w-0 mx-auto max-w-400 w-[90%] mt-10">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>