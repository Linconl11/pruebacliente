var tabla = $('#tablaclientes').dataTable({
    "aProcessing" : true,
    "aServerSide" : true,
    "ajax":{
        url:"controller/ClientesController.php?op=listar",
        type: "get",
        dataTYpe: "json",
        error: function(e){
            console.log(e.responseText);
        }
    }
});

$(document).on('click','#btnnuevocliente',function(){
    $('#clientemodal').modal('show');
    $('#titulomodal').html('Nuevo Registro');
})

function eliminar(id){
    swal.fire({
        title: 'eliminar',
        text: "Desea eliminar el registro?",
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result)=>{
        if(result.isConfirmed){
            $.post('controller/ClientesController.php?op=eliminar',{idcliente:id},function(data){

            })
            $('#tablaclientes').DataTable().ajax.reload();

            swal.fire(
                'Eliminado',
                'El registro se elimino correctamente',
                'success'
            )
        }
    })
}

/*
$(document).ready(function () {
    $('#tablaclientes').DataTable();
});*/