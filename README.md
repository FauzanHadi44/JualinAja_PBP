# JualinAja — E‑Commerce Sederhana (Laravel 12)

JualinAja adalah aplikasi e‑commerce sederhana untuk menjelajah katalog produk, mengelola keranjang, melakukan checkout, dan mengelola pesanan. Aplikasi ini juga menyediakan panel admin untuk manajemen produk, kategori, dan status pesanan.

## Fitur Utama

- Katalog produk, pencarian (`q`) dan filter kategori
- Detail produk dengan pilihan ukuran untuk kategori Fashion dan Alas Kaki
- Keranjang belanja: tambah, ubah kuantitas, hapus item
- Checkout dengan ringkasan subtotal, pengiriman tetap Rp15.000, pajak 10%
- Riwayat pesanan pengguna
- Admin dashboard dengan statistik produk dan pesanan
- Manajemen produk (CRUD), kategori, dan pembaruan status pesanan

## Teknologi

- Backend: Laravel `^12.0` (PHP `^8.2`)
- Frontend: Blade, Tailwind CSS `^4.0`, Flowbite, Bootstrap Icons
- Build: Vite `^7` dengan `laravel-vite-plugin`
- HTTP: Axios untuk permintaan XHR
- Database: Default `sqlite` (mendukung MySQL/PostgreSQL/SQL Server)

## Prasyarat

- `PHP 8.2+` dan `Composer`
- `Node.js 18+` dan `npm`
- Driver database (SQLite disarankan untuk pengembangan cepat)

## Instalasi & Menjalankan

1. Instal dependency backend

   ```bash
   composer install
   ```

2. Salin konfigurasi lingkungan

   ```bash
   # Windows
   copy .env.example .env
   # macOS/Linux
   cp .env.example .env
   ```

3. Generate kunci aplikasi

   ```bash
   php artisan key:generate
   ```

4. Konfigurasi database

   - Opsi cepat (SQLite): buat file kosong `database/database.sqlite` lalu set `DB_CONNECTION=sqlite` di `.env`
   - Opsi lain (MySQL/PostgreSQL): isi variabel `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

5. Jalankan migrasi dan seeder

   ```bash
   php artisan migrate --seed
   ```

6. Buat symlink storage untuk menampilkan gambar produk

   ```bash
   php artisan storage:link
   ```

7. Instal dependency frontend dan jalankan dev server

   ```bash
   npm install
   npm run dev
   ```

8. Jalankan server Laravel

   ```bash
   php artisan serve
   ```

## Akun Demo

- Admin: `superadmin@example.com` / `admin123`
- Pengguna: `user@example.com` / `user123`

## Rute Penting

- `GET /` beranda
- `GET /produk` daftar semua produk, dukung query `?q=...`
- `GET /produk/{id}` detail produk
- Autentikasi: `GET /login`, `POST /login`, `POST /logout`, `GET /register`, `POST /register`
- Keranjang: `GET /keranjang`, `POST /keranjang/add/{id}`, `POST /keranjang/update/{cart}`, `POST /keranjang/remove/{cart}`
- Checkout: `GET /checkout`, `POST /checkout/process`
- Pesanan pengguna: `GET /orders`
- Admin (prefix `/admin`): dashboard, produk (index/create/store/edit/update/destroy), kategori (index/store), pesanan (index/updateStatus)

## Struktur Data

- Model: `Product`, `Category`, `Cart`, `Order`, `OrderItem`, `User`
- Migrasi:
  - `categories`, `products` (relasi `category_id`)
  - `carts` (unik per `user_id+product_id+size`)
  - `orders`, `order_items` (relasi ke `users` dan `products`)

## Perintah Pengembangan

- Jalankan dev server Vite: `npm run dev`
- Build aset produksi: `npm run build`

## Pengujian

```bash
php artisan test
```

## Lisensi

MIT
