<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Logo -->
            <a href="#beranda" class="flex items-center gap-2 group">
                <div class="w-9 h-9 sm:w-10 sm:h-10 bg-eco-orange rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                    </svg>
                </div>
                <span class="text-lg sm:text-xl font-bold text-white">
                    Eco<span class="text-eco-orange">Briquette</span>
                </span>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="#beranda" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Beranda</a>
                <a href="#produk" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Produk</a>
                <a href="#keunggulan" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Keunggulan</a>
                <a href="#tentang" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Tentang</a>
                <a href="#testimoni" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Testimoni</a>
                <a href="#kontak" class="nav-link text-sm font-medium text-eco-gray hover:text-eco-orange transition-colors">Kontak</a>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                   class="bg-eco-orange hover:bg-eco-orange-light text-white font-semibold rounded-lg px-5 py-2.5 transition-all hover:scale-105 hover:shadow-lg hover:shadow-eco-orange/25 inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    Beli Sekarang
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="mobile-menu" class="lg:hidden hidden bg-eco-dark-2/98 backdrop-blur-md border-t border-white/5">
        <div class="px-4 py-4 space-y-1">
            <a href="#beranda" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Beranda</a>
            <a href="#produk" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Produk</a>
            <a href="#keunggulan" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Keunggulan</a>
            <a href="#tentang" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Tentang</a>
            <a href="#testimoni" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Testimoni</a>
            <a href="#kontak" class="block py-3 px-4 text-eco-gray hover:text-eco-orange hover:bg-eco-dark-3 rounded-lg transition-all font-medium">Kontak</a>
            <div class="pt-3">
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                   class="block w-full text-center bg-eco-orange hover:bg-eco-orange-light text-white font-semibold rounded-lg py-3 transition-all">
                    🛒 Beli Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>
