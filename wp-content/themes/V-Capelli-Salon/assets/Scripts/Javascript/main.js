//Add underline in nav according to page you are on
$(function() {
    var loc = window.location.href; // returns the full URL
    var is_root = location.pathname == "/";
    if(is_root) {
        let val = $('#menu-main-navigation li a').html()
        if(val === 'Home') {
            let x = $('#menu-main-navigation li a:contains("Home")')
            x.addClass('active')
        }
    }
    if(/services/.test(loc)) {
        let x = $('#menu-main-navigation li a:contains("Services")')
        x.addClass('active')
    }
    if(/the-salon/.test(loc)) {
        let x = $('#menu-main-navigation li a:contains("The Salon")')
        x.addClass('active')
    }
    if(/gallery/.test(loc)) {
        let x = $('#menu-main-navigation li a:contains("Gallery")')
        x.addClass('active')
    }
    if(/contact/.test(loc)) {
        let x = $('#menu-main-navigation li a:contains("Contact")')     
        x.addClass('active')
    }
});