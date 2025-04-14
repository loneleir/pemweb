# Analisis Proyek Nginx Static Web Server

## Pemrograman Web

Pemrograman Web (Pemweb) adalah bidang dalam ilmu komputer yang berfokus pada pengembangan dan pengelolaan aplikasi berbasis web. Dalam proyek ini, digunakan Nginx sebagai web server untuk melayani halaman statis menggunakan Docker.

## 5W + 1H

### What (Apa yang dibuat?)
Proyek ini adalah web server berbasis Nginx dalam Docker yang digunakan untuk menampilkan halaman HTML statis dari folder src/.

### Why (Kenapa dibuat?)
- Untuk mempelajari cara kerja Nginx dalam Docker.
- Mempermudah pengelolaan dan deployment web statis.
- Menghindari konfigurasi server manual yang lebih kompleks.

### Who (Siapa yang menggunakan?)
- Developer yang ingin belajar dasar Nginx dengan Docker.
- Mahasiswa atau profesional yang membutuhkan environment uji coba cepat.

### When (Kapan digunakan?)
- Saat membutuhkan server lokal untuk pengujian.
- Sebelum melakukan deploy ke server produksi.

### Where (Di mana berjalan?)
- Di localhost (http://localhost/) melalui Docker.
- Bisa dijalankan di Windows, Linux, atau Mac selama mendukung Docker.

### How (Bagaimana cara kerjanya?)
1. Docker Compose menjalankan container Nginx.
2. Folder src/ dipasang sebagai volume agar file HTML dapat diakses.
3. Nginx melayani file statis dari /usr/share/nginx/html.
4. Konfigurasi nginx.conf mengatur server dan error handling.

---

## Struktur Folder & File

```plaintext
PEMWEB
│── 📁 coding
│   ├── 📁 nginx
│   │   └── 📄 nginx.conf
│   ├── 📁 src
│   │   ├── 📄 div.html
│   │   ├── 📄 index.html
│   ├── 📄 .env
│   ├── 📄 docker-compose.yml


---

📁 coding/nginx/

Folder ini menyimpan konfigurasi Nginx.

📄 nginx.conf

Mengatur server untuk berjalan di port 80.

Menentukan root directory untuk file HTML.

Mengatur error handling (404 jika file tidak ditemukan).


Kode Utama:

server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}

✅ Kelebihan:
✔ Konfigurasi sederhana dan langsung bisa digunakan.
✔ Menghindari error saat file tidak ditemukan.

❌ Kekurangan:
❌ Hanya mendukung file statis, tidak bisa menjalankan PHP atau Node.js.
❌ Root folder masih default Nginx, lebih baik diarahkan ke src/.


---

📁 coding/src/

Berisi file HTML statis yang akan ditampilkan di browser.

📄 index.html

Halaman utama (saat ini kosong).


Kode:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

❌ Kekurangan:

Tidak ada konten, menyebabkan halaman localhost/ kosong.



---

📄 div.html

Contoh halaman dengan elemen <div>.


Kode:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag div</title>
</head>
<body>
    <div>
        This is a div element.
        <p>This is a paragraph inside div</p>
    </div>
</body>
</html>

✅ Kelebihan:
✔ Sudah ada konten yang bisa ditampilkan di localhost/div.html.

❌ Kekurangan:
❌ Masih sangat sederhana, bisa ditambahkan CSS atau JavaScript agar lebih menarik.


---

📄 .env

Menyimpan variabel lingkungan.


Isi:

COMPOSE_PROJECT_NAME=irna
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest

❌ Kekurangan:

Belum digunakan dalam docker-compose.yml, sehingga tidak berpengaruh.



---

📄 docker-compose.yml

File untuk menjalankan proyek menggunakan Docker Compose.


Kode:

version: '3'

services:
  web:
    image: nginx:latest
    ports:
      - "80:80"
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html

✅ Kelebihan:
✔ Mempermudah setup server dalam container.
✔ Perubahan file langsung terlihat karena menggunakan volume.

❌ Kekurangan:
❌ Tidak ada environment variable dari .env yang digunakan.
❌ Belum ada logging atau error handling untuk debug.


---

Kesimpulan

Konfigurasi ini cocok untuk belajar dasar Nginx dalam Docker serta menguji pengaturan server lokal. Bisa digunakan langsung atau dikembangkan lebih lanjut untuk kebutuhan yang lebih kompleks.