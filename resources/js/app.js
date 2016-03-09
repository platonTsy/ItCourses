var app = angular.module('app', ['ngCookies', 'ngRoute', 'readMore']);
app.run(['$route', '$rootScope', '$location', function ($route, $rootScope, $location) {
    var original = $location.path;


    $location.pathNotReload = function (path, reload) {
        if (reload === false) {
            var lastRoute = $route.current;
            var un = $rootScope.$on('$locationChangeSuccess', function () {
                $route.current = lastRoute;
                un();
            });
        }
        return original.apply($location, [path])
    };

    $location.path = function (path) {
        return original.apply($location, [path])
    }
}]);
app.filter('unsafe', function ($sce) {
    return function (val) {
        return $sce.trustAsHtml(val);
    };

});

app.filter('trusted', ['$sce', function ($sce) {
    return function (url) {
        return $sce.trustAsResourceUrl(url);
    };
}]);


