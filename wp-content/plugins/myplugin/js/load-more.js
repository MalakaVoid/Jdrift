jQuery(document).ready(function($) {
    $('#load_more').on('click', function() {
        var button = $(this);
        var page = button.data('page');
        var ajaxurl = button.data('url');

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: page
            },
            beforeSend: function() {
                button.attr('disabled', true);
                button.text('Загрузка...'); // Измените текст кнопки во время загрузки
            },
            success: function(response) {
                console.log(response);
                if (response.trim() != '') {
                    $('.related_post_container').append(response);
                    button.data('page', page + 1); // Увеличиваем номер страницы
                    button.text('Загрузить еще');
                    button.attr('disabled', false);
                } else {
                    button.remove(); // Удаляем кнопку, если посты закончились
                }
            },
            error: function() {
                button.text('Ошибка! Попробуйте еще раз.');
            }
        });
    });
});
