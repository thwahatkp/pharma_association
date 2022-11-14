$(document).ready(function () {
    $('#careers-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/careers-tbl.php'
        },
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "job_description" },
            { "data": "qualification" },
            { "data": "posted_on" },
            {   "data": "id",
                "render": function (data) {
                    return'<a onclick="return confirm(\'Delete the career form permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete Enquiry" href="database/delete-career.php?id='+ data +'"><i class="bi bi-trash"></i></a>';
                },
                className: "text-center"
            },
        ],
        "columnDefs": [
            { "targets": 0, visible: false },
            { "targets": 1 },
            { "targets": 2 },
            { "targets": 3 },
            { "targets": 5 },

        ],
        responsive: true,
    });
});