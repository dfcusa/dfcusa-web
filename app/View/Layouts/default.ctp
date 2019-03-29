<!DOCTYPE html>
<html lang="en" class="dfc">
<head>

<?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128220370-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128220370-1');

    function gaEvent(eventStr) {
      console.log('ga: ' + eventStr);
      gtag('event', eventStr);
    }
  </script>
<?php } else { ?>
  <script>
    function gaEvent(eventStr) {

    }
  </script>
<?php } ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Design for Change - USA</title>
<link rel="shortcut icon" type="image/x-icon" href="/dfcusa-web/app/webroot/images/favicon.png">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
<link href="/dfcusa-web/app/webroot/css/lity.min.css" rel="stylesheet">
<link href="/dfcusa-web/app/webroot/css/style.css?version=1.2" rel="stylesheet">
<link href="/dfcusa-web/app/webroot/css/responsive.css?version=1.7" rel="stylesheet">
</head>

<body>

<?php echo $this->element('header') ?>

<?php echo $this->fetch('content'); ?>

<?php echo $this->element('footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="/dfcusa-web/app/webroot/js/aos.js"></script>
<script src="/dfcusa-web/app/webroot/js/lity.js"></script>
<script src="/dfcusa-web/app/webroot/js/jquery.cookie.js"></script>
<script>
  AOS.init();

  if ($.cookie('user')) {
  	$('.my-projects-nav').removeClass('hide');
  } else {
  	$('.login-nav').removeClass('hide');
  }
</script>
<script src="/dfcusa-web/app/webroot/js/main.js"></script>
</body>
</html>
