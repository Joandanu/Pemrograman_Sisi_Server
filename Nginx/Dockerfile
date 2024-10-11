# Menggunakan image Ubuntu sebagai base
FROM ubuntu:latest

# Menginstal Nginx
RUN apt-get update && \
    apt-get install -y nginx && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Mengatur direktori kerja
WORKDIR /var/www/html

# Menyalakan Nginx pada saat container dijalankan
CMD ["nginx", "-g", "daemon off;"]
