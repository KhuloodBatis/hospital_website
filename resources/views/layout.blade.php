<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

    <header>
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 text-sm">
                <div class="site-info">
                  <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                  <span class="divider">|</span>
                  <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                </div>
              </div>
              <div class="col-sm-4 text-right text-sm">
                <div class="social-mini-button">
                  <a href="#"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#"><span class="mai-logo-twitter"></span></a>
                  <a href="#"><span class="mai-logo-dribbble"></span></a>
                  <a href="#"><span class="mai-logo-instagram"></span></a>
                </div>
              </div>
            </div> <!-- .row -->
          </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
              </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="{{Request::path() === '/' ? 'nav-item active':'nav-item'}}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="{{Request::is('about') ? 'nav-item active':'nav-item '}}">
                  <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="{{Request::is('doctors') ? 'nav-item active':'nav-item'}}">
                  <a class="nav-link" href="/doctors">Doctors</a>
                </li>
                <li class="{{Request::is('articles') ? 'nav-item active':'nav-item '}}">
                  <a class="nav-link" href="/articles">Articles</a>
                </li>
                <li class="{{Request::is('contact') ? 'nav-item active':'nav-item'}}">
                  <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="{{Request::is('login') ? 'nav-item active':'nav-item'}}">
                    <a class="btn btn-primary ml-lg-3" href="/login">Login</a>
                  </li>
                  <li class="{{Request::is('register') ? 'nav-item active':'nav-item'}}">
                    <a class="btn btn-primary ml-lg-3" href="/register">Register</a>
                  </li>
              </ul>
            </div> <!-- .navbar-collapse -->
          </div> <!-- .container -->
        </nav>
      </header>

@yield('content')

<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>
</body>
</html>
