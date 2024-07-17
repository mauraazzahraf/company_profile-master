<!DOCTYPE html>
<html lang="en" class="no-js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mueller</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('template') }}/css/vendor.css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template') }}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('template') }}/site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('template') }}/images/logo.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">

                    <ul class="s-header__menu-links">
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        <li><a href="#services" class="smoothscroll">Services</a></li>
                        <li><a href="#folio" class="smoothscroll">Work</a></li>
                        <li><a href="#footer" class="smoothscroll">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <ul class="s-header__social">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100054525937399">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/OfficialStt?t=E8nMnCcnDbqeE2AldeJ5Eg&s=09">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ifmornb?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- s-header__social -->

                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro target-section">

                <div class="s-intro__bg"></div>

                <div class="row s-intro__content">

                    <div class="s-intro__content-bg"></div>

                    <div class="column lg-12 s-intro__content-inner">

                        <h1 class="s-intro__content-title">
                            kami menciptakan inovasi dan <br>
                            teknologi yang mengubah cara<br>
                            dunia bekerja
                        </h1>

                        <div class="s-intro__content-buttons">
                            <a href="#download" class="btn btn--stroke s-intro__content-btn smoothscroll">About
                                Us</a>
                            
                            <path d="M7 6v12l10-6z"></path>
                            </svg>
                            </a>
                        </div>

                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->

            </section> <!-- end s-intro -->


            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row section-header" data-num="01">
                    <h3 class="column lg-12 section-header__pretitle pretitle text-pretitle">Who We Are</h3>
                    <div class="column lg-12 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            TechIT kami berdedikasi untuk mendorong batasan inovasi dan menciptakan
                            solusi teknologi yang mengubah cara dunia bekerja. Dengan tim ahli yang berpengalaman dan
                            visi yang berani
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            kami memimpin dalam pengembangan perangkat lunak canggih, layanan cloud yang aman, dan
                            solusi IoT yang cerdas.

                            Misi kami adalah memberikan nilai luar biasa kepada klien melalui produk dan layanan yang
                            andal dan futuristik.
                        </p>

                        <p class="list-block__title">
                           <h3><a>visi</a></h3>
                            Mengubah dunia melalui inovasi teknologi yang berdampak positif pada kehidupan sehari-hari, dengan fokus pada keberlanjutan dan inklusivitas.
                        </p> 

                        <p class="list-block__title">
                             <h3><a>Misi</a></h3>
                             Memberikan produk dan layanan berkualitas tinggi yang melebihi harapan pelangggan.
                        </p> 
                    </div>
                </div> <!-- end section-header -->

                <div class="row process-list list-block show-ctr block-lg-one-half block-tab-whole">

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Define</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Membangun standar serta protokol universal untuk interoperabilitas dan kompabilitas antar perangkat
                                dan kompabilitas antar perangkat IoT, platfrom dan infrastuktur.
                                </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Design</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Merancang solusi IoT yang intuitif, mudah digunakan dan sesuai dengan kebutuhan dan
                                preferensi penggunaan, ddengan fokus pada peningkatan pengalaman pengguna
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Build</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Membangun infrastuktur IoT yang tangguh, aman, dan skalabel untuk mendukung pertumbuhan
                                eksponensial perangkat dan data IoT dimasa depan, memastikan privasi dan keamanan data.
                                </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <h3 class="h5">Launch</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Meluncurkan platform IoT terbuka dan mudah diakses yang memungkinkan pengembang,
                                pengusaha, dan komunitas untuk terus berinovasi, berkolaborasi,
                                dan membangun aplikasi dan layanan IoT baru.
                                </p>
                            
                        </div>
                    </div> <!-- end list-block__item -->

                </div> <!-- end process-list -->

            </section> <!-- end s-about -->


            <!-- services
            ----------------------------------------------- -->
            <section id="services" class="s-services target-section">

                <div class="row section-header" data-num="02">
                    <h3 class="column lg-12 section-header__pretitle text-pretitle">What We Do</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Berikut Adalah Layanan Yang Perusahaan Kami Miliki
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            Lebih dari sekedar perusahaan, kami adalah mitra terpercaya yang membantu anda dengan tim profesional kami yang terampil dan terpercaya. 
                        </p>
                    </div>
                </div> <!-- end section-header -->

                <div class="row services-list list-block block-lg-one-half block-tab-whole">

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">Pengembangan Perangkat Lunak Kustom</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Kami mengkhususkan diri dalam merancang dan mengembangkan perangkat lunak kustom yang
                                disesuaikan dengan kebutuhan bisnis Anda. Mulai dari aplikasi mobile hingga sistem
                                enterprise, kami menyediakan solusi yang dapat meningkatkan efisiensi dan produktivitas.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">Solusi Cloud dan Infrastruktur</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                TechIT menawarkan layanan cloud yang aman dan skalabel untuk mendukung
                                pertumbuhan bisnis Anda. Dengan layanan seperti migrasi ke cloud, manajemen
                                infrastruktur, dan optimasi biaya, kami memastikan Anda mendapatkan manfaat maksimal
                                dari investasi cloud Anda.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M6 14c-2.206 0-4 1.794-4 4s1.794 4 4 4a4.003 4.003 0 0 0 3.998-3.98H10V16h4v2.039h.004A4.002 4.002 0 0 0 18 22c2.206 0 4-1.794 4-4s-1.794-4-4-4h-2v-4h2c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4v2h-4V5.98h-.002A4.003 4.003 0 0 0 6 2C3.794 2 2 3.794 2 6s1.794 4 4 4h2v4H6zm2 4c0 1.122-.879 2-2 2s-2-.878-2-2 .879-2 2-2h2v2zm10-2c1.121 0 2 .878 2 2s-.879 2-2 2-2-.878-2-2v-2h2zM16 6c0-1.122.879-2 2-2s2 .878 2 2-.879 2-2 2h-2V6zM6 8c-1.121 0-2-.878-2-2s.879-2 2-2 2 .878 2 2v2H6zm4 2h4v4h-4v-4z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">Internet of Things (IoT)</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Kami mengembangkan solusi IoT cerdas yang membantu bisnis mengumpulkan data secara
                                real-time dan mengotomatiskan proses. Dari perangkat yang terhubung hingga platform
                                analitik, kami membantu Anda membuat keputusan berbasis data yang lebih baik.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20 3H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h4l-1.8 2.4 1.6 1.2 2.7-3.6h3l2.7 3.6 1.6-1.2L16 18h4c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 16V5h16l.001 11H4z">
                                    </path>
                                    <path d="M6 12h4v2H6z"></path>
                                </svg>
                            </div>
                            <h3 class="h5">Keamanan Siber</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Melindungi data dan sistem Anda adalah prioritas utama kami. Kami menawarkan layanan
                                keamanan siber yang komprehensif, termasuk penilaian kerentanan, pemantauan ancaman, dan
                                respons insiden, untuk menjaga bisnis Anda tetap aman dari serangan siber.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">Pengembangan Aplikasi Mobile</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Dengan tim pengembang aplikasi mobile yang ahli, kami menciptakan aplikasi iOS dan
                                Android yang intuitif dan berkinerja tinggi. Dari ide hingga peluncuran, kami mendukung
                                Anda di setiap langkah.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M21 6c0-1.654-1.346-3-3-3a2.993 2.993 0 0 0-2.815 2h-6.37A2.993 2.993 0 0 0 6 3C4.346 3 3 4.346 3 6c0 1.302.839 2.401 2 2.815v6.369A2.997 2.997 0 0 0 3 18c0 1.654 1.346 3 3 3a2.993 2.993 0 0 0 2.815-2h6.369a2.994 2.994 0 0 0 2.815 2c1.654 0 3-1.346 3-3a2.997 2.997 0 0 0-2-2.816V8.816A2.996 2.996 0 0 0 21 6zm-3-1a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm-2.815 12h-6.37A2.99 2.99 0 0 0 7 15.184V8.816A2.99 2.99 0 0 0 8.815 7h6.369A2.99 2.99 0 0 0 17 8.815v6.369A2.99 2.99 0 0 0 15.185 17zM6 5a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm0 14a1.001 1.001 0 0 1 0-2 1.001 1.001 0 0 1 0 2zm12 0a1.001 1.001 0 0 1 0-2 1.001 1.001 0 0 1 0 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">Konsultasi Teknologi</h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                Tim konsultan kami bekerja sama dengan Anda untuk mengidentifikasi peluang teknologi
                                yang dapat meningkatkan operasi bisnis Anda. Kami menawarkan strategi teknologi yang
                                disesuaikan dan implementasi solusi untuk membantu Anda mencapai tujuan bisnis Anda.
                            </p>
                        </div>
                    </div> <!-- end list-block__item -->

                </div> <!-- end process-list -->

            </section> <!-- end s-services -->


            <!-- portfolio
            ----------------------------------------------- -->
            <section id="folio" class="s-folio target-section">

                <div class="row section-header light-on-dark" data-num="03">
                    <h3 class="column lg-12 section-header__pretitle text-pretitle">Recent Works</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Berikut adalah beberapa proyek unggulan terbaru kami. Silahkan lihat.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            Portofolio kami adalah bukti dedikasi kami. Jelajahi dan temukan
                            inspirasi untuk proyek Anda berikutnya.
                        </p>
                    </div>
                </div> <!-- end section-header -->

                <div id="bricks" class="row bricks">
                    <div class="column lg-12 masonry">
                        <div class="bricks-wrapper">

                            <div class="grid-sizer"></div>

                            <article class="brick brick--double entry">
                                <a href="#modal-01" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/software-management.jpg"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">Custom Software Development</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">
                                <a href="#modal-02" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/IoT-Healthcare-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">IoT Solutions for Facility </h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-03" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/aplication-health.jpg"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">Mobile Apps for Healthcare</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-04" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/Big-Data.png"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">Big Data Analytics Platform for E-commerce</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-05" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/AI-ML.jpg"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">Implementation of AI and Machine Learning </h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-06" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="{{ asset('template') }}/images/folio/gallery/chatbot.png"
                                            alt="">
                                    </div>
                                    <div class="entry__info">
                                        <h4 class="entry__title">AI-Based Chatbots for Customer Service</h4>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                        </div> <!-- end bricks-wrapper -->
                    </div> <!-- end masonry -->
                </div> <!-- end bricks -->


                <!-- modal templates popup
                -------------------------------------------- -->
                <div id="modal-01" hidden>
                    <div class="modal-popup">
                        <img src="{{ asset('template') }}/images/folio/gallery/software-management.jpg"
                            alt="">

                        <div class="modal-popup__desc">
                            <h5>Custom Software Development</h5>
                            <p>TechIT bekerja sama dengan perusahaan ritel besar untuk mengembangkan
                                perangkat lunak manajemen inventaris kustom. Solusi ini memungkinkan pelacakan
                                inventaris secara real-time, otomatisasi pemesanan ulang, dan analisis data penjualan
                                untuk mengoptimalkan stok.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-02" hidden>
                    <div class="modal-popup">
                        <img src="{{ asset('template') }}/images/folio/gallery/IoT-Healthcare-1.jpg" alt="">

                        <div class="modal-popup__desc">
                            <h5>IoT Solution for Facility</h5>
                            <p>TechIT mengembangkan solusi IoT untuk pengelolaan fasilitas sebuah
                                gedung perkantoran pintar. Proyek ini mencakup sensor terhubung yang memantau penggunaan
                                energi, sistem HVAC, dan keamanan gedung, memungkinkan pengelolaan yang lebih efisien
                                dan pengurangan biaya operasional.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-03" hidden>
                    <div class="modal-popup">
                        <img src="{{ asset('template') }}/images/folio/gallery/aplication-health.jpg" alt="">

                        <div class="modal-popup__desc">
                            <h5>Mobile Apps for Healthcare</h5>
                            <p>TechIT mengembangkan aplikasi mobile untuk sebuah penyedia layanan
                                kesehatan. Aplikasi ini memungkinkan pasien untuk menjadwalkan janji temu, mengakses
                                catatan medis mereka, dan berkonsultasi dengan dokter melalui video call.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-04" hidden>
                    <div class="modal-popup">
                        <img src="{{ asset('template') }}/images/folio/gallery/Big-Data.png" alt="">

                        <div class="modal-popup__desc">
                            <h5>Big Data Analytics Platform for E-commerce</h5>
                            <p>TechIT bekerja dengan platform e-commerce untuk mengembangkan sistem
                                analitik big data yang menganalisis perilaku pelanggan dan tren penjualan. Solusi ini
                                memberikan wawasan yang dapat ditindaklanjuti untuk kampanye pemasaran yang lebih
                                efektif dan personalisasi pengalaman pelanggan.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-05" hidden>
                    <div class="modal-popup">

                        <img src="{{ asset('template') }}/images/folio/gallery/AI-ML.jpg" alt="">

                        <div class="modal-popup__desc">
                            <h5>Implemention of AI and Machine Learning</h5>
                            <p>TechIT mengimplementasikan solusi AI dan Machine Learning untuk sebuah
                                perusahaan logistik guna memprediksi permintaan barang. Sistem ini membantu
                                mengoptimalkan rantai pasok, mengurangi biaya penyimpanan, dan meningkatkan kepuasan
                                pelanggan dengan pemenuhan pesanan yang lebih tepat waktu.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-06" hidden>
                    <div class="modal-popup">
                        <img src="{{ asset('template') }}/images/folio/gallery/chatbot.png" alt="">

                        <div class="modal-popup__desc">
                            <h5>AI-Based Chatbots for Customer Service</h5>
                            <p>TechIT mengembangkan chatbot berbasis AI untuk meningkatkan layanan
                                pelanggan di perusahaan e-commerce. Chatbot ini dapat menjawab pertanyaan umum, membantu
                                pelanggan dalam proses pembelian, dan memberikan dukungan teknis, sehingga mengurangi
                                beban tim layanan pelanggan.</p>
                            <ul class="modal-popup__cat">
                            </ul>
                        </div>

                        <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                    </div>
                </div> <!-- end modal -->


                <!-- clients
                -------------------------------------------- -->
                <div class="s-clients row">
                    <div class="column lg-12">

                        <div class="row section-header">
                            <div class="column lg-12">
                                <h3 class="title text-display-1">Brands we have had priveledge to work with</h3>
                            </div>
                        </div> <!-- end section-header -->

                        <div
                            class="row clients-list block-lg-one-fourth block-md-one-third block-tab-one-half block-stack">

                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/snowflake.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/flash.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/rise.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/pinpoint.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/proline.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/vision.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/volume.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    <img src="{{ asset('template') }}/images/clients/hitech.svg" alt="">
                                </a>
                            </div>

                        </div> <!-- clients-list -->
                    </div> <!-- end column lg-12 -->
                </div> <!-- end s-clients -->

            </section> <!-- end s-folio -->


            <!-- testimonials
            ----------------------------------------------- -->
            <section id="testimonials" class="s-testimonials">

                <div class="row s-testimonials__content">
                    <div class="column lg-12">

                        <h2>OUR TEAM</h2>
                        <div class="container">
                            <div class="row">
                                @foreach ($datas as $item)
                                <div class="col-sm-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$item->nama}}</h5>
                                            <p class="card-text">{{$item->role}}</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div> <!-- end column -->
                </div> <!-- end s-testimonials__content -->

            </section> <!-- end testimonials -->

        </section> <!-- end content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="footer" class="s-footer target-section">

            <div class="row section-header" data-num="04">
                <h3 class="column lg-12 section-header__pretitle text-pretitle">Hubungi Kami</h3>
                <div class="column lg-6 stack-on-1100 section-header__primary">
                    <h2 class="title text-display-1">
                        Punya ide atau projek menarik? Ayo kontak kami.
                        Mari ciptakan sesuatu yang berbeda.
                        hubungi kami di <a href="mailto:#0" title="">Kelompok7@gmail.com</a>
                    </h2>
                </div>
                <div class="column lg-6 stack-on-1100 section-header__secondary">

                    <div class="contact-block">
                        <h6>Where To Find Us</h6>
                        <p>
                            Jl. Cikopak no.53, Mulyamekar<br>
                            Kec.Babakancikao<br>
                            41151 Purwakarta
                        </p>
                    </div>

                    <div class="contact-block">
                        <h6>Contact</h6>
                        <ul class="contact-list">
                            <li><a href="tel:197-543-2345">+62 8951 0886 267</a></li>
                            <li><a href="tel:197-123-9876">+62 8562 4854 867</a></li>
                        </ul>
                    </div>

                </div>
            </div> <!-- end section-header -->

            <div class="row list-block block-lg-one-half block-tab-whole block-stack-on-1000 s-footer__btns">
                <div class="column list-block__item">
                    <div class="s-footer__contact-btn">
                        <a href="mailto:#0" class="btn btn--primary u-fullwidth">
                            Let's Talk
                        </a>
                    </div>
                </div>
                <div class="column list-block__item">
                    <div class="subscribe-form s-footer__subscribe">
                        <h6>Subscribe</h6>
                        <form id="mc-form" class="mc-form">
                            <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center"
                                placeholder="Your Email Address"
                                title="The domain portion of the email address is invalid (the portion after the @)."
                                pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
                                required>
                            <input type="submit" name="subscribe" value="Subscribe"
                                class="btn btn--primary u-fullwidth">
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            <div class="mc-status"></div>
                        </form>
                    </div>
                </div>
            </div> <!-- end s-footer__btns -->

            <div class="row s-footer__bottom">

                <div class="column lg-6 tab-12 s-footer__bottom-left">
                    <ul class="s-footer__social">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="column lg-6 tab-12 s-footer__bottom-right">
                    <div class="ss-copyright">
                        <span>© Copyright Kelompok 7 2024</span>
                    </div>
                </div>

            </div> <!-- s-footer__bottom -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"></path>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer> <!-- end footer -->


        <!-- Java Script
    ================================================== -->
        <script src="{{ asset('template') }}/js/plugins.js"></script>
        <script src="{{ asset('template') }}/js/main.js"></script>

</body>

</html>