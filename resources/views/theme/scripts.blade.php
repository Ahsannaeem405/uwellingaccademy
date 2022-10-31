<script src="{{ url('js/jquery-2.min.js') }}"></script> <!-- jquery library js -->
<script src="{{ url('js/colorbox.js') }}"></script> <!-- colorbox js -->
<script src="{{ url('js/bootstrap.bundle.js') }}"></script> <!-- bootstrap js -->
<script src="{{ url('vendor/counter/waypoints.min.js') }}"></script>
<!-- facts count js required for jquery.counterup.js file -->
<script src="{{ url('vendor/counter/jquery.counterup.js') }}"></script> <!-- facts count js-->
<?php
$language = Session::get('changed_language'); //or 'english' //set the system language
$rtl = array('ar','he','ur', 'arc', 'az', 'dv', 'ku'); //make a list of rtl languages
?>
@if (in_array($language,$rtl))
<script src="{{ url('vendor/owl/js/owl.carouselrtl.min.js') }}"></script> <!-- owl carousel js -->
@else
<script src="{{ url('vendor/owl/js/owl.carousel.min.js') }}"></script> <!-- owl carousel js -->
@endif
<script src="{{ url('vendor/smoothscroll/smooth-scroll.js') }}"></script> <!-- smooth scroll js -->
<script src="{{ url('vendor/popup/jquery.magnific-popup.min.js')}}"></script> <!-- popup js-->
<script src="{{ url('vendor/navigation/menumaker.js') }}"></script> <!-- navigation js-->
<script src="{{ url('vendor/mailchimp/jquery.ajaxchimp.js') }}"></script> <!-- mail chimp js -->
<script src="{{ url('vendor/protip/protip.js') }}"></script> <!-- protip js -->
<script src="{{ url('js/theme.js') }}"></script> <!-- custom js -->
<script src="{{ url('js/FWDUVPlayer.js') }}"></script> <!-- player js -->
<script src="{{ url('js/jquery.owl-filter.js') }}"></script> <!-- filter js -->
<script src="{{ url('js/fontawesome-iconpicker.js')}}"></script><!-- iconpicker js -->
<script src="{{ url('js/tinymce.min.js')}}"></script>
<script src="{{ url('js/protip.js') }}"></script> <!-- protip js -->
<script src="{{ url('js/select2.min.js') }}"></script> <!-- select2 -->
<script src="{{ URL::asset('js/pace.min.js') }}"></script>
<!-- -------------- -->
<script src="{{ URL::asset('js/particles.js') }}"></script>
<script src="{{ URL::asset('js/app-two.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js') }}"></script>

<!-- --------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- --------------- -->

@if($gsetting->rightclick=='1')
<script>
(function($) {
    "use strict";
    $(function() {
        $(document).on("contextmenu", function(e) {
            return false;
        });
    });
})(jQuery);
</script>
@endif
@if($gsetting->inspect=='1')
<script>
(function($) {
    "use strict";
    document.onkeydown = function(e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }
})(jQuery);
</script>
@endif

<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('{{ url('
                sw.js ') }}')
            .then((reg) => {
                console.log('Service worker registered.', reg);
            });
    });
}
</script>
















<script>
/*========== Add Class active To navigation search Form  ==========*/
$(" .nav-search .search-btn a").on("click", function(e) {
    e.preventDefault();
    $(".navigation-form").toggleClass("active");
});

/*========== Add Class active To side menu  ==========*/
$(".nav-search .bar-icon a").on("click", function(e) {
    e.preventDefault();
    $(".side-menu").addClass("open");
});
$(".side-menu .side-menu-close").on("click", function(e) {
    e.preventDefault();
    $(".side-menu").removeClass("open");
});

/*========== Mobile menu  ==========*/
$(".menu-toggle").on("click", function(e) {
    e.preventDefault();
    $(".nav-bar-main-block").toggleClass("menu-active");
});
/*global $, window, WOW*/

$(function() {

    "use strict";

    var win = $(window),
        htmlBody = $("html, body"),
        scrollToTop = $(".scroll-top"),
        headerInner = $(".header-inner"),
        upperBar = $(".upper-bar"),
        progressCheck = false;


    /*========== Loading  ==========*/
    $(".loading").animate({
        "top": "-100%"
    }, 700, function() {
        $(this).remove();
    });

    /*========== Color Switcher  ==========*/
    $(".switch-button").on("click", function() {
        $(this).addClass("hide");
        $(".switched-styles").addClass("show");
    });

    $(".switched-styles .hide-button").on("click", function() {
        $(this).parent().removeClass("show");
        $(".switch-button").removeClass("hide");
    });

    $(".switched-styles ul li").on("click", function() {
        $("link[href*='color']").attr("href", "css/colors/" + $(this).data('color') + ".css");
    });

    /*========== Navbar Animation On Scroll  ==========*/
    function activeNavbar() {

        if (win.scrollTop() > 70) {
            headerInner.addClass("active-nav");
        } else {
            headerInner.removeClass("active-nav");
        }

    }

    activeNavbar();

    win.on("scroll", function() {
        activeNavbar();
    });

    /*========== Mobile Menu  ==========*/
    $(".header-inner .menu-toggle").on("click", function() {
        headerInner.toggleClass("menu-active");
    });

    /*========== Smooth Scroll  ==========*/
    $(".side-menu .side-nav > li > a").on("click", function(e) {
        if ($(this).attr('href').charAt(0) === "#") {
            e.preventDefault();
        }
        var selector = $(this);
        htmlBody.animate({
            scrollTop: $(selector.attr("href")).offset().top - 62
        }, 600);
    });

    /*========== Add Class Active to Menu Links on Scrolling  ==========*/
    win.on("scroll", function() {
        $("section").each(function() {
            if (win.scrollTop() >= $(this).offset().top - 63) {
                $(".side-menu .side-nav > li > a[href='#" + $(this).attr("id") + "']").addClass(
                    "active").parent().siblings().find("a").removeClass("active");
            }
        });
    });

    /*========== Start Scroll For Link To Go Section  ==========*/
    $(".home .main-btn").on("click", function(e) {
        if ($(this).attr('href').charAt(0) === "#") {
            e.preventDefault();
        }
        var selector = $(this);
        htmlBody.animate({
            scrollTop: $(selector.attr("href")).offset().top - 100
        }, 900);
    });

    $(".header .main-btn").on("click", function(e) {
        if ($(this).attr('href').charAt(0) === "#") {
            e.preventDefault();
        }
        var selector = $(this);
        htmlBody.animate({
            scrollTop: $(selector.attr("href")).offset().top
        }, 600);
    });

    /*========== Owl Carousel Js Testimonial  ==========*/
    $(".testimonials .owl-carousel").owlCarousel({
        items: 4,
        nav: true,
        dots: false,
        autoplay: true,
        smartSpeed: 500,
        margin: 30,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        loop: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });

    /*========== Fire wow js Plugin  ==========*/
    new WOW().init();

    /*========== Add Class active To search Form  ==========*/
    $(".header-inner .nav-search .search-btn a").on("click", function(e) {
        e.preventDefault();
        $(".header-inner .navigation-form").toggleClass("active");
    });

    /*========== Add Class active To side menu  ==========*/
    $(".header-inner .nav-search .bar-icon a").on("click", function(e) {
        e.preventDefault();
        $(".side-menu").addClass("open");
    });

    $(".side-menu .side-menu-close").on("click", function(e) {
        e.preventDefault();
        $(".side-menu").removeClass("open");
    });

    $(".header-inner .navbar .nav li a").on("click", function(e) {
        if ($(this).attr('href').charAt(0) === "#") {
            e.preventDefault();
        }
        $(this).next().slideToggle();
    });

    /*========== Start Owl Carousel Js Slider  ==========*/
    if ($('.home .owl-carousel')[0]) {

        $(".home .owl-carousel").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            smartSpeed: 1300,
            autoplay: 2000,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: false,
            touchDrag: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }

    $(".home .owl-carousel").on("translate.owl.carousel", function() {
        $(".home .owl-item h5").removeClass("animated fadeInUp").css("opacity", "0");
        $(".home .owl-item h1").removeClass("animated fadeInUp").css("opacity", "0");
        $(".home .owl-item p").removeClass("animated fadeInDown").css("opacity", "0");
        $(".home .owl-item .my-btn").removeClass("animated fadeInDown").css("opacity", "0");
    });

    $(".home .owl-carousel").on("translated.owl.carousel", function() {
        $(".home .owl-item h5").addClass("animated fadeInUp").css("opacity", "1");
        $(".home .owl-item h1").addClass("animated fadeInUp").css("opacity", "1");
        $(".home .owl-item p").addClass("animated fadeInDown").css("opacity", "1");
        $(".home .owl-item .my-btn").addClass("animated fadeInDown").css("opacity", "1");
    });

    /*========== Schedule  ==========*/
    $(".class-schedule .filter-menu .list-filter li").on("click", function() {
        $(this).addClass("active").siblings("li").removeClass("active");
        /*---- Timetable ----*/
        $(".class-schedule .timetable .all").addClass("animated fadeOut").removeClass("fadeIn");
        $(".class-schedule .timetable " + $(this).data('filter')).addClass("animated fadeIn")
            .removeClass("fadeOut");
        /*---- Timetable Small ----*/
        $(".class-schedule .timetable-small .all").parent().parent().fadeOut();
        $(".class-schedule .timetable-small " + $(this).data('filter')).parent().parent().fadeIn();
        $(".class-schedule .timetable-small .all").fadeOut();
        $(".class-schedule .timetable-small " + $(this).data('filter')).fadeIn();
    });

    /*========== Ajax Contact Form  ==========*/
    $('.contact-form').on("submit", function() {

        var myForm = $(this),
            data = {};

        myForm.find('[name]').each(function() {

            var that = $(this),
                name = that.attr('name'),
                value = that.val();

            data[name] = value;

        });

        $.ajax({

            url: myForm.attr('action'),
            type: myForm.attr('method'),
            data: data,
            success: function(response) {

                if (response == "success") {

                    $(".contact-form").find(".form-message").addClass("success");
                    $(".form-message span").text("Message Sent!");

                } else {

                    $(".contact-form").find(".form-message").addClass("error");
                    $(".form-message span").text("Error Sending!");

                }
            }

        });

        return false;

    });

    /*========== Scroll To Top  ==========*/
    function scrollUp() {
        if (win.scrollTop() >= 1100) {
            scrollToTop.addClass("active");
        } else {
            scrollToTop.removeClass("active");
        }
    }

    scrollUp();

    win.on("scroll", function() {
        scrollUp();
    });

    scrollToTop.on("click", function(e) {
        e.preventDefault();
        htmlBody.animate({
            scrollTop: 0
        }, 800);
    });

    /*========== About Progress  ==========*/
    function aboutPogress() {
        $(".progress-container").each(function() {
            var progressBar = $(this).find(".progress-bar");
            progressBar.css("width", progressBar.attr("aria-valuenow") + "%");
        });
    }

    if (!progressCheck && $(this).scrollTop() >= $(".about-us").offset().top - 255) {
        aboutPogress();
        progressCheck = true;
    }

    win.on("scroll", function() {

        if (!progressCheck && $(this).scrollTop() >= $(".about-us").offset().top - 255) {
            aboutPogress();
            progressCheck = true;
        }

    });

});
</script>

@yield('custom-script')