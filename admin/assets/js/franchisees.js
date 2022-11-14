$(document).ready(function () {
    $('#franchisees-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/franchisees-tbl.php'
        },
        "columns": [
            { "data": "id" },
            {
                "data": "name",
                render: function (data, type, row, meta) {
                    return ' <a href="edit-franchisees.php?id=' + row.id + '&location_id=' + row.location_id + '&type=' + row.type + '">' + data + '</a>';
                },
                className: "text-center"
            },
            {
                "data": "city",
                render: function (data, type, row, meta) {
                    return ' <a href="edit-franchisees.php?id=' + row.id + '&location_id=' + row.location_id + '&type=' + row.type + '">' + data + '</a>';
                },
                className: "text-center"
            },
            {
                "data": "id",
                "render": function (data) {
                    return '<a class = "btn btn-primary mx-1" data-toggle="tooltip" data-placement = "top" title="Edit Food" href="edit-franchisees.php?id=' + data + '"><i class="bi bi-pencil"></i></a>' +
                        '<a onclick="return confirm(\'Delete the franchisee permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete franchisee" href="database/delete-franchisees.php?id=' + data + '"><i class="bi bi-trash"></i></a>';
                },
                className: "text-center"
            },
        ],
        "columnDefs": [
            { "targets": 0, visible: false },
            { "targets": 1 },
            { "targets": 2 },
            { "targets": 3 },
        ],
        responsive: true,
    });
});