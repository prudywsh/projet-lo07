app.controller('InscriptionCtrl', function($scope, $http) {

    $scope.registerFormSubmit = function(isValid) {

        $scope.formData = {
            name: $scope.name,
            firstname: $scope.firstname,
            login: $scope.login,
            password: $scope.password,
            organisation: $scope.organisation,
            equipe: $scope.equipe
        };

        /*$http({
            method  : 'POST',
            url     : '',
            data    : $.param($scope.formData),
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
            .success(function(data) {

            });*/


    };

});
