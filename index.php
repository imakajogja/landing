<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on imaka.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Imaka Jogja Web Development</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body id="body" class="light-mode">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <div class="imaka-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="imaka-title mdl-layout-title">
            <img class="imaka-logo-image" src="images/imaka-logo.png">
          </span>
          <div class="imaka-header-spacer mdl-layout-spacer"></div>
          <div class="imaka-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <div class="imaka-navigation-container">
            <nav class="imaka-navigation mdl-navigation">
              <a class="mdl-navigation__link" href="">Blog</a>
              <a class="mdl-navigation__link" href="">Forum</a>
            </nav>
          </div>
          <span class="imaka-mobile-title mdl-layout-title">
            <img class="imaka-logo-image" src="images/imaka-logo.png">
          </span>
          <button class="featured-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">
            🌛
          </button>
        </div>
      </div>
      <div class="imaka-drawer mdl-layout__drawer">
        <nav class="mdl-navigation">
          <span class="mdl-navigation__link" href="">Lorem Ipsum</span>
          <a class="mdl-navigation__link" href=""><i class="material-icons">arrow_forward</i>Lorem Ipsum</a>
          <div class="imaka-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Partner</span>
          <a class="mdl-navigation__link" href=""><i class="material-icons">arrow_forward</i>Universitas Amikom Yogyakarta</a>
        </nav>
      </div>
      <div class="imaka-content mdl-layout__content">
        <a name="top"></a>
        <section class="imaka-be-together-section">
          <div class="imaka-banner">
            <div class="logo-font slogan-imaka">Ikatan Mahasiswa <br>Kebumen Amikom.</div>
            <div class="logo-font about">Kami adalah komunitas mahasiswa di Universitas Amikom Yogyakarta yang beranggotakan mahasiswa yang berasal dari Kebumen. Terbentuk sejak tanggal 15 Juni 2011, bertujuan untuk menjalin silaturahmi diantara mahasiswa Kebumen yang kuliah di Universitas Amikom Yogyakarta.</div>
            <div class="logo-font join-circle">
              <a class="imaka-link" href="">
                   Selengkapnya
                   <i class="material-icons">arrow_forward</i>
              </a>
            </div>
          </div>
        </section>
        <section class="featured">
          <div class="imakard-container mdl-grid">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__supporting-text">
                <span>NEW ON INSTAGRAM</span>
              </div>
              <div class="mdl-card__title">
                <div class="mdl-card__title-text">
                  <a href="#">
                     <p>welcome to imaka... be yourself. do your thing. see what's going on.</p>
                     <i class="material-icons">arrow_forward</i>
                  </a>
                  <label class="parallax"></label>
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__supporting-text">
                <span>NEW ON INSTAGRAM</span>
              </div>
              <div class="mdl-card__title">
                <div class="mdl-card__title-text">
                  <a href="#">
                     <p>welcome to imaka... be yourself. do your thing. see what's going on.</p>
                     <i class="material-icons">link</i>
                  </a>
                  <label class="parallax"></label>
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__supporting-text">
                <span>NEW ON INSTAGRAM</span>
              </div>
              <div class="mdl-card__title">
                <div class="mdl-card__title-text">
                  <a href="#">
                     <p>welcome to imaka... be yourself. do your thing. see what's going on.</p>
                     <i class="material-icons">arrow_forward</i>
                  </a>
                  <label class="parallax"></label>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="featured-section">
          <div class="section-title">
            <h6>Blog update</h6>
            <h5>Ikuti update terbaru dari blog kami</h5>
          </div>
          <div class="imakard-container mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png">
              </div>
              <div class="mdl-card__supporting-text">
                <span>NEW ON INSTAGRAM</span>
              </div>
              <div class="mdl-card__title">
                <div class="mdl-card__title-text">
                   <p>welcome to imaka... be yourself. do your thing. see what's going on.</p>
                </div>
              </div>
              <div class="mdl-card__actions">
                 <a class="imaka-link" href="" data-upgraded=",MaterialButton">
                   Selengkapnya
                   <i class="material-icons">arrow_forward</i>
                 </a>
                 <label class="parallax"></label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png">
              </div>
              <div class="mdl-card__supporting-text">
                <span>NEW ON INSTAGRAM</span>
              </div>
              <div class="mdl-card__title">
                <div class="mdl-card__title-text">
                   <p>welcome to imaka... be yourself. do your thing. see what's going on.</p>
                </div>
              </div>
              <div class="mdl-card__actions">
                 <a class="imaka-link" href="" data-upgraded=",MaterialButton">
                   Selengkapnya
                   <i class="material-icons">arrow_forward</i>
                 </a>
                 <label class="parallax"></label>
              </div>
            </div>
          </div>
        </section>
        <section class="team-section">
          <div class="team-container">
            <div class="section-title">
              <h6>Pengurus Inti</h6>
              <h5>Susunan Keluarga Kami</h5>
            </div>
            <div class="imakard-team mdl-grid">
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/1.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>KETUA UMUM</label>
                          <h4>A. Husnu S</h4>
                          <h5>Informatika</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/2.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>WAKIL KETUA</label>
                          <h4>Farid Umar F.</h4>
                          <h5>Ilmu Komunikasi</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/3.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>SEKRETARIS 1</label>
                          <h4>Linda Lestari</h4>
                          <h5>Sistem Informasi</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/4.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>BENDAHARA 1</label>
                          <h4>Andaeni</h4>
                          <h5>Sistem Informasi</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/4a.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>BENDAHARA 2</label>
                          <h4>Khadidatus S.</h4>
                          <h5>Informatika</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/5.jpg">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>Stering Commite</label>
                          <h4>Wahyu Lestiadi</h4>
                          <h5>Informatika</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/6.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>IT Support</label>
                          <h4>Yanuar Aditia</h4>
                          <h5>Informatika</h5>
                        </div>
                    </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="information">
                    <img class="profile-img" width="111" src="images/pengurus/7.png">
                    <div class="social-media">
                      <a href="#" class="fb"></a>
                      <a href="#" class="ig"></a>
                    </div>
                    <div class="summary">
                        <div class="mdl-title">
                          <label>Technical Support</label>
                          <h4>Dwi Wahyu</h4>
                          <h5>Informatika</h5>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="discover-us">
          <div class="discover-us-container">
            <div class="imakard-team mdl-grid">
              <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <div class="addess">
                  <h4>Basecamp Imaka - Jogja</h4>
                  <p>Jl. Ringin Raya No. 121C Condongcatur, Depok, Sleman, DI Yogyakarta</p>
                  <h4>Basecamp Imaka - Kebumen</h4>
                  <p>Jl. Pemuda (utara rel), Kebumen, Jawa Tengah</p>
                </div>
                <div class="bottom">
                  <a href="#"><img src="images/fb.png"></a>
                  <a href="#"><img src="images/ig.png"></a>
                  <a href="#"><img src="images/fb.png"></a>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--7-col mdl-cell--4-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2947778881776!2d110.41000161533172!3d-7.758528779091901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a595cdf0d2aad%3A0xefd290b7b3b43182!2sIkatan+Mahasiswa+Kebumen+Amikom!5e0!3m2!1sid!2sid!4v1562294131361!5m2!1sid!2sid" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
        </section>
        <footer class="imaka-footer">
          <div class="mdl-mega-footer--middle-section">
            <p>Yogyakarta: © 2019 IMAKA, Yanuar Aditia</p>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <a class="imaka-link" href="https://raw.githubusercontent.com/imakajogja/landing/master/LICENSE">License</a>
            <a class="imaka-link" href="">Privacy Policy</a>
            <button type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">🌛</button>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.js"></script>
    <script>
    function toggleDarkLight() {
      var body = document.getElementById("body");
      var currentClass = body.className;
      body.className = currentClass == "light-mode" ? "dark-mode" : "light-mode";
    }
    </script>
  </body>
</html>