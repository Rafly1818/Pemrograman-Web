# Pertemuan 1

## Tools Wajib Untuk Belajar

1. **GitHub**
2. **VsCode**
3. **Navicat**
4. **WSL**
5. **Postman** (Menyusul)
6. **Browser**

## Apa Saja Yang Dipelajari

1. Pembuatan folder.
2. Konfigurasi file **.env** dan **docker-compose.yml**.
3. Build container docker.
4. Belajar html dasar.
5. Pengerjaan tugas.

## Langkah Pengerjaan Pertemuan 1
Berikut adalah langkah-langkah pengerjaan yang dilakukan pada pertemuan pertama:

### Menyiapkan Tools
   * Pastikan semua tools sudah siap seperti VSCode, Navicat, GitHub, WSL, Postman, Browser, dan Docker.
   * Buat project baru di VSCode dengan nama folder **Pemrograman-Web**.

### Membuat Struktur Folder
   * Di dalam folder **Pemrograman-Web**, buat folder **Pertemuan1**.
   * Di dalam folder **Pertemuan1**, buat 2 file markdown:
      * `Analisa.md` untuk menyimpan hasil analisis sebelum mulai coding.
      * `Catatan.md` untuk mencatat hal-hal penting yang dipelajari.

### Menyiapkan Folder Coding
   * Di dalam folder **Pertemuan1**, buat folder baru bernama **Coding**.
   * Di dalam folder **Coding**, buat struktur folder berikut:
      * **nginx**: Folder ini berisi file konfigurasi untuk server nginx.
      * **src**: Di dalam folder ini simpan file HTML, CSS, dan gambar yang diperlukan.
   * Buat file konfigurasi di folder **Coding**:
      * `.env`: Untuk menyimpan variabel environment yang diperlukan dalam Docker.
      * `docker-compose.yml`: Untuk konfigurasi Docker.

### Menulis File Konfigurasi
   * **File .env**: Isi dengan variabel environment yang diperlukan (seperti pengaturan port atau nama service).
   ```bash
    COMPOSE_PROJECT_NAME=esgul
    REPOSITORY_NAME=pemweb
    IMAGE_TAG=latest
   ```
   * **File docker-compose.yml**: Isi dengan konfigurasi untuk menjalankan container Docker (termasuk nginx dan aplikasi web).
   ```bash
    version: "3"

    services:
    web:
        image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
   ```
   * **File nginx.conf**: Di dalam folder **nginx**, buat file `nginx.conf` dan isi dengan konfigurasi untuk nginx server.
   ```bash
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

### Build Docker Container
   * Setelah semua file konfigurasi siap, build Docker container menggunakan perintah:

   ```bash
   docker-compose up --build
   ```

6. **Menyiapkan File HTML dan CSS**
   * Di dalam folder **src**, buat file HTML (`index.html`) dan file CSS (`style.css`).
   * Jangan lupa tambahkan file gambar seperti `background.jpg` dan `icon.png` untuk kebutuhan visual halaman.

7. **Testing**
   * Setelah Docker berhasil di-build, buka browser dan akses aplikasi web melalui alamat yang sesuai dengan pengaturan di `docker-compose.yml` (bisa ketik `localhost` di chrome atau buka docker desktop lalu klik port pada docker desktop).


# Topik Tentang Website

Website mempunyai address, misal facebook.com. Seperti identitas atau biasa disebut domain. Setiap website yang dipublish menggunakan domain.

# HTML

bahasa general yang digunakan untuk developing website.

## Div Pada HTML

div itu dipake buat mengelompokkan tag html lain. contoh
```html
<div>
    This is a div element.
    <p>This is a paragraph inside the div.</p>
</div>
```

## Tag A `<a></a>`

Tag tersebut digunakan untuk membuat link pada suatu website. contoh `<a href="url">link text</a>`

---

# Kegunaan Docker

docker digunakan untuk menjalankan app, database, dan nginx. lebih mudah dikonfigurasi antara windows ke vps dibanding xampp. 

## A. Membahas docker-compose.yml
- version adalah versi yang digunakan. 
- service adalah layanan yang digunakan. 
  - web digunakan didalam service menggunakan nginx versi latest (terbaru). 
  - port yang digunakan adalah 80:80.
  - volumes adalah tempat dimana file akan disimpan.

## B. nginx.conf
- nginx adalah webserver, pengganti xampp. Yang dimana scopenya lebih besar seperti load balance, dll
- port bisa diganti sesuai dengan listen di docker-compose.yml.

# Analisa 

Minimal analisa harus ada 5W + 1H dan swot. Misal
-  Apa itu Docker? (what)
-  Kapan Docker digunakan? (where)
-  Dimana Docker digunakan? (when)
-  Siapa yang menggunakan docker? (who)
-  Kenapa Docker digunakan? (why)
-  dll
Dalam 5W + 1H tidak selalu digunakan. Hanya berdasarkan kebutuhan, misal hanya what, when, dan where aja.

# Hal Wajib

Disetiap pertemuan harus ada analisa, ngodingnya sama catatan. Itu harus disetor ke pa jep, kalo ga setor gabole cabut.

# Project

Membuat website company profile yang dikerjakan sebelum UTS. Project akhir adalah kasus yang dimana setiap orang mendapat kasus yang berbeda beda. Kriteria penilaian utama adalah kesesuaiian antara analisa dengan websitenya. Setelah itu maka akan dilakukan penilaian dari clean codenya.

# Source

Mengambil source code, template, plugin atau apapun yang mengambil sesuatu dari orang lain usahakan dikasih sumbernya dari mana.
