<!-- Popular Products Section -->
<div class="max-w-6xl mx-auto mt-16">
    <div class="text-center mb-12 mx-2">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Produk Terpopuler
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Pilihan favorit pelanggan dengan kualitas terbaik dan cita rasa yang tak terlupakan
        </p>
    </div>

    <!-- Popular Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 mx-2">

        <!-- Product 1: Bumbu Rendang Premium -->
        @foreach ($popular_products as $product)
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"
                x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}"
                        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            POPULER
                        </span>
                    </div>
                    <div
                        class="absolute top-3 right-3 transform group-hover:scale-110 transition-transform duration-300">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3
                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-200">
                        {{ $product->name }}
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 leading-relaxed">
                        {{ $product->description }}
                    </p>
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center">
                            <div class="flex text-yellow-400">
                                <template x-for="i in 5">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </template>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(4.9)</span>
                        </div>
                        <span class="text-sm font-medium text-green-600">Stok: 50+</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-lg font-bold text-gray-900">Rp 45.000</span>
                            <span class="text-sm text-gray-500 line-through ml-1">Rp 55.000</span>
                        </div>
                        <a href="https://wa.me/1234567890"
                            class="bg-red-500 hover:bg-red-600 text-white text-sm font-medium px-4 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Product 2: Kunyit Bubuk Organik -->
        {{-- <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"
            x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
            <div class="relative overflow-hidden">
                <img src="/placeholder.svg?height=250&width=300" alt="Kunyit Bubuk Organik"
                    class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        ORGANIK
                    </span>
                </div>
                <div class="absolute top-3 right-3 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="bg-white/90 backdrop-blur-sm rounded-full p-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <h3
                    class="text-lg font-bold text-gray-900 mb-2 group-hover:text-yellow-600 transition-colors duration-200">
                    Kunyit Bubuk Organik
                </h3>
                <p class="text-gray-600 text-sm mb-3 leading-relaxed">
                    Kunyit organik berkualitas tinggi dengan kandungan kurkumin alami yang tinggi
                </p>
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                            <template x-for="i in 5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </template>
                        </div>
                        <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                    </div>
                    <span class="text-sm font-medium text-green-600">Stok: 30+</span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-lg font-bold text-gray-900">Rp 35.000</span>
                    </div>
                    <button
                        class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium px-4 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                        Beli
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Product 3: Cabai Bubuk Super Pedas -->
        {{-- <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"
            x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
            <div class="relative overflow-hidden">
                <img src="/placeholder.svg?height=250&width=300" alt="Cabai Bubuk Super Pedas"
                    class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                        SUPER PEDAS
                    </span>
                </div>
                <div class="absolute top-3 right-3 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="bg-white/90 backdrop-blur-sm rounded-full p-2">
                        <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M11.15,5.6H12.85V3.5A1.5,1.5 0 0,0 11.35,2H11.15A1.5,1.5 0 0,0 9.65,3.5V5.6H11.15M9.5,6.6V8.5A1.5,1.5 0 0,0 11,10H13A1.5,1.5 0 0,0 14.5,8.5V6.6H9.5Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <h3
                    class="text-lg font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-200">
                    Cabai Bubuk Super Pedas
                </h3>
                <p class="text-gray-600 text-sm mb-3 leading-relaxed">
                    Cabai rawit pilihan dengan tingkat kepedasan maksimal untuk pecinta makanan pedas
                </p>
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                            <template x-for="i in 5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </template>
                        </div>
                        <span class="text-xs text-gray-500 ml-1">(4.7)</span>
                    </div>
                    <span class="text-sm font-medium text-orange-600">Stok: 25+</span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-lg font-bold text-gray-900">Rp 28.000</span>
                    </div>
                    <button
                        class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                        Beli
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Product 4: Bumbu Gado-Gado Instant -->
        {{-- <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"
            x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
            <div class="relative overflow-hidden">
                <img src="/placeholder.svg?height=250&width=300" alt="Bumbu Gado-Gado Instant"
                    class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        INSTANT
                    </span>
                </div>
                <div class="absolute top-3 right-3 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="bg-white/90 backdrop-blur-sm rounded-full p-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <h3
                    class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-200">
                    Bumbu Gado-Gado Instant
                </h3>
                <p class="text-gray-600 text-sm mb-3 leading-relaxed">
                    Bumbu gado-gado siap pakai dengan rasa autentik, praktis dan mudah disiapkan
                </p>
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                            <template x-for="i in 5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </template>
                        </div>
                        <span class="text-xs text-gray-500 ml-1">(4.6)</span>
                    </div>
                    <span class="text-sm font-medium text-green-600">Stok: 40+</span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-lg font-bold text-gray-900">Rp 22.000</span>
                        <span class="text-sm text-gray-500 line-through ml-1">Rp 28.000</span>
                    </div>
                    <button
                        class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                        Beli
                    </button>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Popular Products Carousel for Mobile -->
    <div class="md:hidden" x-data="{
        currentProduct: 0,
        products: [
            { name: 'Bumbu Rendang Premium', price: 'Rp 45.000', image: 'premium rendang spice mix' },
            { name: 'Kunyit Bubuk Organik', price: 'Rp 35.000', image: 'organic turmeric powder' },
            { name: 'Cabai Bubuk Super Pedas', price: 'Rp 28.000', image: 'super spicy chili powder' },
            { name: 'Bumbu Gado-Gado Instant', price: 'Rp 22.000', image: 'instant gado-gado sauce mix' }
        ],
        nextProduct() {
            this.currentProduct = (this.currentProduct + 1) % this.products.length;
        },
        prevProduct() {
            this.currentProduct = this.currentProduct === 0 ? this.products.length - 1 : this.currentProduct - 1;
        }
    }">

        <!-- Mobile Navigation -->
        <div class="flex justify-between items-center mb-4">
            <button @click="prevProduct()"
                class="w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <div class="flex space-x-2">
                <template x-for="(product, index) in products" :key="index">
                    <button @click="currentProduct = index" class="w-2 h-2 rounded-full transition-all duration-200"
                        :class="currentProduct === index ? 'bg-orange-500' : 'bg-gray-300'">
                    </button>
                </template>
            </div>

            <button @click="nextProduct()"
                class="w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- View All Products Button -->
    <div class="text-center mt-8">
        <button
            class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white font-semibold px-8 py-4 rounded-full transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
            Lihat Semua Produk Populer
            <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
