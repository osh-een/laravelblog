@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-6 py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-xl p-8">
            <!-- Page Title -->
            <h1 class="text-4xl font-bold text-blue-900 mb-8">About {{ config('app.name') }}</h1>

            <div class="prose max-w-none">
                <!-- Introduction -->
                <p class="text-lg text-gray-700 mb-6">
                    At {{ config('app.name') }}, we are a global community of ocean advocates, scientists, and explorers
                    dedicated to protecting and preserving our planet's most vital resource - the oceans. Since our
                    founding in 2023, we've been at the forefront of marine conservation, working tirelessly to
                    safeguard marine ecosystems and inspire ocean stewardship.
                </p>

                <!-- Mission Section -->
                <div class="my-10">
                    <h2 class="text-2xl font-semibold text-blue-900 mb-4">Our Mission</h2>
                    <p class="text-gray-700 mb-6">
                        To protect and restore the health of our oceans through innovative research, community
                        engagement, and global partnerships. We believe in a future where oceans thrive, supporting
                        both marine life and human communities.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-blue-900 mb-2">🌊 Ocean Conservation</h3>
                            <p class="text-sm text-gray-600">
                                Protecting marine ecosystems through research and direct action
                            </p>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-purple-900 mb-2">🐠 Marine Biodiversity</h3>
                            <p class="text-sm text-gray-600">
                                Preserving the incredible diversity of life in our oceans
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Team Section -->
                <div class="my-10">
                    <h2 class="text-2xl font-semibold text-blue-900 mb-6">Meet the Crew</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Team Member 1 -->
                        <div class="flex items-center space-x-4">
                            <img src="images/woman.jpg" alt="Dr. Sarah Ocean"
                                class="w-20 h-20 rounded-full shadow-lg object-cover">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Sarah Ocean</h3>
                                <p class="text-gray-600">Marine Biologist</p>
                                <p class="text-sm text-gray-500">Coral reef specialist</p>
                            </div>
                        </div>
                        <!-- Team Member 2 -->
                        <div class="flex items-center space-x-4">
                            <img src="images/man.jpg" alt="Alex Waters"
                                class="w-20 h-20 rounded-full shadow-lg object-cover">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Alex Waters</h3>
                                <p class="text-gray-600">Ocean Explorer</p>
                                <p class="text-sm text-gray-500">Deep-sea technology expert</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="mt-12 border-t pt-8">
                    <h2 class="text-2xl font-semibold text-blue-900 mb-4">Contact {{ config('app.name') }}</h2>
                    <p class="text-gray-700 mb-4">
                        Have questions about our work or want to get involved? We'd love to hear from you!
                    </p>
                    <div class="space-y-2">
                        <p class="text-gray-700">
                            Email: <a href="mailto:contact@guardiansoftheblue.org" class="text-blue-600 hover:underline">
                                contact@oceansecho.org
                            </a>
                        </p>
                        <p class="text-gray-700">
                            Phone: <a href="tel:+1234567890" class="text-blue-600 hover:underline">
                                +1 (234) 567-890
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="h-24 bg-white"></div>
@endsection