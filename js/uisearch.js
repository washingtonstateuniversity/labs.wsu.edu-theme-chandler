(function($){
    var $search_field = $('.search-field');

    $('.sb-search').on('click', function() {
        $('.primary-search').toggle();
        $('.utility').toggleClass('search-open');
    });

    var placeholder = $search_field.attr('placeholder');

    $search_field.on('focus', function() { $(this).attr('placeholder',''); } );
    $search_field.on('blur', function() { $(this).attr('placeholder', placeholder ); } );
}(jQuery));
