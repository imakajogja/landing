<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Kami adalah komunitas mahasiswa di Universitas Amikom Yogyakarta yang beranggotakan mahasiswa yang berasal dari Kebumen. Terbentuk sejak tanggal 15 Juni 2011, bertujuan untuk menjalin silaturahmi diantara mahasiswa Kebumen yang kuliah di Universitas Amikom Yogyakarta.">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#ffcc00">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="IMAKA Official | Ikatan Mahasiswa Kebumen Amikom">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffcc00">
    <meta name="apple-mobile-web-app-title" content="IMAKA Official | Ikatan Mahasiswa Kebumen Amikom">
    <meta property="og:site_name" content="IMAKA Official | Ikatan Mahasiswa Kebumen Amikom">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://imaka.or.id/">
    <meta property="og:description" content="Kami adalah komunitas mahasiswa di Universitas Amikom Yogyakarta yang beranggotakan mahasiswa yang berasal dari Kebumen. Terbentuk sejak tanggal 15 Juni 2011, bertujuan untuk menjalin silaturahmi diantara mahasiswa Kebumen yang kuliah di Universitas Amikom Yogyakarta.">
    <meta property="og:image" content="https://imaka.or.id/images/avatar.png">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="640">
    <meta property='og:title' content='IMAKA Official | Ikatan Mahasiswa Kebumen Amikom'>
    <meta property="og:type" content="website">
    <meta property='og:description' content="Kami adalah komunitas mahasiswa di Universitas Amikom Yogyakarta yang beranggotakan mahasiswa yang berasal dari Kebumen. Terbentuk sejak tanggal 15 Juni 2011, bertujuan untuk menjalin silaturahmi diantara mahasiswa Kebumen yang kuliah di Universitas Amikom Yogyakarta.">
    <title>IMAKA Official | Ikatan Mahasiswa Kebumen Amikom</title>
    <link rel="manifest" href="/manifest.webmanifest" />
    <link rel="alternate" href="https://imaka.or.id/" hreflang="en-US">
    <link rel="canonical" href="https://imaka.or.id/">
    <link rel="icon" href="https://imaka.or.id/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans:400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media='screen' href="style.css">
</head>
<body id="body" class="<?php if(!isset($_COOKIE['theme'])) {echo $_COOKIE['theme'];} else {echo "light-mode";}?>">
    <header class="navbar" id="header" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <h1 class="title is-4 navbar-item">
                    <a class="navbar-item" href="https://imaka.or.id">
                        <img src="https://imaka.or.id/images/48.png">IMAKA
                    </a>
                </h1>
                <button onclick="toggleDarkLight()"><i class="lni-sun" id="icons-mobile"></i></button>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <ul class="navbar-end">
                    <li class="navbar-item"><a href="https://blog.imaka.or.id">Blog</a></li>
                    <li class="navbar-item"><a href="/anggota">Anggota</a></li>
                    <li class="navbar-item"><a href="/forum">Forum</a></li>
                    <li class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                        Direktori
                        </a>
                        <ul class="navbar-dropdown">
                            <li class="navbar-item"><a href="https://instagram.com/imakajogja">Feed</a></li>
                            <li class="navbar-item"><a href="https://facebook.com/ImakaAmikom">Facebook</a></li>
                            <hr class="navbar-divider">
                            <li class="navbar-item"><a href="mailto:imaka@outlook.co.id">Official E-mail</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item has-icon"><button onclick="toggleDarkLight()"><i class="lni-sun" id="icons"></i></button></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="section front-banner" id="front-banner">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="section-header">
                        <h1 class="title is-spaced">Bersatu kita kompak, bertemu kita ngapak </h1>
                        <h2 class="subtitle is-4">Kami merangkul dan menghubungkan mahasiswa kebumen yang berkuliah di lingkup amikom yogyakarta</h2>
                        <div class="field is-grouped">
                            <div class="control"> <button class="button is-primary is-medium" onclick="window.location.href='https://chat.whatsapp.com/KCtAl8dFObiLw4G9buGK9H'">Pengen gabung?</button></div>
                        </div>
                    </div>
                </div>
                <div class="column is-6" data-aos="fade-left">
                    <div class="section-media"> <img role="presentation" src="images/growth.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="learn">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6" data-aos="fade-up-right">
                    <div class="section-media"> <img class="full-width" role="presentation" src="images/work.png"></div>
                </div>
                <div class="column is-6" data-aos="fade-up-left">
                    <div class="section-header">
                        <h2 class="title is-2 is-spaced">Mari belajar bersama<span class="spacer is-horizontal is-05"></span><span class="tag is-white">Baru</span> </h2>
                        <h2 class="subtitle is-4">Gabung di repositori kami dan ayo belajar bareng tentang teknologi, komputer?? Apa saja, halaman ini juga bisa kamu lihat disitu lho!</h2>
                        <div class="field is-grouped">
                            <div class="control"><button class="button is-white is-medium" onclick="window.location.href='https://github.com/imakajogja'"><i class="lni-github-original size-sm"></i>Sinau Bareng</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section team">
        <div class="container">
            <h3 class="title is-3">Pengurus<button class="button is-text" onclick="window.location.href='anggota'"><i class="lni-folder"></i> Semua</button></h3>
            <div class="columns is-multiline is-vcetered team-list">
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/1.png">
                        <div class="first">
                            <span>Andriawan Husnu S</span><br>
                            <small>Ketua Umum</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Informatika</li>
                                <li><i class="lni-plane"></i> Buluspesantren</li>
                                <li><a href="https://facebook.com/andriawan.husnu"><i class="lni-facebook"></i></a><a href="https://instagram.com/andriawanhusnu26"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/2.png">
                        <div class="first">
                            <span>Farid Umar Fajar</span><br>
                            <small>Wakil Ketua</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Ilmu Komunikasi</li>
                                <li><i class="lni-plane"></i> Pejagoan</li>
                                <li><a href="https://facebook.com/faridumar.fajar"><i class="lni-facebook"></i></a><a href="https://instagram.com/faridumarfajar"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/3.png">
                        <div class="first">
                            <span>Linda Lestari</span><br>
                            <small>Sekretaris</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Sistem Informasi</li>
                                <li><i class="lni-plane"></i> Klirong</li>
                                <li><a href="https://facebook.com/linda.tari2"><i class="lni-facebook"></i></a><a href="https://instagram.com/linda.tari2"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/4a.png">
                        <div class="first">
                            <span>Khadidatus Sofro'a</span><br>
                            <small>Bendahara 1</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Informatika</li>
                                <li><i class="lni-plane"></i> Kutowinangun</li>
                                <li><a href="https://facebook.com/daplunonthesetered.setered"><i class="lni-facebook"></i></a><a href="https://instagram.com/sofi12_05"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/4.png">
                        <div class="first">
                            <span>Aditya S</span><br>
                            <small>Bendahara 2</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Sistem Informasi</li>
                                <li><i class="lni-plane"></i> Kutowinangun</li>
                                <li><a href="https://facebook.com/tya.ningsih.7902"><i class="lni-facebook"></i></a><a href="https://instagram.com/adhityahoran"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/10.png">
                        <div class="first">
                            <span>Ratih Anggarini</span><br>
                            <small>Humas</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Teknik Informatika</li>
                                <li><i class="lni-plane"></i> Karangsambung</li>
                                <li><a href="https://facebook.com/ratih.anggarini.7"><i class="lni-facebook"></i></a><a href="https://instagram.com/ratihang_"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/6.png">
                        <div class="first">
                            <span>Yanuar Aditia</span><br>
                            <small>Web Maintainer</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> Informatika</li>
                                <li><i class="lni-plane"></i> Karanggayam</li>
                                <li><a href="https://facebook.com/yanuaraditia99"><i class="lni-facebook"></i></a><a href="https://instagram.com/yanuaraditia"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/6a.png">
                        <div class="first">
                            <span>Rasyid Ridla</span><br>
                            <small>IT Support</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> MI</li>
                                <li><i class="lni-plane"></i> Kutowinangun</li>
                                <li><a href="https://facebook.com/rasyiidz.ridlla"><i class="lni-facebook"></i></a><a href="https://instagram.com/rasyd_r298"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/7.png">
                        <div class="first">
                            <span>Dwi Wahyu P A</span><br>
                            <small>IT Support</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> IF</li>
                                <li><i class="lni-plane"></i> Sempor</li>
                                <li><a href="https://acebook.com/ipmawanwahyu"><i class="lni-facebook"></i></a><a href="https://instagram.com/dwpa27_"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-one-fifth-desktop" data-aos="fade-up">
                    <div class="card">
                        <img src="https://imaka.or.id/images/pengurus/9.png">
                        <div class="first">
                            <span>Wahyu Lestiadi R</span><br>
                            <small>Steering Committee</small>
                        </div>
                        <div class="second">
                            <ul class="menu-list">
                                <li><i class="lni-bookmark"></i> IF</li>
                                <li><i class="lni-plane"></i> Kebumen</li>
                                <li><a href="https://facebook.com/MoreSweetThanRevenge"><i class="lni-facebook"></i></a><a href="https://instagram.com/wahyulesti"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="foto">
        <div class="content">
            <img src="images/family.jpg">
            <div class="card kepsyen">
                <h5 class="title">Lihat rekap kegiatan <br> selama ramadhan tahun 2019</h5>
                <button class="button is-text" onclick="window.location.href='https://drive.google.com/open?id=1wWclm0lcHBMyECryrQC4HjI6rPA7kIFS'">Rekap ramadhan 2019</button>
            </div>
        </div>
    </section>
    <section class="section is-contact">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <p><i class="lni-map"></i><b>Yogyakarta : </b> Jl. Ringin Raya No.121C Condongcatur,<br>Depok, Sleman, DI Yogyakarta (55598) </p>
                    <p><b>Kebumen : </b> Jl. Pemuda (utara RS Lama), Panjer,<br>Kebumen, Kebumen, Jawa Tengah (54312) </p>
                </div>
                <div class="column">
                    <h6>Selalu terhubung dengan ikatan mahasiswa kebumen amikom<br>dan tanyakan sesuatu</h6>
                    <a class="button is-text is-medium" onclick="window.location.href='mailto:imaka@outlook.co.id'">imaka@outlook.co.id</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-5 is-4-widescreen">
                    <div class="summary">
                        <p>&copy; 2019 by <a href="#">Ikatan Mahasiswa Kebumen Amikom</a><br>
                        Crafted with 🍜 designed by <a href="https://yanuar.co">Yanuar Aditia</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-6">
                    <div class="menu links">
                        <ul class="menu-list">
                            <li> <a href="http://amikom.ac.id">Univ. Amikom</a></li>
                            <li> <a href="http://kebumenkab.go.id">Kebumen</a></li>
                            <li> <a href="http://blog.imaka.or.id">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="menu social-media">
                        <ul class="menu-list">
                            <li>
                                <a href="https://instagram.com/imakajogja" target="_blank"><i class="lni-instagram-original size-sm"></i></a>
                            </li>
                            <li>
                                <a href="https://facebook.com/ImakaAmikom" target="_blank"><i class="lni-facebook-original size-sm"></i></a>
                            </li>
                            <li>
                                <a href="https://chat.whatsapp.com/KCtAl8dFObiLw4G9buGK9H" target="_blank"><i class="lni-whatsapp size-sm"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
        $(".navbar-burger").click(function() {
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });
        });
        window.onscroll = function() {
            scrollFunction()
        };
        function scrollFunction() {
            if (document.body.scrollTop > 77 || document.documentElement.scrollTop > 77) {
                var element, name, arr;
                element = document.getElementById("header");
                name = "on-scroll";
                arr = element.className.split(" ");
                if (arr.indexOf(name) == -1) {
                    element.className += " " + name;
                }
                var element, name, arr;
                element = document.getElementById("front-banner");
                name = "on-scroll";
                arr = element.className.split(" ");
                if (arr.indexOf(name) == -1) {
                    element.className += " " + name;
                }
            }
            else {
                var element = document.getElementById("header");
                element.className = "navbar";
                document.getElementById("front-banner").className="section front-banner";
            }
        }
        function toggleDarkLight() {
            var body = document.getElementById("body");
            var currentClass = body.className;
            body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";

            var body = document.getElementById("icons");
            var currentClass = body.className;
            body.className = currentClass == "lni-night" ? "lni-sun" : "lni-night";
            var body = document.getElementById("icons-mobile");
            var currentClass = body.className;
            body.className = currentClass == "lni-night" ? "lni-sun" : "lni-night";
            $('#icons').load('cookie.php');
        }        
    </script>
</body>
</html>