$(document).ready(function() {
    $.datepicker.setDefaults({
        dateFormat: 'yy/mm/dd'
    });
    $(function() {
        $("#from_date").datepicker();
        $("#to_date").datepicker();
    });
    $('#btn_filter').click(function() {
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        if (from_date != '' && to_date != '') {
            $.ajax({
                url: "filters.php",
                method: "POST",
                data: {
                    from_date: from_date,
                    to_date: to_date
                },
                success: function(data) {
                    $('#date_table').html(data);
                }
            });
        } else {
            alert("Please Select Date");
        }
    });
});