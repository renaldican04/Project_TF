# Teknologi Framework - Sistem Penjualan Online
Sistem Penjualan Jersey Online

## Deskripsi

Sistem Penjualan Jersey Online adalah aplikasi berbasis web yang dikembangkan menggunakan Laravel untuk memudahkan pengguna dalam melihat katalog jersey, melakukan pemesanan, serta mengelola transaksi pembelian secara online.

Project ini dibuat sebagai bagian dari pembelajaran dan pengembangan portofolio pada bidang Web Development dan Sistem Informasi.

---

## Fitur Utama

### User

* Melihat katalog produk jersey
* Melihat detail produk
* Menambahkan produk ke keranjang
* Melakukan checkout pesanan
* Melihat riwayat pembelian

### Administrator

* Login Admin
* Mengelola data produk
* Menambah produk baru
* Mengubah data produk
* Menghapus produk
* Mengelola data pengguna
* Mengelola transaksi pesanan

---

## Teknologi yang Digunakan

* Laravel 12
* PHP 8+
* MySQL
* HTML5
* CSS3
* JavaScript
* Vite
* Bootstrap
* Composer

---

## Struktur Project

```text
Project_TF/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
│
├── .editorconfig
├── .env.example
├── .gitattributes
├── .gitignore
│
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── vite.config.js
└── README.md
```

---

## Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/USERNAME/NAMA_REPOSITORY.git
```

### 2. Masuk ke Folder Project

```bash
cd NAMA_REPOSITORY
```

### 3. Install Dependency PHP

```bash
composer install
```

### 4. Install Dependency Frontend

```bash
npm install
```

### 5. Copy File Environment

```bash
cp .env.example .env
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Konfigurasi Database

Buat database baru pada MySQL kemudian sesuaikan konfigurasi pada file `.env`.

Contoh:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 8. Jalankan Migrasi Database

```bash
php artisan migrate
```

Jika menggunakan seeder:

```bash
php artisan db:seed
```

### 9. Jalankan Server Laravel

```bash
php artisan serve
```

### 10. Jalankan Vite

```bash
npm run dev
```

Aplikasi dapat diakses melalui:

```text
http://127.0.0.1:8000
```

---

## Tujuan Project

* Mengembangkan kemampuan Web Development menggunakan Laravel.
* Memahami implementasi CRUD pada aplikasi web.
* Mempelajari integrasi database menggunakan MySQL.
* Menambah portofolio pengembangan aplikasi berbasis web.

---

## Ruang Lingkup

* Manajemen data produk
* Manajemen pengguna
* Manajemen transaksi
* Sistem autentikasi
* Dashboard administrator

---

## Catatan

Project ini dibuat untuk keperluan pembelajaran, pengembangan portofolio, dan implementasi konsep pengembangan aplikasi web menggunakan Laravel Framework.
