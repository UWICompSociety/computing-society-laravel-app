'use strict';

(function(){
    angular
        .module('uwics')
        .controller('LoginCtrl', ['$scope', '$log', LoginCtrl]);

    function LoginCtrl($scope, $log) {
    	$log.log('login here');
    }
}());
