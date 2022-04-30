$(document).ready(function(){

    var listaEmpleados = $('#listaEmpleados').DataTable({
        responsive: false,
        "ajax":"/empleadosList",
        "columns":[
            {'defaultContent':''},
            {data:'name'},
            {data:'email'},
            {data:'position'},
            {data:'salary'},
            {'defaultContent' :'<center><button type="button" class="edit btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="far fa-file-alt"></i></button></center>'},
        ],
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        'language': {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",              
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
        
    });
    
    listaEmpleados.on('order.dt search.dt', function () {
        listaEmpleados.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
            listaEmpleados.cell(cell).invalidate('dom');
        });
    }).draw();
    
    $('#listaEmpleados tbody').on('click','button.edit', function(e){
        var registroEditar = listaEmpleados.row(($(this)).parents("tr")).data();
        var divs = ['name', 'email', 'address', 'position', 'salary', 'skills', 'phone'];
        for(var i=0; i<divs.length ; i++){
            $('#'+divs[i]).html(registroEditar[divs[i]]);
        }
    })
});