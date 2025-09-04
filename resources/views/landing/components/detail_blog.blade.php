<!-- Breadcrumb -->
<section class="bg-white py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="index.html" class="text-gray-500 hover:text-orange-600 transition-colors duration-200">Home</a>
            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('blogs') }}"
                class="text-gray-500 hover:text-orange-600 transition-colors duration-200">Blog</a>
            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-gray-800 font-medium">{{ $blog->title }}</span>
        </nav>
    </div>
</section>

<!-- Blog Article -->
<article class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Article Header -->
            <header class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <span
                        class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">{{ $blog->category->name }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600 text-sm">{{ $blog->created_at->format('d F Y') }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-orange-600 text-sm font-medium">5 min read</span>
                </div>

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $blog->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-2 mb-6">
                    @foreach ($blog->tags as $tag)
                        <span
                            class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            </header>

            <!-- Featured Image -->
            <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="Bumbu Rendang Autentik"
                    class="w-full h-64 md:h-96 object-cover">
            </div>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                {!! $blog->body !!}
            </div>

            <!-- Author Info -->
            {{-- <div class="bg-gray-100 rounded-xl p-6 mt-12">
                <div class="flex items-center space-x-4">
                    <img src="/placeholder.svg?height=80&width=80&text=Author" alt="Chef Maria"
                        class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900">Chef Maria Sari</h4>
                        <p class="text-gray-600 mb-2">Ahli Kuliner Tradisional Indonesia</p>
                        <p class="text-sm text-gray-500">
                            Chef Maria telah berpengalaman lebih dari 15 tahun dalam bidang kuliner tradisional
                            Indonesia, khususnya masakan Minangkabau.
                        </p>
                    </div>
                </div>
            </div> --}}

            <!-- Share Buttons -->
            <div class="flex items-center justify-center space-x-4 mt-8 pt-8 border-t border-gray-200">
                <span class="text-gray-600 font-medium">Bagikan artikel ini:</span>
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                    <span>Twitter</span>
                </button>
                <button
                    class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    <span>Facebook</span>
                </button>
                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                    </svg>
                    <span>WhatsApp</span>
                </button>
            </div>
        </div>
    </div>
</article>

<!-- Related Articles -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Artikel Terkait</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ hoveredCard: null }">
                <!-- Related Article 1 -->
                @foreach ($related_blogs as $i => $related_blog)
                    <article
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl"
                        @mouseenter="hoveredCard = {{ $i }}" @mouseleave="hoveredCard = null">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $related_blog->thumbnail) }}"
                                alt="{{ $related_blog->title }}"
                                class="w-full h-48 object-cover transition-transform duration-500"
                                :class="hoveredCard === {{ $i }} ? 'scale-110' : 'scale-100'">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">{{ $related_blog->category->name }}</span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 transition-opacity duration-300"
                                :class="hoveredCard === {{ $i }} ? 'opacity-100' : 'opacity-0'"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                @foreach ($related_blog->tags as $tag)
                                    <span
                                        class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-medium">#{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <h3
                                class="text-xl font-bold text-gray-800 mb-3 hover:text-orange-600 transition-colors duration-200 cursor-pointer">
                                {{ $related_blog->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                {!! $related_blog->body !!}
                            </p>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span>{{ $related_blog->created_at->format('j F Y') }}</span>
                                <a href="{{ route('blog.detail', $related_blog->slug) }}"
                                    class="text-orange-600 font-medium"> read</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- View All Articles Button -->
<div class="text-center mt-12">
    <a href="blog.html"
        class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
        <span>Lihat Semua Artikel</span>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
    </a>
</div>
</div>
</div>
</section>
