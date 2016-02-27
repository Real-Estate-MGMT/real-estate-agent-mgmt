realEstate.controller('addCtrl', function ($scope, $http) {
    var that = this;
    $("#uploadImgs").fileinput({
        'showUpload':false,
        'previewFileType':'any',
        'showCaption': false,
        'showRemove': false,
        'browseClass': 'btn btn-o btn-default',
        'browseLabel': 'Buscar Imagenes',
        'accept': 'image/jpeg,image/png'
    });
});