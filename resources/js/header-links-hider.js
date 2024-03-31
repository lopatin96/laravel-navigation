$(document).ready(function() {
    $('[data-header-link-id]').each(function (index, element) {
        if(! $('#' + $(element).data('header-link-id')).length ) {
            $(element).css('display', 'none');
        }
    });
});