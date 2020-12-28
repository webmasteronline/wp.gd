// $(document).ready(function() {
//
//     $(document).on('click', '.js-filter-item a', function(e) {
//         e.preventDefault();
//         var category = $(this).data('category');
//
//         $.ajax({
//             url: myPlugin.ajaxurl,
//             data: {action: 'filter', category: category},
//             type: 'post',
//             success: function (responce) {
//                 $('js-filter').html(responce);
//             },
//             error: function (responce) {
//                 console.warn(responce);
//             }
//         });
//
//     });
//
// });
