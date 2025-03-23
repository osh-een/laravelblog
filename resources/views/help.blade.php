@extends('layouts.app')

@section('content')
    <div class="w-full mx-auto px-4 sm:px-8 lg:px-16 py-12">
        <!-- Introduction Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl sm:text-6xl font-extrabold text-gray-900">How You Can Help</h1>
            <p class="text-xl text-gray-600 mt-4">Small actions can make a big difference for our oceans.</p>
        </div>

        <!-- Ways to Help Section -->
        <div class="mb-16 text-center">
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

        <!-- Volunteer Opportunities Section -->
        <div class="mb-16 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Volunteer Opportunities</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg mx-auto max-w-lg">
                <p class="text-gray-600 mb-4">Join hands with organizations dedicated to marine conservation.</p>
                <div class="flex justify-center">
                    <a href="https://www.volunteerworld.com/en/volunteer-abroad/marine-conservation?gad_source=1&gclid=Cj0KCQjw4v6-BhDuARIsALprm30ulKeSRaJjZgZu1fW113KYkUSVfhTcyzVgzm5Iu7c2ZfE1xlZNzd4aAmfcEALw_wcB"
                        class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">
                        Find Opportunities
                    </a>
                </div>
            </div>
        </div>

        <!-- Donation Links Section -->
        <div class="mb-16 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Donate to Marine Conservation</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg mx-auto max-w-lg">
                <p class="text-gray-600 mb-4">Your contribution can help protect marine life and habitats.</p>
                <div class="flex justify-center">
                    <a href="https://www.mcsuk.org/make-a-donation/"
                        class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">
                        Donate Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Quiz Section -->
        <div class="mb-16 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Test Your Knowledge</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg mx-auto max-w-lg">
                <p class="text-gray-600 mb-4">Take our quiz to see how much you know about marine conservation.</p>
                <div class="flex justify-center">
                    <a href="#" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Start Quiz</a>
                </div>
            </div>
        </div>

        <!-- Additional Resources Section -->
        <div class="mb-16 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Additional Resources</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Resource 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Educational Articles</h3>
                    <p class="text-gray-600 mb-4">Read articles to learn more about marine conservation.</p>
                    <div class="flex justify-center">
                        <a href="https://www.frontiersin.org/journals/marine-science/articles"
                            class="text-blue-500 hover:text-blue-700">
                            Explore Articles &rarr;
                        </a>
                    </div>
                </div>

                <!-- Resource 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Videos and Documentaries</h3>
                    <p class="text-gray-600 mb-4">Watch videos to understand the challenges facing our oceans.</p>
                    <div class="flex justify-center">
                        <a href="https://fordhaminstitute.org/national/commentary/netflix-academy-10-best-streaming-videos-aquatic-life"
                            class="text-blue-500 hover:text-blue-700">Watch Videos &rarr;</a>
                    </div>
                </div>

                <!-- Resource 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Community Forums</h3>
                    <p class="text-gray-600 mb-4">Join discussions with like-minded individuals.</p>
                    <div class="flex justify-center">
                        <a href="https://www.aquariumforums.co.uk/" class="text-blue-500 hover:text-blue-700">Join the Community &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection