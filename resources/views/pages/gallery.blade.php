@extends('layouts.app')

@section('title', 'Gallery - Marcelinos Visual Journey')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Our Gallery</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Take a visual journey through our exquisite accommodations, event spaces, 
                and memorable experiences at Marcelinos
            </p>
        </div>
    </section>

    <!-- Gallery Filters -->
    <section class="py-12 bg-white border-b">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="bg-amber-600 text-white px-6 py-2 rounded-lg font-semibold">
                    All Photos
                </button>
                <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-semibold">
                    Rooms & Suites
                </button>
                <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-semibold">
                    Event Spaces
                </button>
                <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-semibold">
                    Amenities
                </button>
                <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-300 font-semibold">
                    Dining
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Image 1 - Deluxe Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Deluxe King Room" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-amber-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Room</span>
                            <span class="text-gray-500 text-sm">Deluxe King</span>
                        </div>
                    </div>
                </div>

                <!-- Image 2 - Executive Suite -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Executive Suite" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Suite</span>
                            <span class="text-gray-500 text-sm">Executive</span>
                        </div>
                    </div>
                </div>

                <!-- Image 3 - Grand Ballroom -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Grand Ballroom" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Event Space</span>
                            <span class="text-gray-500 text-sm">Ballroom</span>
                        </div>
                    </div>
                </div>

                <!-- Image 4 - Restaurant -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Restaurant Dining" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Dining</span>
                            <span class="text-gray-500 text-sm">Restaurant</span>
                        </div>
                    </div>
                </div>

                <!-- Image 5 - Spa -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Spa & Wellness" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Wellness</span>
                            <span class="text-gray-500 text-sm">Spa</span>
                        </div>
                    </div>
                </div>

                <!-- Image 6 - Lobby -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Hotel Lobby" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-gray-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Lobby</span>
                            <span class="text-gray-500 text-sm">Main Entrance</span>
                        </div>
                    </div>
                </div>

                <!-- Image 7 - Pool -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Swimming Pool" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-cyan-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Pool</span>
                            <span class="text-gray-500 text-sm">Infinity Pool</span>
                        </div>
                    </div>
                </div>

                <!-- Image 8 - Conference Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Conference Room" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Business</span>
                            <span class="text-gray-500 text-sm">Conference</span>
                        </div>
                    </div>
                </div>

                <!-- Image 9 - Family Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Family Room" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Family</span>
                            <span class="text-gray-500 text-sm">Family Room</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-amber-600 text-white px-8 py-4 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold text-lg">
                    Load More Photos
                </button>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Virtual Tour</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Experience Marcelinos through our immersive virtual tour
                </p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl overflow-hidden shadow-2xl">
                <img 
                    src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                    alt="Hotel Virtual Tour" 
                    class="w-full h-96 object-cover"
                >
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Virtual Tour Available</h3>
                    <p class="text-gray-600 mb-4">Contact us to schedule a personalized virtual tour of our property</p>
                    <button class="bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold">
                        Schedule Tour
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Inspired by What You See?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Experience the beauty and luxury of Marcelinos in person. Book your stay or schedule a tour today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Book Your Stay
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Schedule Tour
                </button>
            </div>
        </div>
    </section>
@endsection