<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/" target="_parent"><img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg" alt="img" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item show-only-mobile">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'program') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/program">How It Works</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/get-started">Getting Started</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'stories') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/stories">Real Stories</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'blog') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://blog.designforchange.us/tag/blog/">What's New</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/about-us">About Us</a>
          </li>
        </ul>
        <div class="account-menu my-projects-nav hide">
          <a href="/dfcusa-pm/dashboard" class="web-portal">Your Dashboard</a>
          <div class="dropdown-content">
            <a href="/dfcusa-pm/dashboard">Sprints and Projects</a>
            <a href="/dfcusa-pm/activities">Activities</a>
            <a href="/dfcusa-pm/logout">Logout</a>
          </div>
        </div>
        <div class="account-menu login-nav hide">
            <a href="/dfcusa-pm/login#register">Sign Up</a>
            <a href="/dfcusa-pm/login">Login</a>
          </div>
      </div>
    </nav>  	
  </div>
</header>

<div class="donate-nav hide-mobile hide">
  <a href="https://designforchange.us/pages/donate" target="_parent">Donate</a>
</div>

<section class="inner-hero just-title" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_workshops.png'); background-size: 100%; height: 175px; margin-bottom: 0px">
    <!-- <img src="/dfcusa-web/app/webroot/img/img_hedr_stories@2x.png" alt="img" class="img-fluid"> -->
  <div class="container">
    <h4 class="one-line" style="top: 35%"><span><?php if ($_GET['title'] == '') { echo 'Our Blog'; } else { echo $_GET['title']; } ?></span></h4>
  </div>
</section>