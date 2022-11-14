$(document).ready(function () {
    $('#gallerys-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/gallerys-tbl.php'
        },
        "columns": [
            { "data": "id" },
            {
                "data": "title",
                render: function (data, type, row, meta) {
                    return ' <a href="edit-gallerys.php?id=' + row.id + '&location_id=' + row.location_id + '&type=' + row.type + '">' + data + '</a>';
                },
                className: "text-center"
            },
            {
                "data": "img_path",
                "render": function (data) {
                    return '<img src="' + data + '" alt="gallery-image" height="200" width="200">';
                },
            },
            {
                "data": "id",
                "render": function (data) {
                    return '<a class = "btn btn-primary mx-1" data-toggle="tooltip" data-placement = "top" title="Edit Food" href="edit-gallerys.php?id=' + data + '"><i class="bi bi-pencil"></i></a>' +
                        '<a onclick="return confirm(\'Delete the gallery permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete Destination" href="database/delete-gallerys.php?id=' + data + '"><i class="bi bi-trash"></i></a>';
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