<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once "header.php"; ?>
    <main>
    <!-- your content -->

    <!-- Hero Section with Parallax Effect -->
  <section class="hero" id="hero">
    <div class="hero-content">
      <h1>Welcome to My World</h1>
      <p>Explore my works and creations.</p>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="content">
      <h2>About Me</h2>
      <p>A creative web developer and designer who loves crafting beautiful and functional digital experiences.</p>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section">
    <h2>Projects</h2>
    <div class="projects-grid">
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/16357827/file/original-6daf82d444a08b6128ac432dd75040e3.png?resize=2048x1621" alt="Project 1">
        <div class="overlay">
          <h3>Project 1</h3>
        </div>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/users/4922736/screenshots/16616884/media/1ecb62b11eb25fb32ef49874dc10f2ad.png?resize=1600x1200&vertical=center" alt="Project 2">
        <div class="overlay">
          <h3>Project 2</h3>
        </div>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/16683107/file/original-2e6291b2aa02e714d0ea6e74866e3815.jpg?resize=2048x1209" alt="Project 3">
        <div class="overlay">
          <h3>Project 3</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <h2>Contact Me</h2>
    <p>If you like what you see, let's get in touch!</p>
    <a href="email.php" class="btn">Send an Email</a>
  </section>

  <footer>
    <p>© 2024 My Cool Portfolio. All rights reserved.</p>
  </footer>
    </main>
    <?php require_once "footer.php"; ?>
</body>
</html>