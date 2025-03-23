@extends('layouts.app')

@section('content')
    <div class="w-full mx-auto px-4 sm:px-8 lg:px-16 py-12">
        <!-- Introduction Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl sm:text-6xl font-extrabold text-gray-900">How You Can Help</h1>
            <p class="text-xl text-gray-600 mt-4">Small actions can make a big difference for our oceans.</p>
        </div>

        <!-- Ways to Help Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Ways to Help</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Reduce Plastic Use</h3>
                    <p class="text-gray-600">Avoid single-use plastics and opt for reusable alternatives.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Support Sustainable Seafood</h3>
                    <p class="text-gray-600">Choose seafood that is sustainably sourced.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Donate to Marine Charities</h3>
                    <p class="text-gray-600">Support organizations working to protect our oceans.</p>
                </div>
            </div>
        </div>
    </div>
@endsection