$(document).ready(function(){
    $(".btnEliminar").on('click', function(event){
        $boton= $(this);
        $id=$boton.attr('id-producto');

        var r = confirm("Seguro que desea borrar?");

        if(r==true){
            window.location.href="index.php?a=borrado&id="+$id;
            console.log($id);
        }
    })
})