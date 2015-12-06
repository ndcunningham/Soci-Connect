"use strict";

angular.module('app').directive('wwaDashboard', ['$localStorage',
    function ($localStorage) {
    return {
        scope: {
        },
        template: '<ps-dashboard></ps-dashboard><iframe src="inbox/inbox.php" height="100%" width="100%"/>',
        link: function (scope) {

            scope.title = 'Workspace';

            scope.gridsterOpts = {
                columns: 12,
                margins: [20, 20],
                outerMargin: false,
                pushing: true,
                floating: false,
                swapping: false
            };

            scope.widgetDefinitions = [
                {
                    title: 'Notifications',
                    settings: {
                        sizeX: 3,
                        sizeY: 3,
                        minSizeX: 2,
                        minSizeY: 2,
                        template: '<wwa-notification></wwa-notification>',
                        widgetSettings: {
                            id: 1000,
                            templateUrl: 'app/dialogs/wwaSelectProgramTemplate.html',
                            controller: 'wwaSelectProgramController'
                        }
                    }
                },
                {
                    title: 'Chat',
                    settings: {
                        sizeX: 5,
                        sizeY: 3,
                        minSizeX: 2,
                        minSizeY: 2,
                        template: '<wwa-chat></wwa-chat>',
                        widgetSettings: {
                            id: 1002,
                            templateUrl: 'app/dialogs/wwaSelectProgramTemplate.html',
                            controller: 'wwaSelectProgramController'
                        }
                    }
                },
                {
                    title: 'Student',
                    settings: {
                        sizeX: 5,
                        sizeY: 3,
                        minSizeX: 2,
                        minSizeY: 2,
                        template: '<wwa-student></wwa-student>',
                        widgetSettings: {
                            id: 5000,
                            templateUrl: 'app/dialogs/wwaSelectStudentTemplate.html',
                            controller: 'wwaSelectStudentController'
                        }
                    }
                }
            ];

            scope.widgets = $localStorage.widgets || [
                
            ];

            scope.$watch('widgets', function () {
                $localStorage.widgets = scope.widgets;
            }, true);
        }
    }
}]);