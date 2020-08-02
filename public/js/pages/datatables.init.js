$(document).ready(function(){
    $("#datatable").DataTable();
    $("#datatable-buttons").DataTable({
        lengthChange:!1,
        buttons:["copy","excel","pdf","colvis"]
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
});


// $(document).ready(function(){
//     $("#datatable-buttons").DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: "{{ route('applicants.ajax.application') }}",
//         column: [
//             // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
//             {data: 'business_name', name: 'business_name'},
//             {data: 'applicant', name: 'applicant'},
//             {data: 'entity_type', name: 'entity_type'},
//             {data: 'business_type', name: 'business_type'},
//             {data: 'status', name: 'status'},
//             {data: 'comment', name: 'comment'},
//             {
//                 data: 'action',
//                 name: 'action',
//                 orderable: true,
//                 searchable: true
//             },
//         ]
//     })
//     // $("#datatable-buttons").DataTable({
//     //     lengthChange:!1,
//     //     buttons:["copy","excel","pdf","colvis"]
//     // }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
// });
