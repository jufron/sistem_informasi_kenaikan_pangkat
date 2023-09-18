<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome SI Kenaikan Pangkat</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />


        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/landing_page.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">SI Kenaikan Pangkat</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                      <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Keunggulan</a></li>
                      @if (Route::has('login'))
                        @auth
                          <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Dashboard</a></li>
                        @else
                          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endauth
                      @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="beranda">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Selamat Datang Sistem Informasi Kenaikan Pangkat</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">

                      @if (Route::has('login'))
                        @auth
                          <a class="btn btn-success btn-xl" href="{{ url('/home') }}">Dashboard</a>
                          @else
                          <a class="btn btn-success btn-xl" href="{{ route('login') }}">Login</a>
                        @endauth
                      @endif
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tentang!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">
                          Kemudahan Penggunaan: Aplikasi kenaikan pangkat kami dirancang dengan fokus pada pengguna. Antarmuka yang intuitif dan navigasi yang mudah memastikan Anda dapat mengakses informasi penting dan mengelola langkah-langkah kenaikan pangkat Anda dengan cepat.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Keunggulan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Akses Dari Mana Saja</h3>
                            <p class="text-muted mb-0">
                              Tidak perlu lagi menginstal aplikasi yang berat di perangkat Anda. Aplikasi kenaikan pangkat berbasis web kami dapat diakses dari mana saja, kapan saja, asalkan Anda memiliki koneksi internet. Ini memberi Anda fleksibilitas untuk mengelola perjalanan kenaikan pangkat Anda dari komputer, tablet, atau ponsel Anda.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">
                              Dalam dunia yang selalu bergerak cepat, informasi terbaru adalah segalanya. Aplikasi kami memberi Anda kemampuan untuk mengakses pembaruan, perubahan peraturan, dan panduan baru secara langsung tanpa perlu menunggu pembaruan aplikasi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Keamanan</h3>
                            <p class="text-muted mb-0">
                              Kami mengambil serius keamanan data Anda. Aplikasi kenaikan pangkat berbasis web kami memiliki lapisan perlindungan yang kuat untuk memastikan bahwa informasi sensitif Anda tetap aman dan rahasia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Sistem Informasi Kenaikan Pangkat</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/landing_page.js') }}"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

