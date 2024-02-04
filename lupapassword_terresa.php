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

    <!-- Lupa Password Section Start -->
    <section class="hero-lupapw" id="home-lupapw">
      <main class="content-lupapw">
        <div class="lupapw-box">
          <h1>Ganti Password</h1>
          <form action="cekdaftar_terresa.php" method="post">
            <label for="username">Username atau Email:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password Baru:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Konfirmasi Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit" class="cta">Reset Password</button>
          </form>
          <p>Belum punya akun? <a href="daftar_terresa.php">Daftar</a></p>
        </div>

      </main>
    </section>
    <!-- Lupa Password Section End -->

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
include "config_terresa.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (checkUsernameOrEmail($usernameOrEmail)) {
        if (checkPasswordMatch($newPassword, $confirmPassword)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $updateQueryAdmin = "UPDATE admin SET password='$hashedPassword' WHERE username='$usernameOrEmail'";
            mysqli_query($conn, $updateQueryAdmin);

            $updateQueryCus = "UPDATE customer SET password='$hashedPassword' WHERE username='$usernameOrEmail'";
            mysqli_query($conn, $updateQueryCus);

            echo "<script>
                    alert('Password berhasil diubah!');
                    window.location.href = 'login_terresa.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Password tidak sesuai, isi kembali dengan benar.');
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username atau email tidak valid!');
              </script>";
    }
}

function checkUsernameOrEmail($input) {
    global $conn;
    $queryAdmin = "SELECT * FROM admin WHERE username='$input' OR email='$input'";
    $queryCus = "SELECT * FROM customer WHERE username='$input' OR email='$input'";

    $resultAdmin = mysqli_query($conn, $queryAdmin);
    $resultCus = mysqli_query($conn, $queryCus);

    return (mysqli_num_rows($resultAdmin) > 0 || mysqli_num_rows($resultCus) > 0);
}

function checkPasswordMatch($password, $confirmPassword) {
    return ($password == $confirmPassword);
}
?>
  </body>
</html>