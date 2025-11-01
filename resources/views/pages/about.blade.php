@extends('layouts.app')

@section('title', 'About Marcelinos - Our Story & Heritage')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">About Marcelinos</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Discover the story behind our commitment to exceptional hospitality and unforgettable experiences
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Image Section -->
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img 
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                            alt="Marcelinos Hotel Lobby" 
                            class="w-full h-96 object-cover"
                        >
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-amber-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">25+</span>
                    </div>
                </div>

                <!-- Content Section -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Founded with a vision to redefine luxury hospitality, Marcelinos has been creating unforgettable 
                        experiences for over two decades. Our journey began with a simple belief: every guest deserves 
                        exceptional service and memorable moments.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Today, we stand as a premier destination for discerning travelers and event organizers, 
                        combining timeless elegance with modern comforts. Our commitment to excellence has made us 
                        the preferred choice for those who appreciate the finer things in life.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 mb-2">25+</div>
                            <div class="text-gray-600">Years of Excellence</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 mb-2">10K+</div>
                            <div class="text-gray-600">Happy Guests</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 mb-2">500+</div>
                            <div class="text-gray-600">Events Hosted</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 mb-2">50+</div>
                            <div class="text-gray-600">Awards Won</div>
                        </div>
                    </div>

                    <button class="bg-amber-600 text-white px-8 py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                        Explore Our Services
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Philosophy</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Guided by principles that define our commitment to excellence
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        To provide unparalleled hospitality experiences that exceed expectations, 
                        creating lasting memories for every guest through personalized service, 
                        luxurious accommodations, and exceptional attention to detail.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Exceptional guest experiences
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Sustainable luxury practices
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Continuous innovation
                        </li>
                    </ul>
                </div>

                <!-- Vision -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        To be the most sought-after hospitality destination, setting new standards 
                        in luxury accommodation and event hosting while maintaining our heritage 
                        of warmth, elegance, and genuine care for our guests.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Industry leadership
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Global recognition
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-amber-600 mr-3"></i>
                            Community engagement
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-heart text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We strive for perfection in every detail, from room amenities to event execution, 
                        ensuring every experience exceeds expectations.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-handshake text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Integrity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We conduct our business with honesty and transparency, building trust with our 
                        guests, partners, and team members.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-users text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Community</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We believe in giving back and creating positive impact, supporting local 
                        initiatives and fostering meaningful connections.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Leadership</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    The passionate individuals dedicated to your exceptional experience
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-amber-400 to-amber-600 relative">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                        <p class="text-amber-600 font-semibold mb-4">General Manager</p>
                        <p class="text-gray-600 text-sm">
                            With over 15 years in luxury hospitality, Sarah ensures every aspect 
                            of your experience meets our highest standards.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-blue-400 to-blue-600 relative">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Chen</h3>
                        <p class="text-amber-600 font-semibold mb-4">Events Director</p>
                        <p class="text-gray-600 text-sm">
                            Michael brings creativity and precision to every event, ensuring 
                            flawless execution from intimate gatherings to grand celebrations.
                        </p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-green-400 to-green-600 relative">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Elena Rodriguez</h3>
                        <p class="text-amber-600 font-semibold mb-4">Head of Hospitality</p>
                        <p class="text-gray-600 text-sm">
                            Elena's passion for service excellence drives our team to deliver 
                            personalized experiences that create lasting impressions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Leadership</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    The passionate individuals dedicated to your exceptional experience
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Sarah Johnson - General Manager" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                        <p class="text-amber-600 font-semibold mb-4">General Manager</p>
                        <p class="text-gray-600 text-sm">
                            With over 15 years in luxury hospitality, Sarah ensures every aspect 
                            of your experience meets our highest standards.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Michael Chen - Events Director" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Chen</h3>
                        <p class="text-amber-600 font-semibold mb-4">Events Director</p>
                        <p class="text-gray-600 text-sm">
                            Michael brings creativity and precision to every event, ensuring 
                            flawless execution from intimate gatherings to grand celebrations.
                        </p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Elena Rodriguez - Head of Hospitality" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Elena Rodriguez</h3>
                        <p class="text-amber-600 font-semibold mb-4">Head of Hospitality</p>
                        <p class="text-gray-600 text-sm">
                            Elena's passion for service excellence drives our team to deliver 
                            personalized experiences that create lasting impressions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Experience Marcelinos Hospitality</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Ready to create unforgettable memories? Book your stay or schedule a tour of our event spaces today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Book Your Stay
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Contact Our Team
                </button>
            </div>
        </div>
    </section>
@endsection