{{-- <header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <img 
                        src="{{ asset('images/marcelinos-logo.png') }}" 
                        alt="Marcelinos Logo" 
                        class="h-10 w-auto"
                        onerror="this.style.display='none'"
                    >
                    <span class="text-2xl font-bold text-gray-900">Marcelino's</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="{{ request()->is('/') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Home
                </a>
                <a href="/about" class="{{ request()->is('about') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    About
                </a>
                <a href="/rooms" class="{{ request()->is('rooms') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Rooms
                </a>
                <a href="/services" class="{{ request()->is('services') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Services
                </a>
                <a href="/gallery" class="{{ request()->is('gallery') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Gallery
                </a>
                <a href="/reviews" class="{{ request()->is('reviews') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Review
                </a>
                <a href="/faq" class="{{ request()->is('faq') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    FAQ
                </a>
                
                <!-- Login Button (Show when NOT authenticated) -->
                @guest
                <a href="https://marcelino.test/app/login" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-medium flex items-center space-x-2">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-amber-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
            <a href="/" class="block {{ request()->is('/') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Home
            </a>
            <a href="/about" class="block {{ request()->is('about') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                About
            </a>
            <a href="/rooms" class="block {{ request()->is('rooms') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Rooms
            </a>
            <a href="/services" class="block {{ request()->is('services') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Services
            </a>
            <a href="/gallery" class="block {{ request()->is('gallery') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Gallery
            </a>
            <a href="/reviews" class="block {{ request()->is('reviews') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Review
            </a>
            <a href="/faq" class="block {{ request()->is('faq') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                FAQ
            </a>
            
            <!-- Mobile Login Button (Show when NOT authenticated) -->
            @guest
            <a href="https://marcelino.test/app/login" class="block bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-medium text-center  items-center justify-center space-x-2">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
            </a>
            @endguest
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    });
</script> --}}


<header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <img 
                        src="{{ asset('images/marcelinos-logo.png') }}" 
                        alt="Marcelinos Logo" 
                        class="h-10 w-auto"
                        onerror="this.style.display='none'"
                    >
                    <span class="text-2xl font-bold text-gray-900">Marcelino's</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="{{ request()->is('/') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Home
                </a>
                <a href="/about" class="{{ request()->is('about') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    About
                </a>
                <a href="/rooms" class="{{ request()->is('rooms') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Rooms
                </a>
                <a href="/services" class="{{ request()->is('services') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Services
                </a>
                <a href="/gallery" class="{{ request()->is('gallery') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Gallery
                </a>
                <a href="/reviews" class="{{ request()->is('reviews') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    Review
                </a>
                <a href="/faq" class="{{ request()->is('faq') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium transition duration-300">
                    FAQ
                </a>
                
                <!-- Dashboard Button (Show when authenticated) -->
                @auth
                <a href="https://marcelino.test/app" class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 font-medium flex items-center space-x-2">
                    {{-- <i class="fas fa-tachometer-alt"></i> --}}
                    <span>Go to Dashboard</span>
                </a>
                @endauth
                
                <!-- Login Button (Show when NOT authenticated) -->
                @guest
                <a href="https://marcelino.test/app/login" class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 font-medium flex items-center space-x-2">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
                @endguest
                
                {{-- <button class="bg-gray-900 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition duration-300 font-medium">
                    Book Now
                </button> --}}
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-amber-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
            <a href="/" class="block {{ request()->is('/') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Home
            </a>
            <a href="/about" class="block {{ request()->is('about') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                About
            </a>
            <a href="/rooms" class="block {{ request()->is('rooms') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Rooms
            </a>
            <a href="/services" class="block {{ request()->is('services') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Services
            </a>
            <a href="/gallery" class="block {{ request()->is('gallery') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Gallery
            </a>
            <a href="/reviews" class="block {{ request()->is('reviews') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                Review
            </a>
            <a href="/faq" class="block {{ request()->is('faq') ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }} font-medium">
                FAQ
            </a>
            
            <!-- Mobile Dashboard Button (Show when authenticated) -->
            @auth
            <a href="https://marcelino.test/app" class="block bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 font-medium text-center items-center justify-center space-x-2">
                {{-- <i class="fas fa-tachometer-alt"></i> --}}
                <span>Go to Dashboard</span>
            </a>
            @endauth
            
            <!-- Mobile Login Button (Show when NOT authenticated) -->
            @guest
            <a href="https://marcelino.test/app/login" class="block bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 font-medium text-center items-center justify-center space-x-2">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
            </a>
            @endguest
            
            {{-- <button class="w-full bg-gray-900 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition duration-300 font-medium">
                Book Now
            </button> --}}
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    });
</script>