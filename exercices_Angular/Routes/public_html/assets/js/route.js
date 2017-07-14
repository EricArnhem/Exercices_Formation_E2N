'use strict';
var appRoute = angular.module('appRoute', ['ngRoute']);
// Configuration de la route
appRoute.config(['$routeProvider', function ($routeProvider) {
        $routeProvider
                .when('/home', {
                    templateUrl: 'view/home.html',
                    controller: 'homeCtrl'
                })
                .when('/contact', {
                    templateUrl: 'view/contact.html',
                    controller: 'contactCtrl'
                })
                .otherwise({
                    redirectTo: '/home'
                });
    }]);

// Déclaration du contrôleur
var appRouteCtrl = angular.module('appRouteCtrl', []);
// Contrôleur de la page home
appRouteCtrl.controller('homeCtrl', ['$scope', function ($scope) {

    }]);
// Contrôleur de la page contact
appRouteCtrl.controller('contactCtrl', ['$scope', function ($scope) {

    }]);