/* CODIGO GARBAGE */





/*

//para auto enfocar un input 

  $scope.focusInput =true;

  */



/*intento 1, recuperar parametro de URL: login y llamar a php que consulta los datos de ese usuario



.controller('ctrlUser', ['$scope', '$http', '$location', function($scope, $http, $location) {

  alert('Hola');

	////*debugger;

	console.log('estoy en el controlador -user-');

	$scope.saludo = "Saludo desde el ctrl -user-";



 /*ejemplo para copiar datos

    $scope.master = {nombre:"John", login:"Doe@gmail.com"};

    $scope.reset = function() {

        $scope.user = angular.copy($scope.master);

    };

    $scope.reset();

 //fin del ejemplo



//recuperar params

    var param1 = $location.search().param1; //Get parameter from URL

    console.log('param de URL: ' + param1);

    $scope.param = param1;

//TODO.activar

	//devuelve lista de user en formato json

   $http.get("./user/get_user.php")

   .then(function (response) {$scope.users = response.data.records;});

   //TODO: gestionar error

  }]



);

*/