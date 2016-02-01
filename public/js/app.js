/**
 * Created by anhpt on 29/01/2016.
 */
var app = angular.module('TestApp', []);
app.controller('TestController', function($scope, $http){
   $scope.members = [];
    $http.get('/getmembers')
        .then(function(data){
           $scope.members = data.data;
            console.log(data);
        });
});