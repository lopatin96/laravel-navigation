document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-header-link-id]').forEach(function(element) {
        if (!document.getElementById(element.dataset.headerLinkId)) {
            element.style.display = 'none';
        }
    });
});
