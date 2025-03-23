@extends('layouts.app')

@section('content')
    <!-- Background Image with Overlay -->
    <div class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/waves.jpg')">
        <!-- Overlay to improve readability -->
        <div class="min-h-screen bg-black/70 backdrop-blur-sm">
            <!-- Header Section -->
            <div class="w-4/5 m-auto text-center py-16">
                <div class="border-b border-gray-300 pb-6">
                    <h1 class="text-6xl font-extrabold text-white">
                        Research Posts
                    </h1>
                </div>
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
                <div class="w-4/5 m-auto mt-6 px-4 py-2 bg-green-500 text-white text-center rounded-xl shadow-lg">
                    <p class="font-semibold">{{ session()->get('message') }}</p>
                </div>
            @endif

            <!-- Create Post Button (for authenticated users) -->
            @if (Auth::check())
                <div class="pt-10 w-4/5 m-auto text-center">
                    <a href="/research/create"
                        class="bg-blue-500 uppercase text-white text-xs font-extrabold py-3 px-6 rounded-3xl hover:bg-blue-600 transition duration-300">
                        Create a New Post
                    </a>
                </div>
            @endif

            <!-- Grid for Displaying Posts -->
            <div class="w-4/5 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10 py-10">
                @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                        <!-- Image -->
                        <div class="w-full h-64 overflow-hidden">
                            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h2 class="text-3xl font-semibold text-gray-800 pb-4">
                                {{ $post->title }}
                            </h2>

                            <span class="text-sm text-gray-500">
                                By <span class="font-semibold text-gray-700">{{ $post->user->name }}</span>, on {{ date('jS M Y', strtotime($post->updated_at)) }}
                            </span>

                            <p class="text-lg text-gray-700 mt-6 mb-8 leading-relaxed">
                                {{ Str::limit($post->description, 150) }}
                            </p>

                            <!-- Keep Reading Button -->
                            <a href="/research/{{ $post->slug }}"
                                class="inline-block uppercase bg-blue-500 text-white text-lg font-semibold py-3 px-6 rounded-full transition duration-300 hover:bg-blue-600">
                                Keep Reading
                            </a>

                            <!-- Edit and Delete Buttons (for post owner) -->
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <div class="flex gap-6 mt-4">
                                    <a href="/research/{{ $post->slug }}/edit"
                                        class="text-blue-600 hover:text-blue-800 font-semibold">
                                        Edit
                                    </a>

                                    <form action="/research/{{ $post->slug }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button class="text-red-500 font-semibold hover:text-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Spacer -->
            <div class="h-24"></div>
        </div>
    </div>
@endsection