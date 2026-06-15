@extends('admin.layouts.app')

@section('title', 'Kelola Produk')
@section('page_title', 'Kelola Produk')
@section('page_subtitle', 'Daftar semua produk Eco Briquette')

@section('content')
<!-- Top Action -->
<div class="flex items-center justify-between mb-6">
    <div class="text-eco-gray text-sm">Total: {{ $products->total() }} produk</div>
    <a href="{{ route('admin.products.create') }}" class="bg-eco-orange hover:bg-eco-orange-light text-white font-semibold rounded-lg px-5 py-2.5 text-sm transition-all inline-flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Produk
    </a>
</div>

<!-- Products Table -->
<div class="bg-eco-dark-2 border border-white/5 rounded-xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-left text-eco-gray text-sm border-b border-white/5">
                    <th class="px-6 py-3 font-medium">Produk</th>
                    <th class="px-6 py-3 font-medium">Harga</th>
                    <th class="px-6 py-3 font-medium">Badge</th>
                    <th class="px-6 py-3 font-medium">Rating</th>
                    <th class="px-6 py-3 font-medium">Status</th>
                    <th class="px-6 py-3 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b border-white/5 hover:bg-eco-dark-3/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset($product->image ?? 'images/product-1.png') }}" alt="{{ $product->name }}" class="w-12 h-12 rounded-lg object-cover">
                            <div>
                                <div class="text-white text-sm font-medium">{{ $product->name }}</div>
                                <div class="text-eco-gray text-xs">{{ $product->weight }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-eco-orange font-semibold text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        <span class="bg-eco-orange/10 text-eco-orange text-xs font-medium px-2.5 py-1 rounded-full">{{ $product->badge ?? '-' }}</span>
                    </td>
                    <td class="px-6 py-4 text-white text-sm">{{ $product->rating }}/5</td>
                    <td class="px-6 py-4">
                        @if($product->is_active)
                            <span class="bg-green-500/10 text-green-400 text-xs font-medium px-2.5 py-1 rounded-full">Aktif</span>
                        @else
                            <span class="bg-red-500/10 text-red-400 text-xs font-medium px-2.5 py-1 rounded-full">Nonaktif</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="text-eco-gray hover:text-eco-orange transition-colors p-1.5" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-eco-gray hover:text-red-400 transition-colors p-1.5" title="Hapus">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
    <div class="px-6 py-4 border-t border-white/5">
        {{ $products->links() }}
    </div>
    @endif
</div>
@endsection
