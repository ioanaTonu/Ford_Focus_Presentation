<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/styles/style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="./src/images/favicon.png">
  <title>Ford Focus Home</title>
</head>

<body>
  <!-- HEADER -->
  <div>
    <ul>
      <li class="logo-item">
        <a href="index.php">
          <img src="./src/images/logo.png" alt="logo" width="260" height="52">
        </a>
      </li>

      <li><a href="index.php">Home</a></li>
      <li><a href="./src/pages/shop.php">Shop</a></li>
      <li><a href="./src/pages/review.php">Review</a></li>
      <li><a href="./src/pages/history.php">History</a></li>
      <li><a href="./src/pages/testdrive.php">TestDrive</a></li>
      <li><a href="./src/pages/contact.php">Contact</a></li>

      <li><a href="./src/pages/login.php">LogIn</a></li>
      <li><a href="./src/pages/signup.php">Register</a></li>
    </ul>
  </div>

  <!-- END HEADER -->
  <!-- MAIN -->
  <br>
  <h1 class="animated-text">
    Welcome to the world of Ford Focus fans!
  </h1>

  <section class="benefits-section container">
    <h2>Why Choose Ford Focus?</h2>
    <div class="benefit-cards">
      <div class="benefit-card">
        <h3>🔧 Easy Maintenance</h3>
        <p>Reliable engineering and widely available parts make Ford Focus affordable to maintain.</p>
      </div>
      <div class="benefit-card">
        <h3>⚡ Versatile Engines</h3>
        <p>Choose from efficient petrol, diesel, hybrid, or electric engines tailored to your driving style.</p>
      </div>
      <div class="benefit-card">
        <h3>🧠 Smart Technology</h3>
        <p>Stay connected with SYNC infotainment, driver-assist features, and advanced connectivity options.</p>
      </div>
      <div class="benefit-card">
        <h3>🛡️ Proven Safety</h3>
        <p>Top safety ratings and a suite of protective systems keep you and your passengers secure.</p>
      </div>
    </div>
  </section>

  <br> <br> <br> <br>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./src/images/oldFordFocus.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./src/images/mediumFordFocus.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./src/images/newFordFocus.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

<section class="benefits-section container">
  <h2>FAQ</h2>
  <div class="benefit-cards">
    <div class="benefit-card">
      <h3>❓ Is the Ford Focus fuel-efficient?</h3>
      <p>🚗 Yes, especially the EcoBoost models. They offer a great balance of power and fuel economy, making them ideal for both city and highway driving.</p>
    </div>
    <div class="benefit-card">
      <h3>❓ Is the Ford Focus a good car for beginners?</h3>
      <p>🚗 Absolutely! It's known for easy handling, reliable safety features, and affordable maintenance, making it great for new drivers.</p>
    </div>
    <div class="benefit-card">
      <h3>❓ What is the difference between Ford Focus and Focus C-Max?</h3>
      <p>🚗 The Focus C-Max is a compact MPV (multi-purpose vehicle) version of the Focus, offering more interior space and a higher driving position.</p>
    </div>
  </div>
</section>

  <!-- END MAIN -->
  <!-- FOOTER -->
  <div class="flex-container">
    <div class="text-content">
      <p> Created as part of a student project at <a href="https://ac.tuiasi.ro/" target="_blank">Faculty of Automatic
          Control and Computer Engineering</a> by Ioana - Alexandra Costîn and Sebastian Tonu. </p>
    </div>

    <div class="logo-wrapper">
      <img src="src/images/logo_simple.png" alt="logo" width="260" height="200">
    </div>

    <div class="text-content">
      <p><a href="https://www.linkedin.com/in/ioana-tonu-ba7244229/" target="_blank">🌐</a>LinkedIn Ioana</p>
      <p><a href="https://www.linkedin.com/in/sebastian-tonu-831a09145/" target="_blank">🌐</a>LinkedIn Sebastian</p>
    </div>
  </div>
  <!-- END FOOTER -->
</body>

</html>