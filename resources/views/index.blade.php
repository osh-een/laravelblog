@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen">
        <!-- Background Image Container -->
        <div class="background-image absolute inset-0 z-0">
            <div class="bg-hero-overlay"></div>

            <!-- Content Container -->
            <div class="relative z-10 pt-40 pb-28 px-4 min-h-screen flex items-center">
                <div class="max-w-5xl mx-auto text-center space-y-8 w-full">
                    <div class="inline-block bg-white/10 backdrop-blur-sm px-8 py-4 rounded-full">
                        <span class="text-blue-100 text-lg font-semibold">🌊 Protecting Marine Life Since 2023</span>
                    </div>

                    <h1 class="text-6xl md:text-8xl font-bold text-white mb-8 animate-fade-in-up ocean-text-shadow">
                        Guardians of the Blue
                    </h1>

                    <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto bg-black/30 px-4 py-2 rounded-lg">
                        Exploring and protecting Earth's final frontier - our oceans
                    </p>

                    <div class="flex justify-center gap-4 flex-wrap">
                        <a href="/blog" class="hero-cta marine-gradient text-white hover:bg-blue-800">
                            Explore Journeys
                        </a>
                        <a href="/register" class="hero-cta bg-white text-blue-900 hover:bg-blue-50">
                            Join the Movement
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Ecosystems Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-blue-900 mb-16">
                Marvels of the Deep
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Coral Kingdoms -->
                <article class="ecosystem-card">
                    <div class="card-image"
                        style="background-image: url('/images/9d917bec1fe5feb863b3064ef3f1e84e505e0ccadbd1d3b421e34f0aae966e49.jpg')">
                        <div class="card-overlay"></div>
                        <h3 class="card-title">Coral Kingdoms</h3>
                    </div>
                    <div class="ecosystem-description">
                        <p class="text-gray-700 text-lg text-center px-4 py-3 leading-relaxed">
                            Vibrant underwater cities teeming with life
                        </p>
                    </div>
                </article>

                <!-- Kelp Forests -->
                <article class="ecosystem-card">
                    <div class="card-image"
                        style="background-image: url('/images/kelp_forest_douglas_klug_photo_lgdr.jpeg')" alt="hello">
                        <div class="card-overlay"></div>
                        <h3 class="card-title">Kelp Forests</h3>
                    </div>
                    <div class="ecosystem-description">
                        <p class="text-gray-700 text-lg text-center px-4 py-3 leading-relaxed">
                            Towering underwater ecosystems
                        </p>
                    </div>
                </article>

                <!-- Abyssal Zones -->
                <article class="ecosystem-card">
                    <div class="card-image" style="background-image: url('/images/Orpheus-underwater.jpg')">
                        <div class="card-overlay"></div>
                        <h3 class="card-title">Abyssal Zones</h3>
                    </div>
                    <div class="ecosystem-description">
                        <p class="text-gray-700 text-lg text-center px-4 py-3 leading-relaxed">
                            Mysteries of the deep sea
                        </p>
                    </div>
                </article>

                <!-- Coastal Waters -->
                <article class="ecosystem-card">
                    <div class="card-image" style="background-image: url('/images/tnc_21503931.jpg')">
                        <div class="card-overlay"></div>
                        <h3 class="card-title">Coastal Waters</h3>
                    </div>
                    <div class="ecosystem-description">
                        <p class="text-gray-700 text-lg text-center px-4 py-3 leading-relaxed">
                            Where land meets sea
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <!-- Earth's Surface Stat -->
                <div class="stat-block">
                    <div class="stat-number">71%</div>
                    <div class="stat-label">Of Earth's Surface</div>
                    <p class="stat-description">Dominated by vast oceans</p>
                </div>

                <!-- Marine Species Stat -->
                <div class="stat-block">
                    <div class="stat-number">230,000+</div>
                    <div class="stat-label">Discovered Marine Species</div>
                    <p class="stat-description">With countless more yet to be found</p>
                </div>

                <!-- Unexplored Stat -->
                <div class="stat-block">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Of the Ocean Remains Uncharted</div>
                    <p class="stat-description">A mysterious frontier waiting to be explored</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Research Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <article class="research-card">
                <figure class="research-image">
                    <img src="/images/Gili-Shark-Conservation-166-1024x683.jpg" alt="Coral restoration research"
                        class="wave-effect">
                </figure>
                <div class="p-12">
                    <span class="text-blue-600 font-bold uppercase text-sm">🔬 Conservation Breakthrough</span>
                    <h2 class="text-4xl font-bold text-gray-900 my-6">Reviving Coral Reefs</h2>
                    <div class="text-gray-600 text-lg mb-8">
                        <p>Our marine biologists are pioneering revolutionary coral propagation techniques...</p>
                    </div>
                    <a href="blog/reviving-coral-reefs-2" class="research-cta">
                        Read Study
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-900 text-white py-16">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Make Waves of Change</h2>
            <p class="text-xl mb-8">Join our global community of ocean defenders</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/register" class="cta-button-primary">Become a Member</a>
            </div>
        </div>
    </section>
@endsection