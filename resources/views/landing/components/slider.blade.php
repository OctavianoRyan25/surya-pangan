<!-- Carousel Component -->
<div class="max-w-6xl mx-auto my-20" x-data="{
    currentSlide: 0,
    slides: [{
            title: '{{ __('home.slider1_title') }}',
            subtitle: '{{ __('home.slider1_subtitle') }}',
            highlight: '{{ __('home.slider1_highlight') }}',
            button: '{{ __('home.slider1_button') }}',
            leftImage: 'slider1.jpg',
            rightImage: 'slider1.jpg'
        },
        {
            title: '{{ __('home.slider2_title') }}',
            subtitle: '{{ __('home.slider2_subtitle') }}',
            highlight: '{{ __('home.slider2_highlight') }}',
            button: '{{ __('home.slider2_button') }}',
            leftImage: 'slider1.jpg',
            rightImage: 'slider1.jpg'
        },
        {
            title: '{{ __('home.slider3_title') }}',
            subtitle: '{{ __('home.slider3_subtitle') }}',
            highlight: '{{ __('home.slider3_highlight') }}',
            button: '{{ __('home.slider3_button') }}',
            leftImage: 'slider1.jpg',
            rightImage: 'slider1.jpg'
        }
    ],
    autoPlay: null,
    init() {
        this.startAutoPlay();
    },
    startAutoPlay() {
        this.autoPlay = setInterval(() => {
            this.nextSlide();
        }, 5000);
    },
    stopAutoPlay() {
        if (this.autoPlay) {
            clearInterval(this.autoPlay);
        }
    },
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
    },
    prevSlide() {
        this.currentSlide = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
    },
    goToSlide(index) {
        this.currentSlide = index;
    }
}" @mouseenter="stopAutoPlay()" @mouseleave="startAutoPlay()">

    <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
        <!-- Carousel Content -->
        <div class="relative h-96 md:h-80">
            <template x-for="(slide, index) in slides" :key="index">
                <div class="absolute inset-0 transition-opacity duration-500 ease-in-out"
                    :class="currentSlide === index ? 'opacity-100' : 'opacity-0'">

                    <!-- Orange decorative elements -->
                    <div
                        class="absolute top-0 left-0 w-32 h-32 bg-orange-500 transform -rotate-45 -translate-x-16 -translate-y-16">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-40 h-40 bg-orange-500 transform rotate-45 translate-x-20 translate-y-20 opacity-80">
                    </div>

                    <div class="relative z-10 h-full flex items-center justify-between px-8 md:px-16">
                        <!-- Left Image -->
                        <div class="flex-1 flex justify-center">
                            <img :src="`/assets/images/${slide.leftImage}`" :alt="slide.title"
                                class="w-48 h-48 object-contain drop-shadow-lg rounded-xl">
                        </div>

                        <!-- Center Content -->
                        <div class="flex-1 text-center px-4">
                            <!-- Surya Pangan Logo -->


                            <!-- Main Text -->
                            <div class="mb-6">
                                <p class="text-gray-600 text-base mb-2" x-text="slide.title"></p>
                                <h2 class="text-base lg:text-3xl md:text-2xl font-bold text-gray-500 mb-2">
                                    <span x-text="slide.subtitle"></span>
                                    <br>
                                    <span class="text-base text-orange-500" x-text="slide.highlight"></span>
                                </h2>
                            </div>

                            <!-- CTA Button -->
                            <button
                                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-full transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:scale-105"
                                x-text="slide.button">
                            </button>
                        </div>

                        <!-- Right Image -->
                        <div class="flex-1 flex justify-center">
                            <img :src="`/assets/images/${slide.rightImage}`" :alt="slide.button"
                                class="w-48 h-48 object-contain rounded-xl drop-shadow-lg">
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Navigation Arrows -->
        <button @click="prevSlide()"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/80 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all duration-200 hover:scale-110 z-20">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button @click="nextSlide()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/80 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all duration-200 hover:scale-110 z-20">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center mt-6 space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="goToSlide(index)" class="w-3 h-3 rounded-full transition-all duration-200"
                :class="currentSlide === index ? 'bg-orange-500 scale-125' : 'bg-gray-300 hover:bg-gray-400'">
            </button>
        </template>
    </div>
</div>
