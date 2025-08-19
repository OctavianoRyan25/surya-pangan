<!-- Blog Header -->
<section class="bg-gradient-to-r from-orange-500 to-red-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog Surya Pangan</h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto">
            Temukan tips kuliner, resep tradisional, dan informasi terbaru seputar dunia rempah-rempah Indonesia
        </p>
    </div>
</section>

<!-- Blog Content -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <!-- Filter & Search -->
        <div class="mb-12" x-data="{ selectedCategory: 'all' }">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Category Filter -->
                <div class="flex flex-wrap gap-2">
                    <button @click="selectedCategory = 'all'"
                        :class="selectedCategory === 'all' ? 'bg-orange-500 text-white' :
                            'bg-white text-gray-700 hover:bg-orange-50'"
                        class="px-4 py-2 rounded-full border border-orange-200 transition-all duration-200 font-medium">
                        Semua
                    </button>
                    @foreach ($categories as $category)
                        <a href="#" @click="selectedCategory = '{{ $category->slug }}'"
                            :class="selectedCategory === '{{ $category->slug }}' ? 'bg-orange-500 text-white' :
                                'bg-white text-gray-700 hover:bg-orange-50'"
                            class="px-4 py-2 rounded-full border border-orange-200 transition-all duration-200 font-medium">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

                <!-- Search -->
                <div class="relative">
                    <input type="text" placeholder="Cari artikel..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent w-64">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ hoveredCard: null }">
            <!-- Blog Post 1 -->
            @foreach ($blogs as $i => $blog)
                <article
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl"
                    @mouseenter="hoveredCard = {{ $i }}" @mouseleave="hoveredCard = null">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="Rahasia Bumbu Rendang Autentik"
                            class="w-full h-48 object-cover transition-transform duration-500"
                            :class="hoveredCard === {{ $i }} ? 'scale-110' : 'scale-100'">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">{{ $blog->category->name }}</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 transition-opacity duration-300"
                            :class="hoveredCard === {{ $i }} ? 'opacity-100' : 'opacity-0'"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            @foreach ($blog->tags as $tag)
                                <span
                                    class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-medium">#{{ $tag->name }}</span>
                            @endforeach
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 mb-3 hover:text-orange-600 transition-colors duration-200 cursor-pointer">
                            {{ $blog->title }}
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            {!! $blog->body !!}
                        </p>
                        <div class="flex items-center justify-between text-sm text-blue-500">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M1 4c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2 2v12h14V6H3zm2-6h2v2H5V0zm8 0h2v2h-2V0zM5 9h2v2H5V9zm0 4h2v2H5v-2zm4-4h2v2H9V9zm0 4h2v2H9v-2zm4-4h2v2h-2V9zm0 4h2v2h-2v-2z" />
                                </svg>
                                <span>{{ $blog->created_at->format('d F Y') }}</span>
                            </div>
                            <a href="{{ route('blog.detail', $blog->slug) }}"
                                class="text-white mx-2 my-1 bg-orange-500 font-medium rounded-xl px-4 py-2">Read</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12 mx-auto">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
