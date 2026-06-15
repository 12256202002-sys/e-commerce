@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Ringkasan data website Eco Briquette')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Produk -->
    <div class="bg-eco-dark-2 border border-white/5 rounded-xl p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-eco-orange/10 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-eco-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
            </div>
            <a href="{{ route('admin.products.index') }}" class="text-eco-orange text-xs hover:underline">Lihat semua</a>
        </div>
        <div class="text-2xl font-bold text-white">{{ $totalProducts }}</div>
        <div class="text-eco-gray text-sm">Total Produk</div>
    </div>

    <!-- Produk Aktif -->
    <div class="bg-eco-dark-2 border border-white/5 rounded-xl p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
        </div>
        <div class="text-2xl font-bold text-white">{{ $activeProducts }}</div>
        <div class="text-eco-gray text-sm">Produk Aktif</div>
    </div>

    <!-- Pesan Masuk -->
    <div class="bg-eco-dark-2 border border-white/5 rounded-xl p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <a href="{{ route('admin.messages.index') }}" class="text-eco-orange text-xs hover:underline">Lihat semua</a>
        </div>
        <div class="text-2xl font-bold text-white">{{ $totalMessages }}</div>
        <div class="text-eco-gray text-sm">Pesan Masuk</div>
    </div>

    <!-- Pesan Belum Dibaca -->
    <div class="bg-eco-dark-2 border border-white/5 rounded-xl p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 bg-yellow-500/10 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </div>
        </div>
        <div class="text-2xl font-bold text-white">{{ $unreadMessages }}</div>
        <div class="text-eco-gray text-sm">Belum Dibaca</div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-eco-dark-2 border border-white/5 rounded-xl p-6 mb-8">
    <h3 class="text-white font-semibold mb-4">Aksi Cepat</h3>
    <div class="flex flex-wrap gap-3">
        <a href="{{ route('admin.products.create') }}" class="bg-eco-orange hover:bg-eco-orange-light text-white font-semibold rounded-lg px-5 py-2.5 text-sm transition-all inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Tambah Produk
        </a>
        <a href="{{ route('admin.messages.index') }}" class="bg-eco-dark-3 hover:bg-eco-dark border border-white/10 text-white font-semibold rounded-lg px-5 py-2.5 text-sm transition-all inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Lihat Pesan
        </a>
        <a href="{{ route('home') }}" target="_blank" class="bg-eco-dark-3 hover:bg-eco-dark border border-white/10 text-white font-semibold rounded-lg px-5 py-2.5 text-sm transition-all inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
            Buka Website
        </a>
    </div>
</div>

<!-- Recent Products -->
<div class="bg-eco-dark-2 border border-white/5 rounded-xl overflow-hidden">
    <div class="px-6 py-4 border-b border-white/5 flex items-center justify-between">
        <h3 class="text-white font-semibold">Produk Terbaru</h3>
        <a href="{{ route('admin.products.index') }}" class="text-eco-orange text-sm hover:underline">Lihat semua</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-left text-eco-gray text-sm border-b border-white/5">
                    <th class="px-6 py-3 font-medium">Produk</th>
                    <th class="px-6 py-3 font-medium">Harga</th>
                    <th class="px-6 py-3 font-medium">Status</th>
                    <th class="px-6 py-3 font-medium">Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentProducts as $product)
                <tr class="border-b border-white/5 hover:bg-eco-dark-3/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset($product->image ?? 'images/product-1.png') }}" alt="{{ $product->name }}" class="w-10 h-10 rounded-lg object-cover">
                            <div>
                                <div class="text-white text-sm font-medium">{{ $product->name }}</div>
                                <div class="text-eco-gray text-xs">{{ $product->weight }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-eco-orange font-semibold text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        @if($product->is_active)
                            <span class="bg-green-500/10 text-green-400 text-xs font-medium px-2.5 py-1 rounded-full">Aktif</span>
                        @else
                            <span class="bg-red-500/10 text-red-400 text-xs font-medium px-2.5 py-1 rounded-full">Nonaktif</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-white text-sm">{{ $product->rating }}/5</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
