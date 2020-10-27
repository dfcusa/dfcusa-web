<header class="page-header">

    <div class="top-bar navbar navbar-expand-lg">
        <div id="notice-top-bar" class="navbar-collapse collapse">
            <div class="container-fluid justify-content-center">
                <div class="content">
                    Looking for a quick way to create change, check out our resources to <a href="http://www.dogoodfromhome.com" style="color: inherit; text-decoration: underline">#DoGoodFromHome</a>.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a target="_parent" class="navbar-brand" href="/">
                <img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg"
                     alt="Design for Change Logo"
                     class="img-fluid">
            </a>

            <button class="navbar-toggler ml-auto text-dark" type="button" data-toggle="collapse" data-target="#notice-top-bar"
                    aria-controls="notice-top-bar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bell"></i>
            </button>

            <button class="navbar-toggler ml-1 text-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>homepage<?php } ?> <?php if ((strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) || (strpos($_SERVER['REQUEST_URI'], 'how-it-works') > -1) || (strpos($_SERVER['REQUEST_URI'], 'podcasts') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link dropdown-toggle" data-toggle="get-started" href="/pages/how-it-works" target="_parent">Our Program</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="/pages/how-it-works" target="_parent">How It Works</a>
                          <a class="dropdown-item" href="/pages/get-started" target="_parent">Getting Started</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>homepage<?php } ?> <?php if ((strpos($_SERVER['REQUEST_URI'], 'courses') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link dropdown-toggle" data-toggle="courses" href="#" target="_parent">Themes</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" target="_parent"><i>Choose a theme...</i></a>
                          <a class="dropdown-item" href="/pages/courses/racial-justice" target="_parent" style="padding-left: 35px">Racial Justice</a>
                          <a class="dropdown-item" href="/pages/courses/educational-equity" target="_parent" style="padding-left: 35px">Educational Equity</a>
                          <a class="dropdown-item" href="/pages/courses/climate-action" target="_parent" style="padding-left: 35px">Climate Action</a>
                          <a class="dropdown-item" href="/pages/courses/custom-course" target="_parent">Explore others...</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>homepage<?php } ?><?php if ((strpos($_SERVER['REQUEST_URI'], 'stories') > -1) || (strpos($_GET['nav'], 'stories') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/stories" target="_parent">Our Impact</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>homepage<?php } ?> hide <?php if ($_GET['title'] != '') { ?>active<?php } ?>">
                        <a class="nav-link" href="https://blog.designforchange.us/tag/blog/" target="_parent">What's New</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>homepage<?php } ?> <?php if ((strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) || (strpos($_GET['nav'], 'about-us') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/about-us" target="_parent">About Us</a>
                    </li>
                </ul>

                <?php if ($_COOKIE['user']) { ?>
                    <ul class="navbar-nav login-nav mt-1">
                        <li class="nav-item short">
                          <a class="nav-link" href="/dfcusa-pm/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item profile-nav short">
                          <i class="fas fa-user-circle user-profile mt-1" style="color: #fff"></i>
                          <div class="profile-nav-dropdown border pl-2 pr-2 pb-1 pt-1 bg-light shadow-sm">
                            <a href="/dfcusa-pm/dashboard">Dashboard</a>
                            <a href="/dfcusa-pm/logout">Logout</a>
                          </div>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav login-nav hide-mobile">
                        <li class="nav-item short">
                            <a class="nav-link" href="/dfcusa-pm/login#register">Sign Up</a>
                        </li>
                        <li class="nav-item short">
                            <a class="nav-link" href="/dfcusa-pm/login">Login</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </nav>
    </div>
</header>

<div class="donate-nav d-none">
  <a href="/pages/donate">Donate</a>
</div>

<?php if ($_GET['title'] != '') { ?>

  <section class="hero with-background-image" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png'); margin-bottom: 0em">
      <div class="hero-container">
          <h4 class="heading"><?php if ($_GET['title'] != '') { echo $_GET['title']; } else {?>What's New<?php } ?></h4>
      </div>
  </section>

<?php } ?>

<script type="text/javascript">
  $( document ).ready(function() {
    $('.dropdown').hover(function() {
      $(this).find('.dropdown-menu').show();
    }, function() {
      $(this).find('.dropdown-menu').hide();
    });
  });
</script>