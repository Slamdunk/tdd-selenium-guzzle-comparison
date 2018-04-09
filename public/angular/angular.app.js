// Define the `phonecatApp` module
var phonecatApp = angular.module('phonecatApp', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
phonecatApp.controller('PhoneListController', function PhoneListController($scope) {
  $scope.phones = [
    {
      name: 'Nexus S',
      snippet: 'Made by Google'
    }, {
      name: 'iPhone 7',
      snippet: 'Made by Apple'
    }, {
      name: 'iPad',
      snippet: 'Made by Apple'
    }
  ];
});
