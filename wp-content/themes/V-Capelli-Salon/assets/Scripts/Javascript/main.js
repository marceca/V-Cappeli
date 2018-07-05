$(function(){
    $('#menu-main-navigation li a').click(function(){
        $('#menu-main-navigation li a').removeClass('active'); // remove the class from the currently selected
        $(this).addClass('active'); // add the class to the newly clicked link
    });
});

$(function() {
    var loc = window.location.href; // returns the full URL
    var is_root = location.pathname == "/";
    if(is_root) {
        let val = $('#menu-main-navigation li a').html()
        console.log(val)
        if(val === 'Home') {
            let x = $('#menu-main-navigation li a:contains("Home")')
            console.log(x)
        }
    }
    if(/the-salon/.test(loc)) {
        alert('the salon')
    }
    if(/services/.test(loc)) {
        alert('serve')
    }
    if(/gallery/.test(loc)) {
        alert('gallery')
    }
    if(/contact/.test(loc)) {
        alert('contact')
    }
});