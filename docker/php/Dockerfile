# Menggunakan PHP 8.3 FPM sebagai base image untuk menjalankan aplikasi Laravel
FROM php:8.3-fpm


# Set working directory di dalam container ke /var/www/html
WORKDIR /var/www/html
# Install SQLite3 dan library yang dibutuhkan
RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev \
    # Membersihkan cache apt untuk mengurangi ukuran image
    && apt-get clean && rm -rf /var/lib/apt/lists/*
# Update paket dan install dependensi lain yang dibutuhkan
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y \
    curl \              
    # Menginstal curl untuk mendownload file
    zip \               
    # Menginstal zip untuk mem-packing file
    unzip \             
    # Menginstal unzip untuk mengekstrak file zip
    git \               
    # Menginstal git untuk version control
    && docker-php-ext-install pdo_sqlite \ 
    # Install ekstensi PHP untuk SQLite
    # Membersihkan cache apt setelah instalasi untuk mengurangi ukuran image
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer untuk manajemen dependensi PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Salin seluruh kode Laravel lebih dulu agar artisan tersedia
COPY src/laravel-arya/ /var/www/html

# Kemudian baru jalankan composer install
RUN composer install --no-dev --optimize-autoloader


# Perintah berikut dapat ditambahkan jika Anda ingin menjalankan perintah tertentu
# seperti menginstall dependensi menggunakan Composer setelah container dibuat.
# RUN composer install
