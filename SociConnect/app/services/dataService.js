"use strict";

angular.module('app').factory('dataService',
    ['$timeout',
    function ($timeout) {

    var programs = [
        {
            id: 1000,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
           id: 1004,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
            id: 1004,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
            id: 1005,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
            id: 1006,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
         id: 1007,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
           id: 1008,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        },
        {
          id: 1009,
            name: 'Enterprise sw Dev',
            duration: 12,
            credits: 13,
            coop: 18,
            semesters: 200,
            image: 'river1.png'
        }
    ];

    var students = [
        {
            id: 01137282,
            name: 'Saurabh Sharma',
            location: 'NorthCampus',
            image: 'employee-andy.png'
        },
        {
          id: 01137282,
            name: 'Saurabh Sharma',
            location: 'NorthCampus',
            image: 'employee-andy.png'
        },
        {
          id: 01137282,
            name: 'Saurabh Sharma',
            location: 'NorthCampus',
            image: 'employee-andy.png'
        }
    ];

    var getPrograms = function () {
        return $timeout(function () {
            return programs;
        }, 500);
    };

    var getProgram = function (id) {
        var timeout = $timeout(function () {
            //$timeout.cancel(timeout);
            //return undefined;
            for (var i = 0; i < programs.length; i++)
                if (programs[i].id == id)
                    return programs[i];
            return undefined;
        }, 300);

        return timeout;
    };

    var getStudents = function () {
        return $timeout(function () {
            return students;
        }, 500);
    };

    var getStudent = function (id) {
        return $timeout(function () {
            for (var i = 0; i < students.length; i++)
                if (students[i].id == id)
                    return students[i];
            return undefined;
        }, 300);
    };


    return {
        getPrograms: getPrograms,
        getProgram: getProgram,
        getStudents: getStudents,
        getStudent: getStudent
    };
}]);