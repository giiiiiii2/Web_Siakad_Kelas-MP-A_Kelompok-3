<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad - @yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="bg-gray-50">

    @include('layouts.sidebar')

    <div id="main-content" class="ml-64 pt-16"> 
        @include('layouts.header')

        <main class="p-8">
            @yield('content')
        </main>

        {{-- @include('layouts.footer') --}}
    </div>

    @stack('scripts')
</body>
</html>