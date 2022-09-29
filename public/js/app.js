$(document).ready(function () {
    $(document).ajaxStart(function () {
        $('.container').css('display', 'none');
        $("#loader").show();
    });

    $(document).ajaxStop(function () {
        $("#loader").hide();
        $('.container').css('display', 'block');
    });

    $('#timezone').select2({
        placeholder: "Select a timezone",
        allowClear: true,
    });

    $.ajax({
        url: base_path + 'get_timezones',
        dataType: 'json',
        success: function (response) {
            $.each(response, function (key, value) {
                $("#timezone").append('<option>' + value + '</option>');
            });

            $('#timezone').val(null).trigger('change');
        }
    });

    $('#timezone').on('select2:select', function (e) {
        getDateTime(this.options[e.target.selectedIndex].text);
    });
});

function getDateTime(timezone) {
    $.ajax({
        url: base_path + 'timezone',
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: {
            timezone: timezone,
        },
    }).done(function (data) {
        $('#timezone_id').html(data.timeZone);
        $('#time').text('Current time: ' + data.hour + ':' + data.minute + ':' + data.seconds + ' (IST)');
    });
}