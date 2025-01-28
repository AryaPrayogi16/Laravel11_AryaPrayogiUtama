# Menggunakan Node.js 22 sebagai base image untuk menjalankan aplikasi Node
FROM node:22

# Set working directory di dalam container ke /var/www/html
WORKDIR /var/www/html

# Menyalin package.json dan package-lock.json ke dalam container
COPY ./src/laravel-arya/package*.json ./

# Menginstal dependensi yang diperlukan menggunakan npm
RUN npm install

# Menyalin seluruh file aplikasi ke dalam container
COPY ./src/laravel-arya /var/www/html

# Perintah default untuk menjalankan aplikasi menggunakan npm
CMD ["npm", "run", "dev"]
