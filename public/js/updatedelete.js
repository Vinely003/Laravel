$(document).ready(function () {

    $('#table').on('click', '.text', function () {
        let td = $(this).closest('td');
        td.find('.text').hide();
        td.find('.input').val($(this).text()).show().focus();
        td.find('.updateBtn, .deleteBtn, .cancelBtn').show();
    });

    $('#table').on('click', '.deleteBtn', function (e) {
        e.stopPropagation();
        let cityId = $(this).data('cityid');
        let row = $(this).closest('td');
        $.ajax({
            url: '/delete/' + cityId,
            type: 'DELETE',
            dataType: 'json',
            success: function () {
                window.location.reload();
                row.remove();
            }
        });
    });

    $('#table').on('click', '.updateBtn', function (e) {
        e.stopPropagation();
        let cityId = $(this).data('cityid');
        let td = $(this).closest('td');
        // let text = td.find('.text');
        let input = td.find('.input');
        let cityData = {
            name: input.val(),
        };

        $.ajax({
            url: '/update/' + cityId,
            type: 'PUT',
            dataType: 'json',
            data: cityData,
            success: function () {
                window.location.reload();
                // text.text(input.val());
                // text.show();
                // td.find('.input, .updateBtn, .deleteBtn, .cancelBtn').hide();
            }
        });
    });

    $('#table').on('click', '.cancelBtn', function (e) {
        e.stopPropagation();
        let td = $(this).closest('td');
        td.find('.input, .updateBtn, .deleteBtn, .cancelBtn').hide();
        td.find('.text').show();
    });
});
