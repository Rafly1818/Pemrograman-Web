# Laporan Pertemuan 1 Pemrograman Web

## 1. Tools yang Dipakai
Sebelum mulai coding, penting untuk nyiapin tools dulu biar kerjaan bisa jalan lancar. Berikut adalah beberapa tools yang dipakai untuk pengembangan web:

* **VSCode**: Ini adalah editor teks yang fleksibel. Bisa dipakai untuk banyak hal, mulai dari nulis kode sampai manage Docker dan Git. VSCode juga bisa dipasangin ekstensi supaya lebih lengkap buat kebutuhan pengembangan.
  
* **Navicat**: Dipakai buat ngelola database, terutama MySQL. Navicat dipilih karena tampilannya mudah dipahami dan bisa ngatur database dengan cepat.
  
* **GitHub**: Buat simpan dan manage kode versi. GitHub penting banget buat backup kode dan nge-track perubahan biar kalau ada masalah, bisa dilacak dengan mudah.
  
* **WSL (Windows Subsystem for Linux)**: WSL memungkinkan kita pakai Linux di dalam Windows, jadi bisa pakai alat-alat Linux langsung dari laptop.
  
* **Docker**: Docker adalah platform open-source yang digunakan untuk mengembangkan, mengirim, dan menjalankan aplikasi dalam container. Container adalah lingkungan yang ringan dan terisolasi, yang memungkinkan aplikasi berjalan secara konsisten di berbagai lingkungan, mulai dari Development hingga Production.
  
* **Browser**: Browser dipakai buat ngecek hasil pengembangan web, termasuk tampilan visual, dan juga ngecek error di console.

## 2. Analisis Pakai 5W 1H

### Who (Siapa)
- Saya sebagai mahasiswa yang kebagian tugas dalam proyek ini buat mata kuliah pemrograman web.

### What (Apa)
- Nyiapin tools buat ngoding web (VSCode, Navicat, GitHub, WSL, Docker, Browser)
- Bikin struktur folder dan file buat proyek pemrograman web
- Setting awal buat Docker dan Nginx

### Where (Dimana)
- Semua persiapan dikerjain di folder proyek yang udah dibuat di VSCode
- Struktur utamanya ada di folder "Pemrograman-Web/Pertemuan1"
- File-file setting kayak nginx.conf, .env, sama docker-compose.yml ditaruh di folder yang sesuai

### When (Kapan)
- Dikerjain pas pertemuan pertama kuliah pemrograman web
- Persiapan ini sudah saya siapkan di awal sebelum mulai pertemuan pertama

### Why (Mengapa)
- Biar lingkungan pengembangan udah siap semua sebelum mulai ngoding
- Ngehindarin masalah teknis yang bisa muncul tiba-tiba
- Bikin proses pengembangan dan testing website jadi lebih gampang

### How (Bagaimana)
1. Bikin folder utama "Pemrograman-Web"
2. Bikin subfolder "Pertemuan1"
3. Bikin file markdown buat analisa dan catatan
4. Bikin folder "Coding" dengan isi:
   - File .env buat variabel lingkungan
   - File docker-compose.yml buat setting container
   - Folder nginx dengan isi file nginx.conf
   - Folder src buat file HTML dan CSS
5. Isi setting file .env dan docker-compose.yml
6. Build container Docker
7. Bikin file HTML dan CSS di folder src

## 3. Struktur Folder
```
Pemrograman-Web/
  └── Pertemuan1/
      ├── Analisa.md
      ├── Catatan.md
      └── Coding/
          ├── nginx/
          │   └── nginx.conf
          ├── src/
          │   ├── background.jpg
          │   ├── icon.png
          │   ├── index.html
          │   └── style.css
          ├── .env
          └── docker-compose.yml
```

## 4. Analisis SWOT

### Strengths (Kekuatan)
- **VSCode**: Editor yang bisa diapa-apain, banyak ekstensinya jadi enak buat ngoding
- **Navicat**: Tampilannya gampang dipahami, ngatur database jadi lebih cepet
- **GitHub**: untuk simpan dan backup kode, kalau ada error bisa dilacak balik
- **WSL**: Bisa pake Linux dari Windows, ga perlu install OS baru
- **Docker**: Bikin lingkungan ngoding yang konsisten di semua komputer

### Weaknesses (Kelemahan)
- **WSL**: Kadang suka error sama aplikasi yang punya GUI
- **Docker**: Makan resource gede, bisa bikin laptop jadi lemot
- **Navicat**: Berbayar, jadi kalau ga punya duit ya susah

### Opportunities (Peluang)
- **Docker**: Bikin deploy aplikasi jadi lebih gampang dan konsisten
- **GitHub**: Kolaborasi jadi lebih enak, bisa kerja bareng tanpa ribut
- **Kombinasi tools**: Workflow jadi lebih cepet dan efisien

### Threats (Ancaman)
- **Resource Hardware**: Laptop bisa ngelag kalau jalanin banyak tools sekaligus
- **Masalah Dependency**: Kadang antar tools ga cocok satu sama lain
- **Kurva Pembelajaran**: Butuh waktu buat ngerti cara pakai semua tools

# 1. Analisa Terkait Nginx

## Apa itu nginx?

Nginx adalah web server yang memiliki performa canggih dan memiliki fitur lengkap yang mudah dikonfigurasi. Pada dasarnya nginx digunakan untuk menjadi solusi  agar transfer data website yang memiliki trafik tinggi. Karena kecepatan dan kemampuan dalam menangani banyak koneksi, layanan nginx sudah banyak digunakan oleh website dengan traffic yang tinggi. Beberapa yang menggunakannya adalah Google, Netflix, Adobe, Cloudflare, dan masih banyak lagi.

## Bagaimana Nginx bekerja?

Ketika seseorang mengirim permintaan untuk membuka halaman web, browser akan menghubungi server dari situs tersebut. Server kemudian mencari file halaman yang diminta dan mengirimkannya kembali ke browser. Proses ini merupakan contoh dasar cara kerja server untuk permintaan sederhana. Nginx mampu memproses ribuan permintaan tanpa kesulitan. Kemampuan ini menjadikannya pilihan utama bagi situs web dengan lalu lintas yang tinggi seperti ecommerce, search engine, dan cloud storage.

## Kapan Nginx digunakan?

Nginx digunakan ketika website membutuhkan webserver yang dapat menangani ribuan permintaan dan membutuhkan traffic yang tinggi.

## Kelebihan nginx

1. **nginx menjadi tool yang multifungsi**, Selain digunakan sebagai web server, Nginx juga berfungsi sebagai load balancer, cache konten, dan server proxy.
2. **pengganti hardware load balancer**, Sebagai software load balancer open source, Nginx lebih murah dan mudah dikonfigurasi dibandingkan hardware load balancer.
3. **dokumentasi lengkap**, Bagi pengguna baru, Nginx menyediakan berbagai dokumentasi lengkap, termasuk tutorial, webinar, dan panduan yang mudah diikuti.
4. **pengembangan berkelanjutan**, Kelebihan Nginx berikutnya adalah pengembangan berkelanjutan. Nginx terus berkembang secara aktif. Selama satu dekade terakhir, Nginx telah berada di garis depan pengembangan web modern, dari HTTP hingga dukungan layanan mikro.  

## Kekurangan nginx

1. **kompatibilitas**, Nginx memang kompatibel dengan banyak unix-like systems, akan tetapi performanya di Microsoft Windows tidak sebaik platform lainnya. Selain itu, software ini juga tidak mendukung beberapa sistem operasi seperti IBM i, z/OS, eComStation, dan OpenVMS. 
2. **dukungan komunitas masih belum lengkap**, software ini mempunyai dukungan dan bantuan komunitas yang lebih sedikit dibandingkan dengan Apache, sehingga beberapa isu belum didukung oleh dokumentasi dan referensi yang memadai.

---

# 2. Analisa Terkait Docker

## Apa itu Docker?

Docker adalah layanan yang menyediakan kemampuan untuk mengemas dan menjalankan sebuah aplikasi dalam sebuah lingkungan yang terisolasi yang disebut dengan container. Dengan adanya isolasi dan keamanan yang memadai memungkinkan untuk menjalankan banyak container di waktu yang bersamaan pada host tertentu.

## Mengapa menggunakan Docker?

Docker adalah alat yang memudahkan dalam menjalankan aplikasi di berbagai lingkungan tanpa perlu khawatir dengan perbedaan sistem. Dengan Docker, aplikasi dikemas dalam satu paket yang siap dijalankan di mana aja, sehingga proses pengembangan dan deployment menjadi lebih cepat dan efisien.

## Kapan menggunakan Docker?

Docker sangat berguna dalam berbagai situasi, terumata ketika kita membangun dan mengelola Aplikasi Modern. Dengan Docker, pengembang dapat dengan mudah membuat atau menjalankan arsitektur berbasis layanan mikro, di mana setiap bagian aplikasi berjalan secara independen dalam container terpisah. Docker juga ideal untuk membangun sistem pemrosesan data yang skalabel. Dengan kemampuannya untuk menjalankan banyak container secara bersamaan, beban kerja dapat dengan mudah disesuaikan sesuai kebutuhan tanpa mengorbankan kinerja

## Kelebihan DOcker

1. **Portabilitas**, Docker dapat dengan mudah dipindahkan antar lingkungan, seperti dari pengembangan ke produksi, atau antara penyedia cloud yang berbeda.
2. **Isolasi**, Docker memberikan tingkat isolasi yang tinggi antara sistem host dan aplikasi yang terkontainerisasi, memastikan bahwa masalah atau kerentanan tertentu terdapat di dalam kontainer.
3. **Efisisiensi**, Dokcer ringan dan menggunakan lebih sedikit sumber daya dibandingkan dengan mesin virtual tradisional.
4. **Scalability**, Docker dapat dengan mudah ditingkatkan secara horizontal untuk menangani beban lalu lintas yang tinggi atau untuk memenuhi permintaan aplikasi yang berkembang.

## Kekurangan Docker

1. **Proses Pembelajaran**, Docker membutuhkan cukup lama untuk belajar, terutama untuk pengguna yang tidak terbiasa dengan konsep kontainerisasi.
2. **Kompleksitas**, Docker dapat menambah kompleksitas pada tumpukan aplikasi, terutama saat mengelola beberapa kontainer dan layanan mikro.
3. **Overhead Sumber Daya**, Meskipun kontainer Docker menggunakan lebih sedikit sumber daya daripada mesin virtual tradisional, mereka masih memerlukan beberapa overhead dalam hal penggunaan ruang disk dan memori.

---

# 3. Penjelasan Terkait Konfigurasi `docker-compose.yml` dengan nginx

## `docker-compose.yml` dan `.env`

Dibawah ini adalah source code `docker-compose.yml` dan `.env`

```php
version: '3'

services:
  web:
    image: nginx:latest
    ports:
    - 80:80
    volumes:
    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    - ./src/:/usr/share/nginx/html

```

update

```php
    - ./latihan:/usr/share/nginx/html/latihan
```


```
COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest

```

pada `docker-compose.yml` terdapat 
- `version` yang dimana ini adalah versi docker compose yang digunakan.
- `services` yang mendefinisikan semua layanan (container) yang mau dijalankan. Dalam kasus ini, hanya ada satu layananm yaitu `web`. 
- `image: nginx:lates` akan menginstruksikan Docker untuk menggunakan image Nginx versi terbaru.  
- `ports:` ini untuk menentukan pemetaan port antara host (komputer lokal/server) dan container docker. `80:80` artinya ports 80 di host akan diteruskan ke port 80 di dalam container, sehingga nginx bisa diakses melalui http://localhost di browser.
- `volumes:` bagian ini menghubungkan direktori di host dengan direktori di dalam container, sehingga perubahan pada file lokal langsung diterapkan di container.
  - `- ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf` file nginx.conf yang ada di folder `./nginx/` akan dipasang di dalam container pada `etc/nginx/conf.d/default.conf`. Memungkinkan kita untuk menggunakan konfigurasi nginx yang telah disesuaikan, bukan bawaan default dari image nginx.
  - `- ./src/:/usr/share/nginx/html` folder `./src/` di host akan dipasang ke dalam container pada `/usr/share/nginx/html`. Ini adalah folder tempat nginx menyimpan file HTML, CSS, JS, dll, sehingga kita bisa langsung melihat perubahan di browser tanpa perlu membangun ulang container
  - `- ./latihan:/usr/share/nginx/html/latihan` artinya folder `/latihan` di lokal akan digunakan nginx di dalam docker sebagai sumber file web di `/usr/share/nginx/html/latihan`

pada `.env` terdapat
- ` COMPOSE_PROJECT_NAME=esgul` adalah nama dari containernya
- `REPOSITORY_NAME=pemweb` adalah nama repositor dari kontainer
- `IMAGE_TAG=latest` adalah versi image yang terbaru.

## `nginx.conf`

Konfigurasi nginx di bawah digunakan untuk mengatur server web yang akan melayani file statis seperti HTML, CSS, dan Js.

```php
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}
```

pada `nginx.conf` terdapat
- `server {. . .}` bagian ini mendefinisikan blok server  untuk menangani permintaan HTTP.
- `listen 80;` menginstruksikan nginx untuk listen koneksi pada port 80. Artinya, server ini akan aktif saat seseorang mengakses http://localhost.
- `server_name localhost` menetapkan nama domain yang digunakan untuk server ini.
- `root /usr/share/nginx/html;` mementukan folder root  tempat nginx mencari file yang akan ditampilkan ke pengguna.
- `index index.html index.htm;` menentukan file default yang akan dimuat jika pengguna mengakses root (/) tanpa menentukan file tertentu.

update 

```php
location /latihan {
        alias /usr/share/nginx/html/latihan;
        index index.html index.htm home.html;
        try_files $uri $uri.html $uri/ =404;
    }
```

- `location /latihan {. . .}` semua permintaan ke http://localhot/latihan akan diproses oleh aturan dalam blok tersebut
- `alias /usr/share/nginx/html/latihan;` mengarahkan /latihan ke folder /usr/share/nginx/html/latihan
- `index index.html index.htm home.html;` menentukan file yang akan ditampilkan secara otomatis jika pengguna hanya mengakses http://localhost/latihan tanpa menyebutkan nama filenya.
- `try_files $uri $uri.html $uri/ =404;` jika pengguna mengakses http://localhost/latihan/about, nginx akan mencari:
  - `/usr/share/nginx/html/latihan/about`
  - jika tidak ada, coba `/usr/share/nginx/html/latihan/about.html`
  - jika tidak ada, coba `/usr/share/nginx/html/latihan/about/`
  - jika semua gagal, tampilkan 404 Not Found

---

# 4. Penjelasan Terkait HTML

## 1. Tag **div**

Tag <div></div> digunakan untuk membagi atau mengelompokkan elemen lainnya

## 2. Tag a

tag `<a></a>` digunakan untuk membuat link ke halaman web lain

## 3. Tag form

tag `<form></form>` digunakan untuk mengelompokkan elemen-elemen terkait dalam form

## 4. Tag h

tag `<h1></h1> - <h6></h6>` digunakan untuk judul dan subjudul, dengan `<h1>` sebagai judul utama dan `<h6>` sebagai sub judul terkecil

## 5. Tag img

tag `<img>` adalah tag yang khusus digunakan untuk menyisipkan gambar

## 6. Tag p

tag `<p></p>` digunakan untuk membuat paragraf

## Tag ul dan li
tag `<ul></ul>` dan `<li></li>` untuk membuat daftar tidak berurutan. yang dimana `<ul>` untuk membuat daftar yang dimana setiap item ditandai dengan simbol. sedangkan `<li>` itu dipakai dalam `<ul>` untuk menentukan setiap item dalam daftar

---

#

# Referensi

1. https://www.biznetgio.com/news/apa-itu-nginx?gad_source=1
2. https://www.hostinger.com/id/tutorial/apa-itu-nginx
3. https://www.dicoding.com/blog/apa-itu-docker/
4. https://aws.amazon.com/id/docker/
5. https://www.revou.co/panduan-teknis/tag-html
6. https://www.goldenfast.net/blog/nginx-adalah/
7. https://jagoancloud.com/blog/docker-adalah/