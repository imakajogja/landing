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
    <section class="section is-medium first-meet">
        <div class="container">
            <div class="columns">
                <form class="columm is-4 form-data" id="form-data" method="POST">
                    <div class="field">
                        <label class="label">NIM / NPM</label>
                        <div class="control">
                            <input class="input" name="nim" id="nim" type="text" placeholder="Nomor pokok mahasiswa" maxlength=10 minlength=10>
                        </div>
                        <p class="help">Contoh penulisan : 16.11.0223</p>
                    </div>
                    <div class="field">
                        <label class="label">Nama Lengkap</label>
                        <div class="control">
                            <input class="input" name="nama" type="text" id="nama" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nomor Telepon</label>
                        <div class="control">
                            <input class="input" name="notelp" type="tel" id="notelp" placeholder="+62-XXX" onclick="valitel()">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Alamat</label>
                        <div class="control">
                            <textarea class="textarea" name="alamat" id="alamat" placeholder="Text input" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">Data yang di inputkan tidak akan dipublikasikan,<br> kepada pihak manapun</label>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link simpan" id="simpan"><i class="lni-lock"></i>Submit</button>
                        </div>
                    </div>
                </form>
                <div class="column">
                    <div class="terdata">
                        <div class="columns is-multiline data" id="data">
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#data').load("cupay.php");
            $("#simpan").click(function(){
                var data = $('.form-data').serialize();
                var nama = document.getElementById("nama").value;
                var nim = document.getElementById("nim").value;
                var alamat = document.getElementById("alamat").value;
                var notelp = document.getElementById("notelp").value;
                    $.ajax({
                        type: 'POST',
                        url: "aksi.php",
                        data: data,
                        success: function() {
                            $('#data').load("cupay.php");
                            document.getElementById("form-data").reset();
                        }
                    });
            });
        });
    </script>
    <script>
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
        function valitel() {
            document.getElementById("notelp").value="+62";
        }
    </script>
</body>
</html>