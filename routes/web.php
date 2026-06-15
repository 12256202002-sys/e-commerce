<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\MessageAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==================== PUBLIC ROUTES ====================

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Produk (public)
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');

// Kontak (public)
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

// ==================== ADMIN ROUTES ====================

// Admin Login (tanpa middleware)
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Panel (dengan middleware)
Route::prefix('admin')->middleware('admin.auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Products CRUD
    Route::resource('products', ProductAdminController::class, [
        'names' => [
            'index' => 'admin.products.index',
            'create' => 'admin.products.create',
            'store' => 'admin.products.store',
            'show' => 'admin.products.show',
            'edit' => 'admin.products.edit',
            'update' => 'admin.products.update',
            'destroy' => 'admin.products.destroy',
        ],
    ]);

    // Messages
    Route::get('/messages', [MessageAdminController::class, 'index'])->name('admin.messages.index');
    Route::patch('/messages/{message}/read', [MessageAdminController::class, 'markRead'])->name('admin.messages.read');
    Route::delete('/messages/{message}', [MessageAdminController::class, 'destroy'])->name('admin.messages.destroy');
});
