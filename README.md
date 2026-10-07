# Draque

Draque adalah aplikasi nonton dracin dengan halaman daftar, masuk, dan beranda sederhana. Dibangun dengan Laravel, Bootstrap 5, dan MySQL.

## Menjalankan aplikasi

1. Pasang dependensi dan siapkan file konfigurasi:

   ```bash
   composer install
   ```

   Jika `.env` belum tersedia, salin `.env.example` menjadi `.env`, lalu jalankan:

   ```bash
   php artisan key:generate
   ```

2. Buat database MySQL bernama `draque` (misalnya melalui Laragon/phpMyAdmin). Sesuaikan `DB_HOST`, `DB_PORT`, `DB_USERNAME`, dan `DB_PASSWORD` pada `.env` bila konfigurasi MySQL berbeda.
3. Siapkan tabel:

   ```bash
   php artisan migrate
   ```

4. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

5. Buka `http://127.0.0.1:8000`, lalu daftar akun Draque.

Halaman pendaftaran membuat akun dan langsung masuk. Halaman login mendukung opsi ingat sesi, sementara beranda hanya dapat dibuka oleh pengguna yang sudah masuk.
