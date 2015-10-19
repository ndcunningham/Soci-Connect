"use strict";

angular.module('app').directive('wwaChat',
    ['dataService',
    function (dataService) {
        return {
            templateUrl: 'app/widgets/wwaChat/wwaChatTemplate.html',
            link: function (scope, el, attrs) {
                scope.selectedLocation = null;
                dataService.getProgram(scope.item.widgetSettings.id)
                    .then(function (data) {
                        scope.selectedProgram = data;
                    });
            }
        };
    }]);