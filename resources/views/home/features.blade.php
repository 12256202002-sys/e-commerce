<section id="keunggulan" class="py-20 sm:py-28 bg-eco-dark-2 relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/5 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14">
            <span class="text-eco-orange text-sm font-semibold uppercase tracking-wider">Keunggulan</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-3 mb-4">
                Mengapa Memilih <span class="text-eco-orange">Eco Briquette?</span>
            </h2>
            <p class="text-eco-gray max-w-2xl mx-auto">
                Kami berkomitmen memberikan produk arang terbaik dengan standar kualitas tinggi dan pelayanan prima.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($features as $feature)
            <div class="bg-eco-dark-3/50 border border-white/5 hover:border-eco-orange/20 transition-all duration-300 group hover:-translate-y-1 rounded-xl p-6">
                <div class="w-12 h-12 bg-eco-orange/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-eco-orange/20 transition-colors">
                    {!! $feature['icon_svg'] !!}
                </div>
                <h3 class="font-bold text-white text-lg mb-2 group-hover:text-eco-orange transition-colors">
                    {{ $feature['title'] }}
                </h3>
                <p class="text-eco-gray text-sm leading-relaxed">
                    {{ $feature['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
