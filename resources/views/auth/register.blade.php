@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-cover bg-center"
     style="background-image: url('/images/vecteezy_the-blue-underwater-sea-with_22967094.jpg');">
    
    <!-- Register form container -->
    <main class="w-full sm:max-w-lg mx-4">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white/90 backdrop-blur-sm text-gray-800 sm:rounded-md sm:shadow-lg overflow-hidden">
                    
                    <!-- Header -->
                    <header class="font-semibold bg-blue-900/80 text-white py-6 px-8">
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
                            </svg>
                            <span>{{ __('Register to ') . config('app.name') }}</span>
                        </div>
                    </header>

                    <!-- Form -->
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 py-8" method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="flex flex-wrap">
                            <label for="name" class="block text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text"
                                   class="form-input w-full rounded-lg border-2 border-blue-200 focus:border-blue-500 @error('name') border-red-500 @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   placeholder="Enter your name">

                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="form-input w-full rounded-lg border-2 border-blue-200 focus:border-blue-500 @error('email') border-red-500 @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                   placeholder="Enter your email">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="flex flex-wrap">
                            <label for="password" class="block text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="form-input w-full rounded-lg border-2 border-blue-200 focus:border-blue-500 @error('password') border-red-500 @enderror"
                                   name="password" required autocomplete="new-password"
                                   placeholder="Enter your password">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password"
                                   class="form-input w-full rounded-lg border-2 border-blue-200 focus:border-blue-500"
                                   name="password_confirmation" required autocomplete="new-password"
                                   placeholder="Confirm your password">
                        </div>

                        <!-- Submit + Login -->
                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full font-bold p-3 rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 sm:py-4">
                                {{ __('Register') }}
                            </button>

                            @if (Route::has('login'))
                                <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                    {{ __('Already have an account?') }}
                                    <a class="text-blue-500 hover:text-blue-700 font-semibold"
                                       href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>
</div>
@endsection