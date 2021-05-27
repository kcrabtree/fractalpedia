<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Lato&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{mix ('css/style.css')}}">
        <livewire:styles />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-lato antialiased bg-gray-100 text-gray-900 text-md sm:text-lg">
        <div class="min-h-screen">
            @include('layouts.navigation')
            <main>
                <div class="max-w-7xl mx-auto lg:px-8 py-10">
                    <x-beta-banner></x-beta-banner>
                    {{ $slot }}
                </div>
            </main>
        </div>
        <livewire:scripts />
    </body>
</html>
