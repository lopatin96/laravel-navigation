document.addEventListener('click', function(event) {
    if (event.target.tagName === 'A' && event.target.getAttribute('href') && event.target.getAttribute('href').startsWith('#')) {
        event.preventDefault();

        let target = document.querySelector(event.target.getAttribute('href'));
        let windowHeight = window.innerHeight;
        let targetOuterHeight = target.offsetHeight;
        let scrollOffset = parseInt((windowHeight - targetOuterHeight) / 2, 10);

        window.scrollTo({
            top: target.offsetTop - scrollOffset,
            behavior: 'smooth',
        });
    }
});