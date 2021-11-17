<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livr</title>
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-gray-100 min-h-screen min-w-full">
        @yield('content')
    </div>

    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts
</body>
</html>
