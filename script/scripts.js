$( function() {
    $( "#dob" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100: +0",
        dateFormat: "yy-mm-dd"
    });                
} );

$(document).ready( function () {
    $('#customer-list').DataTable();
} );
