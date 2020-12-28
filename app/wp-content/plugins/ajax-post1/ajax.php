<?php

$('body').on('click', '.filter_div li a', function(e) {
    e.preventDefault();
    var idCat = $(this).attr('id');
    var mayThis = $(this);
    var data = {
        'action': 'load_posts_by_ajax',
            'catname': idCat
        };
        $.post(myPlugin.ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $("#row_append").empty() // #row_append ID секция постов
                $('#row_append').append(response);
                $(mayThis).addClass('active');
                $('.filter_div li a').not(mayThis).removeClass('active');
            }
        });
    });
