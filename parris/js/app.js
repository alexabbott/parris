// declare a module
var app = angular.module('parrisApp', []);

// configure the module.
// in this example we will create a greeting filter
app.controller('MainController', ['$http', '$scope', '$timeout', function($http, $scope, $timeout) {

    if (window.innerWidth < 480 || screen.width < 480) {
        angular.element(document.querySelector('.left .music img')).addClass('pulse');
        angular.element(document.querySelector('.left .videos img')).addClass('tada');
        angular.element(document.querySelector('.left .photos img')).addClass('jello');
        angular.element(document.querySelector('.right .tour img')).addClass('shake');
        angular.element(document.querySelector('.right .shop img')).addClass('swing');
        angular.element(document.querySelector('.right .mail img')).addClass('wobble');

    //     var navItems = [
    //         document.querySelector('.left .music img'),
    //         document.querySelector('.left .videos img'),
    //         document.querySelector('.left .photos img'),
    //         document.querySelector('.right .tour img'),
    //         document.querySelector('.right .shop img'),
    //         document.querySelector('.right .mail img'),
    //         document.querySelector('.subscribe a img')
    //     ];
    //     for (var i = 0; i < navItems.length; i++) {
    //         getGif(navItems[i]);
    //     }
    }
    function getGif(img) {
        var gif = angular.element(img).attr('src').replace('_still.png','.gif');
        angular.element(img).attr('src', gif);
    }
    $scope.scrollNavDown = function() {
        var nav = document.querySelector('nav');
        $timeout(function() {
            nav.scrollTop = nav.scrollHeight;
        });
    }
    // getGif(document.querySelector('.subscribe a img'));

    if (document.querySelectorAll('.videos')) {
        $scope.videoCount = document.querySelectorAll('.video').length;
    }

    if (document.querySelectorAll('.songs-container')) {
        $scope.songCount = document.querySelectorAll('.song').length;
    }

    if (document.querySelector('.main-logo')) {
        setTimeout(function() {
            window.onload = angular.element(document.querySelector('.main-logo')).removeClass('hide');
        },1000);
    }
}]);

app.directive('videos', function() {
	return function(scope, element, attrs) {
    scope.url = document.querySelector('.video-player iframe').getAttribute('src');
    console.log(scope.url);
  };
});

app.directive('songs', function() {
	return function(scope, element, attrs) {
    scope.musicUrl = document.querySelector('.song-player iframe').getAttribute('src');
    console.log(scope.musicUrl);
  };
});

app.directive('showGif', ['$window', function($window) {
	return function(scope, element, attrs) {

    if ($window.innerWidth > 480) {
        angular.element(element[0]).on('mouseenter', function(){
            if (angular.element(element[0]).hasClass('music1')) {
                angular.element(element[0]).addClass('pulse');
            }
            if (angular.element(element[0]).hasClass('videos1')) {
                angular.element(element[0]).addClass('tada');
            }
            if (angular.element(element[0]).hasClass('blog1')) {
                angular.element(element[0]).addClass('jello');
            }
            if (angular.element(element[0]).hasClass('tour1')) {
                angular.element(element[0]).addClass('shake');
            }
            if (angular.element(element[0]).hasClass('shop1')) {
                angular.element(element[0]).addClass('swing');
            }
            if (angular.element(element[0]).hasClass('mail1')) {
            	angular.element(element[0]).addClass('wobble');
            }
            // var gif = angular.element(element[0]).attr('src').replace('_still.png','.gif');
        	// angular.element(element[0]).attr('src', gif);
        });
        angular.element(element[0]).on('mouseleave', function(){                
            angular.element(element[0]).removeClass('pulse');
            angular.element(element[0]).removeClass('tada');
            angular.element(element[0]).removeClass('jello');
            angular.element(element[0]).removeClass('shake');
            angular.element(element[0]).removeClass('swing');
            angular.element(element[0]).removeClass('wobble');
        	// var still = angular.element(element[0]).attr('src').replace('.gif','_still.png');
        	// angular.element(element[0]).attr('src', still);
        });
    }
  };
}]);