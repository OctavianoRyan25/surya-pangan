<!-- Contact Section -->
<div class="max-w-6xl mx-auto mt-16">
    <!-- Added Maps and Locations Section -->
    <!-- Maps and Locations Section -->
    <div class="max-w-6xl mx-auto mt-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Lokasi Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Kunjungi toko fisik kami untuk pengalaman berbelanja yang lebih personal
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Map Container -->
            <div class="relative h-96 bg-gray-200">
                <!-- Placeholder for Google Maps -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.131214266452!2d115.18773941084902!3d-8.679069988334108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ccdd86e3f7%3A0x63139f10b4df56b3!2sCV.%20Surya%20Pangan!5e0!3m2!1sid!2sid!4v1755568795430!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="absolute inset-0">
                </iframe>

                <!-- Map overlay with location markers -->
                <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4 max-w-xs">
                    <h4 class="font-bold text-gray-900 mb-2">Toko Utama</h4>
                    <p class="text-sm text-gray-600 mb-2">Jl. Raya Surya Pangan No. 123</p>
                    <div class="flex items-center text-sm text-green-600">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        Buka sekarang
                    </div>
                </div>
            </div>

            <!-- Location Details -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Main Store -->
                    <div class="text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1zM10 6a2 2 0 0 1 4 0v1h-4V6zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2v10z" />
                            </svg>
                        </div>
                        <h4
                            class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-200">
                            Toko Utama</h4>
                        <p class="text-gray-600 text-sm mb-2">Jl. Raya Surya Pangan No. 123<br>Jakarta Selatan, DKI
                            Jakarta</p>
                        <p class="text-sm text-green-600 font-medium">Buka: 08:00 - 17:00</p>
                    </div>

                    <!-- Warehouse -->
                    <div class="text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l8 4v12H4V6l8-4zm6 16V7.5l-6-3-6 3V18h12zm-8-8h4v2h-4v-2zm0 4h4v2h-4v-2z" />
                            </svg>
                        </div>
                        <h4
                            class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-200">
                            Gudang Pusat</h4>
                        <p class="text-gray-600 text-sm mb-2">Jl. Industri Raya No. 456<br>Tangerang, Banten</p>
                        <p class="text-sm text-orange-600 font-medium">Distribusi & Grosir</p>
                    </div>

                    <!-- Online Store -->
                    <div class="text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                        </div>
                        <h4
                            class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-200">
                            Toko Online</h4>
                        <p class="text-gray-600 text-sm mb-2">Belanja dari rumah<br>Pengiriman ke seluruh Indonesia</p>
                        <p class="text-sm text-green-600 font-medium">24/7 Online</p>
                    </div>
                </div>

                <!-- Directions Button -->
                <div class="text-center mt-8">
                    <button
                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold px-8 py-4 rounded-full transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                        Dapatkan Petunjuk Arah
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
