<nav x-data="{ open: false }" class="bg-white border-b-2 border-gray-200">
    {{-- Primary Nav Menu --}}
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 md:pt-4">
        <div class="flex justify-between h-16 sm:mb-2 lg:mb-0">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"></x-application-logo>
                </a>
            </div>

            {{-- Settings Dropdown --}}
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="px-6">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-base font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{Auth::user()->name}}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                             Dropdown Items
                            <x-slot name="content">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex items-center">
                            <div class="flex items-center mr-6">
                                {{-- Heroicon name: log in --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <a href="{{ route('login') }}" class="pl-1 text-sm lg:text-base inline-link">{{ __('Log In') }}</a>
                            </div>
                            <div class="flex items-center">
                                {{-- Heroicon name: identification --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                </svg>
                                <a href="{{ route('register') }}" class="pl-1 text-sm lg:text-base inline-link">{{ __('Register') }}</a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            {{-- Hamburger --}}
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Navigation Links --}}
        <div class="hidden space-x-8 sm:flex md:pt-2 pb-4 md:pb-6">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('amplifier.index')" :active="request()->routeIs(['amplifier.*', 'model.*'])">
                {{ __('Amplifiers') }}
            </x-nav-link>
            <x-nav-link :href="route('impulse-responses')" :active="request()->routeIs('impulse-responses')">
                {{ __('Impulse Responses') }}
            </x-nav-link>
            <x-nav-link :href="route('tips')" :active="request()->routeIs('tips')">
                {{ __('Tips and Tricks') }}
            </x-nav-link>
            <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About Us') }}
            </x-nav-link>
        </div>
    </div> {{-- End Primary Nav Menu --}}

    {{-- Responsive Nav Menu--}}
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('amplifier.index')" :active="request()->routeIs('amplifier.index')">
                {{ __('Amplifiers') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('impulse-responses')" :active="request()->routeIs('impulse-responses')">
                {{ __('Impulse Responses') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tips')" :active="request()->routeIs('tips')">
                {{ __('Tips and Tricks') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
        </div>

        {{-- Responsive Settings Options --}}
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user() ? Auth::user()->name : 'Keith'}}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user() ? Auth::user()->email : 'keithcrabtree@live.com'}}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="px-4 pb-3">
                <a href="{{ route('login') }}" class="md:text-sm lg:text-base inline-link">{{ __('Log In') }}</a>

                <a href="{{ route('register') }}" class="ml-4 md:text-sm lg:text-base inline-link">{{ __('Register') }}</a>
                </div>
            @endauth
        </div>
    </div> {{-- End Responsive Nav Menu --}}
</nav>
