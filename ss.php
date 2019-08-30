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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
<style>
html,body {
    font-family: "Roboto",sans-serif;
    color: #999;
    scrollbar-color: #ffcc00 #fff;
    scrollbar-width: thin;
}
a {
    color: #000;
}
h1,h2,h3,h4,h5,h6 {
    font-family: "Google Sans",sans-serif;
    font-weight: 400;
}
::-webkit-scrollbar {
  width: 5px;
}
::-webkit-scrollbar-track {
  background: #fff;
  border-left:1px solid rgba(0,0,0,0.05);
}
::-webkit-scrollbar-thumb {
  background: #ffcc00;
}
::-webkit-scrollbar-thumb:hover {
  background: #fff19c;
}
.bg-primer {
    background: #ffcc00;
}
.has-background {
    background: rgba(0,0,0,0.05);
}
.bg-purple {
    background: rgba(145, 112, 169, 0.1)
}
/* Title */
.hero.is-warning .subtitle {
    color: rgba(0,0,0,.6)
}
.title {
    color: #677282;
    font-weight: 500;
}
.title.pake-pita {
    position: relative;
}
.title.pake-pita::after {
    width: 20%;
    height: 4px;
    background: #ffcc00;
    border-radius: 10px;
    content: "";
    position: absolute;
    bottom: -10px;
    left: 40%;
}
.subtitle {
    color: #777;
}
/* Header */
.navbar {
    font-family: "Google Sans",sans-serif;
    z-index: 999;
}
.navbar-burger {
    position: absolute;
    right: 0;
}
.navbar-burger span {
    background: #fff19c;
}
/* Button */
.button {
    border-radius: 10px;
    font-family: "Google Sans",sans-serif;
    font-weight: 500;
}
.button i {
    vertical-align: middle;
    margin-right: 10px;
}
.button.is-primary {
    background: #ffcc00;
    color: #333;
}
.button.is-primary:hover {
    background: #fff19c;
    color: #333;
}
/* Menu */
.menu-label {
    font-family: "Google Sans",sans-serif;
    color: #677282;
    text-transform: none;
    font-size: 18px;
    letter-spacing: normal;
    font-weight: 500;
}
.menu-list {
    margin-left: -0.7rem;
}
.menu-list a {
    position: relative;
    padding: 10px;
    border-radius: 10px;
}
.menu-list a:hover {
    background: #FBFBFD;
}

/* Front banner */
.front-banner {
    margin-top: 0;
}
.front-banner h1 {
    font-size: 55px;
}
/* Team */
.team .title {
    margin-bottom: 60px;
}
.team .card {
    border-radius: 20px;
    border:none;
    display: flex;
    overflow: hidden;
    float: left;
    height: 260px;
    position: relative;
    padding: 20px 30px;
    margin: 20px;
    -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,.2);
    box-shadow: 0 2px 6px 0 rgba(0,0,0,.2);
}
.team .card:hover {
    -webkit-box-shadow: 0 6px 18px 0 rgba(0,0,0,.2);
    box-shadow: 0 6px 18px 0 rgba(0,0,0,.2);
}
.team .card img {
    margin: 20px auto;
    border-radius: 100%;
    max-width: 120px;
    max-height: 120px;
    transition: all .15s ease-in-out;
    transition-delay: .05s;
}
.team .card::before {
    background: linear-gradient(-45deg, #ffcc00, #fff19c);
    content: "";
    width: 0px;
    height: 0px;
    border-radius: 40px;
    position: absolute;
    left: 50%;
    top: 50px;
    transition: all 0.07s ease-in-out;
}
.team .card:hover::before {
    width: 100%;
    height: 50%;
    border-radius: 0;
    left: 0;
    top: 0;
}
.team .card .first {
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
    text-align: center;
    transition: all .2s ease-in-out;
    border-radius: 20px 20px 0 0;
    background: #fff;
}
.team .card:hover .first {
    transform: translateY(-78px);
    padding-top: 10px;
}
.team .card .first span {
    font-weight: 500;
    font-family: "Google Sans",sans-serif;
    color: #677282;
}
.team .card .second {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    transition: all .2s ease-in-out;
    transform: translateY(200px);
    padding: 0 20px 20px;
    background: #fff;
}
.team .card .menu-list {
    margin-left: 0;
    font-size: 15px;
}
.team .card .menu-list li:not(:last-child) {
    background: #f0f0f0;
    border-radius: 10px;
    padding: 5px 10px;
    margin-bottom: 4px;
    font-size: 14px;
}
.team .card .menu-list li:last-child {
    margin-top: 10px;
}
.team .card .menu-list a {
    display: inherit;
    float: left;
    padding: 4px 3px;
    border-radius: 100px;
    width: 29px;
    height: 29px;
    background: #ffcc00;
    color: #111111;
    margin-right: 4px;
}
.team .card .menu-list i {
    vertical-align: middle;
}
.team .card .menu-list a i {
    margin-left: 4px;
}
.team .card:hover .second {
    transform: translateY(0);
}
/* Cta */
.section.is-contact {
    overflow: hidden;
    position: relative;
}
.section.is-contact .container {
    position: initial;
}
.section.is-contact .section-media {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    pointer-events: none;
}
.section.is-contact .section-media img {
    display: block;
    max-width: 800px;
    margin: 0 auto;
}
.section.is-contact .section-body {
    position: relative;
    padding: 2.5rem 0;
    margin-bottom: 2.5rem;
    z-index: 1;
}
.section.is-contact .subtitle {
    max-width: 460px;
    margin-left: auto;
    margin-right: auto;
}
/* Footer */
footer {
    background: #fff;
}
footer .social-media ul li i {
    vertical-align: middle;
    margin-right: 10px;
}
@media screen and (min-width: 1024px) {
    .navbar .container {
        padding:15px 0;
    }
    .container > .navbar .navbar-brand, .navbar > .container .navbar-brand {
        margin-left: 0;
    }
    .navbar-brand .navbar-item, .navbar-brand .navbar-item:hover {
        background: #333!important;
        border-radius: 10px;
    }
    .navbar-end .navbar-item {
        text-align: center;
        position: relative;
        padding: 0;
    }
    .navbar-end .navbar-item:not(:first-child) {
        margin-left: 5px;
    }
    .navbar-end .navbar-item:not(:last-child)::before {
        width: 1px;
        height: 60%;
        background: rgba(0,0,0,0.05);
        content: "";
        position: absolute;
        right: 0;
        top: 20%;
    }
    .navbar-end .navbar-item::after {
        content: "";
        position: absolute;
        height: 0;
        width: calc(100% - 20px);
        background: #677282;
        bottom: 0;
        left: 10px;
        border-radius: 10px 10px 0 0;
        transition: all .2s ease-in-out;
    }
    .navbar-end .navbar-item:hover::after {
        height: 4px;
    }
    .navbar-end .navbar-item a {
        display: block;
        padding: .5rem 1.5rem;
        font-weight: 500;
        color: #677282;
    }
    .navbar-link:not(.is-arrowless) {
        padding: calc(.75rem + 2px) 2.5rem!important;
        padding-left: 1.5rem!important;
    }
    .navbar-link:not(.is-arrowless)::after {
        margin-top: -9px;
        border-color: #677282;
    }
    .navbar-dropdown {
        border-radius: 20px;
        border: none;
    }
    .navbar-dropdown .navbar-item a {
        display: block;
        width: 100%;
        text-align: left;
    }
    .navbar-dropdown .navbar-item::after {
        height: 2px;
        border-radius: 0;
        width: 0;
        left: 50%;
    }
    .navbar-dropdown .navbar-item:hover::after {
        left: 10%;
        width: 80%;
        height: 2px;
    }
    .navbar-dropdown .navbar-item:not(:first-child) {
        margin: 0!important;
    }
    .navbar-dropdown .navbar-item:not(:last-child)::before {
        display: none;
    }
    .team .card:hover img {
        transform: scale(.5) translateY(-85px);
        border: 8px solid #fff;
    }

}
@media screen and (max-width: 1023px) {
    .team .card .menu-list li:not(:last-child) {
        font-size: 13px;
    }
    .navbar {
        position: fixed;
        transform: translateY(-70px);
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.9);
        border-bottom: 1px solid #e0e0e020;
    }
    .navbar.on-scroll {
        transform: translateY(0)
    }
    .navbar:not(.on-scroll) .navbar-menu {
        display: none;
    }
    .navbar-link:hover {
        background: transparent;
    }
    .navbar-menu {
        position: absolute;
        left: 0;
        right: 0;
        margin-top: 1px;
        padding: 3vw;
        background-color: rgba(0,0,0,0.9);
        border-bottom: 1px solid #e0e0e020;
    }
    .navbar-menu .navbar-item {
        padding: 0;
    }
    .navbar-link:not(.is-arrowless)::after {
        border-color: #fff;
    }
    .navbar-menu .navbar-item:not(:last-child) {
        border-bottom: 1px solid #e0e0e020
    }
    .navbar-menu .navbar-item a {
        padding: 10px 5px;
        font-weight: 400;
        font-size: 14px;
        color: #fff;
        display: block;
    }
    .navbar-dropdown {
        padding: .75rem 2.5rem !important;
        padding-left: 1.5rem!important;
        border:1px solid #e0e0e020;
        border-radius: 10px;
    }
    .section h1 {
        font-size: 35px;
        margin-bottom: 5px;
    }
    .section .subtitle {
        font-size: 18px;
    }
    .team .card {
        margin: 0px;
        padding-left: 0;
        padding-right: 0;
        height: 220px;
    }
    .team .card img {
        margin-top: 5px;
    }
    .team .card:hover img {
        transform: scale(.4) translateY(-130px);
        border: 5px solid #fff;
    }
    .team .card .second {
        padding: 10px;
    }
}
@media screen and (max-width: 1444px) {
    .team .is-3-desktop.card {
        width: calc(18vw - 34px);
        margin:10px
    }
}
@media screen and (max-width: 768px) {
    .team .card {
        margin: 5px!important;
        width: calc(50vw - 26px)!important;
    }
}
</style>
</head>
<body>
    <header class="navbar" id="header" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                <img src="https://imaka.or.id/images/imaka-logo.png">
                </a>

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
                </ul>
            </div>
        </div>
    </header>
    <section class="section front-banner">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="section-header">
                        <h1 class="title is-spaced">Bersatu kita kompak, bertemu kita ngapak </h1>
                        <h2 class="subtitle is-4">Kami merangkul dan menghubungkan mahasiswa kebumen yang berkuliah di lingkup amikom yogyakarta</h2>
                        <div class="field is-grouped">
                            <div class="control"> <a class="button is-primary is-medium" href="javascript:void(0)" onclick="location.href='https://chat.whatsapp.com/KCtAl8dFObiLw4G9buGK9H'">Pengen gabung?</a> </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6" data-aos="fade-left">
                    <div class="section-media"> <img role="presentation" src="images/growth.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero section is-hero is-warning learn">
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
                            <div class="control"> <a class="button is-white is-medium" href="javascript:void(0)" onclick="location.href='https://github.com/imakajogja'"><i class="lni-github-original size-sm"></i>Sinau Bareng</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero section team">
        <div class="container">
            <h2 class="title is-2 is-spaced has-text-centered pake-pita">Kepengurusan</h2>
            <div class="columns is-vcentered is-fullhd team-list">
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/1.png">
                    <div class="first">
                        <span>Andriawan Husnu S</span><br>
                        <small>Ketua Umum</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> IF</li>
                            <li><i class="lni-plane"></i> Buluspesantren</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/2.png">
                    <div class="first">
                        <span>Farid Umar Fajar</span><br>
                        <small>Wakil Ketua</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> Ilkom</li>
                            <li><i class="lni-plane"></i> Pejagoan</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/3.png">
                    <div class="first">
                        <span>Linda Lestari</span><br>
                        <small>Sekretaris</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> SI</li>
                            <li><i class="lni-plane"></i> Klirong</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/4a.png">
                    <div class="first">
                        <span>Khadidatus Sofro'a</span><br>
                        <small>Bendahara 1</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> IF</li>
                            <li><i class="lni-plane"></i> Kutowinangun</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/4.png">
                    <div class="first">
                        <span>Aditya S</span><br>
                        <small>Bendahara 2</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> SI</li>
                            <li><i class="lni-plane"></i> Kutowinangun</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="columns is-fullhd team-list">
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/10.png">
                    <div class="first">
                        <span>Ratih Anggarini</span><br>
                        <small>Humas</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> TI</li>
                            <li><i class="lni-plane"></i> Karangsambung</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/6.png">
                    <div class="first">
                        <span>Yanuar Aditia</span><br>
                        <small>Web Maintainer</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> IF</li>
                            <li><i class="lni-plane"></i> Karanggayam</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/6a.png">
                    <div class="first">
                        <span>Rasyid Ridla</span><br>
                        <small>IT Support</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> MI</li>
                            <li><i class="lni-plane"></i> Kutowinangun</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/7.png">
                    <div class="first">
                        <span>Dwi Wahyu P A</span><br>
                        <small>IT Support</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> IF</li>
                            <li><i class="lni-plane"></i> Sempor</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-6 is-6-mobile is-3-tablet is-3-desktop is-4-touch is-2-fullhd card" data-aos="fade-up">
                    <img src="https://imaka.or.id/images/pengurus/9.png">
                    <div class="first">
                        <span>Wahyu Lestiadi R</span><br>
                        <small>Steering Committee</small>
                    </div>
                    <div class="second">
                        <ul class="menu-list">
                            <li><i class="lni-bookmark"></i> IF</li>
                            <li><i class="lni-plane"></i> Kebumen</li>
                            <li><a href=""><i class="lni-facebook"></i></a><a href=""><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-contact bg-purple is-medium">
        <div class="container">
            <div class="section-header has-text-centered" data-aos="fade-up">
                <h2 class="title is-1 is-spaced"> Jangan malu, say Hi! </h2>
                <p class="subtitle is-4"> Kita mungkin sering guyon, banyolan ngawur, tapi kami tidak menggigit.  </p>
            </div>
            <div class="section-body has-text-centered"> <a class="button is-primary is-medium" href="mailto:support@imaka.or.id">Get in touch</a> </div>
            <div class="section-media"> <img role="presentation" src="images/jooz.png"> </div>
        </div>
    </section>
    <footer class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-5 is-4-widescreen">
                    <div class="summary">
                        <p> <b>Yogyakarta : </b> Jl. Ringin Raya No.121C Condongcatur, Depok, Sleman, DI Yogyakarta (55598) </p>
                        <hr class="spacer is-1"><a href="http://www.imaka.or.id" target="_blank"> © Ikatan Mahasiswa Kebumen Amikom</a>
                        <p>Crafted with 🍚 by <a href="http://yanuar.co" target="_blank">yanuar</a></p>
                    </div>
                </div>
                <div class="column is-7 is-6-widescreen is-offset-2-widescreen">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="menu">
                                <p class="menu-label">Link</p>
                                <ul class="menu-list">
                                    <li> <a href="http://amikom.ac.id">Universitas Amikom Yogyakarta</a></li>
                                    <li> <a href="http://kebumenkab.go.id">Pemkab Kebumen</a></li>
                                    <li> <a href="http://blog.imaka.or.id">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="menu social-media">
                                <p class="menu-label">Temukan kami</p>
                                <ul class="menu-list">
                                    <li>
                                        <a href="https://instagram.com/imakajogja" target="_blank"><i class="lni-instagram-original size-sm"></i>Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://facebook.com/ImakaAmikom" target="_blank"><i class="lni-facebook-original size-sm"></i>Facebook</a>
                                    </li>
                                    <li>
                                        <a href="https://chat.whatsapp.com/KCtAl8dFObiLw4G9buGK9H" target="_blank"><i class="lni-whatsapp size-sm"></i>Whatsapp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                var element, name, arr;
                element = document.getElementById("header");
                name = "on-scroll";
                arr = element.className.split(" ");
                if (arr.indexOf(name) == -1) {
                    element.className += " " + name;
                }
            }
            else if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                var element = document.getElementById("header");
                element.className = element.className.replace(/ \bon-scroll\b/g, "");
            }
            else {
                var element = document.getElementById("header");
                element.className = element.className.replace(/ \bon-scroll\b/g, "");
            }
        }
        
    </script>
</body>
</html>