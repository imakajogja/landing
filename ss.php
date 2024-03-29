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
    <style>
        html,body {
    font-family: "Google Sans",sans-serif;
    color: #202124;
    scrollbar-color: #ffcc00 #fff;
    scrollbar-width: thin;
}
.dark-mode {
    background: #121212;
    color: #999;
    scrollbar-color: #ffcc00 #202124;
}
.dark-mode .navbar-divider, hr {
    background: rgba(255,255,255,0.05);
}
a {
    color: #000;
    outline: none;
}
.dark-mode a {
    color: #ffcc00;
}
h1,h2,h3,h4,h5,h6 {
    font-weight: 400;
}
button {
    outline: none!important;
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
::-moz-selection {
  color: #5F6368;
  background: #ffcc00;
}
::selection {
  color: #5F6368; 
  background: #ffcc00;
}
.bg-primer {
    background: #ffcc00;
}
.has-background {
    background: rgba(0,0,0,0.05);
}
/* Title */
.hero.is-warning .subtitle {
    color: rgba(0,0,0,.6)
}
.title {
    color: #5F6368;
    font-weight: 500;
}
.subtitle {
    color: #777;
}
.subtitle.is-4 {
    font-size: 22px;
    line-height: 28px;
    font-weight: 400;
}
/* Header */
.navbar {
    font-family: "Google Sans",sans-serif;
    z-index: 999;
    transition: all .2s ease-in-out;
}
.dark-mode .navbar {
    background: transparent;
    transition-delay: 0s;
}
.navbar-burger {
    position: absolute;
    right: 0;
}
.navbar-burger span {
    background: #202124;
}
.dark-mode .navbar-burger span {
    background: #ffcc00;
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
.button.is-primary, .button.is-primary:hover {
    background: rgba(255,247,0,0.2);
    color: #f9a602;
}
.dark-mode .button.is-primary, .dark-mode .button.is-primary:hover {
    background: #ffcc00;
    color: #121212;
}
.button:hover {
    opacity: .7;
}
.button.is-white, .button.is-white:hover {
    background: rgba(255,255,255,0.7);
    color: #202124;
}
.button.is-text {
    padding: 0;
    text-decoration: none;
    color: #f9a602;
}
.button.is-text:hover {
    background:rgba(0,0,0,0.05);
    color: #f9a602;
    text-decoration: underline;
}
/* Menu */
.menu-label {
    font-family: "Google Sans",sans-serif;
    color: #5F6368;
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
    background: transparent;
}

/* Front banner */
.front-banner {
    margin-top: 0;
}
.front-banner h1 {
    font-size: 55px;
}
/* Team */
.team .button.is-text {
    float:right;
}
.team .card {
    border-radius: 20px;
    border:none;
    display: flex;
    overflow: hidden;
    height: 260px;
    position: relative;
    padding: 20px 30px;
    border:1px solid #DADCE0;
    box-shadow: none;
}
.dark-mode .team .card {
    background: #151515;
    border: none;
}
.team .card:hover {
    border: none;
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
.dark-mode .team .card::before {
    background: linear-gradient(-45deg, #ffcc00, #f9a602);
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
    background: transparent;
}
.team .card:hover .first {
    transform: translateY(-100px);
    padding-top: 10px;
    background: #fff;
}
.dark-mode .team .card:hover .first, .dark-mode .team .card .second {
    background: #151515;
}
.team .card .first span {
    font-weight: 500;
    font-family: "Google Sans",sans-serif;
    color: #5F6368;
}
.dark-mode .card .first small {
    color: #fff;
}
.team .card .second {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
    transition: all .2s ease-in-out;
    transform: translateY(200px);
    padding: 0 20px 20px;
    background: #fff;
}
.team .card:hover small {
    display:none;
}
.team .card .menu-list {
    margin-left: 0;
    font-size: 15px;
}
.dark-mode .team .card .menu-list {
    color: #f3f3f3;
}
.team .card .menu-list li:not(:last-child) {
    background: #f0f0f0;
    border-radius: 10px;
    padding: 5px 10px;
    margin-bottom: 4px;
    font-size: 12px;
}
.dark-mode .team .card .menu-list li:not(:last-child) {
    background: #252525;
}
.learn .container {
    background: #fff19c;
    padding: 30px;
    border-radius: 20px;
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
    opacity: 1;
}
.foto {
    max-height: 70vh;
    position: relative;
    overflow: hidden;
    width: 100%;
}
.foto img {
    width: 100%;
    opacity: .8;
}
.foto .kepsyen .title {
    font-size: 22px;
    line-height: 28px;
    font-weight: 400;
}
/* Cta */
.section.is-contact {
    overflow: hidden;
    position: relative;
}
.section.is-contact .menu-list {
    margin: 10px 7px;
}
.section.is-contact .menu-list li {
    float: left;
}
.section.is-contact .menu-list li:not(:last-child) {
    margin-right: 12px;
}
.section.is-contact .menu-list li a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 100px;
    background: #202124;
    text-align: center;
    padding: 0;
    padding-top: 5px;
    display: block;
    color: #fff;
}
.section.is-contact p {
    font-size: 18px;
    position: relative;
    padding-left: 60px;
}
.section.is-contact p i {
    position: absolute;
    background: #ffcc00;
    left: 0px;
    padding: 10px;
    top: calc(100% - 15px);
    border-radius: 20px;
}
.dark-mode .section.is-contact p i {
    color: #121212;
}
.section.is-contact p:not(:last-child) {
    margin-bottom: 12px;
}
/* Footer */
footer {
    color: #5F6368;
    background: #F8F9FA;
    font-family: "Google Sans",sans-serif;
}
.dark-mode footer {
    background: #151515;
}
footer .social-media ul li i {
    vertical-align: middle;
    margin-right: 10px;
}
@media screen and (min-width: 1024px) {
    .navbar.on-scroll {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        background: #fff;
        box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
    }
    .dark-mode .navbar .navbar-brand .navbar-item {
        color: #ffcc00;
    }
    .dark-mode .navbar.on-scroll {
        background: #151515;
    }
    .container > .navbar .navbar-brand, .navbar > .container .navbar-brand {
        margin-left: 0;
    }
    .navbar-brand .navbar-item, .navbar-brand .navbar-item:hover {
        border-radius: 10px;
        padding: 0;
        margin-bottom: 0;
    }
    .navbar-brand .navbar-item img {
        width: 48px;
        max-height: 48px;
        border-radius: 100%;
        margin-right: 10px;
    }
    .navbar-end .navbar-item {
        text-align: center;
        position: relative;
        padding: 0;
    }
    .navbar-end .navbar-item.has-icon {
        padding:0;
    }
    .navbar-end .navbar-item.has-icon button {
        border:none;
        background: transparent;
        font-size: 20px;
        color: #5F6368;
        box-shadow: none;
        outline: none;
    }
    .navbar-end .navbar-item:not(:first-child) {
        margin-left: 5px;
    }
    .navbar-end .navbar-item:not(:last-child)::before {
        width: 1px;
        height: 40%;
        background: rgba(0,0,0,0.05);
        content: "";
        position: absolute;
        right: 0;
        top: 30%;
    }
    .dark-mode .navbar-end .navbar-item:not(:last-child)::before {
        background: rgba(255,255,255,0.05);
    }
    .navbar-item.has-dropdown.is-active .navbar-link, .navbar-item.has-dropdown:focus .navbar-link, .navbar-item.has-dropdown:hover .navbar-link {
        background: transparent!important;
    }
    .navbar-end .navbar-item::after {
        content: "";
        position: absolute;
        height: 0;
        width: calc(100% - 20px);
        background: #5F6368;
        bottom: 0;
        left: 10px;
        border-radius: 10px 10px 0 0;
        transition: all .2s ease-in-out;
    }
    .navbar-end .navbar-item:hover::after {
        height: 4px;
    }
    .navbar-end .navbar-item a {
        font-size: 14px;
        display: block;
        line-height: 16px;
        padding: 1.5rem 1.5rem;
        font-weight: 500;
        color: #5F6368;
        letter-spacing: 0.25px;
        cursor: pointer;
    }
    .navbar-link:not(.is-arrowless) {
        padding: calc(1.5rem + 2px) 2.5rem!important;
        padding-left: 1.5rem!important;
    }
    .navbar-link:not(.is-arrowless)::after {
        margin-top: -9px;
        border-color: #5F6368;
    }
    .navbar-dropdown {
        border-radius: 20px;
        border: none;
    }
    .dark-mode .navbar-dropdown {
        background: #151515;
    }
    .navbar-dropdown .navbar-item a {
        display: block;
        width: 100%;
        text-align: left;
        padding: 5px 20px;
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
    .navbar-brand button {
        display: none;
    }
    .front-banner.on-scroll {
        margin-top: 77px;
    }
    .social-media li {
        float: right;
    }
    footer .links li {
        float: left;
    }
    footer .links li:not(:last-child) {
        margin-right: 12px;
    }
    footer .links li a {
        color: #5F6368;
        font-size: 16px;
        font-weight: 500;
    }
    .dark-mode footer .links li a {
        color: #ffcc00;
    }
}
@media screen and (max-width: 1023px) {
    .learn .container {
        border-radius: 0;
    }
    .navbar {
        position: fixed;
        transform: translateY(-70px);
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(255,255,255,0.9);
        border-bottom: 1px solid rgba(0,0,0,0.05);
        transition: all .11s ease-in-out;
    }
    .navbar-item.has-icon {
        display: none;
    }
    .navbar-brand button {
        position: absolute;
        width: 50px;
        background: transparent;
        border: none;
        font-size: 18px;
        right: 50px;
        line-height: 51px;
    }
    .dark-mode .navbar-brand button {
        color: #ffcc00
    }
    .navbar .navbar-brand .navbar-item {
        margin-bottom: 0;
        padding: 0;
        padding-left: 10px;
    }
    .navbar-brand .navbar-item img {
        width: 32px;
        max-height: 32px;
        border-radius: 100%;
        margin-right: 10px;
    }
    .navbar.on-scroll {
        transform: translateY(0);
        background: #fff;
    }
    .dark-mode .navbar.on-scroll {
        background: #121212;
        border-bottom: 1px solid rgba(255,255,255,0.05);
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
        background-color: #fff;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        box-shadow: none;
    }
    .dark-mode .navbar-menu {
        background: #121212;
    }
    .navbar-menu .navbar-item {
        padding: 0;
    }
    .navbar-link:not(.is-arrowless)::after {
        border-color: #fff;
    }
    .navbar-menu .navbar-item:not(:last-child), .navbar-menu .navbar-item:not(:last-child) {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    .navbar-menu .navbar-item a {
        padding: 10px 5px;
        font-weight: 400;
        font-size: 14px;
        color: #121212;
        display: block;
    }
    .navbar-dropdown {
        padding: .75rem 1.5rem !important;
        padding-left: 1.5rem!important;
        border:1px solid rgba(0,0,0,0.05);
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .dark-mode .navbar-dropdown, .dark-mode .navbar-menu .navbar-item:not(:last-child), .dark-mode .navbar-menu {
        border-color: rgba(255,255,255,0.05);
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
        height: 200px;
    }
    .team .card img {
        margin-top: 5px;
        transform: scale(.7)
    }
    .team .card:hover img {
        transform: scale(.4) translateY(-140px);
        border: 5px solid #fff;
    }
    .team .card .second {
        padding: 10px;
    }
    .social-media {
        margin-bottom: 10px;
    }
    .social-media li {
        float: left;
    }
}
@media screen and (max-width: 1444px) {
    .team .is-3-desktop.card {
        width: calc(18vw - 34px);
        margin:10px
    }
}
@media (min-width:1080px) and (max-width: 1280px) {
    .team .card img {
        width:100px;
        height:100px;
    }
    .team .card:hover img {
        transform: scale(.7) translateY(-50px);
    }
}
@media screen and (min-width: 769px) {
    .foto .kepsyen {
        position: absolute;
        bottom: 20%;
        right: 10%;
        backdrop-filter: saturate(180%) blur(20px);
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 20px;
        padding: 24px;
        box-shadow: none;
    }
}
@media screen and (max-width: 768px) {
    .team .column.is-6 {
        float: left;
    }
    .team .card:hover .first {
        transform: translateY(-80px);
    }
    .team .card .menu-list li:not(:last-child) {
        font-size:11px;
    }
    .team .card:hover span {
        padding-bottom:10px;
    }
    .team .card .second {
        padding-top:0;
    }
    .team .card .first span {
        font-size: 14px;
    }
    .team .card .first small {
        font-size: 12px;
    }
    .section.is-contact p {
        padding-left: 0;
    }
    .section.is-contact p i {
        display: none;
    }
    .foto {
        padding-top: 40px;
    }
    .foto .kepsyen {
        position: absolute;
        bottom: 30px;
        right: 20px;
        left: 20px;
        top: 70px;
        border: none;
        border-radius: 20px;
        padding: 24px;
        box-shadow: none;
        backdrop-filter: saturate(180%) blur(20px);
        background-color: rgba(255, 255, 255, 0.8);
    }
}

.dark-mode .navbar-end .navbar-item.has-icon button, .dark-mode .navbar-end .navbar-item a, .dark-mode .title  {
    color: #f3f3f3;
}
.dark-mode .learn .container {
    background: #151515;
}
.dark-mode .learn .title, .dark-mode .learn .subtitle {
    color: #ffcc00;
}
.dark-mode .kepsyen {
    background-color: rgba(0, 0, 0, 0.7);
}</style>
</head>
<body id="body" class="light-mode">
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
        }        
    </script>
</body>
</html>