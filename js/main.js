(function ($) {

    "use strict";
    $(".carousel-inner .item:first-child").addClass("active");
    /* Mobile menu click then remove
    ==========================*/
    $(".mainmenu-area #mainmenu li a").on("click", function () {
        $(".navbar-collapse").removeClass("in");
    });
    /*WoW js Active
    =================*/
    new WOW().init({
        mobile: true,
    });
    /* Scroll to top
    ===================*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
   
    /*--------------------
       MAGNIFIC POPUP JS
       ----------------------*/
    var magnifPopup = function () {
        $('.work-popup').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function (openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    };
    // Call the functions 
    magnifPopup();

    //Background Parallax
    $('.header-area').parallax("50%", -0.4);
    $('.price-area').parallax("50%", -0.5);
    $('.testimonial-area').parallax("10%", -0.2);


    $('#accordion .panel-title a').prepend('<span></span>');


    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('.caption-slider'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    $myCarousel.carousel();

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });





    // Select all links with hashes
    $('.mainmenu-area a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


    $('.msg').hide();
    $("#section-register-btn").prop("disabled", true);
    $('.target1, .target2, .target3,.target4, .target5, .target6 , .target7').on('keyup', function() {
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        var email = $('.target6').val();
    if ($('.target1').val() == ''   ||
        $('.target2').val() == ''  ||
        $('.target3').val() == '' ||
        $('.target4').val() == '' ||
        $('.target5').val() == '' ||
        $('.target6').val() == '' ||
        $('.target7').val() == ''  ) {
            
        if($('.target6').val() != '' &&  !re.test(email)){
            $('.msg').show();
            $("#section-register-btn").prop("disabled", true);
        }
        else if(re.test(email)) {
            $('.msg').hide();
            $("#section-register-btn").prop("disabled", false);
        }
        else {
            $('.msg').hide();
            $("#section-register-btn").prop("disabled", true);
        }
    }
    else {
        if(re.test(email)) {
            $('.msg').hide();
            $("#section-register-btn").prop("disabled", false);
        }
        else {
        $('.msg').show();
        $("#section-register-btn").prop("disabled", true);
        }
    }
});

$('.popup-msg').hide();
$("#popup-register-btn").prop("disabled", true);
    $('.popup-input1, .popup-input2, .popup-input3,.popup-input4, .popup-input5, .popup-input6 , .popup-input7').on('keyup', function() {
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        var email = $('.popup-input6').val();
    if ($('.popup-input1').val() == ''   ||
        $('.popup-input2').val() == ''  ||
        $('.popup-input3').val() == '' ||
        $('.popup-input4').val() == '' ||
        $('.popup-input5').val() == '' ||
        $('.popup-input6').val() == '' ||
        $('.popup-input7').val() == '') {

            if($('.popup-input6').val() != '' &&  !re.test(email)){
                $('.popup-msg').show();
                $("#popup-register-btn").prop("disabled", true);
            }
            else if(re.test(email)) {
                $('.popup-msg').hide();
                $("#popup-register-btn").prop("disabled", false);
            }
            else {
                $('.popup-msg').hide();
                $("#popup-register-btn").prop("disabled", true);
            }
    }
    else {
        if(re.test(email)) {
            $('.popup-msg').hide();
            $("#popup-register-btn").prop("disabled", false);
        }
        else {
        $('.popup-msg').show();
        $("#popup-register-btn").prop("disabled", true);
        }
    }
});

$(".workshop-pay").prop("disabled", true);
$('#mathrix-id').on('keyup', function() {
   if ($('#mathrix-id').val() == '') {
    $(".workshop-pay").prop("disabled", true);
   }else {
    $(".workshop-pay").prop("disabled", false);
   }
});

    /* Preloader Js
    ===================*/
    $(document).ready(function () {
        setTimeout(function(){
            $('.preloader').fadeOut(500);
            // $('.sk-folding-cube').animate({top:"-100px",left:"-100px"},"2s");
        }, 5000);
    });
})(jQuery);