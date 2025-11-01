@extends('layouts.app')

@section('title', 'Marcelinos - Premium Venue & Hospitality')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 min-h-screen flex items-center">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 py-20">
            <div class="max-w-3xl text-white">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Experience Unmatched Hospitality at Marcelinos
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed">
                    Your premier destination for luxurious accommodations, elegant events, and memorable experiences. Where every stay becomes a cherished memory.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-amber-600 text-white px-8 py-4 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold text-lg">
                        Book Your Stay
                    </button>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-gray-900 transition duration-300 font-semibold text-lg">
                        View Our Venues
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Marcelinos</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Discover what makes our venue the perfect choice for your stay and events
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-bed text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Luxurious Accommodations</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Elegantly appointed rooms and suites designed for comfort and relaxation with premium amenities.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-glass-cheers text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Event Venues</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Perfect spaces for weddings, corporate events, and celebrations with professional event planning services.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition duration-300">
                        <i class="fas fa-concierge-bell text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Exceptional Service</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Attentive and professional staff dedicated to making your stay or event truly memorable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms & Venues Preview Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Accommodations & Venues</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Explore our luxurious rooms and versatile event spaces
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Deluxe King Room -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Deluxe King Room" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Deluxe King Room</h3>
                            <span class="bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Most Popular</span>
                        </div>
                        <p class="text-gray-600 mb-4">Spacious room with king-sized bed, work area, and premium amenities for the perfect stay.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$189/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Executive Suite -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Executive Suite" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Executive Suite</h3>
                            <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Executive</span>
                        </div>
                        <p class="text-gray-600 mb-4">Luxurious suite with separate living area, enhanced amenities, and stunning views.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">$299/night</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Grand Ballroom -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img 
                        src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        alt="Grand Ballroom" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-gray-900">Grand Ballroom</h3>
                            <span class="bg-green-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Event Space</span>
                        </div>
                        <p class="text-gray-600 mb-4">Elegant event space perfect for weddings, galas, and corporate events up to 300 guests.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-amber-600">From $2,500</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition duration-300 text-sm font-semibold">
                                Inquire
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-gray-900 text-white px-8 py-4 rounded-lg hover:bg-gray-800 transition duration-300 font-semibold text-lg">
                    View All Rooms & Venues
                </button>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Comprehensive hospitality services tailored to your needs
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hotel text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Room Booking</h3>
                    <p class="text-gray-600">Comfortable accommodations for business and leisure travelers</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ring text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Weddings & Events</h3>
                    <p class="text-gray-600">Beautiful venues and planning services for special occasions</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-briefcase text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Corporate Events</h3>
                    <p class="text-gray-600">Professional spaces for meetings, conferences, and corporate functions</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Catering Services</h3>
                    <p class="text-gray-600">Exquisite dining experiences for all your events and stays</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Plan Your Stay or Event?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Contact us today to book your accommodation or schedule a tour of our event spaces. Let us help you create unforgettable experiences.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Book Your Stay
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Plan Your Event
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">What Our Guests Say</h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Hear from our satisfied guests and clients
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            JS
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">John Smith</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        "The perfect venue for our corporate retreat. The rooms were luxurious and the event spaces exceeded our expectations."
                    </p>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            MJ
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Maria Johnson</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        "Our wedding at Marcelinos was magical! The staff was incredibly attentive and the ballroom was stunning."
                    </p>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            RD
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Robert Davis</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        "Business travel made comfortable. The executive suite had everything I needed and the service was exceptional."
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection