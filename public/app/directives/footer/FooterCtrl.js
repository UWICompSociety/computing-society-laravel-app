'use strict';

(function(){

    angular
        .module('uwics')
        .controller('FooterCtrl', ['$log', FooterCtrl]);

    function FooterCtrl($log){
    	$log.log('in footer');
    	console.log('in foort');
    }
})();