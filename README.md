# Tugas Pemrograman Web Pertemuan 9 

## Identitas
- Nama: Muhammad Hamdi Yahya
- NIM: 60324035
- Kelas: B
- Mata Kuliah: Pemorgraman Web 2

---

# Tugas yang dibuat

## Tugas 1 - Routing dan View Anggota
- Menampilkan daftar anggota perpustakaan
- Menampilkan detail anggota
- Menggunakan Bootstrap 5
- Menggunakan Blade Template

## Tugas 2 - Controller Kategori Buku
- Menampilkan daftar kategori buku
- Menampilkan detail kategori
- Fitur pencarian kategori
- Menggunakan Controller Laravel
- Menggunakan konsep MVC

---

# View yang Dibuat

- `resources/views/layouts/app.blade.php`
- `resources/views/anggota/index.blade.php`
- `resources/views/anggota/show.blade.php`
- `resources/views/kategori/index.blade.php`
- `resources/views/kategori/show.blade.php`
- `resources/views/kategori/search.blade.php`

---

# Screenshot Hasil Route

> Semua screenshot disimpan di folder `images/`

## 1. Route `/anggota`
Menampilkan daftar anggota perpustakaan dalam bentuk tabel Bootstrap.

![Daftar Anggota](image/1.png)

---

## 2. Route `/anggota/1`
Menampilkan detail lengkap anggota perpustakaan.

![Detail Anggota](image/2.png)

---

## 3. Route `/kategori`
Menampilkan daftar kategori buku dalam bentuk card Bootstrap.

![Daftar Kategori](image/3.png)

---

## 4. Route `/kategori/1`
Menampilkan detail kategori beserta daftar buku.

![Detail Kategori](image/4.png)

---

## 5. Route `/kategori/search/database`
Menampilkan hasil pencarian kategori berdasarkan keyword.

![Search Kategori](image/5.png)

---

# Cara Menjalankan Project

## 1. Clone Repository
```bash
git clone https://github.com/username/nama-repository.git
```

## 2. Masuk ke Folder Project
```bash
cd nama-repository
```

## 3. Install Dependency
```bash
composer install
npm install
```

## 4. Copy File Environment
```bash
cp .env.example .env
```

## 5. Generate Application Key
```bash
php artisan key:generate
```

## 6. Jalankan Server Laravel
```bash
php artisan serve
```

---
