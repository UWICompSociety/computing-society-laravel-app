'use strict';

(function(){
    angular
        .module('uwics')
        .directive('footer-main', function(){
            return {
                restrict : 'AE',
                replace: true,
                templateUrl: 'app/templates/main/footer.html',
                controller: 'FooterCtrl'
            }
        });
})();