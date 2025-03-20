{{-- @extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen bg-gradient-to-br from-blue-900 via-blue-700 to-blue-600">
    <div class="absolute inset-0 z-0">
        <img src="/images/vecteezy_the-blue-underwater-sea-with_22967094.jpg"
            class="w-full h-full object-cover opacity-15" alt="Underwater ocean scene">
    </div>

    <div class="relative z-10 pt-40 pb-28 px-4">
        <div class="max-w-5xl mx-auto text-center space-y-8">
            <div class="inline-block bg-white/10 backdrop-blur-sm px-8 py-4 rounded-full">
                <span class="text-blue-100 text-lg font-semibold">🌊 Protecting Marine Life Since 2023</span>
            </div>

            <h1
                class="text-6xl md:text-8xl font-bold text-white mb-8 animate-fade-in-up bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
                Guardians of the Blue
            </h1>

            <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto bg-black/30 px-4 py-2 rounded-lg">
                Exploring and protecting Earth's final frontier - our oceans
            </p>

            <div class="flex justify-center space-x-4">
                <a href="/blog" class="hero-cta">
                    Explore Journeys
                </a>
                <a href="/conservation" class="hero-cta bg-white text-blue-900 hover:bg-blue-100">
                    Join the Movement
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Ecosystems Section -->
<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-16">
            Marvels of the Deep
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Coral Kingdoms Card -->
            <div class="ecosystem-card">
                <div class="card-image"
                    style="background-image: url('https://cdn.pixabay.com/photo/2016/11/14/05/21/ocean-1822474_1280.jpg')">
                    <div class="card-overlay"></div>
                    <h3 class="card-title">Coral Kingdoms</h3>
                </div>
                <p class="card-description">Vibrant underwater cities teeming with life</p>
            </div>

            <!-- Kelp Forests Card -->
            <div class="ecosystem-card">
                <div class="card-image"
                    style="background-image: url('https://cdn.pixabay.com/photo/2019/11/07/20/48/kelp-4609763_1280.jpg')">
                    <div class="card-overlay"></div>
                    <h3 class="card-title">Kelp Forests</h3>
                </div>
                <p class="card-description">Towering underwater ecosystems</p>
            </div>

            <!-- Abyssal Zones Card -->
            <div class="ecosystem-card">
                <div class="card-image"
                    style="background-image: url('https://cdn.pixabay.com/photo/2019/11/13/11/09/abyss-4622326_1280.jpg')">
                    <div class="card-overlay"></div>
                    <h3 class="card-title">Abyssal Zones</h3>
                </div>
                <p class="card-description">Mysteries of the deep sea</p>
            </div>

            <!-- Coastal Waters Card -->
            <div class="ecosystem-card">
                <div class="card-image"
                    style="background-image: url('https://cdn.pixabay.com/photo/2017/01/31/23/38/sea-2028307_1280.jpg')">
                    <div class="card-overlay"></div>
                    <h3 class="card-title">Coastal Waters</h3>
                </div>
                <p class="card-description">Where land meets sea</p>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-12 text-center">
            <!-- Earth's Surface Stat -->
            <div class="stat-block">
                <div class="stat-number">71%</div>
                <div class="stat-label">Earth's Surface</div>
                <p class="stat-description">Covered by oceans</p>
            </div>

            <!-- Marine Species Stat -->
            <div class="stat-block">
                <div class="stat-number">230,000+</div>
                <div class="stat-label">Marine Species</div>
                <p class="stat-description">Known to science</p>
            </div>

            <!-- Unexplored Stat -->
            <div class="stat-block">
                <div class="stat-number">95%</div>
                <div class="stat-label">Unexplored</div>
                <p class="stat-description">Of our oceans remain mysterious</p>
            </div>
        </div>
    </div>
</div>

<!-- Research Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <article class="research-card">
            <figure class="research-image">
                <img src="/images/vecteezy_the-blue-underwater-sea-with_22967094.jpg" alt="Coral restoration research">
                <figcaption class="image-caption">Underwater Photography</figcaption>
            </figure>
            <div class="research-content">
                <span class="research-tag">🔬 Conservation Breakthrough</span>
                <h2 class="research-title">Reviving Coral Reefs</h2>
                <div class="research-excerpt">
                    <p>Our marine biologists are pioneering revolutionary coral propagation techniques...</p>
                </div>
                <a href="/research/coral-restoration" class="research-cta">
                    Read Study
                    <svg class="cta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <a href="/join" class="cta-button-primary">Become a Member</a>
            <a href="/donate" class="cta-button-secondary">Support Our Mission</a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Custom Components */
    .hero-cta {
        @apply inline-flex items-center border-2 px-8 py-3 rounded-full transition-all duration-300 shadow-lg;
    }

    .ecosystem-card {
        @apply relative overflow-hidden rounded-2xl shadow-xl transform transition duration-500 hover:scale-105;
    }

    .card-image {
        @apply h-96 bg-cover bg-center relative;
    }

    .card-overlay {
        @apply absolute inset-0 bg-gradient-to-t from-blue-900 via-transparent to-transparent;
    }

    .card-title {
        @apply absolute bottom-6 left-6 text-white text-2xl font-bold;
    }

    .card-description {
        @apply p-6 text-gray-600;
    }

    .stat-block {
        @apply bg-white p-8 rounded-xl shadow-lg;
    }

    .stat-number {
        @apply text-5xl font-bold text-blue-900 mb-2;
    }

    .stat-label {
        @apply text-xl font-semibold text-gray-700 mb-2;
    }

    .stat-description {
        @apply text-gray-500 text-sm;
    }

    .research-card {
        @apply grid lg:grid-cols-2 gap-8 bg-blue-50 rounded-3xl overflow-hidden shadow-2xl;
    }

    .research-image {
        @apply relative min-h-96;
    }

    .research-image img {
        @apply w-full h-full object-cover;
    }

    .research-content {
        @apply p-12;
    }

    .research-tag {
        @apply text-blue-600 font-bold uppercase text-sm tracking-wide;
    }

    .research-title {
        @apply text-4xl font-bold text-gray-900 my-6;
    }

    .research-excerpt {
        @apply text-gray-600 text-lg mb-8;
    }

    .research-cta {
        @apply inline-flex items-center text-blue-900 font-bold hover:text-blue-700 transition-colors;
    }

    .cta-icon {
        @apply w-4 h-4 ml-2;
    }

    .cta-button-primary {
        @apply bg-white text-blue-900 px-8 py-4 rounded-full font-bold hover:bg-blue-100 transition-colors duration-300;
    }

    .cta-button-secondary {
        @apply border-2 border-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-blue-900 transition-colors duration-300;
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush --}}

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
                        <a href="/conservation" class="hero-cta bg-white text-blue-900 hover:bg-blue-50">
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
                <a href="/login" class="cta-button-primary">Become a Member</a>
                {{-- <a href="/donate" class="cta-button-secondary border-2 border-white">Support Our Mission</a> --}}
            </div>
        </div>
    </section>
@endsection