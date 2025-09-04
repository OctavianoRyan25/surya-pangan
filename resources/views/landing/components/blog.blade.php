<section class="bg-gradient-to-r from-orange-500 to-red-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog Surya Pangan</h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto">
            Temukan tips kuliner, resep tradisional, dan informasi terbaru seputar dunia rempah-rempah Indonesia
        </p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4" x-data="{
        selectedCategory: 'semua',
        searchQuery: '',
        sortBy: 'terbaru',
        loadingCategory: true,
        loadingBlogs: true,
        blogs: [],
        categories: [],
    
        fetchData() {
            // Fetch Blogs
            fetch('/api/blogs')
                .then(res => res.json())
                .then(data => {
                    this.loadingBlogs = false;
                    this.blogs = data;
                })
                .catch(error => {
                    console.error('Error fetching blogs:', error);
                    this.loadingBlogs = false;
                });
    
            // Fetch Categories
            fetch('/api/blogs-categories')
                .then(res => res.json())
                .then(data => {
                    this.loadingCategory = false;
                    this.categories = data;
                })
                .catch(error => {
                    console.error('Error fetching categories:', error);
                    this.loadingCategory = false;
                });
        },
    
        get filteredBlogs() {
            let filtered = this.blogs;
    
            // Filter by category
            if (this.selectedCategory !== 'semua') {
                filtered = filtered.filter(blog => blog.category.slug === this.selectedCategory);
            }
    
            // Filter by search query
            if (this.searchQuery) {
                filtered = filtered.filter(blog =>
                    blog.title.toLowerCase().includes(this.searchQuery.toLowerCase())
                );
            }
    
            // Sort blogs
            if (this.sortBy === 'terpopuler') {
                // Adjust to your data, e.g., 'views' or 'likes'
                filtered = filtered.sort((a, b) => (b.views || 0) - (a.views || 0));
            } else if (this.sortBy === 'terbaru') {
                filtered = filtered.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            } else if (this.sortBy === 'terlama') {
                filtered = filtered.sort((a, b) => new Date(a.created_at) - new Date(b.created_at));
            }
    
            return filtered;
        }
    }" x-init="fetchData()">
        <div class="mb-12">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex flex-wrap gap-2">
                    <button @click="selectedCategory = 'semua'"
                        :class="selectedCategory === 'semua' ? 'bg-orange-500 text-white' :
                            'bg-gray-100 text-gray-700 hover:bg-orange-50'"
                        class="px-4 py-2 rounded-full font-medium transition-all duration-200">
                        Semua
                    </button>
                    <template x-if="loadingCategory">
                        <div class="flex space-x-2">
                            <template x-for="n in 3" :key="n">
                                <div class="w-24 h-10 rounded-full bg-gray-200 animate-pulse"></div>
                            </template>
                        </div>
                    </template>
                    <template x-if="!loadingCategory" x-for="category in categories" :key="category.id">
                        <button @click="selectedCategory = category.slug"
                            :class="selectedCategory === category.slug ? 'bg-orange-500 text-white' :
                                'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                            class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 flex-shrink-0"
                            x-text="category.name">
                        </button>
                    </template>
                </div>

                <div class="flex items-center gap-4 w-full md:w-auto">
                    <div class="relative flex-grow">
                        <input type="text" placeholder="Cari artikel..." x-model="searchQuery"
                            class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent w-full md:w-64">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <div class="relative">
                        <select x-model="sortBy"
                            class="appearance-none pr-8 py-2 border border-gray-300 rounded-lg text-sm bg-white">
                            <option value="terbaru">Terbaru</option>
                            <option value="terpopuler">Terpopuler</option>
                            <option value="terlama">Terlama</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <template x-if="loadingBlogs">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="n in 6" :key="n">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden animate-pulse">
                        <div class="w-full h-48 bg-gray-200"></div>
                        <div class="p-5 space-y-3">
                            <div class="h-5 bg-gray-200 rounded w-3/4"></div>
                            <div class="h-4 bg-gray-200 rounded w-full"></div>
                            <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="h-6 w-20 bg-gray-200 rounded-full"></div>
                                <div class="h-4 w-16 bg-gray-200 rounded"></div>
                            </div>
                            <div class="mt-4 h-9 w-24 bg-gray-200 rounded-full"></div>
                        </div>
                    </div>
                </template>
            </div>
        </template>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ hoveredCard: null }">
            <template x-if="!loadingBlogs">
                <template x-for="blog in filteredBlogs" :key="blog.id">
                    <article
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl"
                        @mouseenter="hoveredCard = blog.id" @mouseleave="hoveredCard = null">
                        <div class="relative overflow-hidden">
                            <img :src="`/storage/${blog.thumbnail}`" :alt="blog.title"
                                class="w-full h-48 object-cover transition-transform duration-500"
                                :class="hoveredCard === blog.id ? 'scale-110' : 'scale-100'">
                            <div class="absolute top-4 left-4">
                                <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium"
                                    x-text="blog.category ? blog.category.name : 'Uncategorized'"></span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 transition-opacity duration-300"
                                :class="hoveredCard === blog.id ? 'opacity-100' : 'opacity-0'"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <template x-if="blog.tags">
                                    <template x-for="tag in blog.tags" :key="tag.id">
                                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-medium"
                                            x-text="tag.name"></span>
                                    </template>
                                </template>
                            </div>
                            <a :href="blog.url">
                                <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-orange-600 transition-colors duration-200"
                                    x-text="blog.title">
                                </h3>
                            </a>
                            <p class="text-gray-600 mb-4 leading-relaxed"
                                x-text="blog.description || 'No description available.'"></p>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M1 4c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2 2v12h14V6H3zm2-6h2v2H5V0zm8 0h2v2h-2V0zM5 9h2v2H5V9zm0 4h2v2H5v-2zm4-4h2v2H9V9zm0 4h2v2H9v-2zm4-4h2v2h-2V9zm0 4h2v2h-2v-2z" />
                                    </svg>
                                    <span
                                        x-text="new Date(blog.created_at).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })"></span>
                                </div>
                                <a :href="'/blogs/' + blog.slug"
                                    class="text-white mx-2 my-1 bg-orange-500 font-medium rounded-xl px-4 py-2 hover:bg-orange-600 transition-colors">Baca</a>
                            </div>
                        </div>
                    </article>
                </template>
                <template x-if="filteredBlogs.length === 0 && !loadingBlogs">
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-10 text-gray-500">
                        <p>Tidak ada artikel yang ditemukan. Coba kata kunci atau kategori lain.</p>
                    </div>
                </template>
            </template>
        </div>
    </div>
</section>
