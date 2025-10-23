<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junkfood Lezat</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}" />
</head>
<body>
  <!-- NAVBAR -->
  <header>
    <nav class="navbar">
      <div class="logo">Junk<span>Food</span></div>
      <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#comments">Comment</a></li>
      </ul>
    </nav>
  </header>

  <!-- HERO -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <h1>Makanan Cepat Saji <span>Lezat</span></h1>
      <p>Temukan burger, hotdog, dan pizza terbaik untuk memanjakan lidahmu!</p>
      <a href="#menu" class="btn">Telusuri Menu</a>
    </div>
    <div class="hero-image">
      <img src="https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_1280.jpg" alt="Burger Lezat">
    </div>
  </section>

  <!-- MENU -->
  <section id="menu" class="menu-section">
    <h2>Favorit Menu</h2>
    <div id="menu-container" class="menu-container">
      <!-- Card menu diisi via JavaScript -->
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="about">
    <h2>About Us</h2>
    <p>
      JunkFood.com adalah tempat terbaik untuk pecinta makanan cepat saji.
      Kami menghadirkan burger, hotdog, dan pizza dengan kualitas terbaik
      yang dibuat dengan bahan-bahan segar dan rasa yang tiada duanya.
    </p>
  </section>

  <!-- KOMENTAR -->
  <section id="comments" class="comments-section">
    <h2>Comment</h2>

    <!-- Form komentar -->
    <form id="comment-form" class="comment-form">
      <input type="text" id="name" placeholder="Nama Anda" required>
      <textarea id="comment" placeholder="Tulis komentar..." required></textarea>
      <button type="submit" class="btn">Send Comment</button>
    </form>

    <!-- List komentar -->
    <div id="comment-list" class="comment-list">
      <!-- Komentar card akan ditambahkan lewat JS -->
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 JunkFood. Semua Hak Dilindungi.</p>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
