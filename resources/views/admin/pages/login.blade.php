@extends('admin.layouts.app')

@section('title', 'Login Admin')
@section('page_title', '')
@section('page_subtitle', '')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-eco-orange rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-white">Admin Login</h2>
            <p class="text-eco-gray text-sm mt-1">Masuk untuk mengelola website Eco Briquette</p>
        </div>

        <form method="POST" action="{{ route('admin.login.post') }}" class="bg-eco-dark-2 border border-white/5 rounded-xl p-6 space-y-5">
            @csrf

            @if(session('error'))
                <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-lg text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <div>
                <label class="text-white text-sm font-medium mb-2 block">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" required autofocus
                       class="w-full bg-eco-dark-3 border border-white/10 text-white placeholder:text-eco-gray/50 focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors"
                       placeholder="Masukkan username">
            </div>

            <div>
                <label class="text-white text-sm font-medium mb-2 block">Password</label>
                <input type="password" name="password" required
                       class="w-full bg-eco-dark-3 border border-white/10 text-white placeholder:text-eco-gray/50 focus:border-eco-orange rounded-lg h-11 px-4 outline-none transition-colors"
                       placeholder="Masukkan password">
            </div>

            <button type="submit" class="w-full bg-eco-orange hover:bg-eco-orange-light text-white font-bold rounded-xl h-11 transition-all hover:shadow-lg hover:shadow-eco-orange/25">
                Masuk
            </button>
        </form>
    </div>
</div>
@endsection
