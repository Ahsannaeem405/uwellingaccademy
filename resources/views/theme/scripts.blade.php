<script src="{{ url('js/jquery-2.min.js') }}"></script> <!-- jquery library js -->
<script src="{{ url('js/colorbox.js') }}"></script> <!-- colorbox js -->
<script src="{{ url('js/bootstrap.bundle.js') }}"></script> <!-- bootstrap js -->
<script src="{{ url('vendor/counter/waypoints.min.js') }}"></script> <!-- facts count js required for jquery.counterup.js file -->
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

<!-- --------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- --------------- -->

@if($gsetting->rightclick=='1')
	<script>
		(function($) {
  		"use strict";
		    $(function() {
			    $(document).on("contextmenu",function(e) {
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
	        if(event.keyCode == 123) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
	           return false;
	        }
	      }
      })(jQuery);
    </script>
@endif

<script>

if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('{{ url('sw.js') }}')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
  });
}

	/*========== Add Class active To navigation search Form  ==========*/
	$(" .nav-search .search-btn a").on("click", function (e) {
		e.preventDefault();
		$(".navigation-form").toggleClass("active");
	});

	/*========== Add Class active To side menu  ==========*/
	$(".nav-search .bar-icon a").on("click", function (e) {
		e.preventDefault();
		$(".side-menu").addClass("open");
    });
	$(".side-menu .side-menu-close").on("click", function (e) {
		e.preventDefault();
		$(".side-menu").removeClass("open");
    });

	/*========== Mobile menu  ==========*/
	$(".menu-toggle").on("click", function (e) {
		e.preventDefault();
		$(".nav-bar-main-block").toggleClass("menu-active");
	});

	/*========== About Progress  ==========*/
    progressCheck = false;
	function aboutPogress() {
        $(".progress-container").each(function () {
            var progressBar = $(this).find(".progress-bar");
            progressBar.css("width", progressBar.attr("aria-valuenow") + "%");
        });
    }
    
    if (!progressCheck && $(this).scrollTop() >= $(".about-us").offset().top - 255) {
        aboutPogress();
        progressCheck = true;
    }
    
    win.on("scroll", function () {
        
        if (!progressCheck && $(this).scrollTop() >= $(".about-us").offset().top - 255) {
            aboutPogress();
            progressCheck = true;
        }
        
    });
	/*========== Schedule  ==========*/
	$(".class-schedule .filter-menu .list-filter li").on("click", function () {
		$(this).addClass("active").siblings("li").removeClass("active");
		/*---- Timetable ----*/
		$(".class-schedule .timetable .all").addClass("animated fadeOut").removeClass("fadeIn");
		$(".class-schedule .timetable " + $(this).data('filter')).addClass("animated fadeIn").removeClass("fadeOut");
		/*---- Timetable Small ----*/
		$(".class-schedule .timetable-small .all").parent().parent().fadeOut();
		$(".class-schedule .timetable-small " + $(this).data('filter')).parent().parent().fadeIn();
		$(".class-schedule .timetable-small .all").fadeOut();
		$(".class-schedule .timetable-small " + $(this).data('filter')).fadeIn(); 
	});
</script>

@yield('custom-script')