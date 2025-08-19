{{-- <section id="home" class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 py-24 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-dark">
            {{ __('home.title') }}
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            {{ __('home.description') }}
        </p>
        <a href="#produk" class="mt-6 inline-block bg-primary text-white px-6 py-3 rounded-lg shadow hover:bg-orange-600">
            {{ __('home.cta') }}
        </a>
    </div>
</section> --}}

<section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full transform translate-x-48 -translate-y-48">
        </div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full transform -translate-x-32 translate-y-32">
        </div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Surya Pangan Logo -->
            <div class="mb-8">
                <div class="inline-flex items-center gap-3 text-white">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                        {{-- <span class="text-orange-500 text-xl font-bold">S</span> --}}
                        <img src="{{ asset('assets/images/Logo-Surya-Pangan-Trans.png') }}" alt="Surya Pangan"
                            class="w-8 h-8">
                    </div>
                    <span class="text-3xl font-bold">Surya Pangan</span>
                </div>
            </div>

            <!-- Main Heading -->
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                {{ __('home.title') }}
                <span class="block text-yellow-300">Surya Pangan</span>
            </h1>

            <!-- Subheading -->
            <p class="text-xl md:text-2xl mb-8 text-orange-100 max-w-3xl mx-auto leading-relaxed">
                {{ __('home.description') }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <button
                    class="bg-white text-orange-600 font-semibold px-8 py-4 rounded-full hover:bg-orange-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Mulai Belanja
                </button>
                <button
                    class="border-2 border-white text-white font-semibold px-8 py-4 rounded-full hover:bg-white hover:text-orange-600 transition-all duration-200">
                    Pesan disini
                </button>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">18,247+</div>
                    <div class="text-orange-100">Pelanggan Puas</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">5.0</div>
                    <div class="text-orange-100">Rating Google</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">24/7</div>
                    <div class="text-orange-100">Customer Support</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom wave -->
    <div class="absolute bottom-0 left-0 right-0 rotate-180">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-12 fill-gray-50">
            <path
                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z">
            </path>
        </svg>
    </div>
</section>
