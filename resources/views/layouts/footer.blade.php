<footer class="bg-blue-900 text-white py-16 mt-20 relative overflow-hidden">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-blue-700">
        <!-- Explore Section -->
        <div class="mb-8 sm:mb-0">
            <h3 class="text-xl font-bold text-white mb-4">Explore</h3>
            <ul class="space-y-2">
                <li><a href="/" class="footer-link">Home</a></li>
                <li><a href="/research" class="footer-link">Research</a></li>
                <li><a href="/marineLife" class="footer-link">Marine life</a></li>
                <li><a href="/help" class="footer-link">Help us</a></li>
                <li><a href="/about" class="footer-link">About us</a></li>
            </ul>
        </div>

        <!-- Find Us Section -->
        <div class="mb-8 sm:mb-0">
            <h3 class="text-xl font-bold text-white mb-4">Find Us / Help us</h3>
            <ul class="space-y-2">
                <li><a href="/about" class="footer-link">Our Mission</a></li>
                <li><a href="/about" class="footer-link">Contact</a></li>
                <li><a href="/help" class="footer-link">Donate</a></li>
            </ul>
        </div>

        <!-- Latest Articles Section -->
        <div>
            <h3 class="text-xl font-bold text-white mb-4">Latest Articles</h3>
            <ul class="space-y-2">
                <li><a href="/research/coral-kingdoms" class="footer-link">Coral Kingdoms</a></li>
                <li><a href="/research/coastal-waters" class="footer-link">Coastal Waters</a></li>
                <li><a href="/research/abyssal-zones" class="footer-link">Abyssal Zones</a></li>
                <li><a href="/research/kelp-forests" class="footer-link">Kelp Forests</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright and Social Icons -->
    <div class="w-4/5 m-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left pt-6">
        <p class="text-sm text-blue-200 mb-4 md:mb-0">&copy; 2023 {{ config('app.name') }}. All Rights Reserved.</p>
        <div class="flex space-x-4">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>

<style>
    .footer-link {
        color: #93c5fd;
        /* Light blue for links */
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #ffffff;
        /* White on hover */
    }

    .social-icon {
        background-color: rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .social-icon:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    .social-icon i {
        font-size: 18px;
    }
</style>