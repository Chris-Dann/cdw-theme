// MOBILE MENU CLICK HANDLER

jQuery('.hamburger-icon').on('click', function() {
    jQuery( '.ut_hamburger_menu_menu' ).fadeIn(200);
});

jQuery('.ut_hamburger_menu_menu__close_button--icon').on('click', function() {
    jQuery( '.ut_hamburger_menu_menu' ).fadeOut(200);
});