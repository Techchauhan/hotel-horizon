<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Horizon')</title>
    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navbar --}}
   <x-navbar/>

    {{-- Dynamic Content --}}
    <div class="web-content">
        @yield('web-content')
    </div>

    {{-- Footer --}}
    <x-footer/>

</body>
</html>
