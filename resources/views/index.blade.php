<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Schoolbell&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <h4>MiniMinds</h4>
        </div>
        <ul>
          <li><a href="">Profile</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Setting</a></li>
        </ul>

        <div class="menu-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </header>

    <main>
      <!-- Card untuk Fitur "Pengenalan Huruf dan Angka" -->
      <a href="/one" id="playSound" class="card">
        <div class="card-image">
          <img src="assets/abc.jpg" alt="Pengenalan Huruf dan Angka" />
        </div>
        <h2>Pengenalan <span class="red-text">Huruf</span>  dan <span class="blue-text">Angka</span></h2>
        <p>Belajar mengenal huruf dan angka dengan cara yang menyenangkan!</p>
      </a>
      <audio id="audioPlayer" src="assets/vine-boom.mp3" style="display: none;"></audio>

      <!-- Card untuk Fitur "Pengenalan Warna dan Bentuk" -->
      <a href="pilihan00.html" class="card">
        <div class="card-image">
          <img src="assets/bentuk.jpg" alt="Pengenalan Warna dan Bentuk" />
        </div>
        <h2>Pengenalan <span class="yellow-text">Warna</span> dan <span class="green-text">Bentuk</span></h2>
        <p>
          Explorasi warna-warni dan bentuk-bentuk dengan permainan interaktif.
        </p>
      </a>

      <!-- Card untuk Fitur "Menggambar dan Mewarnai" -->
      <a href="pilihan000.html" class="card">
        <div class="card-image">
          <img src="assets/gambar.jpg" alt="Menggambar dan Mewarnai" />
        </div>
        <h2><span class="orange-text">Menggambar</span> dan <span class="purple-text">Mewarnai</span></h2>
        <p>
          Ekspresikan kreativitas Anda dengan menggambar dan mewarnai
          gambar-gambar seru!
        </p>
      </a>

      <!-- Tambahkan card untuk fitur-fitur lainnya di sini -->
    </main>
    <script src="script.js"></script>
  </body>
</html>