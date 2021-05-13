$(document).ready(function() {

    $("[data-bs-toggle=popover]").popover();
    $('[data-bs-toggle="tooltip"]').tooltip();

    var wHeight = window.innerHeight;
    //search bar middle alignment
    $('#mk-fullscreen-searchform').css('top', wHeight / 2);
    //reform search bar
    $(window).resize(function() {
        wHeight = window.innerHeight;
        $('#mk-fullscreen-searchform').css('top', wHeight / 2);
    });
    // Search
    $('#search-button').click(function() {
        console.log("Open Search, Search Centered");
        $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
    });
    $("a.mk-fullscreen-close").click(function() {
        console.log("Closed Search");
        $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
    });
    
    $('#content-login').hide();

    $('#showlogin').click(function() {
        $('#content-register').fadeOut(600, function(){
            $('#content-login').fadeIn(600);
        });         
    });

    $('#showregister').click(function() {
        $('#content-login').fadeOut(600, function(){
            $('#content-register').fadeIn(600);
        });         
    });

    $('.eye').click(function() {
        $('.eye').toggleClass("slash");
        var password = $('.password');

        if(password.attr('type') === 'password'){
            password.attr('type', 'text');
        }else {
            password.attr('type', 'password');
        }
    });

    function credit_custom_template(obj){
        var data = $(obj.element).data();
        var text = $(obj.element).text();
        if(data && data['img_src']){
            img_src = data['img_src'];
            template = $("<div><img src=\"" + img_src + "\" style=\"width:40px;height:30px;\"/><p style=\"font-weight: 700;display:inline;margin-left:10px;\">" + text + "</p></div>");
            return template;
        }
    }

    var credit_options = {
            'templateSelection': credit_custom_template,
            'templateResult': credit_custom_template,
            // allowClear: true,
            theme: 'bootstrap4',
        }

    $('.payment').select2(credit_options);

    
    // $('.mpu_payment').select2();

    
    
});