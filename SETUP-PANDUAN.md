# 🛒 Eco Briquette - Website Laravel

Website penjual arang eco briquette dengan tema gelap dan aksen orange.

## 📋 Prasyarat

Pastikan sudah terinstall:
- **Laragon** (Full version) → [laragon.org](https://laragon.org/download/)
- **Composer** → [getcomposer.org](https://getcomposer.org/)
- **Node.js** (versi 18+) → [nodejs.org](https://nodejs.org/)
- **VS Code** → [code.visualstudio.com](https://code.visualstudio.com/)

---

## 🚀 Cara Setup (Step by Step)

### 1. Buat Project Laravel Baru

Buka terminal Laragon, lalu:

```bash
cd C:\laragon\www
composer create-project laravel/laravel eco-briquette
```

### 2. Copy File Template

Copy SEMUA file dari folder ini ke project Laravel Anda:

```
eco-briquette-laravel/
├── app/                          → copy ke C:\laragon\www\eco-briquette\app\
├── database/                     → copy ke C:\laragon\www\eco-briquette\database\
├── public/images/                → copy ke C:\laragon\www\eco-briquette\public\images\
├── resources/css/app.css         → copy ke C:\laragon\www\eco-briquette\resources\css\app.css
├── resources/views/              → copy ke C:\laragon\www\eco-briquette\resources\views\
├── routes/web.php                → copy ke C:\laragon\www\eco-briquette\routes\web.php
├── tailwind.config.js            → copy ke C:\laragon\www\eco-briquette\tailwind.config.js
└── vite.config.js                → copy ke C:\laragon\www\eco-briquette\vite.config.js
```

**Cara cepat (Windows CMD):**
```cmd
xcopy "path\ke\eco-briquette-laravel\app" "C:\laragon\www\eco-briquette\app" /E /Y
xcopy "path\ke\eco-briquette-laravel\database" "C:\laragon\www\eco-briquette\database" /E /Y
xcopy "path\ke\eco-briquette-laravel\public\images" "C:\laragon\www\eco-briquette\public\images" /E /Y
xcopy "path\ke\eco-briquette-laravel\resources" "C:\laragon\www\eco-briquette\resources" /E /Y
copy "path\ke\eco-briquette-laravel\routes\web.php" "C:\laragon\www\eco-briquette\routes\web.php" /Y
copy "path\ke\eco-briquette-laravel\tailwind.config.js" "C:\laragon\www\eco-briquette\tailwind.config.js" /Y
copy "path\ke\eco-briquette-laravel\vite.config.js" "C:\laragon\www\eco-briquette\vite.config.js" /Y
```

### 3. Setup Database

Buka **HeidiSQL** dari Laragon, buat database:
```sql
CREATE DATABASE eco_briquette;
```

Edit file `.env` di project Laravel:
```env
DB_DATABASE=eco_briquette
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Install Tailwind CSS

```bash
cd C:\laragon\www\eco-briquette
npm install -D tailwindcss postcss autoprefixer
```

### 5. Jalankan Migrasi & Seeder

```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

### 6. Jalankan Project

Buka **2 terminal** terpisah:

**Terminal 1 (Tailwind CSS build):**
```bash
cd C:\laragon\www\eco-briquette
npm run dev
```

**Terminal 2 (Laravel server):**
```bash
cd C:\laragon\www\eco-briquette
php artisan serve
```

Buka browser → akses `http://eco-briquette.test` (dari Laragon) atau `http://localhost:8000`

---

## 📁 Struktur File Template

```
resources/views/
├── layouts/
│   └── app.blade.php          ← Layout utama (head, nav, footer, scripts)
├── partials/
│   ├── navbar.blade.php       ← Navigasi fixed + mobile menu
│   └── footer.blade.php       ← Footer dengan 4 kolom
├── home/
│   ├── hero.blade.php         ← Hero section full-width
│   ├── products.blade.php     ← Grid 4 produk dengan kartu
│   ├── features.blade.php     ← 6 keunggulan
│   ├── about.blade.php        ← Tentang kami + gambar
│   ├── testimonials.blade.php ← 3 testimoni pelanggan
│   ├── cta.blade.php          ← Call to action + promo
│   └── contact.blade.php      ← Form kontak + info
└── pages/
    └── home.blade.php         ← Halaman utama (gabungan semua section)
```

---

## 🎨 Customization

### Ganti Warna
Edit `tailwind.config.js` → bagian `extend.colors`:
```js
'eco-orange': '#FF6600',       // Warna utama
'eco-orange-light': '#FF8533', // Hover
'eco-dark': '#0D0D0D',         // Background utama
'eco-dark-2': '#1A1A1A',       // Background card
'eco-dark-3': '#252525',       // Background secondary
'eco-gray': '#CCCCCC',         // Teks secondary
```

### Ganti Nomor WhatsApp
Cari dan replace `6281234567890` dengan nomor Anda di semua file blade.

### Tambah Produk via Database
```bash
php artisan tinker
>>> \App\Models\Product::create([
>>>     'name' => 'Produk Baru',
>>>     'slug' => 'produk-baru',
>>>     'description' => 'Deskripsi produk baru...',
>>>     'short_description' => 'Deskripsi singkat',
>>>     'price' => 50000,
>>>     'weight' => '1 kg',
>>>     'image' => 'images/product-new.png',
>>>     'badge' => 'Baru',
>>>     'rating' => 4.5,
>>>     'reviews_count' => 0,
>>> ]);
```

---

## 🔧 VS Code Extensions yang Direkomendasikan

| Extension | Fungsi |
|-----------|--------|
| Laravel Blade Spacer | Auto spacing di Blade |
| Laravel Snippets | Shortcut Laravel |
| PHP Intelephense | Autocomplete PHP |
| Tailwind CSS IntelliSense | Autocomplete Tailwind |
| Auto Rename Tag | Rename HTML tag otomatis |
| Prettier | Auto format kode |

---

## ❓ FAQ

**Q: Gambar tidak muncul?**
A: Pastikan folder `public/images/` berisi semua gambar dan jalankan `php artisan storage:link`

**Q: CSS tidak berubah?**
A: Pastikan `npm run dev` sedang berjalan di terminal

**Q: Error 500?**
A: Jalankan `php artisan config:cache` dan `php artisan view:cache`

**Q: Mau deploy ke hosting?**
A: Jalankan `npm run build` (bukan dev), lalu upload semua file ke hosting
