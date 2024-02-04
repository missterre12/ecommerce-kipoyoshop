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

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Berikan sentuhan elegan <span>di setiap Ruang</span></h1>
        <p>
          <strong>
          @Kipoyo Shop
          </strong>
        </p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/about.jpg" alt="About Us"/>
        </div>
        <div class="content">
          <h3>Kenapa memilih Kipoyo Shop?</h3>
          <p>
          Toko Kipoyo Shop adalah destinasi utama untuk memenuhi segala kebutuhan rumah tangga Anda. Dari alat-alat rumah tangga yang inovatif hingga koleksi aksesoris yang stylish, serta pilihan furnitur yang elegan, kami hadir untuk memberikan pengalaman belanja yang menyenangkan. 
          </p>
          <p>
          Temukan kenyamanan dan keindahan dalam setiap produk yang kami tawarkan, karena Kipoyo Shop tidak hanya menjual barang-barang, tetapi juga membawa nuansa kehangatan ke dalam rumah Anda.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
        <h2><span>Our</span> Menu</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quis, voluptatibus commodi culpa nobis distinctio?</p>

        <div class="row">
          <div class="menu-card">
            <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">$5</p>
          </div>
          <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Latte" class="menu-card-img">
          <h3 class="menu-card-title">- Latte -</h3>
          <p class="menu-card-price">$5</p>
          </div>
          <div class="menu-card">
            <img src="img/menu/3.jpg" alt="Soft Coffee" class="menu-card-img">
          <h3 class="menu-card-title">- Soft Coffee -</h3>
          <p class="menu-card-price">$5</p>
          </div>
          <div class="menu-card">
            <img src="img/menu/4.jpg" alt="Ice Coffee" class="menu-card-img">
          <h3 class="menu-card-title">- Ice Coffee -</h3>
          <p class="menu-card-price">$5</p>
          </div>
        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2>Hubungi Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, placeat.</p>

      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31632.352501937174!2d109.65902826535688!3d-7.678412228652704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aca065e524833%3A0x77e99e723f3baa9b!2sKebumen%2C%20Kec.%20Kebumen%2C%20Kabupaten%20Kebumen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1700193308682!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Name">
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email">
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No. Phone">
          </div>
          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->
    
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

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
  </body>
</html>
