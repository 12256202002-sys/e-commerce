<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Simple auth - ganti username & password sesuai keinginan Anda
        if ($request->username === 'admin' && $request->password === 'admin123') {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.dashboard')->with('success', 'Berhasil login!');
        }

        return back()->with('error', 'Username atau password salah!')->withInput();
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $totalProducts = Product::count();
        $activeProducts = Product::where('is_active', true)->count();
        $totalMessages = ContactMessage::count();
        $unreadMessages = ContactMessage::where('is_read', false)->count();
        $recentProducts = Product::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.pages.dashboard', compact(
            'totalProducts', 'activeProducts', 'totalMessages', 'unreadMessages', 'recentProducts'
        ));
    }
}
