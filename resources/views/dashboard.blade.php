<x-app-layout>
    <x-slot name="header">
    <h2 class="text-6xl text-gold-400 leading-tight text-center tracking-widest" style="font-family: 'Cormorant Garamond', serif;">
    {{ __('Welcome to Elegance Salon') }}
</h2>

    </x-slot>

    <div class="py-12 bg-black">
        <!-- Welcome Banner -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-gold-300 dark:bg-gold-400 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-center text-black">
                    <h3 class="text-3xl font-bold">Experience Luxury & Elegance</h3>
                    <p class="mt-2 text-lg">Your transformation starts here. Discover our premium services.</p>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl text-gold-400 font-bold mb-6 text-center">Our Services</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/hairstyling.png') }}" alt="Hair Styling" class="w-full h-40 object-cover">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <h4 class="text-lg font-semibold">Hair Styling</h4>
                        <p class="text-sm mt-1">From classic to trendy, we bring your vision to life.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/haircolor.png') }}" alt="Hair Coloring" class="w-full h-40 object-cover">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <h4 class="text-lg font-semibold">Hair Coloring</h4>
                        <p class="text-sm mt-1">Rich, vibrant colors tailored just for you.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/cure.png') }}" alt="Manicure & Pedicure" class="w-full h-40 object-cover">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <h4 class="text-lg font-semibold">Manicure & Pedicure</h4>
                        <p class="text-sm mt-1">Pamper your hands and feet with elegance.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/facial.png') }}" alt="Facial Treatments" class="w-full h-40 object-cover">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <h4 class="text-lg font-semibold">Facial Treatments</h4>
                        <p class="text-sm mt-1">Rejuvenate your skin with our tailored treatments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
