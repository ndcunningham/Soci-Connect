"use strict";

angular.module('app').directive('wwaStudent',
    ['dataService',
    function (dataService) {
        return {
            templateUrl: 'app/widgets/wwaStudent/wwaStudentTemplate.html',
            link: function (scope, el, attrs) {
                scope.selectedEmployee = null;
                dataService.getStudent(scope.item.widgetSettings.id)
                    .then(function (data) {
                        scope.selectedStudent = data;
                    });
            }
        };
    }]);