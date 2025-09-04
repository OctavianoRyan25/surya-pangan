<!-- Products and Categories Section -->
<div class="max-w-6xl mx-auto mt-16">
    <div class="text-center mb-12 mx-2">
        <h2 class="text-2xl md:text-5xl font-bold text-gray-600 mb-4">
            Produk & Kategori
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Temukan berbagai pilihan rempah dan bumbu berkualitas premium untuk kebutuhan kuliner Anda
        </p>
    </div>

    <!-- Categories Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12 mx-2" x-data="{}">

        @foreach ($categories as $category)
            <a href="{{ route('products.category', $category->slug) }}"
                class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer"
                x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="relative h-48 bg-gradient-to-br from-orange-400 to-orange-600 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors duration-300">
                    </div>
                    <img src="{{ asset('assets/images/category.jpg') }}" alt="{{ $category->name }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <div
                            class="bg-white/90 backdrop-blur-sm rounded-full p-2 transform group-hover:rotate-12 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-500" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3
                        class="text-xl font-bold text-gray-600 mb-2 group-hover:text-orange-600 transition-colors duration-200">
                        {{ $category->name }}
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $category->description }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-orange-600 bg-orange-50 px-3 py-1 rounded-full">
                            {{ $category->products_count }} Produk
                        </span>
                        <div class="transform group-hover:translate-x-2 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Call to Action -->
    <div class="text-center bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl p-8 text-white mx-2">
        <h3 class="text-2xl md:text-3xl font-bold mb-4">
            Siap Merasakan Perbedaannya?
        </h3>
        <p class="text-lg mb-6 text-orange-100 max-w-2xl mx-auto">
            Jelajahi seluruh koleksi produk kami dan temukan rempah berkualitas premium untuk dapur Anda
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}"
                class="bg-white text-orange-600 font-semibold px-8 py-3 rounded-full hover:bg-orange-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                Lihat Semua Produk
            </a>
            <button
                class="border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white hover:text-orange-600 transition-all duration-200">
                Hubungi Kami
            </button>
        </div>
    </div>
</div>
