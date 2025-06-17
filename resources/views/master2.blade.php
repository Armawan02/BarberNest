@include('layouts.header2')
<main class="main">
    <section>
        <div>
            @yield('content')
        </div>
    </section>
    <section class="hero section">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('HeroBiz') }}/assets/img/logo-barbernest.png" class="img-fluid animated" alt="">
            <h1>Selamat datang di <span>BarberNest</span></h1>
            <p>Nikmati kemudahan, kenyamanan, dan profesionalitas hanya di BarberNest.
                <br>
                Jadwalkan layananmu sekarang dan biarkan kami yang urus penampilanmu!
            </p>
            <div class="d-flex">
                <a href="{{ Route('login') }}" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>

    </section>
</main>
@include('layouts.footer2')