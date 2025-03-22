@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-6 py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">About Us</h1>

            <div class="prose max-w-none">
                <p class="text-lg text-gray-700 mb-6">
                    [filler content]
                </p>

                <div class="my-10">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                    <p class="text-gray-600">
                        [filler content]
                    </p>
                </div>

                <div class="my-10">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Meet the Team</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Team Member 1 -->
                        <div class="flex items-center space-x-4">
                            <img src="" alt="Team member" class="w-20 h-20 rounded-full shadow-lg">
                            <div>
                                <h3 class="text-xl font-semibold">John Doe</h3>
                                <p class="text-gray-600">CEO & Founder</p>
                            </div>
                        </div>
                        <!-- Team Member 2 -->
                        <div class="flex items-center space-x-4">
                            <img src="" alt="Team member" class="w-20 h-20 rounded-full shadow-lg">
                            <div>
                                <h3 class="text-xl font-semibold">Jane Smith</h3>
                                <p class="text-gray-600">CTO</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 border-t pt-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-600">
                        Have questions? Reach out to us at
                        <a href="mailto:a@gmail.com" class="text-blue-600 hover:underline">
                            a@gmail.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection