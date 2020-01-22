<div class="top-bar">
    Register your projects to be considered for the 2020 Be The Change Conference in São Paulo, Brazil!
    <a href="/dfcusa-pm/projects#project/new/submit" class="btn btn-primary btn-sm">Register My Projects</a>
</div>

<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/"><img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg" alt="img" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item d-md-none">
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
        <div class="account-nav">
          <a href="/dfcusa-pm/dashboard" class="web-portal">Your Dashboard</a>
          <div class="dropdown-content">
            <a href="/dfcusa-pm/dashboard">Sprints and Projects</a>
            <a href="/dfcusa-pm/activities">Activities</a>
            <a href="/dfcusa-pm/logout">Logout</a>
          </div>
        </div>
        <ul class="navbar-nav login-nav">
            <li class="nav-item">
                <a class="nav-link" href="/dfcusa-pm/login#register">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dfcusa-pm/login">Login</a>
            </li>
          </ul>
      </div>
    </nav>  	
  </div>
</header>

<div class="donate-nav d-none">
  <a href="/pages/donate">Donate</a>
</div>
