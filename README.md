# arya-laravel11-docker-template

Ini adalah template proyek Laravel yang sudah terkonfigurasi dengan **Docker**, siap untuk langsung digunakan.

Proyek ini menggunakan:
- **Laravel** untuk aplikasi PHP
- **Nginx** sebagai web server
- **PHP 8.3 FPM** untuk menjalankan aplikasi Laravel
- **SQLite** untuk database
- **Node.js** untuk pengelolaan dependensi frontend

## Prasyarat

Sebelum mulai, pastikan telah menginstall docker:
- [Docker](https://www.docker.com/products/docker-desktop) 

## Cara Menggunakan

### 1. Clone Repository

Clone proyek ini menggunakan Git:

```bash
git clone https://github.com/AryaPrayogi16/arya-laravel11-docker-template.git

### 2. Menjalankan Aplikasi dengan Docker
Setelah meng-clone repository, buka cmd di dalam folder jalankan perintah berikut untuk membangun dan menjalankan container Docker:

"docker-compose up --build"

Perintah ini akan:
Menggunakan file docker-compose.yml untuk membangun image Docker untuk PHP, Nginx, dan Node.js
Membuat kontainer yang diperlukan dan menjalankan aplikasi Laravel

### 3. Akses Aplikasi
Setelah proses build selesai, buka browser dan akses aplikasi Laravel melalui URL:
http://localhost:8000

### 4. Mengelola Dependensi PHP & Node.js
Jika perlu mengelola dependensi PHP atau Node.js di dalam container, masuk ke container menggunakan perintah berikut:
Untuk PHP (Laravel):
docker exec -it laravel_app bash
Untuk Node.js:
docker exec -it laravel_node bash

Dibuat dan disediakan oleh:
ARYA PRAYOGI UTAMA

