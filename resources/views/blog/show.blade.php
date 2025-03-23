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
@endsection