<section id="testimoni" class="py-20 sm:py-28 bg-eco-dark-2 relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/5 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14">
            <span class="text-eco-orange text-sm font-semibold uppercase tracking-wider">Testimoni</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-3 mb-4">
                Apa Kata <span class="text-eco-orange">Pelanggan Kami?</span>
            </h2>
            <p class="text-eco-gray max-w-2xl mx-auto">
                Kepuasan pelanggan adalah prioritas utama kami. Berikut testimoni dari mereka yang sudah mempercayakan kebutuhan arangnya kepada kami.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($testimonials as $t)
            <div class="bg-eco-dark-3/50 border border-white/5 hover:border-eco-orange/20 transition-all duration-300 group hover:-translate-y-1 rounded-xl p-6">
                <!-- Quote mark -->
                <div class="text-eco-orange/30 text-5xl font-serif leading-none mb-2">&ldquo;</div>
                <p class="text-eco-gray text-sm leading-relaxed mb-6 italic">
                    {{ $t['text'] }}
                </p>
                <!-- Rating -->
                <div class="flex gap-0.5 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 {{ $i < $t['rating'] ? 'text-eco-orange' : 'text-white/20' }}" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    @endfor
                </div>
                <!-- Author -->
                <div class="flex items-center gap-3 pt-4 border-t border-white/5">
                    <div class="w-10 h-10 bg-eco-orange/10 rounded-full flex items-center justify-center text-xl">
                        {{ $t['avatar'] }}
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">{{ $t['name'] }}</div>
                        <div class="text-eco-gray text-xs">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
