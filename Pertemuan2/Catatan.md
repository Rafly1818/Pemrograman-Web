# HTML WITH BOOTSTRAP

## Pengertian Bootstrap

Bootstrap adalah framework CSS open-source yang ngebantu kita bikin website yang responsive, modern, dan cepat tanpa harus ngoding CSS dari nol.

## Bootstrap CDN 

Paling gampang pakainya lewat CDN. Langsung copas aja ke `<head>` dan sebelum `</body>` di HTML:

```html
<!-- Bootstrap CSS (wajib) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Bootstrap JS (buat fitur interaktif kayak navbar collapse, modal, dll) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

```

Import cdn link yang ada ada di docs bootstrap menggunakan cdn links

## Navbar Simple Pakai Bootstrap

Ini contoh navbar yang udah lengkap:
- Ada brand/logo
- Ada link menu
- Responsif (collapse di HP)
- Ada search bar juga di pojok kanan

```html
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyWebsite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
```

## Margin & Padding Beserta Sizenya

Bootstrap pakai utility classes buat margin dan padding. Formatnya:
📍 Property:
- m = margin
- p = padding

📍 Side (arah):
t = top
b = bottom
s = start (kiri di LTR)
e = end (kanan di LTR)
x = horizontal (start + end)
y = vertical (top + bottom)
(tanpa side) = semua sisi

Contoh:
mt-3 = margin-top 3
mx-2 = margin kiri-kanan 2
p-4 = padding semua sisi 4
py-1 = padding atas-bawah 1

📍 Value:
Nilainya dari 0 sampai 5 (default Bootstrap scale), artinya:
0 = 0rem (tanpa spasi)
1 = 0.25rem
2 = 0.5rem
3 = 1rem
4 = 1.5rem
5 = 3rem
auto = otomatis (khusus untuk margin)

Breakpoints (responsiveness)
Breakpoint	Ukuran Layar	Prefix
Extra small	<576px	(tanpa prefix)
Small	≥576px	sm
Medium	≥768px	md
Large	≥992px	lg
Extra large	≥1200px	xl
XXL	≥1400px	xxl

## Kenapa Bootstrap Enak Dipakai?

= 💨 Cepat bikin UI
- 📱 Responsive otomatis
- 🎨 Banyak komponen siap pakai (navbar, button, modal, card, dsb)
- 🧠 Mudah dipelajari
- 🎁 Cocok buat prototyping & project kecil sampai besar

## Set Up Laravel Raugadh

1. docker exec -it pemweb bash

