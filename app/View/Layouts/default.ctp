<!DOCTYPE html>
<html lang="en" class="dfc">
<head>
  <?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5BBRV75');</script>
    <!-- End Google Tag Manager -->

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128220370-1');

      function gaEvent(eventStr) {
        gtag('event', eventStr);
      }
    </script>


  <?php } else { ?>
    <script>
      function gaEvent(eventStr) {
        console.log('ga: ' + eventStr);
      }
    </script>
  <?php } ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Design for Change - USA</title>
  <link rel="shortcut icon" type="image/x-icon" href="/dfcusa-web/app/webroot/img/favicon.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
  <link href="/dfcusa-web/app/webroot/css/lity.min.css" rel="stylesheet">
  <link href="/dfcusa-web/app/webroot/css/style.css?version=1.7" rel="stylesheet">
  <link href="/dfcusa-web/app/webroot/css/responsive.css?version=1.98" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
  
  <script src="/dfcusa-web/app/webroot/js/moment.js" type="text/javascript"></script>  
  <script src="/dfcusa-web/app/webroot/js/underscore-min.js" type="text/javascript"></script>
  <script src="/dfcusa-web/app/webroot/js/aos.js" type="text/javascript"></script>
  <script src="/dfcusa-web/app/webroot/js/lity.js" type="text/javascript"></script>
  <script src="/dfcusa-web/app/webroot/js/jquery.cookie.js" type="text/javascript"></script>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BBRV75"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php echo $this->element('header') ?>

<?php echo $this->fetch('content'); ?>

<?php echo $this->element('footer'); ?>

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
