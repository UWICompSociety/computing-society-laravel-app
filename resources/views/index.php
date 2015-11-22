<!DOCTYPE html>
<html ng-app="uwics">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    
        <title>UWI MONA CS</title>
        
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="/styles/css/material.css"/>
        <link rel="stylesheet" href="/styles/css/main.css"/>


        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/angular/angular.min.js"></script>
        <script src="/bower_components/satellizer/satellizer.min.js"></script>
        
        <script src="/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>

        <script src="/app/uwics.js"></script>

        <script src="/app/controllers/pages/HomeCtrl.js"></script>
        <script src="/app/controllers/sessions/LoginCtrl.js"></script>
        <script src="/app/controllers/sessions/RegisterCtrl.js"></script>
        <script src="/app/directives/footer/FooterCtrl.js"></script>

        <script src="/app/directives/footer/footer.js"></script>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" >
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
                <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                </div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                    <h3>Computing Society</h3>
                </div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                </div>
                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                    <a href="#overview" class="mdl-layout__tab is-active">Home</a>
                    <a href="#features" class="mdl-layout__tab">Events</a>
                    <a href="#features" class="mdl-layout__tab">Profile</a>
                    <a href="/register" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
                        <i class="material-icons" role="presentation">add</i>
                        <span class="visuallyhidden">Add</span>
                    </a>
                </div>
            </header>
            <main class="mdl-layout__content">
            

                <div ui-veiw></div>

                <footer-main></footer-main>                
            </main>
        </div>


        <!-- socket library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
        
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
        

        <!-- <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script> -->


    </body>
</html>
