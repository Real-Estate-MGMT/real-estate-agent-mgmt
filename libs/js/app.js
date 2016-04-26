angular.module('realestateApp', [
        'ngAnimate',
        'ngRoute',
        'ngMessages',
        'realestateApp.controllers',
        'realestateApp.directives',
        'realestateApp.filters',
        'realestateApp.services'
    ])
    
    .config(function($routeProvider) {
        $routeProvider
            .when('/', {
                controller: 'IndiceController',
                templateUrl: 'views/add.html'
            })
            .when('/detalle/:id', {
                controller: 'DetalleController',
                templateUrl: 'front-end/partials/detalle.html'
            })
            .when('/formulario/:id?', {
                controller: 'FormularioController',
                templateUrl: 'front-end/partials/formulario.html'
            })
            .otherwise({
                redirectTo: '/'
            })
    });

angular.module('realestateApp.controllers', []);
angular.module('realestateApp.services', []);
angular.module('realestateApp.directives', []);
angular.module('realestateApp.filters', []);