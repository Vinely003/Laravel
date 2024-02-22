$('documen').ready(function () {
    $('#alert').slideDown().delay(3000).slideUp();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});