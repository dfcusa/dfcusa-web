<div style="width: 100%; background-color: #4dc310; color: #fff; font-size: 15pt; font-weight: bold; position: relative; text-align: center; padding: 15px">The project submission deadline is May 15, 2019. Ready to submit your project?&nbsp;&nbsp;&nbsp;<a href="/dfcusa-pm/projects#project/new/submit" class="btn btn-primary">Submit Now</a></div>

<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg" alt="img" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'program') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/program">How It Works</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'stories') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/stories">Real Stories</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/get-started">Get Started</a>
          </li>
          <li class="nav-item hide-mobile <?php if (strpos($_SERVER['REQUEST_URI'], 'dfcusa-pm') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/dfcusa-pm/sprints">Project Ideas</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/about-us">About Us</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'contact') > -1) { ?>active<?php } ?> hide">
            <a class="nav-link" href="/pages/contact-us">Contact</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'blog') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://blog.designforchange.us">Blog</a>
          </li>
        </ul>
        <div class="account-menu my-projects-nav hide">
          <a href="/dfcusa-pm/projects" class="web-portal">Your Dashboard</a>
          <div class="dropdown-content">
            <a href="/dfcusa-pm/projects">Sprints and Projects</a>
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

<div class="donate-nav">
  <a href="/pages/donate">Donate</a>
</div>
