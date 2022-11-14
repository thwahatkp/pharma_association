$(document).ready(function () {
    $('#enquirys-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/enquirys-tbl.php'
        },
        "columns": [
            { "data": "id" },
            {
                "data": "name",
                render: function (data, type, row, meta) {
                    return ' <a href="edit-enquirys.php?id=' + row.id + '&location_id=' + row.location_id + '&type=' + row.type + '">' + data + '</a>';
                },
                className: "text-center"
            },
           
            { "data": "email" },
            { "data": "phone" },
            { "data": "message" },
            {   "data": "id",
                "render": function (data) {
                    return'<a onclick="return confirm(\'Delete the enquiry form permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete Enquiry" href="database/delete-enquirys.php?id='+ data +'"><i class="bi bi-trash"></i></a>';
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