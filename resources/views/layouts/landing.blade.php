<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <title>{{ __('Beranda') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Init Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- End Init Font --}}
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f26a1b',
                        dark: '#444',
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js (opsional untuk interaktifitas navbar dll) -->
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="bg-white text-gray-900 font-sans">
    <!-- Navbar -->
    {{-- <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('assets/images/Logo-Surya-Pangan-Trans.png') }}" alt="Logo" class="h-10">
                <span class="text-dark font-bold text-xl">Surya Pangan</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="text-dark hover:text-primary">Home</a>
                <a href="#produk" class="text-dark hover:text-primary">Produk</a>
                <a href="#about" class="text-dark hover:text-primary">Tentang</a>
                <a href="#kontak" class="text-dark hover:text-primary">Kontak</a>
            </nav>
            <!-- Switch Bahasa -->
            <div class="flex flex-row space-x-2">
                <a href="{{ url()->current() }}?lang=en"
                    class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200 text-sm flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-5 w-5"
                        viewBox="0 0 7410 3900">
                        <rect width="7410" height="3900" fill="#b22234" />
                        <path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#fff"
                            stroke-width="300" />
                        <rect width="2964" height="2100" fill="#3c3b6e" />
                        <g fill="#fff">
                            <g id="s18">
                                <g id="s9">
                                    <g id="s5">
                                        <g id="s4">
                                            <path id="s"
                                                d="M247,90 317.534230,307.082039 132.873218,172.917961H361.126782L176.465770,307.082039z" />
                                            <use xlink:href="#s" y="420" />
                                            <use xlink:href="#s" y="840" />
                                            <use xlink:href="#s" y="1260" />
                                        </g>
                                        <use xlink:href="#s" y="1680" />
                                    </g>
                                    <use xlink:href="#s4" x="247" y="210" />
                                </g>
                                <use xlink:href="#s9" x="494" />
                            </g>
                            <use xlink:href="#s18" x="988" />
                            <use xlink:href="#s9" x="1976" />
                            <use xlink:href="#s5" x="2470" />
                        </g>
                    </svg>
                </a>
                <a href="{{ url()->current() }}?lang=id"
                    class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200 text-sm flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="h-5 w-5">
                        <rect fill="#FFF" width="3" height="2" />
                        <rect fill="#CE1126" width="3" height="1" />
                    </svg>
                </a>
            </div>
        </div>
    </header> --}}
    <nav class="sticky top-0 z-50 bg-white shadow-lg transition-all duration-300" x-data="{
        isScrolled: false,
        dropdownOpen: false,
        mobileMenuOpen: false
    }"
        x-init="window.addEventListener('scroll', () => {
            isScrolled = window.scrollY > 10;
        })" :class="isScrolled ? 'shadow-xl' : 'shadow-lg'">

        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/Logo-Surya-Pangan-Trans.png') }}" alt="">
                    </div>
                    <span class="text-xl font-bold text-gray-800">Surya Pangan</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Home</a>

                    <!-- Dropdown Menu for Produk -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button
                            class="flex items-center text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200"
                            @click="open = !open">
                            Produk
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200"
                                :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 py-2 z-50">
                            @foreach ($categories as $category)
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors duration-200">{{ $category->name }}</a>
                            @endforeach
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors duration-200">Aksesoris</a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{ route('products') }}"
                                class="block px-4 py-2 text-sm bg-orange-100 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors duration-200">Semua
                                Produk</a>
                        </div>
                    </div>

                    <a href="{{ route('about') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Tentang</a>
                    <a href="{{ route('contact') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Kontak</a>
                    <a href="{{ route('blogs') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Blog</a>
                </div>

                <!-- Language Flags & Mobile Menu Button -->
                <div class="flex items-center space-x-4">
                    <!-- Language Switcher -->
                    <div class="hidden md:flex items-center space-x-2">
                        <a href="{{ url()->current() }}?lang=en"
                            class="w-8 h-6 rounded overflow-hidden hover:scale-110 transition-transform duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-full h-full object-cover" viewBox="0 0 7410 3900">
                                <rect width="7410" height="3900" fill="#b22234" />
                                <path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#fff"
                                    stroke-width="300" />
                                <rect width="2964" height="2100" fill="#3c3b6e" />
                                <g fill="#fff">
                                    <g id="s18">
                                        <g id="s9">
                                            <g id="s5">
                                                <g id="s4">
                                                    <path id="s"
                                                        d="M247,90 317.534230,307.082039 132.873218,172.917961H361.126782L176.465770,307.082039z" />
                                                    <use xlink:href="#s" y="420" />
                                                    <use xlink:href="#s" y="840" />
                                                    <use xlink:href="#s" y="1260" />
                                                </g>
                                                <use xlink:href="#s" y="1680" />
                                            </g>
                                            <use xlink:href="#s4" x="247" y="210" />
                                        </g>
                                        <use xlink:href="#s9" x="494" />
                                    </g>
                                    <use xlink:href="#s18" x="988" />
                                    <use xlink:href="#s9" x="1976" />
                                    <use xlink:href="#s5" x="2470" />
                                </g>
                            </svg>
                        </a href="{{ url()->current() }}?lang=en">
                        <a href="{{ url()->current() }}?lang=id"
                            class="w-8 h-6 rounded overflow-hidden hover:scale-110 transition-transform duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2"
                                class="w-full h-full object-cover">
                                <rect fill="#FFF" width="3" height="2" />
                                <rect fill="#CE1126" width="3" height="1" />
                            </svg>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden w-8 h-8 flex items-center justify-center text-gray-700 hover:text-orange-500 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-2"
                class="md:hidden border-t border-gray-100 py-4">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Home</a>

                    <!-- Mobile Dropdown -->
                    <div x-data="{ mobileDropdownOpen: false }">
                        <button @click="mobileDropdownOpen = !mobileDropdownOpen"
                            class="flex items-center justify-between w-full text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">
                            Produk
                            <svg class="w-4 h-4 transition-transform duration-200"
                                :class="mobileDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="mobileDropdownOpen" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            class="mt-2 ml-4 space-y-2">
                            <a href="#"
                                class="block text-sm text-gray-600 hover:text-orange-500 transition-colors duration-200">Laptop
                                Bekas</a>
                            <a href="#"
                                class="block text-sm text-gray-600 hover:text-orange-500 transition-colors duration-200">Laptop
                                Baru</a>
                            <a href="#"
                                class="block text-sm text-gray-600 hover:text-orange-500 transition-colors duration-200">Aksesoris</a>
                            <a href="#"
                                class="block text-sm text-gray-600 hover:text-orange-500 transition-colors duration-200">Service
                                & Repair</a>
                        </div>
                    </div>

                    <a href="{{ route('about') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Tentang</a>
                    <a href="{{ route('contact') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Kontak</a>
                    <a href="{{ route('blogs') }}"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors duration-200">Blog</a>

                    <!-- Mobile Language Switcher -->
                    <div class="flex items-center space-x-2 pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-600">Language:</span>
                        <button
                            class="w-8 h-6 rounded overflow-hidden hover:scale-110 transition-transform duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-full h-full object-cover" viewBox="0 0 7410 3900">
                                <rect width="7410" height="3900" fill="#b22234" />
                                <path d="M0,450H7410m0,600H0m0,600H7410m0,600H0m0,600H7410m0,600H0" stroke="#fff"
                                    stroke-width="300" />
                                <rect width="2964" height="2100" fill="#3c3b6e" />
                                <g fill="#fff">
                                    <g id="s18">
                                        <g id="s9">
                                            <g id="s5">
                                                <g id="s4">
                                                    <path id="s"
                                                        d="M247,90 317.534230,307.082039 132.873218,172.917961H361.126782L176.465770,307.082039z" />
                                                    <use xlink:href="#s" y="420" />
                                                    <use xlink:href="#s" y="840" />
                                                    <use xlink:href="#s" y="1260" />
                                                </g>
                                                <use xlink:href="#s" y="1680" />
                                            </g>
                                            <use xlink:href="#s4" x="247" y="210" />
                                        </g>
                                        <use xlink:href="#s9" x="494" />
                                    </g>
                                    <use xlink:href="#s18" x="988" />
                                    <use xlink:href="#s9" x="1976" />
                                    <use xlink:href="#s5" x="2470" />
                                </g>
                            </svg>
                            {{-- <img src="/placeholder.svg?height=24&width=32" alt="English"
                                class="w-full h-full object-cover"> --}}
                        </button>
                        <button
                            class="w-8 h-6 rounded overflow-hidden hover:scale-110 transition-transform duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2"
                                class="w-full h-full object-cover">
                                <rect fill="#FFF" width="3" height="2" />
                                <rect fill="#CE1126" width="3" height="1" />
                            </svg>
                            {{-- <img src="/placeholder.svg?height=24&width=32" alt="Bahasa Indonesia"
                                class="w-full h-full object-cover"> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('landing.components.footer')
</body>

</html>
