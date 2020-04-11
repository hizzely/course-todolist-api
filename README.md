# Course - Todo List API

## Cara Menggunakan

1. Install XAMPP / Laragon / WAMPP / dll versi terbaru (pastikan versi PHP >= 7.2.5)  
Untuk pengguna Windows, daftarkan direktori yang ada `php.exe` ke Environment Variables. Lokasi `php.exe` bervariasi tergantung menggunakan tools yang mana.  
    - Default XAMPP: `C:\xampp\php`  
    - Default Laragon: `C:\laragon\bin\php\{versi php}`
2. Install [Composer](https://getcomposer.org).  
Untuk pengguna Windows, gunakan Installer yang disediakan agar lebih mudah.
3. Download dan extract project ini.
4. Buka CMD / Terminal dan arahkan ke direktori project hasil extract.
5. Jalankan perintah berikut untuk install semua dependensinya:  
`composer install`
6. Buat database baru di phpMyAdmin. Nama database bebas.
7. Copy `.env.example` dan rename menjadi `.env`.
8. Buka file `.env` tadi dan cek apakah:  
    - `APP_KEY`: Sudah digenerate dengan `php artisan key:generate`
    - `DB_HOST`: `localhost` atau `127.0.0.1`
    - `DB_PORT`: `3306` (default MySQL, sesuaikan jika port bentrok)
    - `DB_DATABASE`: Sesuaikan dengan nama database yang dibuat di phpMyAdmin
    - `DB_USERNAME`: Sesuaikan dengan username login di phpMyAdmin
    - `DB_PASSWORD`: Sesuaikan dengan password login di phpMyAdmin
9. Jalankan perintah berikut untuk menjalankan server Laravel:  
`php artisan serve`
10. Untuk melihat semua endpoint API Todo List, jalankan:  
`php artisan route:list`
11. Operasikan Todo List melalui Endpoint API tersebut dengan nama parameter sesuai dengan nama tabel.
12. Gunakan tools seperti Postman agar penggunaan API lebih mudah.


## Progress Topik

### 04 April 2020:
- Perkenalan Composer dan Laravel
- Inisialisasi project Laravel
- Perkenalan konsep dasar MVC (Fokus ke letak file-file MVC di Laravel)
- Live coding membuat API CRUD Todo List (Migration, Model, Controller, Route API)
