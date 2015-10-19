"use strict";

angular.module('app').directive('wwaNotification',
    ['dataService',
    function (dataService) {
        return {
            templateUrl: 'app/widgets/wwaNotification/wwaNotificationTemplate.html',
            link: function (scope, el, attrs) {
                scope.isLoaded = false;
                scope.hasError = false;
                scope.selectedLocation = null;

                scope.loadProgram = function () {
                    scope.hasError = false;
                    dataService.getProgram(scope.item.widgetSettings.id)
                    .then(function (data) {
                        // success
                        scope.selectedProgram = data;
                        scope.isLoaded = true;
                        scope.hasError = false;
                    }, function (data) {
                        // error
                        scope.hasError = true;
                    });
                };

                scope.loadProgram();
            }
        };
}]);