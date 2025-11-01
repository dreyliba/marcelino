@extends('layouts.app')

@section('title', 'Guest Reviews - Marcelinos Hospitality Experiences')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Guest Reviews</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Discover what our guests are saying about their experiences at Marcelinos
            </p>
        </div>
    </section>

    <!-- Overall Rating Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="flex justify-center items-center mb-6">
                    <div class="text-6xl font-bold text-amber-600 mr-6">4.8</div>
                    <div class="text-left">
                        <div class="flex text-amber-400 text-2xl mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-gray-600">Based on 247 reviews</p>
                        <p class="text-gray-500 text-sm">Excellent - Tripadvisor</p>
                    </div>
                </div>
            </div>

            <!-- Rating Breakdown -->
            <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">Excellent</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-amber-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                        <span class="text-gray-600 text-sm">85%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">Very Good</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 12%"></div>
                        </div>
                        <span class="text-gray-600 text-sm">12%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">Average</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-amber-400 h-2 rounded-full" style="width: 2%"></div>
                        </div>
                        <span class="text-gray-600 text-sm">2%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">Poor</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-amber-300 h-2 rounded-full" style="width: 1%"></div>
                        </div>
                        <span class="text-gray-600 text-sm">1%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Guests Say</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Real experiences from our valued guests
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            JS
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">John Smith</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "Absolutely stunning property! The attention to detail in our suite was remarkable. 
                        The staff went above and beyond to make our anniversary special."
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Stayed in Deluxe King Room • March 2024
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            MJ
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Maria Johnson</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "Our wedding at Marcelinos was magical! The event team handled every detail perfectly. 
                        The ballroom was breathtaking and the catering was exceptional."
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Hosted Wedding • February 2024
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            RD
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Robert Davis</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "Perfect for business travel. The executive suite had everything I needed, 
                        and the conference facilities were state-of-the-art. Will definitely return."
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Business Trip • January 2024
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            SW
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Sarah Wilson</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "The family room was perfect for our vacation with two kids. Spacious, clean, 
                        and the children loved the pool. Staff was incredibly friendly and helpful."
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Family Vacation • December 2023
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            TC
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Thomas Chen</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "Outstanding service from check-in to check-out. The spa treatments were rejuvenating, 
                        and the dining experience was world-class. Highly recommended!"
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Weekend Getaway • November 2023
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            EP
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Elena Perez</h4>
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        "The accessible room was perfectly designed for my needs. Every detail was considered, 
                        and the staff was incredibly accommodating. Truly inclusive hospitality."
                    </p>
                    <div class="text-gray-500 text-sm">
                        <i class="fas fa-calendar mr-2"></i>Business Conference • October 2023
                    </div>
                </div>
            </div>

            <!-- Load More Reviews -->
            <div class="text-center mt-12">
                <button class="bg-amber-600 text-white px-8 py-4 rounded-lg hover:bg-amber-700 transition duration-300 font-semibold text-lg">
                    Load More Reviews
                </button>
            </div>
        </div>
    </section>

    <!-- Review Platforms -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">We're Rated Excellent On</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-tripadvisor text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Tripadvisor</h3>
                    <div class="flex justify-center text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 text-sm">4.8/5 • 247 reviews</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-google text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Google</h3>
                    <div class="flex justify-center text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 text-sm">4.7/5 • 189 reviews</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hotel text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Booking.com</h3>
                    <div class="flex justify-center text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 text-sm">9.2/10 • 156 reviews</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ring text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">WeddingWire</h3>
                    <div class="flex justify-center text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 text-sm">5.0/5 • 89 reviews</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Experience Marcelinos?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Join our satisfied guests and create your own unforgettable experience at Marcelinos
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Book Your Stay
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Write a Review
                </button>
            </div>
        </div>
    </section>
@endsection