// $(function () {
//     $(document).on('change', '#primary_category_id', function () {
//         //alert(123);
//         var primary_category_id = $(this).val();
//         $.ajax({
//             url: "{{route('get-secondary-category')}}",
//             type: "GET",
//             data: {primary_category_id: primary_category_id},
//             success: function (data) {
//                 var html = '<option value=""> Select Secondary Category </option>';
//                 $.each(data, function (key, v) {
//                     html += '<option value="' + v.secondary_category_id + '">' + v.products_to_secondary_category.name + '</option>';
//                 });
//                 $('#secondary_category_id').html(html);
//             }
//         });
//     });
// });
//
// $(function () {
//     $(document).on('change', '#secondary_category_id', function () {
//         //alert(123);
//         var secondary_category_id = $(this).val();
//         $.ajax({
//             url: "{{route('get-product')}}",
//             type: "GET",
//             data: {secondary_category_id: secondary_category_id},
//             success: function (data) {
//                 var html = '<option value=""> Select Secondary Category </option>';
//                 $.each(data, function (key, v) {
//                     html += '<option value="' + v.id + '">' + v.product_name + '</option>';
//                 });
//                 $('#product_id').html(html);
//             }
//         });
//     });
// });
