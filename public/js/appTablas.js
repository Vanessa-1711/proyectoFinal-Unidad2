$(document).ready(function() {
    $('#myTable').DataTable({
        searching: false, // Desactivar la función de búsqueda
        sDom: '<"top"f>t<"bottom"Bp>',
        buttons: [
            {
                extend: 'excel',
                className: 'dt-button buttons-excel',
                text: '<i class="fas fa-file-excel"></i>',
                titleAttr: 'Excel'
            },
            {
                extend: 'pdf',
                className: 'dt-button buttons-pdf',
                text: '<i class="fas fa-file-pdf"></i>',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                className: 'dt-button buttons-print',
                text: '<i class="fas fa-print"></i>',
                titleAttr: 'Imprimir'
            }
        ],
    });
});