# arya-laravel11-docker-template

Ini adalah template proyek Laravel yang sudah terintegrasi dengan **Docker**, siap untuk langsung digunakan.

Proyek ini menggunakan:
- **Laravel 11** 
- **Nginx** 
- **PHP 8.3 FPM** 
- **SQLite** 
- **Node.js** 

## Prasyarat

Sebelum mulai, pastikan telah menginstall docker:
- [Docker](https://docs.docker.com/desktop/setup/install/windows-install/) 

## Cara Menjalankan

### 1. Clone Repository

Clone proyek ini menggunakan Git:
```bash
git clone https://github.com/AryaPrayogi16/Laravel11_Tailwind_Docker_BlogWebsite.git
``` 

### 2. Menjalankan Aplikasi dengan Docker
Setelah meng-clone repository, buka cmd di dalam folder jalankan perintah berikut untuk membangun dan menjalankan container Docker:
```bash
Docker compose up --build
```


Perintah ini akan:
Menggunakan file docker-compose.yml untuk membangun image Docker untuk PHP, Nginx, dan Node.js
serta membuat kontainer yang diperlukan 

### 3. Akses web
Setelah proses build selesai, buka browser dan akses halaman web melalui URL:
[http://localhost:8000](http://localhost:8000) 

### 4. Mengelola Dependensi PHP & Node.js
Jika perlu mengelola dependensi PHP atau Node.js di dalam container, masuk ke container menggunakan perintah berikut:
Untuk PHP (Laravel):
```bash
docker exec -it laravel_app bash
```
Untuk Node.js:
```bash
docker exec -it laravel_node bash
```

Dibuat dan disediakan oleh:
ARYA PRAYOGI UTAMA

