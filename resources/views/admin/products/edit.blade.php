@extends('admin.layouts.app')

@section('title', 'Edit Produk')
@section('page_title', 'Edit Produk')
@section('page_subtitle', 'Ubah informasi produk')

@section('content')
<div class="max-w-3xl">
    <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="bg-eco-dark-2 border border-white/5 rounded-xl p-6 space-y-5">
            <!-- Name -->
            <div>
                <label class="text-white text-sm font-medium mb-2 block">Nama Produk <span class="text-red-400">*</span></label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                       class="w-full bg-eco-dark-3 border border-white/10 text-white placeholder:text-eco-gray/50 focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                @error('name') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Slug -->
            <div>
                <label class="text-white text-sm font-medium mb-2 block">Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $product->slug) }}"
                       class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                @error('slug') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="text-white text-sm font-medium mb-2 block">Deskripsi Lengkap <span class="text-red-400">*</span></label>
                <textarea name="description" rows="4"
                          class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg p-4 outline-none resize-none transition-colors">{{ old('description', $product->description) }}</textarea>
                @error('description') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Short Description -->
            <div>
                <label class="text-white text-sm font-medium mb-2 block">Deskripsi Singkat</label>
                <input type="text" name="short_description" value="{{ old('short_description', $product->short_description) }}"
                       class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
            </div>

            <!-- Price & Weight -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="text-white text-sm font-medium mb-2 block">Harga (Rp) <span class="text-red-400">*</span></label>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}"
                           class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                    @error('price') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-white text-sm font-medium mb-2 block">Berat</label>
                    <input type="text" name="weight" value="{{ old('weight', $product->weight) }}"
                           class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                </div>
            </div>

            <!-- Image -->
            <div>
                <label class="text-white text-sm font-medium mb-2 block">Gambar Produk</label>
                @if($product->image)
                    <div class="mb-3">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-24 h-24 rounded-lg object-cover border border-white/10">
                    </div>
                @endif
                <input type="file" name="image" accept="image/png,image/jpeg,image/webp"
                       class="w-full bg-eco-dark-3 border border-white/10 text-eco-gray focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors file:bg-eco-orange file:text-white file:border-0 file:rounded-md file:px-3 file:py-1 file:mr-3 file:cursor-pointer">
                <p class="text-eco-gray/50 text-xs mt-1">Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('image') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Badge, Rating, Reviews -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div>
                    <label class="text-white text-sm font-medium mb-2 block">Badge</label>
                    <select name="badge" class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                        <option value="">Tidak ada</option>
                        <option value="Best Seller" {{ $product->badge == 'Best Seller' ? 'selected' : '' }}>Best Seller</option>
                        <option value="Populer" {{ $product->badge == 'Populer' ? 'selected' : '' }}>Populer</option>
                        <option value="Premium" {{ $product->badge == 'Premium' ? 'selected' : '' }}>Premium</option>
                        <option value="Promo" {{ $product->badge == 'Promo' ? 'selected' : '' }}>Promo</option>
                        <option value="Baru" {{ $product->badge == 'Baru' ? 'selected' : '' }}>Baru</option>
                    </select>
                </div>
                <div>
                    <label class="text-white text-sm font-medium mb-2 block">Rating</label>
                    <input type="number" name="rating" value="{{ old('rating', $product->rating) }}" step="0.1" min="0" max="5"
                           class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                </div>
                <div>
                    <label class="text-white text-sm font-medium mb-2 block">Jumlah Review</label>
                    <input type="number" name="reviews_count" value="{{ old('reviews_count', $product->reviews_count) }}" min="0"
                           class="w-full bg-eco-dark-3 border border-white/10 text-white focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors">
                </div>
            </div>

            <!-- Is Active -->
            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ $product->is_active ? 'checked' : '' }}
                       class="w-4 h-4 bg-eco-dark-3 border-white/20 rounded focus:ring-eco-orange text-eco-orange">
                <label for="is_active" class="text-white text-sm font-medium">Produk Aktif (tampil di website)</label>
            </div>
        </div>

        <!-- Submit -->
        <div class="flex items-center gap-3 mt-6">
            <button type="submit" class="bg-eco-orange hover:bg-eco-orange-light text-white font-semibold rounded-xl px-6 py-3 text-sm transition-all hover:shadow-lg hover:shadow-eco-orange/25">
                Update Produk
            </button>
            <a href="{{ route('admin.products.index') }}" class="bg-eco-dark-3 hover:bg-eco-dark border border-white/10 text-white font-semibold rounded-xl px-6 py-3 text-sm transition-all">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
