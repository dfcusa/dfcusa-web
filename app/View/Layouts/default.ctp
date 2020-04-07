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

    <script>(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
    0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
    for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
    MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
    mixpanel.init("9cb70e6fd7c843ba2b9f0a4de6c77646")</script>
  <?php } ?>
</head>

<body>

<?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
  <!-- Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66631957-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-66631957-1');

    function gaEvent(eventStr) {
      gtag('event', eventStr);
    }

    $(document).ready(function() {
      if (window.location.pathname != undefined) {
        mixpanel.track("View - " + window.location.pathname);
      }
    });
  </script>
<?php } else { ?>
  <script>
    function gaEvent(eventStr) {
      console.log('ga: ' + eventStr);
    }

    $(document).ready(function() {
      if (window.location.pathname != undefined) {
        console.log(window.location.pathname);
      }
    });
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
