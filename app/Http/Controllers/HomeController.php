<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data produk (bisa diganti dengan data dari database nanti)
        $products = [
            [
                'id' => 1,
                'name' => 'Eco Briquette Kelapa Premium',
                'slug' => 'eco-briquette-kelapa-premium',
                'desc' => 'Briquette hexagonal dari tempurung kelapa, tanpa bau, asap minimal, calor value tinggi.',
                'price' => 75000,
                'rating' => 4.8,
                'reviews' => 124,
                'weight' => '1 kg',
                'image' => 'images/product-1.png',
                'badge' => 'Best Seller',
            ],
            [
                'id' => 2,
                'name' => 'Briquette Kayu Hardwood',
                'slug' => 'briquette-kayu-hardwood',
                'desc' => 'Arang kayu hardwood berkualitas, cocok untuk BBQ dan restoran premium.',
                'price' => 55000,
                'rating' => 4.6,
                'reviews' => 89,
                'weight' => '1 kg',
                'image' => 'images/product-2.png',
                'badge' => 'Populer',
            ],
            [
                'id' => 3,
                'name' => 'Briquette Kelapa Cube',
                'slug' => 'briquette-kelapa-cube',
                'desc' => 'Bentuk kubus seragam, burning time lama, ideal untuk shisha dan BBQ.',
                'price' => 85000,
                'rating' => 4.9,
                'reviews' => 156,
                'weight' => '1 kg',
                'image' => 'images/product-3.png',
                'badge' => 'Premium',
            ],
            [
                'id' => 4,
                'name' => 'Arang Kelapa Burning Glow',
                'slug' => 'arang-kelapa-burning-glow',
                'desc' => 'Arang kelapa dengan glow merah orange yang indah, panas merata dan tahan lama.',
                'price' => 65000,
                'rating' => 4.7,
                'reviews' => 98,
                'weight' => '1 kg',
                'image' => 'images/product-4.png',
                'badge' => 'Promo',
            ],
        ];

        // Data fitur keunggulan
        $features = [
            [
                'title' => 'Kualitas Terjamin',
                'desc' => 'Setiap produk melewati quality control ketat untuk memastikan standar calor value dan burning time yang konsisten.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
            ],
            [
                'title' => 'Ramah Lingkungan',
                'desc' => 'Terbuat dari limbah tempurung kelapa yang diolah menjadi sumber energi bersih. Zero waste production yang mendukung kelestarian lingkungan.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>',
            ],
            [
                'title' => 'Dana P2MW 2026',
                'desc' => 'Lolos seleksi pendanaan Program Pembinaan Produktivitas Merdeka Belajar Mahasiswa — pengakuan nasional atas inovasi kami.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>',
            ],
            [
                'title' => 'Harga Terjangkau',
                'desc' => 'Produksi langsung dari pengrainan lokal di Kolaka Utara, sehingga harga lebih kompetitif tanpa perantara.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            ],
            [
                'title' => 'Burning Time Lama',
                'desc' => 'Briquette kami memiliki burning time hingga 4-5 jam, jauh lebih lama dari arang biasa yang hanya 1-2 jam.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            ],
            [
                'title' => 'Manfaat untuk Lokal',
                'desc' => 'Setiap pembelian berkontribusi langsung pada perekonomian masyarakat Kolaka Utara dan pengurangan limbah pertanian.',
                'icon_svg' => '<svg class="w-6 h-6 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
            ],
        ];

        // Data testimoni
        $testimonials = [
            [
                'name' => 'Pak Hamid',
                'role' => 'Warung Makan, Kolaka Utara',
                'text' => 'Saya pakai eco briquette untuk pemanggangan di warung. Panasnya merata, asap minim, dan tahan lama. Pelanggan juga komplain kalau arang biasa, tapi pakai ini semuanya puas!',
                'rating' => 5,
                'avatar' => '👨‍🍳',
            ],
            [
                'name' => 'Ika Sari',
                'role' => 'Catering & Event, Kolaka',
                'text' => 'Untuk acara outdoor dan catering, briquette ini pilihan terbaik. Tahan lama sehingga tidak perlu sering ganti arang. Hemat waktu dan biaya!',
                'rating' => 5,
                'avatar' => '👩‍💼',
            ],
            [
                'name' => 'Ahmad Rizki',
                'role' => 'Warga Kolaka Utara',
                'text' => 'Bangga ada produk dari anak kampus sendiri. Kualitasnya tidak kalah sama arang yang dijual di kota besar. Harga juga lebih terjangkau untuk kami di sini.',
                'rating' => 5,
                'avatar' => '👨',
            ],
        ];

        return view('pages.home', compact('products', 'features', 'testimonials'));
    }
}
