$(document).on('click', "a[href*='#']", function(e) {
    e.preventDefault();

    let target = $($(this).attr('href'));

    $('html, body').animate({
        scrollTop: target.offset().top - parseInt((window.innerHeight - target.outerHeight()) / 2, 10)
    }, 300);
});
