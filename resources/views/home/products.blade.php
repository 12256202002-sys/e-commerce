<section id="produk" class="py-20 sm:py-28 bg-eco-dark relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-eco-orange/30 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14">
            <span class="text-eco-orange text-sm font-semibold uppercase tracking-wider">Produk Kami</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-3 mb-4">
                Produk <span class="text-eco-orange">Unggulan</span>
            </h2>
            <p class="text-eco-gray max-w-2xl mx-auto">
                Pilihan arang briquette berkualitas premium untuk berbagai kebutuhan Anda.
                Semua produk dibuat dari bahan alami terbaik.
            </p>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-eco-dark-2 border border-white/5 hover:border-eco-orange/30 transition-all duration-300 group overflow-hidden hover:shadow-lg hover:shadow-eco-orange/5 hover:-translate-y-1 rounded-xl">
                <!-- Image -->
                <div class="relative overflow-hidden aspect-square">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="bg-eco-orange text-white text-xs font-bold px-3 py-1 rounded-full">
                            {{ $product['badge'] }}
                        </span>
                    </div>
                    <!-- Overlay on hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-eco-dark/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Content -->
                <div class="p-5">
                    <h3 class="font-bold text-white text-base mb-2 line-clamp-1 group-hover:text-eco-orange transition-colors">
                        {{ $product['name'] }}
                    </h3>
                    <p class="text-eco-gray text-sm mb-3 line-clamp-2 leading-relaxed">
                        {{ $product['desc'] }}
                    </p>
                    <!-- Rating -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-3.5 h-3.5 {{ $i < floor($product['rating']) ? 'text-eco-orange' : 'text-white/20' }}" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            @endfor
                        </div>
                        <span class="text-xs text-eco-gray">
                            {{ $product['rating'] }} ({{ $product['reviews'] }})
                        </span>
                    </div>
                    <!-- Price & CTA -->
                    <div class="flex items-center justify-between pt-3 border-t border-white/5">
                        <div>
                            <span class="text-eco-orange font-bold text-lg">
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </span>
                            <span class="text-eco-gray text-xs ml-1">/{{ $product['weight'] }}</span>
                        </div>
                        <button onclick="addToCart(this)"
                                class="bg-eco-orange hover:bg-eco-orange-light text-white rounded-lg transition-all text-sm font-semibold px-3 py-1.5 inline-flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            Beli
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA below products -->
        <div class="text-center mt-12">
            <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20order%20dalam%20jumlah%20besar" target="_blank" rel="noopener noreferrer"
               class="border border-eco-orange/40 text-eco-orange hover:bg-eco-orange hover:text-white font-semibold rounded-xl px-8 py-3 transition-all inline-flex items-center gap-2">
                Order Grosir? Hubungi Kami
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>
