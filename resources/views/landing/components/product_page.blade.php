<div class="bg-gradient-to-r from-orange-500 to-red-600 py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
            Semua Produk
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto">
            Temukan koleksi lengkap rempah dan bumbu berkualitas premium untuk kebutuhan kuliner Anda
        </p>
    </div>
</div>

<div class="container mx-auto px-4 py-8" x-data="{
    selectedCategory: 'semua',
    searchQuery: '',
    sortBy: 'terpopuler',
    viewMode: 'grid',
    products: [], // Data akan di-fetch dari backend
    categories: [], // Kategori akan di-fetch dari backend

    // Fungsi untuk memuat data dari Laravel
    fetchData() {
        // Ganti URL '/api/products' dengan endpoint API Anda di Laravel
        fetch('/api/products')
            .then(res => res.json())
            .then(data => {
                console.log(data); // <- untuk cek isi
                this.products = data; // bukan data.products
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

        fetch('/api/product-categories')
            .then(res => res.json())
            .then(data => {
                console.log(data); // <- untuk cek isi
                this.categories = data; // bukan data.categories
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    },

    get filteredProducts() {
        let filtered = this.products;

        // Filter by category
        if (this.selectedCategory !== 'semua') {
            filtered = filtered.filter(product => product.category.slug === this.selectedCategory);
        }

        // Filter by search query
        if (this.searchQuery) {
            filtered = filtered.filter(product =>
                product.name.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        }

        // Sort products
        if (this.sortBy === 'terpopuler') {
            // Sesuaikan dengan data yang Anda miliki, contoh: rating
            filtered = filtered.sort((a, b) => b.rating - a.rating);
        } else if (this.sortBy === 'harga-rendah') {
            // Sesuaikan dengan data yang Anda miliki, contoh: price
            filtered = filtered.sort((a, b) => a.price - b.price);
        } else if (this.sortBy === 'harga-tinggi') {
            // Sesuaikan dengan data yang Anda miliki, contoh: price
            filtered = filtered.sort((a, b) => b.price - a.price);
        } else if (this.sortBy === 'nama') {
            filtered = filtered.sort((a, b) => a.name.localeCompare(b.name));
        }

        return filtered;
    }
}" x-init="fetchData()">

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            <div class="flex-1 max-w-md">
                <div class="relative">
                    <input type="text" x-model="searchQuery" placeholder="Cari produk..."
                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="flex flex-wrap gap-2">
                <button @click="selectedCategory = 'semua'"
                    :class="selectedCategory === 'semua' ? 'bg-orange-500 text-white' :
                        'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Semua
                </button>
                <template x-for="category in categories" :key="category.id">
                    <button @click="selectedCategory = category.slug"
                        :class="selectedCategory === category.slug ? 'bg-orange-500 text-white' :
                            'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200"
                        x-text="category.name">
                    </button>
                </template>
            </div>

            <div class="flex items-center gap-4">
                <select x-model="sortBy"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option value="terpopuler">Terpopuler</option>
                    <option value="harga-rendah">Harga Terendah</option>
                    <option value="harga-tinggi">Harga Tertinggi</option>
                    <option value="nama">Nama A-Z</option>
                </select>

                <div class="flex bg-gray-100 rounded-lg p-1">
                    <button @click="viewMode = 'grid'" :class="viewMode === 'grid' ? 'bg-white shadow-sm' : ''"
                        class="p-2 rounded-md transition-all duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z" />
                        </svg>
                    </button>
                    <button @click="viewMode = 'list'" :class="viewMode === 'list' ? 'bg-white shadow-sm' : ''"
                        class="p-2 rounded-md transition-all duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div x-show="viewMode === 'grid'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <template x-for="product in filteredProducts" :key="product.id">
            <div
                class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
                <div class="relative overflow-hidden">
                    <img :src="`/storage/${product.thumbnail}`" :alt="product.name"
                        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div class="absolute top-3 left-3 flex flex-row gap-2">
                        <template x-for="tag in product.tags" :key="tag.id">
                            <span>
                                <span x-show="tag.name.toLowerCase() === 'popular'"
                                    class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                    Popular
                                </span>
                                <span x-show="tag.name && tag.name.toLowerCase() !== 'popular'" x-text="tag.name"
                                    class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                </span>
                            </span>
                        </template>
                    </div>

                    <div
                        class="absolute top-3 right-3 transform group-hover:scale-110 transition-transform duration-300">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-2">
                            <svg class="w-5 h-5 text-gray-400 hover:text-red-500 transition-colors duration-200"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-200"
                        x-text="product.name">
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 leading-relaxed" x-text="product.description">
                    </p>

                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center">
                            <div class="flex text-yellow-400">
                                <span class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-full"
                                    x-text="product.category?.name"></span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-600">Stok: 50+</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            class="bg-orange-500 hover:bg-orange-600 text-white text-sm font-medium px-4 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                            Beli
                        </button>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <div x-show="viewMode === 'list'" class="space-y-4">
        <template x-for="(product, index) in filteredProducts" :key="product.id">
            <div
                class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl cursor-pointer">
                <div class="flex flex-col md:flex-row">
                    <div class="relative md:w-48 h-48 md:h-32 overflow-hidden">
                        <img :src="`/storage/${product.thumbnail}`" :alt="product.name"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-2 left-2 flex gap-1">
                            <template x-for="tag in product.tags" :key="tag.id">
                                <span>
                                    <span x-show="tag.name.toLowerCase() === 'popular'"
                                        class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                        Popular
                                    </span>
                                    <span x-show="tag.name && tag.name.toLowerCase() !== 'popular'" x-text="tag.name"
                                        class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                    </span>
                                </span>
                            </template>
                        </div>
                    </div>

                    <div class="flex-1 p-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-200"
                                    x-text="product.name">
                                </h3>
                                <p class="text-gray-600 mb-3 leading-relaxed" x-text="product.description">
                                </p>

                                <div class="flex items-center gap-4 mb-3">
                                    <div class="flex items-center">
                                        <span class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-full"
                                            x-text="product.category?.name"></span>
                                    </div>
                                    <span class="text-sm font-medium text-green-600">Stok: 50+</span>
                                </div>
                            </div>

                            <div class="flex flex-col items-end gap-3">
                                <span class="text-2xl font-bold text-gray-900"
                                    x-text="`Rp ${product.price ? product.price.toLocaleString() : 'N/A'}`"></span>
                                <button
                                    class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-2 rounded-full transform group-hover:scale-105 transition-all duration-200">
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <div x-show="filteredProducts.length === 0" class="text-center py-16">
        <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <h3 class="text-xl font-semibold text-gray-600 mb-2">Produk tidak ditemukan</h3>
        <p class="text-gray-500">Coba ubah kata kunci pencarian atau filter kategori</p>
    </div>

    <div class="flex justify-center mt-12">
        <div class="flex items-center space-x-2">
            <button
                class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                Sebelumnya
            </button>
            <button class="px-4 py-2 bg-orange-500 text-white rounded-lg">1</button>
            <button
                class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200">2</button>
            <button
                class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200">3</button>
            <button
                class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                Selanjutnya
            </button>
        </div>
    </div>
</div>
