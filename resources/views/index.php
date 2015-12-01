<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="uwics" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="uwics" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="uwics" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="uwics" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AngularJs Web Starter Kit</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png"> -->

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <!-- <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"> -->

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <!-- <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png"> -->
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Page styles -->
    <link rel="stylesheet" href="styles/css/main.css">
    <link rel="stylesheet" href="styles/css/material.css">
  </head>
  <body>
    <header class="app-bar promote-layer">
      <div class="app-bar-container">
        <!-- <button class="menu"><img src="images/hamburger.svg" alt="Menu"></button> -->
        <h1 class="logo">Web <strong>Starter Kit</strong></h1>
        <section class="app-bar-actions">
        <!-- Put App Bar Buttons Here -->
        <!-- e.g <button><i class="icon icon-star"></i></button> -->
        </section>
      </div>
    </header>

    <nav class="navdrawer-container promote-layer">
      <h4>Navigation !</h4>
      <ul>
        <li><a ui-sref="home">Home</a></li>
        <li><a ui-sref="login">Login</a></li>
        <li><a ui-sref="register">Register</a></li>
      </ul>
    </nav>

    <main ui-view>
    </main>

    <footer>Angular seed app: v<span app-version></span></footer>

    <!-- build:js scripts/angular.min.js -->
     <!-- Project Dependencies -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script type="text/javascript" src="bower_components/angular-cookies/angular-cookies.min.js"></script>
    <script type="text/javascript" src="bower_components/angular-resource/angular-resource.min.js"></script>
    <script type="text/javascript" src="bower_components/satellizer/satellizer.min.js"></script>
    <script type="text/javascript" src="bower_components/markdown/lib/markdown.js"></script>
    <script type="text/javascript" src="bower_components/angular-resource/angular-resource.min.js"></script>
    <script type="text/javascript" src='bower_components/textAngular/dist/textAngular-rangy.min.js'></script>
    <script type="text/javascript" src='bower_components/textAngular/dist/textAngular-sanitize.min.js'></script>
    <script type="text/javascript" src='bower_components/textAngular/dist/textAngular.min.js'></script>

    <!-- endbuild -->

    <!-- build:js scripts/main.min.js -->
    <script src="scripts/js/main.js"></script>
    <script src="app/uwics.js"></script>
    <script src="app/controllers/pages/HomeCtrl.js"></script>
    <script src="app/controllers/sessions/LoginCtrl.js"></script>
    <script src="app/controllers/sessions/RegisterCtrl.js"></script>
    <script src="app/directives/footer/FooterCtrl.js"></script>
    <script src="app/directives/navbar/NavbarCtrl.js"></script>

    <script src="app/directives/footer/footer.js"></script>
    <script src="app/directives/navbar/navbar.js"></script>

    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
