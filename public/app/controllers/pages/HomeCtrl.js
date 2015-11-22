'use strict';

(function(){
    angular
        .module('uwics')
        .controller('HomeCtrl', ['$scope', '$log', HomeCtrl]);

    function HomeCtrl ($scope, $log) {
    	$log.log('here');
    }
}());
