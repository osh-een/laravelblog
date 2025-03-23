@extends('layouts.app')

@section('content')
    <!-- Full-width container with gradient background -->
    <div class="w-full mx-auto px-4 sm:px-8 lg:px-16 py-12 bg-gradient-to-r from-blue-50 to-purple-50">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ url()->previous() }}" class="text-blue-500 hover:text-blue-700 font-semibold text-xl">
                &larr; Back to Posts
            </a>
        </div>

        <!-- Blog Title -->
        <div class="text-center mb-16">
            <h1 class="text-6xl sm:text-7xl font-extrabold text-gray-900">
                {{ $post->title }}
            </h1>
        </div>

        <!-- Blog Image -->
        <div class="mb-12 flex justify-center">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}"
                class="w-full max-w-2xl h-auto object-contain rounded-lg shadow-xl border-2 border-gray-200">
        </div>

        <!-- Author and Date -->
        <div class="text-center text-gray-600 mb-12">
            <span class="text-xl">
                By <span class="font-semibold text-gray-800">{{ $post->user->name }}</span>, Created on
                {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
        </div>

        <!-- Blog Content -->
        <div class="prose prose-2xl max-w-4xl mx-auto text-gray-700">
            <p class="mb-8 leading-relaxed text-2xl">
                {{ $post->description }}
            </p>
        </div>

        <!-- Comments Section -->
        <div class="mt-16 max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Comments</h2>

            <!-- Comment Form -->
            @auth
                <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-8">
                    @csrf
                    <textarea name="content" rows="4"
                        class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                    <button type="submit"
                        class="mt-4 bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">Submit</button>
                </form>
            @else
                <p class="text-gray-600 mb-8">Please <a href="{{ route('login') }}"
                        class="text-blue-500 hover:text-blue-700">log in</a> to leave a comment.</p>
            @endauth

            <!-- Display Comments -->
            <div class="space-y-6">
                @foreach ($post->comments as $comment)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="font-semibold text-gray-800">{{ $comment->user->name }}</div>
                            <div class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</div>
                        </div>
                        <p class="text-gray-700">{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Call-to-Action Section -->
        <div class="mt-16 text-center bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Enjoyed this post?</h2>
            <p class="text-xl text-gray-600 mb-6">Share it with your friends or leave a comment below!</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-blue-500 hover:text-blue-700">
                    <i class="fab fa-twitter text-3xl"></i>
                </a>
                <a href="#" class="text-blue-500 hover:text-blue-700">
                    <i class="fab fa-facebook text-3xl"></i>
                </a>
                <a href="#" class="text-blue-500 hover:text-blue-700">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="h-24"></div>
@endsection