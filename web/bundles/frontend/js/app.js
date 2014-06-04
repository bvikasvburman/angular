'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', ['myApp.filters', 'myApp.services', 'myApp.directives', 'myApp.controllers']).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/view1', {templateUrl: '/angular/web/bundles/frontend/partials/partial1.html', controller: 'MyCtrl1'});
    $routeProvider.when('/view2', {templateUrl: '/angular/web/bundles/frontend/partials/partial2.html', controller: 'MyCtrl2'});
    $routeProvider.when('/view3', {templateUrl: '/angular/web/bundles/frontend/partials/partial3.html', controller: 'MyCtrl3'});
    $routeProvider.when('/view4', {templateUrl: '/angular/web/bundles/frontend/partials/partial4.html', controller: 'MyCtrl4'});
    $routeProvider.otherwise({redirectTo: '/view1'});
  }]);
