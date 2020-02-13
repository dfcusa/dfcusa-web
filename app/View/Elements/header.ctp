<header>

    <div class="top-bar navbar navbar-expand-lg">
        <div id="notice-top-bar" class="navbar-collapse collapse">
            <div class="container-fluid justify-content-center">
                <div class="content">
                    Register your projects to be considered for the 2020 Be The Change Conference in São Paulo, Brazil!
                    <a target="_parent" href="/dfcusa-pm/projects#project/new/submit"
                       class="btn btn-primary btn-sm d-block d-lg-inline-block mt-2 mt-lg-0 text-uppercase">
                        Register My Projects
                    </a>
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
                <i class="far fa-newspaper"></i>
            </button>

            <button class="navbar-toggler ml-1 text-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'how-it-works') > -1) || (strpos($_GET['nav'], 'how-it-works') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/how-it-works" target="_parent">Methodology</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) || (strpos($_GET['nav'], 'get-started') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/get-started" target="_parent">Get Started</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'podcasts') > -1)  || (strpos($_GET['nav'], 'podcasts') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/dfcusa-pm/podcasts" target="_parent">Podcasts</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'stories') > -1) || (strpos($_GET['nav'], 'stories') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/stories" target="_parent">Real Stories</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'blog') > -1) || (strpos($_GET['nav'], 'blog') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="https://blog.designforchange.us/tag/blog/" target="_parent">What's New</a>
                    </li>
                    <li class="nav-item <?php if ((strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) || (strpos($_GET['nav'], 'about-us') > -1)) { ?>active<?php } ?>">
                        <a class="nav-link" href="/pages/about-us" target="_parent">About Us</a>
                    </li>
                </ul>

                <?php if ($_COOKIE['user']) { ?>
                    <ul class="navbar-nav login-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/dfcusa-pm/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <i class="fas fa-user-circle user-profile mt-1"></i>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav login-nav hide-mobile">
                        <li class="nav-item">
                            <a class="nav-link" href="/dfcusa-pm/login#register">Sign Up</a>
                        </li>
                        <li class="nav-item">
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
