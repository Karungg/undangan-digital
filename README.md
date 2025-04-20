# Project Penjualan Sepatu

## Deskripsi

Project ini dibangun untuk membuat undangan pernikahan digital berbasis website.

## 🛠️ Techstack

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![Livewire](https://img.shields.io/badge/livewire-%234e56a6.svg?style=for-the-badge&logo=livewire&logoColor=white) ![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)

## 🛠️ Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

1. **Clone repository**

```bash
git clone https://github.com/Karungg/undangan-digital
cd undangan-digital
```

2. **Install dependensi menggunakan composer**

```
composer install
```

3. **Copy .env**

```
cp .env.example .env
```

4. **Ubah konfigurasi pada file .env sesuai kebutuhan**

```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

5. **Buat key aplikasi**
```
php artisan key:generate
```

6. **Jalankan migrasi**

```
php artisan migrate
```

7. **Jalankan aplikasi**

```
php artisan serve
```

Buka aplikasi di browser <a href="http://localhost:8000">http://localhost:8000</a>

👨‍💻 Developer
Created with ❤️ by <a href="https://github.com/Karungg">Karungg</a>

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](<a href="https://github.com/Karungg/undangan-digital?tab=MIT-1-ov-file">LICENSE</a>).
