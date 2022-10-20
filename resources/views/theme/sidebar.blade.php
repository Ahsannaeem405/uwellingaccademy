<div class="side-menu text-center d-none d-md-block">
    <a href="#" class="side-menu-close">
        <i class="fa fa-remove"></i>
    </a>
    <!-- Logo -->
    <div class="my-logo">
        <!-- <img src="images/logo-02.png" alt="UwellingAcademy" width="85"> -->
        @php
            $setting = App\Setting::first();
        @endphp

        @if($setting->logo_type == 'L')
            <a href="{{ url('/') }}" ><img src="{{ asset('images/logo/'.$setting->logo) }}" class="img-fluid" alt="logo"></a>
        @else()
            <a href="{{ url('/') }}"><b><div class="logotext">{{ str_limit($setting->project_title, $limit=6, $end="") }}</div></b></a>
        @endif
    </div>
    <ul class="side-nav list-unstyled">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#services" class="">Services</a></li>
        <li><a href="#class-schedule">Schedule</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
    <div class="side-info">
        <h4>About UwellingAcademy</h4>
        <p>UwellingAcademy is most popular online learning platform in USA. It is time to discover your passion.</p>
    </div>
    <ul class="social-icons list-unstyled">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>
</div>