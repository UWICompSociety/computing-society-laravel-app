'use strict';

(function(){
    angular
        .module('uwics')
        .controller('LoginCtrl', [LoginCtrl]);

    function LoginCtrl() {
    	$console.log('LoginCtrl here');
    }
}());
