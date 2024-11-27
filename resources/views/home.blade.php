<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-black to-gray-900 p-6">
        <div class="bg-black p-10 rounded-lg shadow-xl max-w-lg w-full text-center border border-gold">
            <h1 class="text-4xl font-semibold text-gold mb-6">
                Welcome to Elegant Hair Salon
            </h1>
            <p class="text-lg text-gray-300 mb-8">
                Book your appointment today and experience top-notch hair care services. Your style, our expertise!
            </p>
            
            @if (Route::has('login'))
                <nav class="space-y-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block bg-gold text-black px-6 py-3 rounded-md text-xl font-medium hover:bg-gold-light transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="block bg-gold text-black px-6 py-3 rounded-md text-xl font-medium hover:bg-gold-light transition">
                            Log In
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block bg-gold-dark text-black px-6 py-3 rounded-md text-xl font-medium hover:bg-gold-light transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <footer class="mt-12 text-center text-gray-400">
            <p class="text-sm">&copy; 2024 Elegant Hair Salon. All rights reserved.</p>
        </footer>
    </div>
</x-guest-layout>
