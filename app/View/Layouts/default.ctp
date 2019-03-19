<!DOCTYPE html>
<html lang="en" class="dfc">
<head>

<!-- start Omniconvert.com code -->
<link rel="dns-prefetch" href="//app.omniconvert.com" />
<script type="text/javascript">window._mktz=window._mktz||[];</script>
<script src="//cdn.omniconvert.com/js/q7c0100.js"></script>
<!-- end Omniconvert.com code -->              
  
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-128220370-1', 'auto');

  ga('send', '<?php echo $page ?>');

  function gaEvent(eventStr) {
    console.log(eventStr);
    ga('send', eventStr);
  }
</script>

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
<link href="/dfcusa-web/app/webroot/css/style.css?version=ea" rel="stylesheet">
<link href="/dfcusa-web/app/webroot/css/responsive.css?version=ea" rel="stylesheet">
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
