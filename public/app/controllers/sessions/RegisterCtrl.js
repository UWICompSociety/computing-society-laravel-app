'use strict';

(function(){
    angular
        .module('uwics')
        .controller('RegisterCtrl', ['$scope', '$log', RegisterCtrl]);

    function RegisterCtrl($scope, $log) {
    	$log.log('register here');
    }
}());
