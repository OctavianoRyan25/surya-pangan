<!-- Added hero section for about page -->
<!-- About Hero Section -->
<section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white py-20">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full transform translate-x-48 -translate-y-48">
        </div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full transform -translate-x-32 translate-y-32">
        </div>
    </div>

    <div class="relative z-10 container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ __('about.title') }}</h1>
            <p class="text-xl md:text-2xl text-orange-100 max-w-3xl mx-auto">
                {{ __('about.description') }}
            </p>
        </div>
    </div>
</section>

<!-- Added company story section -->
<!-- Company Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">{{ __('about.story') }}</h2>
                    <div class="space-y-6 text-gray-600 leading-relaxed">
                        <p>
                            {{ __('about.story_1') }}
                        </p>
                        <p>
                            {{ __('about.story_2') }}
                        </p>
                        <p>
                            {{ __('about.story_3') }}
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/11397116.jpg') }}" alt="Surya Pangan Story"
                        class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-orange-500 text-white p-6 rounded-lg shadow-xl">
                        <div class="text-3xl font-bold">13+</div>
                        <div class="text-sm">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Added mission and vision section -->
<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">{{ __('about.vision') }}</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.visionmission_desc') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ __('about.mission') }}</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            {{ __('about.mission_1') }}
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            {{ __('about.mission_2') }}
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            {{ __('about.mission_3') }}
                        </li>
                    </ul>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ __('about.vision') }}</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ __('about.vision_desc') }}
                    </p>
                    <div class="bg-orange-50 rounded-lg p-4">
                        <p class="text-orange-800 font-medium text-center">
                            "Menghadirkan cita rasa autentik Indonesia ke setiap rumah"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Added values section -->
<!-- Our Values Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">{{ __('about.values') }}</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.values_desc') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Quality -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">{{ __('about.value_1') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.value_1_desc') }}
                    </p>
                </div>

                <!-- Authenticity -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">{{ __('about.value_2') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.value_2_desc') }}
                    </p>
                </div>

                <!-- Innovation -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">{{ __('about.value_3') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.value_3_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Added team section -->
<!-- Our Team Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">{{ __('about.team') }}</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('about.team_desc') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div
                    class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="relative mb-6">
                        <img src="/placeholder.svg?height=120&width=120&text=CEO" alt="Budi Santoso"
                            class="w-30 h-30 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 -right-2 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Budi Santoso</h3>
                    <p class="text-orange-600 font-medium mb-4">Founder & CEO</p>

                </div>

                <!-- Team Member 2 -->
                <div
                    class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="relative mb-6">
                        <img src="/placeholder.svg?height=120&width=120&text=CTO" alt="Sari Dewi"
                            class="w-30 h-30 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Sari Dewi</h3>
                    <p class="text-red-600 font-medium mb-4">Head of Quality Control</p>
                </div>

                <!-- Team Member 3 -->
                <div
                    class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="relative mb-6">
                        <img src="/placeholder.svg?height=120&width=120&text=CMO" alt="Ahmad Rizki"
                            class="w-30 h-30 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 -right-2 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Ahmad Rizki</h3>
                    <p class="text-orange-600 font-medium mb-4">Marketing Director</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Added achievements section -->
<!-- Achievements Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pencapaian Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Prestasi dan pengakuan yang kami raih berkat kepercayaan pelanggan dan dedikasi tim
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Achievement 1 -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">18,247+</div>
                    <div class="text-gray-600">Pelanggan Puas</div>
                </div>

                <!-- Achievement 2 -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">5.0</div>
                    <div class="text-gray-600">Rating Google</div>
                </div>

                <!-- Achievement 3 -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">50+</div>
                    <div class="text-gray-600">Produk Unggulan</div>
                </div>

                <!-- Achievement 4 -->
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">13+</div>
                    <div class="text-gray-600">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Added CTA section -->
<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Bergabunglah dengan Keluarga Besar Surya Pangan
            </h2>
            <p class="text-xl text-orange-100 mb-8 max-w-3xl mx-auto">
                Rasakan perbedaan kualitas premium dalam setiap hidangan Anda. Hubungi kami hari ini dan temukan mengapa
                ribuan keluarga mempercayai Surya Pangan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-white text-orange-600 font-semibold px-8 py-4 rounded-full hover:bg-orange-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Hubungi Kami
                </button>
                <button
                    class="border-2 border-white text-white font-semibold px-8 py-4 rounded-full hover:bg-white hover:text-orange-600 transition-all duration-200">
                    Lihat Produk
                </button>
            </div>
        </div>
    </div>
</section>
