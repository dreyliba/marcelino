@extends('layouts.app')

@section('title', 'Rooms & Suites - Marcelinos Luxury Accommodations')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Rooms & Suites</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Discover our collection of meticulously designed accommodations, 
                where luxury meets comfort in every detail
            </p>
        </div>
    </section>

    <!-- Rooms Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Accommodations</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Experience unparalleled comfort in our carefully curated room selections
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- Standard Queen Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Standard Queen Room" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Standard Queen Room</h3>
                            <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Standard</span>
                        </div>
                        <p class="text-gray-600 mb-4">Comfortable and well-appointed room perfect for solo travelers or couples.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">2 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>1 Queen Bed</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$149/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Deluxe King Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Deluxe King Room" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Deluxe King Room</h3>
                            <span class="bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Most Popular</span>
                        </div>
                        <p class="text-gray-600 mb-4">Spacious room with king-sized bed, work area, and premium amenities.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">2 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>1 King Bed</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$189/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Executive Suite -->
                {{-- <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Executive Suite" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Executive Suite</h3>
                            <span class="bg-purple-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Executive</span>
                        </div>
                        <p class="text-gray-600 mb-4">Luxurious suite with separate living area and enhanced amenities.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">3 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>1 King + Sofa Bed</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$299/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Premium Suite -->
                {{-- <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Premium Suite" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Premium Suite</h3>
                            <span class="bg-red-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Premium</span>
                        </div>
                        <p class="text-gray-600 mb-4">Our most luxurious offering with master bedroom and dining space.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">4 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>2 King Beds</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$399/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Family Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Family Room" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Family Room</h3>
                            <span class="bg-green-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Family</span>
                        </div>
                        <p class="text-gray-600 mb-4">Specially designed for families with connecting rooms and extra space.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">4 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>2 Queen Beds</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$249/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Accessible Room -->
                {{-- <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Accessible King Room" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Accessible King Room</h3>
                            <span class="bg-indigo-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Accessible</span>
                        </div>
                        <p class="text-gray-600 mb-4">Fully accessible room designed for comfort and convenience.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span class="mr-4">2 Guests</span>
                            <i class="fas fa-bed mr-1"></i>
                            <span>1 King Bed</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$169/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Gallery</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Take a visual journey through our exquisite accommodations and amenities
                </p>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Room Interior" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Suite View" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Bathroom" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Living Area" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Bedroom" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Room Details" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Hotel Lobby" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Amenities" 
                        class="w-full h-48 object-cover hover:scale-105 transition duration-500"
                    >
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-amber-600 text-white px-8 py-4 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold text-lg">
                    View Full Gallery
                </button>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Room Amenities</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Every room includes these premium amenities for your comfort and convenience
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wifi text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Free WiFi</h3>
                    <p class="text-gray-600 text-sm">High-speed internet access</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tv text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Smart TV</h3>
                    <p class="text-gray-600 text-sm">Streaming services available</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-snowflake text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Air Conditioning</h3>
                    <p class="text-gray-600 text-sm">Climate control in all rooms</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-coffee text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Coffee Maker</h3>
                    <p class="text-gray-600 text-sm">Premium coffee and tea</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Book Your Stay?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Experience the perfect blend of luxury and comfort. Book your preferred room today 
                and let us make your stay unforgettable.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Check Availability
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Contact Reservations
                </button>
            </div>
        </div>
    </section>
@endsection