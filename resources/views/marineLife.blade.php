@extends('layouts.app')

@section('content')
    <div class="w-full mx-auto px-4 sm:px-8 lg:px-16 py-12">
        <!-- Page Title -->
        <div class="text-center mb-16">
            <h1 class="text-5xl sm:text-6xl font-extrabold text-gray-900">Marine Life Encyclopedia</h1>
            <p class="text-xl text-gray-600 mt-4">Explore the fascinating world of marine species.</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-16">
            <input type="text" placeholder="Search for a species..."
                class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <!-- Categories -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Categories</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Mammals</h3>
                    <p class="text-gray-600">Learn about dolphins, whales, and more.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fish</h3>
                    <p class="text-gray-600">Discover the diversity of fish species.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Coral</h3>
                    <p class="text-gray-600">Explore the colorful world of coral reefs.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Birds</h3>
                    <p class="text-gray-600">Meet seabirds and their unique adaptations.</p>
                </div>
            </div>
        </div>

        <!-- Featured Species -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Featured Species</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/dolphin.jpg') }}" alt="Dolphin"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dolphin</h3>
                    <p class="text-gray-600 mb-4">Highly intelligent and social marine mammals.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Learn More &rarr;</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/clownfish.jpg') }}" alt="Clownfish"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Clownfish</h3>
                    <p class="text-gray-600 mb-4">Colorful fish that live in symbiotic relationships with sea anemones.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Learn More &rarr;</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/coral.jpg') }}" alt="Coral" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Coral</h3>
                    <p class="text-gray-600 mb-4">Tiny organisms that build vast underwater ecosystems.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </div>
@endsection