$('#example2').DataTable({
    responsive: true,
    autoWidth: false,
    "order": [
        [0, "desc"]
    ],
    "language": {
        "lengthMenu": "Ver " +
            `<select class = "custom-select custom-select-sm form-control form-control-sm">
                        <option value = '5'>5</option>
                        <option value = '10'>10</option>
                        <option value = '25'>25</option>
                        <option value = '50'>50</option>
                        <option value = '-1'>All</option>
                      </select>` +
            " registros",
        "zeroRecords": "Ninguna coincidencia",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "Sin registros disponibles",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        'search': 'Buscar',
        'paginate': {
            'next': 'Siguiente',
            'previous': 'Anterior'
        }
    }
});