$(document).ready(function () {
    $('#membership-tbl.table').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "start": 0,
        "length": 10,
        "paging": true,
        "ajax": {
            url: './database/datatable/membership-tbl.php'
        },
        "columns": [
            { "data": "id" },
            {
                "data": "company_name",
                className: "text-center"
            },

            { "data": "address" },
            { "data": "select_option" },
            { "data": "partner_director" },
            { "data": "mobile" },
            { "data": "email" },
            { "data": "name_p_d" },
            { "data": "mobile_p_d" },
            { "data": "brands" },
            { "data": "date" },
            { "data": "division" },
            { "data": "other_state"},
            {   "data": "id",
                "render": function (data) {
                    return'<a onclick="return confirm(\'Delete the membership form permanently?\');" class = "btn btn-danger mx-1" data-toggle="tooltip" data-placement = "top" title="Delete Enquiry" href="database/delete-membership.php?id='+ data +'"><i class="bi bi-trash"></i></a>';
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