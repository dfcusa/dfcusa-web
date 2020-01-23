<header>

    <div class="top-bar navbar navbar-expand-lg">
        <div id="notice-top-bar" class="navbar-collapse collapse">
            <div class="container-fluid justify-content-center">
                <div class="content">
                    Register your projects to be considered for the 2020 Be The Change Conference in São Paulo, Brazil!
                    <a href="https://designforchange.us/dfcusa-pm/projects#project/new/submit"
                       class="btn btn-primary btn-sm d-block d-lg-inline-block mt-2 mt-lg-0 text-uppercase" target="_parent">
                        Register My Projects
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg"
                     alt="Design for Change Logo"
                     class="img-fluid">
            </a>


            <button class="navbar-toggler ml-auto text-dark" type="button" data-toggle="collapse" data-target="#notice-top-bar"
                    aria-controls="notice-top-bar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-newspaper"></i>
            </button>

            <button class="navbar-toggler ml-1 text-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="https://designforchange.us/" target="_parent">Home</a>
                    </li>
                    <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'program') > -1) { ?>active<?php } ?>">
                        <a class="nav-link" href="https://designforchange.us/pages/program" target="_parent">How It Works</a>
                    </li>
                    <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) { ?>active<?php } ?>">
                        <a class="nav-link" href="https://designforchange.us/pages/get-started" target="_parent">Getting Started</a>
                    </li>
                    <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'stories') > -1) { ?>active<?php } ?>">
                        <a class="nav-link" href="https://designforchange.us/pages/stories" target="_parent">Real Stories</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://blog.designforchange.us/tag/blog/" target="_parent">What's New</a>
                    </li>
                    <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) { ?>active<?php } ?>">
                        <a class="nav-link" href="https://designforchange.us/pages/about-us" target="_parent">About Us</a>
                    </li>
                </ul>
                <div class="account-nav">
                    <a href="/dfcusa-pm/dashboard" class="web-portal">Your Dashboard</a>
                    <div class="dropdown-content">
                        <a href="https://designforchange.us/dfcusa-pm/dashboard" target="_parent">Sprints and Projects</a>
                        <a href="https://designforchange.us/dfcusa-pm/activities" target="_parent">Activities</a>
                        <a href="https://designforchange.us/dfcusa-pm/logout" target="_parent">Logout</a>
                    </div>
                </div>
                <ul class="navbar-nav login-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://designforchange.us/dfcusa-pm/login#register" target="_parent">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://designforchange.us/dfcusa-pm/login" target="_parent">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="donate-nav d-none">
  <a href="https://designforchange.us/pages/donate" target="_parent">Donate</a>
</div>

<section class="hero with-background-image" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png');">
    <div class="hero-container">
        <h4 class="heading"><?php if ($_GET['title'] != '') { echo $_GET['title']; } else {?>What's New<?php } ?></h4>
    </div>
</section>