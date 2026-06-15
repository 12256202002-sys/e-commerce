<section id="tentang" class="relative py-20 sm:py-28 bg-eco-dark">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-eco-orange/30 to-transparent"></div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
            <!-- Image -->
            <div class="relative">
                <div class="relative overflow-hidden shadow-2xl rounded-2xl">
                    <img src="{{ asset('images/about-factory.png') }}" alt="Eco Briquette Production"
                         class="object-cover w-full h-auto">
                    <div class="absolute inset-0 bg-gradient-to-t from-eco-dark/50 to-transparent"></div>
                </div>
                <!-- Floating stat card -->
                <div class="absolute p-4 border shadow-xl -bottom-6 -right-4 sm:right-4 bg-eco-dark-2 border-white/10 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-eco-orange/20">
                            <svg class="w-5 h-5 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-white">P2MW 2026</div>
                            <div class="text-xs text-eco-gray">Lolos Pendanaan Nasional</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div>
                <span class="text-sm font-semibold tracking-wider uppercase text-eco-orange">Tentang Kami</span>
                <h2 class="mt-3 mb-6 text-3xl font-bold sm:text-4xl">
                    Dari Kampus, <span class="text-eco-orange">Untuk Masyarakat</span>
                </h2>
                <p class="mb-4 leading-relaxed text-eco-gray">
                    Eco Briquette adalah wujud kreativitas mahasiswa Universitas Muhammadiyah Kolaka Utara yang berkomitmen
                    mengubah limbah tempurung kelapa menjadi sumber energi bersih dan berkualitas. Berawal dari semangat
                    belajar dan inovasi di bangku perkuliahan, kami berhasil lolos pendanaan pada Program Pembinaan
                    Mahasiswa Wirausaha (P2MW) tahun 2026 — sebuah pengakuan bahwa ide kami layak
                    untuk dikembangkan secara serius.
                </p>
                <p class="mb-6 leading-relaxed text-eco-gray">
                    Selama kurang lebih dua tahun berjalan, kami terus mengembangkan produk dan proses produksi agar
                    kualitas briquette yang dihasilkan semakin konsisten. Kini Eco Briquette memasuki tahap pengembangan
                    yang lebih luas — kami tidak ingin ini sekadar program mahasiswa biasa, melainkan sebuah usaha nyata
                    yang membawa manfaat bagi masyarakat, khususnya di daerah Kolaka Utara dan sekitarnya. Setiap
                    briquette yang kami produksi adalah bukti bahwa anak muda mampu menciptakan solusi energi ramah
                    lingkungan yang berdampak nyata.
                </p>

                <!-- Key Points -->
                <div class="mb-8 space-y-3">
                    @foreach([
                        'Kreativitas mahasiswa Universitas Muhammadiyah Kolaka Utara',
                        'Lolos pendanaan P2MW 2026 — diakui secara nasional',
                        'Produk telah berjalan dan berkembang selama 2+ tahun',
                        'Berkomitmen membawa manfaat nyata untuk masyarakat Kolaka Utara',
                    ] as $point)
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center flex-shrink-0 w-5 h-5 rounded-full bg-eco-orange/20">
                            <svg class="w-3 h-3 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm text-eco-gray">{{ $point }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="#kontak"
                   class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-white transition-all bg-eco-orange hover:bg-eco-orange-light rounded-xl hover:scale-105 hover:shadow-lg hover:shadow-eco-orange/25">
                    Hubungi Kami
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
