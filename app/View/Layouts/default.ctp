<!DOCTYPE html>
<html lang="en" class="dfc">
<head>
  <?php echo $this->element('meta'); ?>

  <link rel="shortcut icon" type="image/x-icon" href="/dfcusa-web/app/webroot/img/favicon.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-TxKWSXbsweFt0o2WqfkfJRRNVaPdzXJ/YLqgStggBVRREXkwU7OKz+xXtqOU4u8+" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800|Josefin+Slab|Anton|BenchNine" rel="stylesheet">
  <link rel="stylesheet" href="/dfcusa-web/app/webroot/css/lity.min.css">
  <link rel="stylesheet" href="/dfcusa-web/app/webroot/css/modern/app.css?ref=v4.01">
  <link rel="stylesheet" href="/dfcusa-pm/app/webroot/css/dfcusa_podcast_portal.css?ref=v4.01">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
  
  <script src="/dfcusa-web/app/webroot/js/moment.js" type="text/javascript"></script>  
  <script src="/dfcusa-web/app/webroot/js/underscore-min.js" type="text/javascript"></script>
  <script src="/dfcusa-web/app/webroot/js/lity.js" type="text/javascript"></script>
  <script src="/dfcusa-web/app/webroot/js/jquery.cookie.js" type="text/javascript"></script>

  <?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0093/4090.js" async="async"></script>
  <?php } ?>
</head>

<body>

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

<?php echo $this->element('header') ?>

<?php echo $this->fetch('content'); ?>

<?php echo $this->element('footer'); ?>

<script>
  $( document ).ready(function() {
    $('.user-profile,.profile-nav-dropdown').hover(function() {
      $('.profile-nav-dropdown').show();
    }, function() {
      $('.profile-nav-dropdown').hide();
    });
  });
</script>
</body>
</html>
