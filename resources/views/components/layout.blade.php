<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- <body class="text-[clamp(1rem,5vw,2.5rem)]"> --}}

<body>
    <div class="bg-layer min-w-118.75"></div>
    <x-nav />
    <main class="mx-auto max-w-400 w-[90%] mt-10">
        {{ $slot }}
    </main>
</body>

</html>