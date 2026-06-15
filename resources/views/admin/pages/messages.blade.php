@extends('admin.layouts.app')

@section('title', 'Pesan Masuk')
@section('page_title', 'Pesan Masuk')
@section('page_subtitle', 'Daftar pesan dari pelanggan')

@section('content')
<div class="bg-eco-dark-2 border border-white/5 rounded-xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-left text-eco-gray text-sm border-b border-white/5">
                    <th class="px-6 py-3 font-medium">Pengirim</th>
                    <th class="px-6 py-3 font-medium">Pesan</th>
                    <th class="px-6 py-3 font-medium">Tanggal</th>
                    <th class="px-6 py-3 font-medium">Status</th>
                    <th class="px-6 py-3 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $msg)
                <tr class="border-b border-white/5 hover:bg-eco-dark-3/50 transition-colors {{ !$msg->is_read ? 'bg-eco-orange/5' : '' }}">
                    <td class="px-6 py-4">
                        <div class="text-white text-sm font-medium">{{ $msg->name }}</div>
                        <div class="text-eco-gray text-xs">{{ $msg->email }}</div>
                        @if($msg->phone)
                            <div class="text-eco-gray text-xs">{{ $msg->phone }}</div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-eco-gray text-sm line-clamp-2 max-w-xs">{{ $msg->message }}</div>
                    </td>
                    <td class="px-6 py-4 text-eco-gray text-sm">{{ $msg->created_at->format('d M Y, H:i') }}</td>
                    <td class="px-6 py-4">
                        @if($msg->is_read)
                            <span class="bg-eco-dark-3 text-eco-gray text-xs font-medium px-2.5 py-1 rounded-full">Dibaca</span>
                        @else
                            <span class="bg-eco-orange/10 text-eco-orange text-xs font-medium px-2.5 py-1 rounded-full">Baru</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-end gap-2">
                            @if(!$msg->is_read)
                                <form method="POST" action="{{ route('admin.messages.read', $msg->id) }}">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="text-eco-gray hover:text-green-400 transition-colors p-1.5" title="Tandai dibaca">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </button>
                                </form>
                            @endif
                            <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}" onsubmit="return confirm('Hapus pesan ini?')">
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

                @if($messages->isEmpty())
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-eco-gray">Belum ada pesan masuk</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @if($messages->hasPages())
    <div class="px-6 py-4 border-t border-white/5">
        {{ $messages->links() }}
    </div>
    @endif
</div>
@endsection
