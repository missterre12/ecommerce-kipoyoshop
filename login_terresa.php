<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kipoyo Shop</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kipoyo<span>Shop</span></a>

      <div class="navbar-nav">
        <a href="index_terresa.php">Home</a>
        <a href="#about">Tentang</a>
        <a href="#">Belanja</a>
        <a href="#">Kategori</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="login_terresa.php" id="user"><i data-feather="user"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Login Section Start -->
    <section class="hero-login" id="home-login">
      <main class="content-login">
        <div class="login-box">
          <h1>Login</h1>
          <form action="ceklogin_terresa.php" method="post">
            <label for="username">Username atau Email:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="forgot-password">
              <a href="lupapassword_terresa.php">Lupa Password?</a>
            </div>

            <button type="submit" class="cta">Login</button>
          </form>
          <p>Belum punya akun? <a href="daftar_terresa.php">Daftar</a></p>
        </div>

        <!-- Login Error Message -->
        <div class="login-error" id="loginError">
          <span class="close-btn" onclick="closeLoginError()">&times;</span>
          Username or password not valid!
        </div>
      </main>
    </section>
    <!-- Login Section End -->

    <!-- Footer Start -->
    <footer>
      <div class="footer-content">
      <div class="left-section">
        <i data-feather="map-pin"></i>
          <p>Jl. Semanding II RT 004 RW 004 Jengkok Semanding <br> Kec. Gombong, Kab. Kebumen 54411, Jawa Tengah</p>
      </div>

        <div class="center-section">
          <div class="socials">
            <h5>Sosial Media</h5> <br>
            <a href="https://youtube.com/@asiktime"><i data-feather="youtube"></i></a>
            <a href="https://tiktok.com/@kipoyoshop"><i data-feather="music"></i></a>
            <a href="https://www.facebook.com/kipoyoshop"><i data-feather="facebook"></i></a>
          </div>
        </div>

        <div class="right-section">
          <div class="links">
            <h5>Hubungi Kami</h5>
            <div class="contact-info">
              <div>
                <i data-feather="mail"></i>
                <p>kipoyoshop@gmail.com</p>
              </div>
              <div>
                <i data-feather="phone"></i>
                <p>083108975033</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="copyright">
        <p>&copy; 2024 Kipoyo Shop. All rights deserved.</p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <?php
      @$pesan = $_GET['pesan'];
      if($pesan=="gagal")
      {
        echo"<script type='text/javascript'>
          alert('Username or password not valid!');
        </script>";
      }
      else if($pesan=="berhasil")
      {
        echo"<script type='text/javascript'>
          alert('anda berhasil mendaftar, silahkan login');
        </script>";

        }
      else if($pesan=="a")
      {
        echo"<script type='text/javascript'>
          alert('Anda harus melakukan LOGIN terlebih dahulu sebelum melakukan pemesanan');
        </script>";

          }
      ?>
    <!-- My JavaScript -->
    <script src="js/script.js"></script>
  </body>
</html>