angular.module('realestateApp.controllers')
    .controller('IndiceController', ['$scope',
        function ($scope, NoticiasService) {
            $("#fotos").fileinput();
            /*$scope.init = function() {
                console.debug('Indice');
                
                $scope.noticias = null;
                $scope.pagina = 1;
                obtenerNoticias();
            };

            var obtenerNoticias = function obtenerNoticias() {
                NoticiasService.noticias($scope.pagina, function(respuesta) {
                    if (respuesta.error) {
                        $scope.error = respuesta.message;
                    } else {
                        $scope.noticias = respuesta.data;
                        $scope.meta = respuesta.meta;
                    }
                }, function(respuesta) {
                    $scope.error = respuesta.message;
                });
            };

            $scope.avanzar = function avanzar() {
                $scope.pagina++;
                obtenerNoticias();
            };

            $scope.retroceder = function retroceder() {
                $scope.pagina--;
                obtenerNoticias();
            };

            $scope.init();*/
        }]);