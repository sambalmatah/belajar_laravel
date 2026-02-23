<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# belajar_laravel

# Catatan Ari

setelah melakukan semua pembelajaran, saya menyadari sebaiknya menuliskan readme.md dan merangkum apa yang telah saya pelajari dari laravel ini.

MODEL FACTORIES
saya menyelesaikan bagian untuk Models\Post. dimana class Post ini extends Models dan memiliki variable fillable pada kolom title, slug, author dan body.
fillable digunakan untuk mengisi data baris database yang sebelumnya dijaga oleh laravel agar aplikasi aman dari serangan hacker.
penambahan data baris database menggunakan php artisan tinker.

FOREIGN KEY KONSTRAINTS
saat ini baru saja menyelesaikan penggunaan faker pada tinker untuk generate data yang dibentuk melalui Post:factory (Defining Modell Factories).
kelebihan dari faker adalah kita dapat melakukan generate berbagai kebutuhan data dan sekaligus juga fleksibel.
sebagai contoh, laravel telah membuatkan satu contoh factory yaitu UserFactory.

ELOQUENT RELATIONSHIP
saat ini saya baru saja mempelajari bagaimana cara laravel dapat dihubungkan dengan menggunakan reference serta dapat membuat generate data yang dibentuk sekaligus.
sehingga antara table user dan table posts memiliki nilai yang sama atau saling berhubungan. kemudian saya belajar bagaimana cara untuk menampilkan pengelompokan penulis dan menampilkan artikel yang ditulis berdasarkan nama penulis.

POST CATEGORY
pada pembelajaran kali ini saya belajar membuat sebuah tabel database baru dengan nama Category. Pelajaran ini membahas bagaimana artisan dapat membuat 3 file yaitu model, migration dan factory dengan satu command. Di situ saya harus membuat structure database menggunakan file migrations, kemudian membuat foreign key dengan tabel Post. Setelah jadi, saya perlu migrate:fresh dan generate ulang menngunakan factory dan recycle. Kemudian yang terakhir saya menambahkan tampilan untuk letak Category selanjutnya mengatur route web.php supaya view by Category dapat tampil

DATABSE SEEDER
dalam pembelajaran ini selain membuat data random, kita dapat membuat juga data dummy yang dapat di inisialisasi dengan cara menyemai sesuai dengan data yang kita inginkan. kita perlu membuat DatabaseSeeder untuk membangun sebuah dataseeder agar nanti dapat sekaligus membuat data dummy tanpa menggunakan cara factory->create() pada perintah di terminal.

N+1 Problem
dalam pembelajaran kali ini saya memahami bagaimana permasalahan N+1 problem membebani load halaman web. N+1 problem adalah terlalu banyak melakukan query karena terlalu banyak looping untuk menampilkan data yang di dalamnya memiliki relasi. untuk melihat bagaimana query bekerja di laravel, bisa menggunakan laravel debugbar. disini kita perlu mengubah yang tadinya menggunakan lazy loading menjadi eager loading serta menggunakan lazy eager loading. catatan tambahan untuk membuat semua halaman tidak menggunakan lazy loading bisa menggunakan Model::preventLazyLoading()

UPDATE UI MENGGUNAKAN FLOWBITE
dalam pembelajaran kali ini saya memahami bagaimana caranya mengganti UI library dengan menggunakan Flowbite yang masih merupakan jenis UI yang menerapkan tailwind. Ini dilakukan supaya kita tetap dapat menggunakan UI fleksible namun tetap gratis. pertama perlu melakukan konfigurasi awal yaitu install flowbite, menambahkan script, tema dan beberapa syntax khusus agar Flowbite dapat tampil dengan normal. penggunaannya mudah hanya perlu konfigurasi awal saja agar tampilannya tidak rusak.

UPDATE UI HALAMAN SINGGLE POST
dalam pembelajaran kali ini saya memahami bagaimana caranya mengganti tampilan UI untuk satu buah halaman dengan menggunakan library Flowbite. ini juga memerlukan beberapa konfigurasi awal yang namun lebih sedikit atau lebih simple dari pada update UI Flowbite pada pembelajaran sebelumnya. saya hanya perlu menginstall npm i -D flowbite-typography yang membutuhkan akses kepada CurrentUser pada terminal PowerShell. lalu menambahkan @plugin pada app.css setelah itu hanya menerapkan tampilan sesuai yang diinginkan (secara sederhana).

SIMPLE POST SEARCHING
dalam pembelajaran ini saya memahami cara pencarian bekerja di laravel yang menggunakan Post::get(). saat input search tidak memiliki kalimat pencarian maka akan ditampilkan seluruh blog yang tersimpan pada database, jika input search diisi maka akan menampilkan data yang mirip dengan isian input search. disini saya mengubah beberapa tampilan agar terlihat sesuai dan menambahkan beberapa atribut agar sesuai dengan web.php yang menjadi kunci sebagai pemanggil data. setelah ini akan belajar bagaimana data akan dicari juga saat masuk ke halaman category dan penulis.
