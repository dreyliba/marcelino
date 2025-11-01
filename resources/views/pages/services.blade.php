@extends('layouts.app')

@section('title', 'Services - Marcelinos Premium Hospitality Services')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Our Services</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Experience comprehensive hospitality services designed to exceed your expectations 
                and create unforgettable moments
            </p>
        </div>
    </section>

    <!-- Main Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Premium Hospitality Services</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    From luxurious accommodations to exceptional event planning, we offer a complete range of services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Accommodation Services -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Luxury Accommodations" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-bed text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Luxury Accommodations</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Experience unparalleled comfort in our meticulously designed rooms and suites, 
                            each offering premium amenities and personalized service.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Daily housekeeping service
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                24/7 room service
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Turndown service
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Personalized concierge
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            Explore Rooms
                        </button>
                    </div>
                </div>

                <!-- Event Planning -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Event Planning" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-ring text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Event Planning</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Create unforgettable memories with our professional event planning services, 
                            from intimate gatherings to grand celebrations.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Wedding celebrations
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Corporate events
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Private parties
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Full coordination
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            Plan Your Event
                        </button>
                    </div>
                </div>

                <!-- Catering Services -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Catering Services" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-utensils text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Catering Services</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Exquisite culinary experiences crafted by our award-winning chefs, 
                            featuring locally sourced ingredients and international flavors.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Custom menu creation
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Dietary accommodations
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Professional serving staff
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Bar and beverage service
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            View Menus
                        </button>
                    </div>
                </div>

                <!-- Business Services -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Business Services" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-briefcase text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Business Services</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Professional business amenities and meeting facilities designed 
                            for productivity and success.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Meeting rooms
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Conference facilities
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Business center access
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Video conferencing
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            Business Inquiry
                        </button>
                    </div>
                </div>

                <!-- Wellness & Spa -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Wellness & Spa" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-spa text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Wellness & Spa</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Rejuvenate your mind and body with our premium wellness services 
                            and state-of-the-art spa facilities.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Spa treatments
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Fitness center
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Swimming pool
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Wellness programs
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            Book Treatment
                        </button>
                    </div>
                </div>

                <!-- Transportation -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Transportation Services" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-car text-amber-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Transportation</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Seamless transportation services including airport transfers, 
                            chauffeur services, and local transportation arrangements.
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Airport transfers
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Chauffeur services
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Car rentals
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-amber-600 mr-3"></i>
                                Local guides
                            </li>
                        </ul>
                        <button class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                            Arrange Transport
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Additional Services</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Comprehensive support services to enhance your stay
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-concierge-bell text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Concierge</h3>
                    <p class="text-gray-600">Personalized assistance with reservations, tickets, and local recommendations</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-suitcase-rolling text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Luggage Storage</h3>
                    <p class="text-gray-600">Secure luggage storage for early arrivals and late departures</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-language text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Multilingual Staff</h3>
                    <p class="text-gray-600">Staff fluent in multiple languages for international guests</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-child text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Child Care</h3>
                    <p class="text-gray-600">Professional child care services for families traveling with children</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">How We Work</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Our streamlined process ensures exceptional service from start to finish
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Consultation</h3>
                    <p class="text-gray-600">We discuss your needs and preferences to understand your vision</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Planning</h3>
                    <p class="text-gray-600">Our experts create a customized plan tailored to your requirements</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Execution</h3>
                    <p class="text-gray-600">We bring your vision to life with attention to every detail</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Follow-up</h3>
                    <p class="text-gray-600">We ensure your complete satisfaction with our services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Experience Our Services?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Contact us today to discuss how we can make your stay or event truly exceptional
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Get In Touch
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Call Now
                </button>
            </div>
        </div>
    </section>
@endsection