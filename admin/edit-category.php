<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Multipage Blog Website</title>
  <!--CUSTOM STYLESHEET -->
  <link rel="stylesheet" href="./css/style.css" />
  <!--ICONSCOUNT CDN-->
  <link
    rel="stylesheet"
    href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <!--GOOLE FONT (MONTSERRAT)-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="container nav__container">
      <a href="index.php" class="nav_logo">EGATOR</a>
      <ul class="nav__items">
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Service</a></li>
        <li><a href="contract.php">Contract</a></li>
        <!-- <li><a href="signin.php">Signin</a></li> -->
        <li class="nav__profile">
          <div class="avatar">
            <img src="./images/avatar1.jpg" />
          </div>
          <ul>
            <li><a href="dashboard.php">Darhboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

      <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
      <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>
  <!--===================END OF NAV=====================-->

  <section class="form__section">
    <div class="container form__section-container">
      <h2>Edit Category</h2>
      <div class="alert__message error">
        <p>This is an error message</p>
      </div>
      <form action="">
        <input type="text" placeholder="Title" />
        <textarea rows="4" placeholder="Description"></textarea>
        <button type="submit" class="btn">Update Category</button>
      </form>
    </div>
  </section>

  <!--=================== END OF EDIT CATEGORY =====================-->

  <footer>
    <div class="footer__socials">
      <a href="https://youtube.com/" target="_blank"><i class="uil uil-youtube"></i></a>
      <a href="https://instagram.com/" target="_blank"><i class="uil uil-instagram-alt"></i></a>
      <a href="https://linkedin.com/" target="_blank"><i class="uil uil-linkedin"></i></a>
      <a href="https://twitter.com/" target="_blank"><i class="uil uil-twitter"></i></a>
      <a href="https://facebook.com/" target="_blank"><i class="uil uil-facebook"></i></a>
    </div>
    <div class="container footer__container">
      <article>
        <h4>Categories</h4>
        <ul>
          <li><a href="">Art</a></li>
          <li><a href="">Wild Life</a></li>
          <li><a href="">Travel</a></li>
          <li><a href="">Music</a></li>
          <li><a href="">Science & Technology</a></li>
          <li><a href="">Food</a></li>
        </ul>
      </article>
      <article>
        <h4>Support</h4>
        <ul>
          <li><a href="">Online Support</a></li>
          <li><a href="">Call Numbers</a></li>
          <li><a href="">Emails</a></li>
          <li><a href="">Social Support</a></li>
          <li><a href="">Location</a></li>
        </ul>
      </article>
      <article>
        <h4>Blog</h4>
        <ul>
          <li><a href="">Safety</a></li>
          <li><a href="">Repair</a></li>
          <li><a href="">Recent</a></li>
          <li><a href="">Popular</a></li>
          <li><a href="">Categories</a></li>
        </ul>
      </article>
      <article>
        <h4>Permalinks</h4>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Service</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </article>
    </div>
    <div class="footer__copyright">
      <small>Copyright &copy; 2024 EGATOR TUTORIALS</small>
    </div>
  </footer>
  <script src="main.js"></script>
</body>

</html>