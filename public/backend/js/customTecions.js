$(document).ready(function () {
    $('#primary_category_id').on('change', function () {
        //alert(123);
        var categoryID = $(this).val();
        if (categoryID) {
            $.ajax({
                url: '/myform/ajax/'+categoryID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    let html = '';
                    data.forEach(function (element) {
                        html += `<option value="${element.id}">${element.name}</option>`;
                    });
                    $('#secondary_category_id').html(html);

                }
            });
        } else {

        }
    });
});









/*$('#primary_category_id').on('change',function (e) {
console.log(e);
var primary_category_id = e.target.value;
//ajax
    $.get('/ajax.subcat?primary_category_id'+primary_category_id,function (data) {
    //success
        $('#secondary_category_id').empty();
        $.each(data,function (index,secondary_category_idObj) {
            $('#secondary_category_id').append(
                '<option value="'+secondary_category_idObj.id+'">'+secondary_category_idObj.name+'</option>'
            );
        });
    });
});*/



