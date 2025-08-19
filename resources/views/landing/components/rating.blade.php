<!-- Google Reviews Section -->
<div class="max-w-6xl mx-auto mt-16" x-data="{
    currentReview: 0,
    reviews: [{
            name: 'affan akbar',
            avatar: '/placeholder.svg?height=40&width=40',
            review: 'Tokonya lengkap bersih dan karyawannya ramah',
            rating: 5
        },
        {
            name: 'febri utari',
            avatar: '/placeholder.svg?height=40&width=40',
            review: 'Kalau mau belanja bahan bahan kue pasti disini tempatnya lengkap dan gk terlalu mahal',
            rating: 5
        },
        {
            name: 'teguh ariyanto',
            avatar: '/placeholder.svg?height=40&width=40',
            review: 'Senang belanja di surya pangan , bahan kue lengkap harga hemat, toko bersih dan nyaman',
            rating: 5
        },
        {
            name: 'sari dewi',
            avatar: '/placeholder.svg?height=40&width=40',
            review: 'Toko Rapi, bersih dan juga pelayanan Baik, Pramuniaga dan kasirnya juga Ramah ramah',
            rating: 5
        },
        {
            name: 'budi santoso',
            avatar: '/placeholder.svg?height=40&width=40',
            review: 'Udh jdi pelanggan setia surya pangan',
            rating: 5
        }
    ],
    nextReview() {
        const maxIndex = this.isMobile ? this.reviews.length - 1 : Math.max(0, this.reviews.length - 3);
        this.currentReview = this.currentReview >= maxIndex ? 0 : this.currentReview + 1;
    },
    prevReview() {
        const maxIndex = this.isMobile ? this.reviews.length - 1 : Math.max(0, this.reviews.length - 3);
        this.currentReview = this.currentReview <= 0 ? maxIndex : this.currentReview - 1;
    },
    getTransform() {
        return this.isMobile ? this.currentReview * 100 : this.currentReview * 33.333;
    }
}">

    {{-- <div class="bg-white rounded-2xl shadow-xl p-8">
        <div class="flex items-center justify-between">
            <!-- Left Section - Overall Rating -->
            <div class="flex-shrink-0 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">BAGUS SEKALI</h3>
                <div class="flex justify-center mb-2">
                    <template x-for="i in 5">
                        <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </template>
                </div>
                <p class="text-gray-600 text-sm mb-3">Berdasarkan 749 ulasan</p>
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-6 w-6" viewBox="0 0 48 48">
                        <path fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                        <path fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                        </path>
                        <path fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                        </path>
                        <path fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                    </svg>
                </div>
            </div>

            <!-- Navigation Arrow Left -->
            <button @click="prevReview()"
                class="flex-shrink-0 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200 mx-4">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Reviews Cards Container -->
            <div class="flex-1 overflow-hidden">
                <div class="flex transition-transform duration-300 ease-in-out"
                    :style="`transform: translateX(-${currentReview * 33.333}%)`">
                    <template x-for="(review, index) in reviews" :key="index">
                        <div class="w-1/3 flex-shrink-0 px-3">
                            <div class="bg-gray-50 rounded-xl p-4 h-full">
                                <div class="flex items-center mb-3">
                                    <img :src="review.avatar" :alt="review.name"
                                        class="w-10 h-10 rounded-full mr-3">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 text-sm" x-text="review.name"></h4>
                                        <div class="flex items-center mt-1">
                                            <template x-for="i in review.rating">
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                </svg>
                                            </template>
                                            <svg class="w-4 h-4 text-blue-500 ml-2" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-3 w-3"
                                            viewBox="0 0 48 48">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                            </path>
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                            </path>
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed" x-text="review.review"></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Navigation Arrow Right -->
            <button @click="nextReview()"
                class="flex-shrink-0 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200 mx-4">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div> --}}
    <div class="p-4 md:p-8">
        <!-- Made layout responsive with flex-col on mobile -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-0">
            <!-- Left Section - Overall Rating -->
            <!-- Adjusted sizing and spacing for mobile -->
            <div class="flex-shrink-0 text-center w-full md:w-auto">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">BAGUS SEKALI</h3>
                <div class="flex justify-center mb-2">
                    <template x-for="i in 5">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-yellow-400 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </template>
                </div>
                <p class="text-gray-600 text-sm mb-3">Berdasarkan 18247 ulasan</p>
                <div class="flex items-center justify-center">
                    <span class="text-blue-500 font-bold text-lg">G</span>
                    <span class="text-red-500 font-bold text-lg">o</span>
                    <span class="text-yellow-500 font-bold text-lg">o</span>
                    <span class="text-blue-500 font-bold text-lg">g</span>
                    <span class="text-green-500 font-bold text-lg">l</span>
                    <span class="text-red-500 font-bold text-lg">e</span>
                </div>
            </div>

            <!-- Mobile-first reviews container with responsive navigation -->
            <div class="w-full md:flex-1 relative">
                <!-- Mobile Navigation - Top positioned -->
                <div class="flex justify-between items-center mb-4 md:hidden">
                    <button @click="prevReview()"
                        class="w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Mobile pagination dots -->
                    <div class="flex space-x-2">
                        <template x-for="(review, index) in reviews" :key="index">
                            <button @click="currentReview = index"
                                class="w-2 h-2 rounded-full transition-all duration-200"
                                :class="currentReview === index ? 'bg-orange-500' : 'bg-gray-300'">
                            </button>
                        </template>
                    </div>

                    <button @click="nextReview()"
                        class="w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation - Side positioned -->
                <div class="hidden md:flex items-center">
                    <button @click="prevReview()"
                        class="flex-shrink-0 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200 mr-4">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Reviews Cards Container -->
                    <!-- Responsive card layout - 1 card on mobile, 3 on desktop -->
                    <div class="flex-1 overflow-hidden">
                        <div class="flex transition-transform duration-300 ease-in-out"
                            :style="`transform: translateX(-${currentReview * (window.innerWidth < 768 ? 100 : 33.333)}%)`">
                            <template x-for="(review, index) in reviews" :key="index">
                                <div class="w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                    <div class="bg-gray-50 rounded-xl p-4 h-full">
                                        <div class="flex items-center mb-3">
                                            <img :src="review.avatar" :alt="review.name"
                                                class="w-10 h-10 rounded-full mr-3">
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-900 text-sm" x-text="review.name">
                                                </h4>
                                                <div class="flex items-center mt-1">
                                                    <template x-for="i in review.rating">
                                                        <svg class="w-4 h-4 text-yellow-400 fill-current"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                        </svg>
                                                    </template>
                                                    <svg class="w-4 h-4 text-blue-500 ml-2" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-blue-500 font-bold text-sm">G</span>
                                            </div>
                                        </div>
                                        <p class="text-gray-700 text-sm leading-relaxed" x-text="review.review"></p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <button @click="nextReview()"
                        class="flex-shrink-0 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-200 ml-4">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Reviews Container -->
                <!-- Separate mobile-optimized reviews display -->
                <div class="md:hidden overflow-hidden">
                    <div class="flex transition-transform duration-300 ease-in-out"
                        :style="`transform: translateX(-${currentReview * 100}%)`">
                        <template x-for="(review, index) in reviews" :key="index">
                            <div class="w-full flex-shrink-0 px-2">
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="flex items-center mb-3">
                                        <img :src="review.avatar" :alt="review.name"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-900 text-sm" x-text="review.name"></h4>
                                            <div class="flex items-center mt-1">
                                                <template x-for="i in review.rating">
                                                    <svg class="w-4 h-4 text-yellow-400 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                    </svg>
                                                </template>
                                                <svg class="w-4 h-4 text-blue-500 ml-2" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="text-blue-500 font-bold text-sm">G</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-sm leading-relaxed" x-text="review.review"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
