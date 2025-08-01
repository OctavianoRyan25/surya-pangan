<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <title>{{ __('Beranda') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 font-sans">
    <!-- Navbar -->
    <nav class="flex items-center justify-between px-6 py-4 shadow-md">
        <div class="text-xl font-bold text-blue-600">Surya Pangan</div>
        <div class="space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-600">{{ __('Beranda') }}</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">{{ __('Produk') }}</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">{{ __('Tentang Kami') }}</a>
        </div>
        <div>
            <a href="{{ url()->current() }}?lang=en"
                class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200 text-sm">🇬🇧</a>
            <a href="{{ url()->current() }}?lang=id"
                class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200 text-sm">🇮🇩</a>
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
