<section id="beranda" class="relative flex items-center min-h-screen overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-briquette.png') }}" alt="Eco Briquette Hero" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-gradient-to-r from-eco-dark via-eco-dark/85 to-eco-dark/60"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-eco-dark via-transparent to-eco-dark/40"></div>
    </div>

    <!-- Decorative elements -->
    <div class="absolute rounded-full top-20 right-10 w-72 h-72 bg-eco-orange/5 blur-3xl"></div>
    <div class="absolute rounded-full bottom-20 left-10 w-96 h-96 bg-eco-orange/3 blur-3xl"></div>

    <!-- Content -->
    <div class="relative z-10 px-4 py-32 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-eco-orange/10 border-eco-orange/30">
                <svg class="w-4 h-4 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                </svg>
                <span class="text-sm font-medium text-eco-orange">Kreativitas Mahasiswa — P2MW 2026</span>
            </div>

            <h1 class="mb-6 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Dari Kampus untuk
                <span class="text-eco-orange">Masyarakat</span>
            </h1>

            <p class="mb-8 text-lg leading-relaxed sm:text-xl text-eco-gray">
                Briquette berkualitas dari tempurung kelapa, karya Mahasiswa Universitas Muhammadiyah
                Kolaka Utara. Ramah lingkungan, asap minimal, dan tahan lama.
            </p>

            <div class="flex flex-col gap-4 sm:flex-row">
                <a href="#produk"
                   class="inline-flex items-center gap-2 px-8 py-4 text-base font-bold text-white transition-all bg-eco-orange hover:bg-eco-orange-light rounded-xl hover:scale-105 hover:shadow-xl hover:shadow-eco-orange/25">
                    Lihat Produk
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-8 py-4 text-base font-bold text-white transition-all border border-white/20 hover:border-eco-orange hover:text-eco-orange rounded-xl bg-white/5 hover:bg-eco-orange/10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-6 pt-8 mt-12 border-t border-white/10">
                <div>
                    <div class="text-2xl font-bold sm:text-3xl text-eco-orange">2+</div>
                    <div class="mt-1 text-sm text-eco-gray">Tahun Berkarya</div>
                </div>
                <div>
                    <div class="text-2xl font-bold sm:text-3xl text-eco-orange">P2MW</div>
                    <div class="mt-1 text-sm text-eco-gray">Lolos Pendanaan 2026</div>
                </div>
                <div>
                    <div class="text-2xl font-bold sm:text-3xl text-eco-orange">100%</div>
                    <div class="mt-1 text-sm text-eco-gray">Bahan Alami</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute z-10 -translate-x-1/2 bottom-8 left-1/2 bounce-slow">
        <div class="w-6 h-10 rounded-full border-2 border-white/30 flex items-start justify-center p-1.5">
            <div class="w-1.5 h-3 bg-eco-orange rounded-full animate-pulse"></div>
        </div>
    </div>
</section>
