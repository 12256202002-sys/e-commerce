<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Eco Briquette Kelapa Premium',
                'slug' => 'eco-briquette-kelapa-premium',
                'description' => 'Briquette hexagonal dari tempurung kelapa, tanpa bau, asap minimal, calor value tinggi. Cocok untuk BBQ, restoran, dan penggunaan industri.',
                'short_description' => 'Briquette hexagonal dari tempurung kelapa, tanpa bau, asap minimal, calor value tinggi.',
                'price' => 75000,
                'weight' => '1 kg',
                'image' => 'images/product-1.png',
                'badge' => 'Best Seller',
                'rating' => 4.8,
                'reviews_count' => 124,
            ],
            [
                'name' => 'Briquette Kayu Hardwood',
                'slug' => 'briquette-kayu-hardwood',
                'description' => 'Arang kayu hardwood berkualitas tinggi, cocok untuk BBQ dan restoran premium. Burning time lama dengan panas yang merata.',
                'short_description' => 'Arang kayu hardwood berkualitas, cocok untuk BBQ dan restoran premium.',
                'price' => 55000,
                'weight' => '1 kg',
                'image' => 'images/product-2.png',
                'badge' => 'Populer',
                'rating' => 4.6,
                'reviews_count' => 89,
            ],
            [
                'name' => 'Briquette Kelapa Cube',
                'slug' => 'briquette-kelapa-cube',
                'description' => 'Bentuk kubus seragam dengan ukuran presisi, burning time lama hingga 5 jam. Ideal untuk shisha dan BBQ premium.',
                'short_description' => 'Bentuk kubus seragam, burning time lama, ideal untuk shisha dan BBQ.',
                'price' => 85000,
                'weight' => '1 kg',
                'image' => 'images/product-3.png',
                'badge' => 'Premium',
                'rating' => 4.9,
                'reviews_count' => 156,
            ],
            [
                'name' => 'Arang Kelapa Burning Glow',
                'slug' => 'arang-kelapa-burning-glow',
                'description' => 'Arang kelapa dengan glow merah orange yang indah, panas merata dan tahan lama. Pengalaman BBQ yang sempurna.',
                'short_description' => 'Arang kelapa dengan glow merah orange yang indah, panas merata dan tahan lama.',
                'price' => 65000,
                'weight' => '1 kg',
                'image' => 'images/product-4.png',
                'badge' => 'Promo',
                'rating' => 4.7,
                'reviews_count' => 98,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
