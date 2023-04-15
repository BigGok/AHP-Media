
$(document).on('click', function(e) {
    // Get all dropdowns on the page
    var $dropdowns = $('.dropdown');
    // Check if the clicked element is not within a dropdown
    if (!$dropdowns.is(e.target) && $dropdowns.has(e.target).length === 0) {
        // Hide all visible dropdowns
        $('.dropdown-menu.show').removeClass('show');
    }
});

$('.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }
    var $subMenu = $(this).next('.dropdown-menu');
    $subMenu.toggleClass('show');
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass('show');
    });
    return false;
});