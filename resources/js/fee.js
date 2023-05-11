$('select[name="origin_province"]').on('change', function () {
    let provinceID = $(this).val();

    // Condition to change the Cities Options from Blade according to the Province Chosen
    if (provinceID) {
        Jquery.ajax({
            url: '/api/province' + provinceID + '/cities',
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('select[name="origin_city"]').empty();
                $.each(data, function (key, value) {
                    $('select[name="origin_city"]').append('<option value="${key}">${value}</option>');
                })
            }
        })
    } else {
        // Empty City option if no Province chosen
        $('select[name="origin_city"]').empty();
    }
})