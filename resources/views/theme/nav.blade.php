<section id="top-nav" class="top-nav-block">
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bar">
                        <div class="row">
                            <div class="col-lg-8 col-12 text-center text-lg-left d-flex">
                                <ul class="contact-bar list-unstyled">
                                    <li>
                                        <a href="mailto:admin@uwellingaccademy.com">
                                            <i class="fa fa-envelope"></i>
                                            <span class="__cf_email__">admin@uwellingaccademy.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                            CERCA QUI PER TROVARE CORSI, COACHING CLASSI
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-4 col-12 text-center text-lg-right">
                                <ul class="social-media-bar list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- hide category and instructor -->
                            <div class="d-none col-lg-12 col-12 contact-bar-right justify-content-center">
                                @php
                                    $setting = App\Setting::first();
                                @endphp
                                @guest
                                <div class="navigation">
                                    <div id="cssmenu">
                                        <ul>
                                            <li><a href="#" title="Categories"><i class="flaticon-grid"></i>{{ __('frontstaticword.Categories') }}</a>
                                                @php
                                                $categories = App\Categories::orderBy('position','ASC')->get();
                                                @endphp
                                                <ul>
                                                    @foreach($categories as $cate)
                                                    @if($cate->status == 1 )
                                                    <li><a href="{{ route('category.page',$cate->id) }}" title="{{ $cate->title }}"><i class="fa {{ $cate->icon }} rgt-20"></i>{{ $cate->title }}<i class="fa fa-chevron-right float-rgt"></i></a>
                                                    <ul>   
                                                        @foreach($cate->subcategory as $sub)
                                                        @if($sub->status ==1)
                                                        <li><a href="{{ route('subcategory.page',$sub->id) }}" title="{{ $sub->title }}"><i class="fa {{ $sub->icon }} rgt-20"></i>{{ $sub->title }}
                                                            <i class="fa fa-chevron-right float-rgt"></i></a>
                                                            <ul>
                                                                @foreach($sub->childcategory as $child)
                                                                @if($child->status ==1)
                                                                <li>
                                                                    <a href="{{ route('childcategory.page',$child->id) }}" title="{{ $child->title }}"><i class="fa {{ $child->icon }} rgt-20"></i>{{ $child->title }}</a>
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                    </ul>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                @php
                                    $setting = App\Setting::first();
                                @endphp

                                <div class="learning-business">
                                    @if($setting->instructor_enable == 1)
                                        <a href="{{ route('login') }}" class="btn btn-link" data-toggle="tooltip" data-placement="right" title="Login/Register To Become an Instructor">{{ __('frontstaticword.BecomeAnInstructor') }}</a>
                                    @endif
                                </div>
                                
                                @endguest
                            </div>
                            <!-- hide category and instructor -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nav-bar" class="nav-bar-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="logo">
                            @php
                                $setting = App\Setting::first();
                            @endphp

                            @if($setting->logo_type == 'L')
                                <a href="{{ url('/') }}" ><img src="{{ asset('images/logo/'.$setting->logo) }}" class="img-fluid" alt="logo"></a>
                            @else()
                                <a href="{{ url('/') }}"><b><div class="logotext">{{ str_limit($setting->project_title, $limit=6, $end="") }}</div></b></a>
                            @endif
                        </div>
                        <button class="menu-toggle">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-sm-12">
                @guest
                <div class="navigation-main">
                    <!-- <div class="navigation">
                        <div id="cssmenu">
                            <ul>
                                <li><a href="#" title="Categories"><i class="flaticon-grid"></i>{{ __('frontstaticword.Categories') }}</a>
                                    @php
                                    $categories = App\Categories::orderBy('position','ASC')->get();
                                    @endphp
                                    <ul>
                                        @foreach($categories as $cate)
                                        @if($cate->status == 1 )
                                        <li><a href="{{ route('category.page',$cate->id) }}" title="{{ $cate->title }}"><i class="fa {{ $cate->icon }} rgt-20"></i>{{ $cate->title }}<i class="fa fa-chevron-right float-rgt"></i></a>
                                        <ul>   
                                            @foreach($cate->subcategory as $sub)
                                            @if($sub->status ==1)
                                            <li><a href="{{ route('subcategory.page',$sub->id) }}" title="{{ $sub->title }}"><i class="fa {{ $sub->icon }} rgt-20"></i>{{ $sub->title }}
                                                <i class="fa fa-chevron-right float-rgt"></i></a>
                                                <ul>
                                                    @foreach($sub->childcategory as $child)
                                                    @if($child->status ==1)
                                                    <li>
                                                        <a href="{{ route('childcategory.page',$child->id) }}" title="{{ $child->title }}"><i class="fa {{ $child->icon }} rgt-20"></i>{{ $child->title }}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                        @endforeach
                                        </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> -->


                    <ul class="nav-search">
                        <li class="search-btn"><a href="#" class="fa fa-search"></a></li>
                        <li class="bar-icon"><a href="#" class="fa fa-list-ul"></a></li>
                        <li class="user-icon"><a href="{{ route('login') }}" class="fa fa-user"></a></li>
                    </ul>

                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#">HOME</a>
                                </li>
                                <li>
                                    <a href="aboutUs">ABOUT US</a>
                                </li>
                                
                                <li><a href="services">SERVICES</a>
                                </li>
                                <li><a href="#">COURSES AND COACHING<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="schedule">Class Schedule</a></li>
                                        <li><a href="class-grid">Class Grid</a></li>
                                        <li><a href="class-detail">Single Class</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CLASSES<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">CLASSES List</a></li>
                                        <li><a href="teacher">Teacher Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Blog 2 Column</a></li>
                                        <li><a href="#">Blog Sidebar</a></li>
                                        <li><a href="#">Blog Single</a></li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="#">Blog</a>
                                </li> -->
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <form class="navigation-form" action="{{ route('search') }}" class="form-inline search-form" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="searchTerm" placeholder="{{ __('frontstaticword.Searchforcourses') }}" value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                        </div>              
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </form>

                    
                    <!-- <div class="learning-business">
                        @if($setting->instructor_enable == 1)
                            <a href="{{ route('login') }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Login/Register To Become an Instructor">{{ __('frontstaticword.BecomeAnInstructor') }}</a>
                        @endif
                    </div> -->


                    <!-- <div class="Login-btn">
                        <a href="{{ route('register') }}" class="btn btn-primary" title="register">{{ __('frontstaticword.Signup') }}</a>
                        <a href="{{ route('login') }}" class="btn btn-secondary" title="login">{{ __('frontstaticword.Login') }}</a>
                    </div>  -->
                @endguest


                <!-- ------after login------ -->


                @auth
                <div class="">
                    <!-- -------------- -->
                    <ul class="nav-search nav-search-logged-in">
                        <li class="search-btn logged-in-icons">
                            <a href="#" class="fa fa-search"></a>
                        </li>
                        <li class="bar-icon logged-in-icons">
                            <a href="#" class="fa fa-list-ul"></a>
                        </li>
                        <li class="nav-wishlist logged-in-icons">
                            <ul id="nav">
                                <li id="notification_li">
                                    <a href="{{ url('send') }}" id="notificationLink" title="Notification"><i class="fa fa-bell"></i></a>
                                    <span class="red-menu-badge red-bg-success">
                                        {{ Auth()->user()->unreadNotifications->count() }}
                                    </span>
                                    <div id="notificationContainer">
                                    <div id="notificationTitle">{{ __('frontstaticword.Notifications') }}</div>
                                    <div id="notificationsBody" class="notifications">
                                        <ul>
                                            @foreach(Auth()->user()->unreadNotifications as $notification)
                                                <li class="unread-notification">
                                                    <a href="{{url('notifications/'.$notification->id)}}">          
                                                    <div class="notification-image">
                                                        @if($notification->data['image'] !== NULL )
                                                            <img src="{{ asset('images/course/'.$notification->data['image']) }}" alt="course" class="img-fluid" >
                                                        @else
                                                            <img src="{{ Avatar::create($notification->data['id'])->toBase64() }}" alt="course" class="img-fluid">
                                                        @endif
                                                    </div>
                                                    <div class="notification-data">
                                                        In {{ str_limit($notification->data['id'], $limit = 20, $end = '...') }}
                                                        <br>
                                                        {{ str_limit($notification->data['data'], $limit = 20, $end = '...') }}
                                                    </div>
                                                    </a>
                                                </li>
                                            @endforeach

                                            @foreach(Auth()->user()->readNotifications as $notification)
                                                <li>
                                                    <a href="{{ route('mycourse.show') }}">
                                                    <div class="notification-image">
                                                        @if($notification->data['image'] !== NULL )
                                                            <img src="{{ asset('images/course/'.$notification->data['image']) }}" alt="course" class="img-fluid" >
                                                        @else
                                                            <img src="{{ Avatar::create($notification->data['id'])->toBase64() }}" alt="course" class="img-fluid">
                                                        @endif
                                                    </div>
                                                    <div class="notification-data">
                                                        In {{  str_limit($notification->data['id'], $limit = 20, $end = '...') }}
                                                        <br>
                                                        {{ str_limit($notification->data['data'], $limit = 20, $end = '...') }}
                                                    </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div id="notificationFooter"><a href="{{route('deleteNotification')}}">{{ __('frontstaticword.ClearAll') }}</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-wishlist logged-in-icons">
                            <a href="{{ route('wishlist.show') }}" title="Go to Wishlist"><i class="fa fa-heart"></i></a>
                            <span class="red-menu-badge red-bg-success">
                                @php
                                    $data = App\Wishlist::where('user_id', Auth::User()->id)->get();
                                    if(count($data)>0){

                                        echo count($data);
                                    }
                                    else{

                                        echo "0";
                                    }
                                @endphp
                            </span>
                        </li>
                        <li class="shopping-cart logged-in-icons">
                            <a href="{{ route('cart.show') }}" title="Cart"><i class="flaticon-shopping-cart"></i></a>
                            <span class="red-menu-badge red-bg-success">
                                @php
                                    $item = App\Cart::where('user_id', Auth::User()->id)->get();
                                    if(count($item)>0){

                                        echo count($item);
                                    }
                                    else{

                                        echo "0";
                                    }
                                @endphp
                            </span>
                        </li>
                        <li class="my-container logged-in-icons">
                            <div class="dropdown">
                                <!-- <span class="user-icon"><a href="#" class="fa fa-user"></a></span> -->
                                <button class="btn btn-default dropdown-toggle  my-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <!-- @if(Auth::User()->user_img != null || Auth::User()->user_img !='')
                                        <img src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" class="circle" alt="user">
                                    @else
                                        <img src="{{ asset('images/default/user.jpg')}}"  class="circle" alt="user">
                                    @endif -->
                                    <!-- <span class="dropdown__item name" id="name">{{ str_limit(Auth::User()->fname, $limit = 10, $end = '..') }}</span> -->
                                    <span class="user-icon"><a href="#" class="fa fa-user"></a></span>
                                    <!-- <span class="dropdown__item caret"></span> -->
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right User-Dropdown U-open" aria-labelledby="dropdownMenu1">
                                    <div id="notificationTitle" class="text-center">
                                        <div>
                                            @if(Auth::User()->user_img != null || Auth::User()->user_img !='')
                                                <img src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" class="dropdown-user-circle" alt="user">
                                            @else
                                                <img src="{{ asset('images/default/user.jpg')}}" class="dropdown-user-circle" alt="user">
                                            @endif
                                        </div>
                                        <div class="user-detailss">
                                            <span>
                                                {{ Auth::User()->fname }}
                                            </span>
                                            <span>
                                                {{ Auth::User()->email }}
                                            </span>
                                        </div>
                                        
                                    </div>
                                    @if(Auth::User()->role == "admin" || Auth::User()->role == "instructor"  )
                                    <a target="_blank" href="{{ url('/admins') }}"><li><i class="fa fa-dashboard"></i>{{ __('frontstaticword.AdminDashboard') }}</li></a>
                                    @endif
                                    <a href="{{ route('mycourse.show') }}"><li><i class="fa fa-diamond"></i>{{ __('frontstaticword.MyCourses') }}</li></a>
                                    <a href="{{ route('wishlist.show') }}"><li><i class="fa fa-heart"></i>{{ __('frontstaticword.MyWishlist') }}</li></a>
                                    <a href="{{ route('purchase.show') }}"><li><i class="fa fa-shopping-cart"></i>{{ __('frontstaticword.PurchaseHistory') }}</li></a>
                                    <a href="{{route('profile.show',Auth::User()->id)}}"><li ><i class="fa fa-user"></i>{{ __('frontstaticword.UserProfile') }}</li></a>
                                    @if(Auth::User()->role == "user")
                                    @if($gsetting->instructor_enable == 1)
                                    <a href="#" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor"><li><i class="fas fa-chalkboard-teacher"></i>{{ __('frontstaticword.BecomeAnInstructor') }}</li></a>
                                    @endif
                            
                                    @endif

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <div id="notificationFooter">
                                            {{ __('frontstaticword.Logout') }}
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </a>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <form class="navigation-form" action="{{ route('search') }}" class="form-inline search-form" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="searchTerm" placeholder="{{ __('frontstaticword.Searchforcourses') }}" value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                        </div>              
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </form>

                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#">HOME</a>
                                </li>
                                <li>
                                    <a href="aboutUs">ABOUT US</a>
                                </li>
                                
                                <li><a href="services">SERVICES</a>
                                </li>
                                <li><a href="#">COURSES AND COACHING<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="schedule">Class Schedule</a></li>
                                        <li><a href="class-grid">Class Grid</a></li>
                                        <li><a href="class-detail">Single Class</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CLASSES<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">CLASSES List</a></li>
                                        <li><a href="teacher">Teacher Profile</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- -------------- -->
                    <div class="col-lg-12 d-none justify-content-center logged-in">
                        <div class="learning-business learning-business-two">
                            @if(Auth::User()->role == "user")
                                @if($setting->instructor_enable == 1)
                                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor">{{ __('frontstaticword.BecomeAnInstructor') }}</a>
                                @endif
                            @endif
                        </div>
                        <div class="learning-business">
                            <a href="{{ route('mycourse.show') }}" class="btn btn-link" title="My Course">{{ __('frontstaticword.MyCourses') }}</a>
                        </div>
                        <div class="nav-wishlist">
                            <ul id="nav">
                                <li id="notification_li">
                                    <a href="{{ url('send') }}" id="notificationLink" title="Notification"><i class="fa fa-bell"></i></a>
                                    <span class="red-menu-badge red-bg-success">
                                        {{ Auth()->user()->unreadNotifications->count() }}
                                    </span>
                                    <div id="notificationContainer">
                                    <div id="notificationTitle">{{ __('frontstaticword.Notifications') }}</div>
                                    <div id="notificationsBody" class="notifications">
                                        <ul>
                                            @foreach(Auth()->user()->unreadNotifications as $notification)
                                                <li class="unread-notification">
                                                    <a href="{{url('notifications/'.$notification->id)}}">          
                                                    <div class="notification-image">
                                                        @if($notification->data['image'] !== NULL )
                                                            <img src="{{ asset('images/course/'.$notification->data['image']) }}" alt="course" class="img-fluid" >
                                                        @else
                                                            <img src="{{ Avatar::create($notification->data['id'])->toBase64() }}" alt="course" class="img-fluid">
                                                        @endif
                                                    </div>
                                                    <div class="notification-data">
                                                        In {{ str_limit($notification->data['id'], $limit = 20, $end = '...') }}
                                                        <br>
                                                        {{ str_limit($notification->data['data'], $limit = 20, $end = '...') }}
                                                    </div>
                                                    </a>
                                                </li>
                                            @endforeach

                                            @foreach(Auth()->user()->readNotifications as $notification)
                                                <li>
                                                    <a href="{{ route('mycourse.show') }}">
                                                    <div class="notification-image">
                                                        @if($notification->data['image'] !== NULL )
                                                            <img src="{{ asset('images/course/'.$notification->data['image']) }}" alt="course" class="img-fluid" >
                                                        @else
                                                            <img src="{{ Avatar::create($notification->data['id'])->toBase64() }}" alt="course" class="img-fluid">
                                                        @endif
                                                    </div>
                                                    <div class="notification-data">
                                                        In {{  str_limit($notification->data['id'], $limit = 20, $end = '...') }}
                                                        <br>
                                                        {{ str_limit($notification->data['data'], $limit = 20, $end = '...') }}
                                                    </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div id="notificationFooter"><a href="{{route('deleteNotification')}}">{{ __('frontstaticword.ClearAll') }}</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-wishlist">
                            <a href="{{ route('wishlist.show') }}" title="Go to Wishlist"><i class="fa fa-heart"></i></a>
                            <span class="red-menu-badge red-bg-success">
                                @php
                                    $data = App\Wishlist::where('user_id', Auth::User()->id)->get();
                                    if(count($data)>0){

                                        echo count($data);
                                    }
                                    else{

                                        echo "0";
                                    }
                                @endphp
                            </span>
                        </div>
                        <div class="shopping-cart">
                            <a href="{{ route('cart.show') }}" title="Cart"><i class="flaticon-shopping-cart"></i></a>
                            <span class="red-menu-badge red-bg-success">
                                @php
                                    $item = App\Cart::where('user_id', Auth::User()->id)->get();
                                    if(count($item)>0){

                                        echo count($item);
                                    }
                                    else{

                                        echo "0";
                                    }
                                @endphp
                            </span>
                        </div>
                        <div class="my-container">
                            <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle  my-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                @if(Auth::User()->user_img != null || Auth::User()->user_img !='')
                                    <img src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" class="circle" alt="user">
                                @else
                                    <img src="{{ asset('images/default/user.jpg')}}"  class="circle" alt="user">
                                @endif
                                <span class="dropdown__item name" id="name">{{ str_limit(Auth::User()->fname, $limit = 10, $end = '..') }}</span>
                                <span class="dropdown__item caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right User-Dropdown U-open" aria-labelledby="dropdownMenu1">
                                <div id="notificationTitle">
                                    @if(Auth::User()->user_img != null || Auth::User()->user_img !='')
                                        <img src="{{ url('/images/user_img/'.Auth::User()->user_img) }}" class="dropdown-user-circle" alt="user">
                                    @else
                                        <img src="{{ asset('images/default/user.jpg')}}" class="dropdown-user-circle" alt="user">
                                    @endif
                                    <div class="user-detailss">
                                        {{ Auth::User()->fname }}
                                        <br>
                                        {{ Auth::User()->email }}
                                    </div>
                                    
                                </div>
                                @if(Auth::User()->role == "admin" || Auth::User()->role == "instructor"  )
                                <a target="_blank" href="{{ url('/admins') }}"><li><i class="fa fa-dashboard"></i>{{ __('frontstaticword.AdminDashboard') }}</li></a>
                                @endif
                                <a href="{{ route('mycourse.show') }}"><li><i class="fa fa-diamond"></i>{{ __('frontstaticword.MyCourses') }}</li></a>
                                <a href="{{ route('wishlist.show') }}"><li><i class="fa fa-heart"></i>{{ __('frontstaticword.MyWishlist') }}</li></a>
                                <a href="{{ route('purchase.show') }}"><li><i class="fa fa-shopping-cart"></i>{{ __('frontstaticword.PurchaseHistory') }}</li></a>
                                <a href="{{route('profile.show',Auth::User()->id)}}"><li ><i class="fa fa-user"></i>{{ __('frontstaticword.UserProfile') }}</li></a>
                                @if(Auth::User()->role == "user")
                                @if($gsetting->instructor_enable == 1)
                                <a href="#" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor"><li><i class="fas fa-chalkboard-teacher"></i>{{ __('frontstaticword.BecomeAnInstructor') }}</li></a>
                                @endif
                        
                                @endif

                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div id="notificationFooter">
                                        {{ __('frontstaticword.Logout') }}
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-none">
                                            @csrf
                                        </form>
                                    </div>
                                </a>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</section>

@include('instructormodel')

