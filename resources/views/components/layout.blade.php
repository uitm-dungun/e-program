<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Current child application context</title>
</head>

<body>
    @auth
    <x-navbar></x-navbar>
    @endauth

    <main {{ $attributes }}>
        {{ $slot }}
    </main>
    @stack('scripts')
</body>

</html>
