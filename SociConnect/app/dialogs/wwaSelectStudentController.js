"use strict";

angular.module('app').controller('wwaSelectStudentController',
    ['$scope', 'dataService',
    function ($scope, dataService) {
        $scope.isLoaded = false;
        dataService.getStudents().then(function (data) {
            $scope.students = data;
            $scope.isLoaded = true;

            for (var i = 0; i < data.length; i++) {
                if (data[i].id == $scope.item.widgetSettings.id)
                    $scope.selectedStudent = data[i];
            }
        });

        $scope.saveSettings = function () {
            $scope.item.widgetSettings.id = $scope.selectedStudent.id;
            $scope.$parent.selectedStudent= $scope.selectedStudent;
            $scope.$close();
        };
    }]);