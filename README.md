<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

<h2>BarberNest : Platform Booking dan Manajemen Layanan Barbershop</h2>
![logo unsulbar](./public/img/BarberNest.drawio.png)
<br>
<p>
<b>BarberNest</b> adalah platform web modern untuk layanan barbershop yang mendukung sistem multi-cabang, manajemen jadwal, booking online, dan layanan home service. Web ini dirancang untuk mempermudah pelanggan dalam memesan layanan potong rambut dari lokasi manapun, sekaligus membantu manajemen barbershop dalam mengatur operasional, pegawai, dan transaksi.
</p>
<br>
<h3>NavBar & Halaman Utama per Role</h3>
<br>
<h4>belum login</h4>
<ul>Beranda : di dalam beranda ada tampilan atau tombol atau apalah <b>booking sekarang</b> dan beralih ke halaman login,</ul>
<ul>Layanan : di dalam ada beberapa layanan, misal cukur rambut, pewarnaan rambut, dan home service/pelayanan ke rumah</ul>
<ul>Cabang : di dalam ada beberapa cabang misal nama cabang "BarberNest : Tinambung" </ul>
<ul>Tentang Kami : tentang website ini plus profile pembuatnya ea</ul>
<ul>Login/Daftar : untuk login sebagai admin, barber, dan codtumer tapi costumer harus daftar dulu</ul>
<br>
<h4>Tampilan Costumer setelah login</h4>
<ul>Beranda : ada tombol atau apalah untuk otomatis menuju ke tampilan booking</ul>
<ul>Layanan : berisi tampilan untuk memilih layanan => pangkas rambut, hair coloring, rebonding, ferming, dan home services dan ketika di klik salah satunya akan otomatis ke tampilan booking </ul>
<ul>booking : berisi form untuk pilih => cabang, barber, layanan, jadwal metode pembayaran</ul>
<ul>riwayat : berisi status sudah proses atau sudah di terima oleh barber dan selesai jika sudah selesai</ul>
<ul>profil  : berisi tampilan bio dan info cosumer</ul>
<ul>logout</ul>
<br>
<h4>Tampilan Barber setelah login</h4>
<ul>Beranda : berisi tampilan untuk menuju ke jadwal atau ke halaman yang di booking costumer</ul>
<ul>Jadwal saya : berisi tampilan riwayat pelanggan yang membooking atau memilih home service</ul>
<ul>Tranksaksi : berisi tranksaksi untuk memvalidasi pembayaran costumer</ul>
<ul>Profil</ul>
<br>
<h4>Tampilan Admin setelah login</h4>
<ul>Beranda : taampilan total pendapatan, total booking, layanan terlaris</ul>
<ul>Kelola User</ul>
<ul>Kelola Cabang</ul>
<ul>Kelola Barber</ul>
<ul>Kelola Layanan</ul>
<ul>Kelola Booking</ul>
<ul>Kelola Tranksaksi</ul>
<ul>logout</ul>
<br>
<h4>Use Case Multirole</h4>
<a href="https://drive.google.com/file/d/1sGajqAvbnBr5xD5BzpUWdD_ZmlZpxrul/view?usp=sharing">Lihat diagram di Google Drive</a>
