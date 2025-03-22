<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-900 py-4 shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-6">
                <!-- Logo -->
                <div>
                    <a href="{{ url('/') }}"
                        class="text-2xl font-bold text-white tracking-wide hover:text-gray-300 transition">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="flex space-x-6 text-gray-300 text-sm sm:text-base">
                    <a class="px-4 py-2 rounded-lg text-white transition bg-gray-700 hover:bg-gray-600"
                        href="/">Home</a>
                    <a class="px-4 py-2 rounded-lg text-white transition bg-gray-700 hover:bg-gray-600"
                        href="/blog">Blog</a>
                    @guest
                        <a class="px-4 py-2 rounded-lg text-white transition bg-blue-600 hover:bg-blue-700"
                            href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                        @if (Route::has('register'))
                            <a class="px-4 py-2 rounded-lg text-white transition bg-gray-700 hover:bg-gray-600"
                                href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        @endif
                    @else
                        <!-- Dropdown Menu -->
                        <div class="relative">
                            <button id="dropdownButton"
                                class="flex items-center space-x-2 px-4 py-2 rounded-lg text-gray-300 hover:text-white transition focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown Content (Hidden by Default) -->
                            <div id="dropdownMenu"
                                class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg hidden z-50">
                                <a href="#"
                                    class="block px-4 py-2 rounded-lg text-gray-300 hover:bg-gray-700 transition">Profile</a>
                                <a href="#"
                                    class="block px-4 py-2 rounded-lg text-gray-300 hover:bg-gray-700 transition">Settings</a>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 rounded-lg text-red-400 hover:bg-gray-700 transition"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>

    <!-- JavaScript for Click Dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");

            dropdownButton.addEventListener("click", function () {
                dropdownMenu.classList.toggle("hidden");
            });

            // Close dropdown when clicking outside
            document.addEventListener("click", function (event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>