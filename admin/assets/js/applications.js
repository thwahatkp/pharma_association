$(document).ready(function () {
    $('#applications-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/application-tbl.php'
        },
        "columns": [
            { "data": "id" },

            { "data": "title" },

            { "data": "name"},
           
            { "data": "phone" },
            { "data": "email" },
            { "data": "message" },

            {   "data": "img_path",
                "render": function (data) {
                    return'<a class = "btn btn-success mx-1" data-toggle="tooltip" data-placement = "top" title="Download Resume" download href="../'+ data +'"><i class="bi bi-download"></i></a>' +
                    '<a onclick="return confirm(\'Delete the application form permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete Application" href="database/delete-application.php?id='+ data +'"><i class="bi bi-trash"></i></a>';
                },
                className: "text-center"
            },
        ],
        "columnDefs": [
            { "targets": 0, visible: false },
            { "targets": 1 },
            { "targets": 2 },
            { "targets": 3 },
            { "targets": 4 },
            { "targets": 5 },
            { "targets": 6 },
        ],
        responsive: true,
    });
});