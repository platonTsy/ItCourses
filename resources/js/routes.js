app.config(function ($routeProvider, $locationProvider) {
    $routeProvider

        .when('/',
        {
            controller: 'MainController',
            templateUrl: 'partials/main.php'
        })
        .when('/404',
        {
            controller: 'MainController',
            templateUrl: 'partials/404.html'
        })
        .when('/logo',
        {
            controller: 'MainController',
            templateUrl: 'partials/logo.html'
        })
        .otherwise({redirectTo: '/404'});
});