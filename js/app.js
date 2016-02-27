'use strict';

var realEstate = angular.module('realEstate', ['ngRoute'])

    .config(function($routeProvider){
        $routeProvider.when("/add",
            {
                templateUrl: "views/add.html",
                controller: "addCtrl",
                controllerAs: "add"
            }
        ).otherwise({
                redirectTo: '/add'
            });
    });