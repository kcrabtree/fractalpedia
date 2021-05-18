<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- TODO: Decide on Lato or Open Sans and remove unused font imports, update tailwind config -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Lato&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{mix ('css/style.css')}}">
        <livewire:styles />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-lato bg-gray-background text-gray-900 text-sm">
        <header class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between px-8 py-4">
                <!-- Logo-->
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"></x-application-logo>
                </a>

                <!-- Profile-->
{{--                <div class="flex items-center">--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <div class="px-6 py-4">--}}
{{--                            @auth--}}
{{--                                <form method="POST" action="{{ route('logout') }}">--}}
{{--                                    @csrf--}}

{{--                                    <a href="{{route('logout')}}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                        {{ __('Log out') }}--}}
{{--                                    </a>--}}
{{--                                </form>--}}
{{--                            @else--}}
{{--                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

{{--                                @if (Route::has('register'))--}}
{{--                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                                @endif--}}
{{--                            @endauth--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    <a href="#">--}}
{{--                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000>d=mp"--}}
{{--                             alt="avatar" class="w-10 h-10 rounded-full">--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>

            <!-- Navbar-->
            <div class="px-8">
                <nav class="space-x-8 border-b-4 border-gray-900 pb-6">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('model.index')" :active="request()->routeIs('model.index')">
                        {{ __('Amp Models') }}
                    </x-nav-link>
                    <x-nav-link :href="route('cabs')" :active="request()->routeIs('cabs')">
                        {{ __('Cabinet IRs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('tips')" :active="request()->routeIs('tips')">
                        {{ __('Tips and Tricks') }}
                    </x-nav-link>
                </nav>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </header>
        <livewire:scripts />
    </body>
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @include('layouts.navigation')--}}

{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header ?? '' }}--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </body>--}}
</html>
