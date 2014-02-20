/*
 Author: PSD Booster
 Author URI: http://www.psdbooster.com/
 */


jQuery(document).ready(function($) {

    $( "#tabs" ).tabs({
        event: "mouseover"
    });

    $('#carousel').carouFredSel({
        items: 3,
        next: '.next',
        prev: '.prev',
        responsive: false,
        scroll : {
            items: 1,
            pauseOnHover: 'true'
        },
        auto : {
            play: true
        }
    });

    $('#s7').cycle({
        fx:    'scrollRight',
        delay: 1000,
        pager: '.pager'
    });

    $('#s1').cycle({
        fx:    'fade',
        delay: 2000
    });

    $('#top-menu').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: 110,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
    });

    $("header").sticky({topSpacing:0});

    $('.animated').appear();

    $(document.body).on('appear', '.slide', function() {
        $(this).each(function(){
            $(this).addClass('ae-animation-slide');
        });
    });

    var options = {
        target: '#form_result'
    };

    $("#subscribeForm").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(options);
        }
    });
						
});