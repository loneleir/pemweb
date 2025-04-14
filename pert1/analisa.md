[17.07, 24/3/2025] IR: # Analisis Proyek Website Sederhana

## 1. Apa itu Pemweb, HTML, Website, Index, dan Profile?

- *Pemrograman Web (Pemweb)* → Proses membuat dan mengembangkan halaman web.  
- *HTML (HyperText Markup Language)* → Bahasa untuk membuat struktur halaman web.  
- *Website* → Kumpulan halaman web yang saling terhubung.  
- *Index.html* → Halaman utama yang biasanya pertama kali diakses saat membuka website.  
- *Profile.html* → Halaman tambahan yang berisi informasi profil pengguna.  

---

## 2. 5W+1H  

### *What (Apa yang dibuat?)*  
Website sederhana dengan dua halaman:  

- *index.html* → Halaman utama dengan judul dan tautan ke halaman profil.  
- *profile.html* → Halaman profil dengan informasi singkat dan tautan kembali ke halaman utama.  

### *Why (Kenapa dibuat?)*  
- Untuk memahami dasar HTML.  
- Sebagai latihan membuat website sederhana.  
- Membuat halaman yang cepat dan ringan.  

### *Who (Siapa yang menggunakan?)*  
- Pemula yang ingin belajar HTML.  
- Orang yang ingin membuat halaman web sederhana.  

### *When (Kapan digunakan?)*  
- Saat ingin belajar dasar HTML.  
- Saat butuh website ringan tanpa fitur tambahan.  

### *Where (Di mana berjalan?)*  
- Di browser seperti Chrome, Firefox, Edge, atau Safari.  
- Di komputer lokal atau dihosting secara online.  

### *How (Bagaimana cara kerjanya?)*  
1. *index.html* menampilkan judul dan tautan ke *profile.html*.  
2. Saat tautan diklik, browser membuka *profile.html*.  
3. *profile.html* menampilkan informasi profil dan tautan kembali ke *index.html*.  

---

## 3. Struktur Folder & File

📂 latihan
│── 📄 index.html
│── 📄 profile.html

---

## 4. Analisis Kode  

### *4.1 index.html*  

```html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halo, ini IR</title>
</head>
<body>

  <h1>Halo</h1>
  <p>Selamat datang di halaman utama. Klik tautan di bawah untuk melihat profil.</p>

  <hr>

  <a href="profile.html">Lihat Profil</a>

</body>
</html>

Penjelasan:

<!DOCTYPE html> → Menentukan HTML5.

<html lang="id"> → Menandakan bahasa Indonesia.

<head> → Berisi meta informasi dan judul halaman.

<title> → Judul yang muncul di tab browser.

<h1> → Judul utama.

<p> → Paragraf teks.

<hr> → Garis pemisah.

<a href="profile.html"> → Tautan ke halaman profil.



---

4.2 profile.html

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>

  <h1>Profile</h1>
  <p>Ini adalah halaman profil yang hanya berisi tulisan. Anda bisa menambahkan informasi tentang diri Anda di sini.</p>

  <hr>

  <a href="index.html">Kembali ke Halaman Utama</a>

</body>
</html>

Penjelasan:

Struktur sama seperti index.html.

<h1>Profile</h1> → Judul halaman profil.

<p> → Paragraf berisi informasi profil.

<a href="index.html"> → Tautan kembali ke halaman utama.



---

5. Kelebihan & Kekurangan

✅ Kelebihan:
✔ Mudah dipahami & dibuat.
✔ Sangat ringan & cepat diakses.
✔ Tidak butuh konfigurasi tambahan.

❌ Kekurangan:
❌ Tampilannya sangat sederhana.
❌ Tidak bisa diatur tata letaknya tanpa tambahan styling.


---

6. Kesimpulan

Website ini adalah contoh dasar HTML dengan dua halaman yang saling terhubung. Cocok untuk pemula yang ingin belajar bagaimana membuat halaman web sederhana tanpa tambahan fitur lainnya.

Markdown ini akan memformat dokumen dengan baik di berbagai platform yang mendukung Markdown, seperti GitHub, Notion, dan lainnya.
[17.24, 24/3/2025] IR: Berikut adalah versi Markdown yang lebih lengkap dan mendetail dari analisis proyek website sederhana kamu. Aku memastikan tidak ada detail yang terlewat, bahkan yang paling kecil sekalipun.

# 📌 Analisis Proyek Website Sederhana  

## 📌 1. Apa itu Pemweb, HTML, Website, Index, dan Profile?  

### 🖥 *Pemrograman Web (Pemweb)*  
Pemrograman Web adalah proses membuat dan mengembangkan halaman web menggunakan berbagai teknologi, seperti *HTML, CSS, JavaScript*, dan lainnya.  

### 📄 *HTML (HyperText Markup Language)*  
HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman web. HTML terdiri dari berbagai elemen (tag) yang menentukan bagaimana konten ditampilkan di browser.  

### 🌍 *Website*  
Website adalah kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet atau secara lokal.  

### 📌 *Index.html*  
- Halaman utama dalam sebuah website.  
- Biasanya memiliki nama index.html karena banyak server web otomatis mengarahkannya sebagai halaman default saat mengakses domain atau folder tertentu.  

### 👤 *Profile.html*  
- Halaman tambahan yang berisi informasi tentang pengguna atau pemilik website.  
- Biasanya berisi nama, deskripsi singkat, foto, dan informasi kontak.  

---

## 📌 2. 5W+1H  

### ✅ *What (Apa yang dibuat?)*  
Website sederhana dengan dua halaman:  
1. *index.html* → Halaman utama dengan judul dan tautan ke halaman profil.  
2. *profile.html* → Halaman profil dengan informasi singkat dan tautan kembali ke halaman utama.  

### ✅ *Why (Kenapa dibuat?)*  
- Untuk memahami dasar HTML tanpa gangguan dari bahasa pemrograman lain.  
- Sebagai latihan awal sebelum belajar pengembangan website yang lebih kompleks.  
- Membuat halaman yang cepat dan ringan tanpa tambahan CSS atau JavaScript.  

### ✅ *Who (Siapa yang menggunakan?)*  
- Pemula yang ingin belajar HTML dari nol.  
- Orang yang ingin membuat halaman web statis sederhana.  

### ✅ *When (Kapan digunakan?)*  
- Saat ingin belajar dasar-dasar HTML sebelum masuk ke tahap selanjutnya seperti CSS dan JavaScript.  
- Saat butuh website statis yang ringan dan cepat diakses.  

### ✅ *Where (Di mana berjalan?)*  
- Bisa dijalankan di *browser modern* seperti Chrome, Firefox, Edge, atau Safari.  
- Bisa diakses secara *lokal* di komputer atau diupload ke *hosting online* seperti GitHub Pages atau Netlify.  

### ✅ *How (Bagaimana cara kerjanya?)*  
1. *index.html* menampilkan judul dan tautan ke *profile.html*.  
2. Saat tautan diklik, browser akan membuka *profile.html*.  
3. *profile.html* menampilkan informasi profil dan tautan kembali ke *index.html*.  
4. Pengguna bisa berpindah antara halaman dengan mengklik tautan.  

---

## 📌 3. Struktur Folder & File  

```bash
📂 Project_Web  
│── 📄 index.html  
│── 📄 profile.html

Penjelasan:

Project_Web → Folder utama yang berisi semua file proyek.

index.html → Halaman utama website.

profile.html → Halaman profil pengguna.



---

📌 4. Analisis Kode

4.1 index.html

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halo, ini IR</title>
</head>
<body>

  <h1>Halo, ini IR</h1>
  <p>Selamat datang di halaman utama. Klik tautan di bawah untuk melihat profil.</p>

  <hr>

  <a href="profile.html">Lihat Profil</a>

</body>
</html>

Penjelasan kode:

<!DOCTYPE html> → Menentukan bahwa dokumen menggunakan HTML5.

<html lang="id"> → Menentukan bahasa dokumen (Bahasa Indonesia).

<head> → Berisi informasi meta dan judul halaman.

<meta charset="UTF-8"> → Mengatur encoding karakter agar mendukung berbagai simbol dan huruf.

<meta name="viewport" content="width=device-width, initial-scale=1.0"> → Mengoptimalkan tampilan agar responsif di berbagai perangkat.

<title>Halo, ini IR</title> → Menentukan judul yang akan muncul di tab browser.


<body> → Berisi konten utama halaman.

<h1> → Menampilkan judul utama dalam ukuran besar.

<p> → Paragraf teks yang menjelaskan isi halaman.

<hr> → Garis pemisah antar elemen.

<a href="profile.html"> → Tautan ke halaman profil.




---

4.2 profile.html

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>

  <h1>Profile</h1>
  <p>Ini adalah halaman profile milik Irna Rismayanti, Seorang Mahasiswi dari Universitas Esa Unggul, Fakutas Ilmu Komputer.</p>
  <p>Lahir di Tangerang, pada tahun 2004 di bulan November.</p>

  <hr>

  <a href="index.html">Kembali ke Halaman Utama</a>

</body>
</html>

Penjelasan kode:

Struktur sama seperti index.html, hanya berbeda pada isi konten.

<h1>Profile</h1> → Judul halaman profil.

<p> → Paragraf berisi informasi singkat tentang pengguna.

<a href="index.html"> → Tautan kembali ke halaman utama.



---

📌 5. Kelebihan & Kekurangan

✅ Kelebihan:

✔ Sangat sederhana dan mudah dipahami → Tidak memerlukan pengetahuan tambahan selain HTML.
✔ Cepat diakses → Karena tidak menggunakan CSS atau JavaScript, waktu loading sangat singkat.
✔ Dapat dijalankan tanpa internet → Bisa diakses langsung dari komputer tanpa perlu server.
✔ Tidak perlu konfigurasi tambahan → Bisa langsung dibuka di browser tanpa pengaturan khusus.

❌ Kekurangan:

❌ Tampilannya sangat dasar → Hanya menggunakan elemen HTML tanpa styling.
❌ Tidak responsif di berbagai ukuran layar → Tanpa CSS, tampilan mungkin kurang nyaman di layar kecil.
❌ Kurang menarik secara visual → Tidak memiliki desain yang menarik tanpa tambahan CSS.


---

📌 6. Kesimpulan

Website ini adalah contoh dasar HTML dengan dua halaman yang saling terhubung. Proyek ini cocok untuk pemula yang ingin belajar bagaimana membuat halaman web tanpa tambahan fitur lain.

Setelah memahami konsep dasar ini, langkah selanjutnya bisa berupa:
✅ Menambahkan CSS untuk mempercantik tampilan.
✅ Menambahkan JavaScript untuk membuat interaksi lebih dinamis.
✅ Mempelajari hosting untuk mengunggah website ke internet.