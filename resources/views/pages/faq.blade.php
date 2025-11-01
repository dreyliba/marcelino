@extends('layouts.app')

@section('title', 'FAQ - Marcelinos Frequently Asked Questions')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-linear-to-r from-gray-900 to-gray-800 py-20">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">FAQ</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Find answers to commonly asked questions about your stay at Marcelinos
            </p>
        </div>
    </section>

    <!-- FAQ Search -->
    <section class="py-12 bg-white border-b">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Search for answers..." 
                        class="w-full px-6 py-4 border border-gray-300 rounded-2xl focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-100"
                    >
                    <i class="fas fa-search absolute right-6 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Browse by Category</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Find answers organized by topic
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bed text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Accommodations</h3>
                    <p class="text-gray-600 text-sm">Rooms, suites, and amenities</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ring text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Events & Weddings</h3>
                    <p class="text-gray-600 text-sm">Planning and hosting events</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Dining & Catering</h3>
                    <p class="text-gray-600 text-sm">Restaurant and catering services</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-question-circle text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">General Info</h3>
                    <p class="text-gray-600 text-sm">Policies and general questions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">Frequently Asked Questions</h2>

                <!-- Accommodation FAQs -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-bed text-amber-600 mr-3"></i>
                        Accommodations
                    </h3>
                    <div class="space-y-4">
                        <!-- FAQ 1 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">What time is check-in and check-out?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Check-in time is 3:00 PM and check-out time is 11:00 AM. Early check-in and late check-out may be available upon request, subject to availability and additional charges.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Do you offer room service?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Yes, we offer 24-hour room service with an extensive menu featuring local and international cuisine. Room service is available from 6:00 AM to 11:00 PM for hot meals, with limited options available overnight.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Are pets allowed?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    We welcome well-behaved pets in designated pet-friendly rooms. A pet fee of $50 per night applies, and certain restrictions may apply. Please inform us in advance if you plan to bring a pet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking & Reservations FAQs -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-calendar-check text-blue-600 mr-3"></i>
                        Booking & Reservations
                    </h3>
                    <div class="space-y-4">
                        <!-- FAQ 4 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">What is your cancellation policy?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Cancellations made 48 hours or more before check-in receive a full refund. Cancellations within 48 hours of check-in are subject to a one-night room charge. Special event and group bookings may have different cancellation policies.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Do you require a deposit?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    A credit card is required to guarantee all reservations. For standard bookings, we pre-authorize the first night's stay. For extended stays or special events, a deposit may be required.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Can I modify my reservation?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Yes, you can modify your reservation online through our website or by contacting our reservations team. Changes are subject to availability and rate differences may apply.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amenities & Services FAQs -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-concierge-bell text-green-600 mr-3"></i>
                        Amenities & Services
                    </h3>
                    <div class="space-y-4">
                        <!-- FAQ 7 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Is parking available?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Yes, we offer complimentary valet parking for all hotel guests. Self-parking is also available in our secure underground garage. Electric vehicle charging stations are available.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Do you have a swimming pool?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Yes, we have a heated outdoor infinity pool available year-round. The pool is open from 6:00 AM to 10:00 PM. Poolside service is available during daylight hours.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-white hover:bg-gray-50 transition duration-300">
                                <span class="font-semibold text-gray-900">Is WiFi available throughout the property?</span>
                                <i class="fas fa-chevron-down text-amber-600 transition duration-300"></i>
                            </button>
                            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Yes, complimentary high-speed WiFi is available throughout the hotel, including all guest rooms, meeting spaces, and public areas. Premium business-grade WiFi is available for an additional fee.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions -->
    <section class="py-20 bg-amber-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Still Have Questions?</h2>
            <p class="text-amber-100 text-xl mb-8 max-w-2xl mx-auto">
                Our team is here to help you with any additional questions you may have
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-amber-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold text-lg">
                    Contact Us
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-amber-600 transition duration-300 font-semibold text-lg">
                    Call Now
                </button>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Simple accordion functionality
    document.addEventListener('DOMContentLoaded', function() {
        const faqButtons = document.querySelectorAll('.border button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Toggle content visibility
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    content.style.display = 'block';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });
    });
</script>
@endpush