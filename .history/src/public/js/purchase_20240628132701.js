$(() => {
    $('input[name=date]').change(() => {
        $('#date').text($('input[name=date]').val());
    });
    $('select[name=time]').change(() => {
        $('#time').text($('select[name=time]').val());
    });
    $('select[name=number]').change(() => {
        $('#number').text($('select[name=number]').val());
    });
});