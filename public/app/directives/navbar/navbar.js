'use strict';

(function(){
    angular
        .module('uwics')
        .directive('navbar', function(){
            return {
                restrict : 'AE',
                replace: true,
                templateUrl: 'app/templates/main/navbar.html',
                controller: 'NavbarCtrl'
            }
        });
})();