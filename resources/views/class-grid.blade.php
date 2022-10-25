@extends('theme.master')
@section('title', 'Class Grid')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>Classes</h2>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li>Classes</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Class Grid ========== -->

    <section class="classes">
        <div class="container">
            <div class="main-title text-center">
                <span class="separator">

                </span>
                <h2>Explore our classes</h2>
            </div>
            <div class="row">
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                            <img src="images/custom/class/1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 1</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Mon, Tue</li>
                                <li><i class="fa fa-clock-o"></i>10:00 - 11:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Jack Hakman</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                        <img src="images/custom/class/2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 2</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Mon, Tue, Thu</li>
                                <li><i class="fa fa-clock-o"></i>9:00 - 10:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Elina Ekman</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                        <img src="images/custom/class/3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 3</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Wed, Thu</li>
                                <li><i class="fa fa-clock-o"></i>12:00 - 13:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Razan Smith</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                        <img src="images/custom/class/4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 4</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Mon, Wed, Sun</li>
                                <li><i class="fa fa-clock-o"></i>11:00 - 12:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Lily Garner</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                        <img src="images/custom/class/5.png" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 5</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Tue, Wed, Fri</li>
                                <li><i class="fa fa-clock-o"></i>9:00 - 10:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Jack Hakman</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- New Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="class">
                        <div class="class-img">
                        <img src="images/custom/class/6.png" class="img-fluid" alt="">
                        </div>
                        <div class="class-content">
                            <div class="class-title">
                                <a href="class-details.html">
                                    <h4>Class 6</h4>
                                </a>
                            </div>
                            <ul class="details list-unstyled">
                                <li><i class="fa fa-calendar"></i>Fri, Sat</li>
                                <li><i class="fa fa-clock-o"></i>10:00 - 11:00</li>
                            </ul>
                            <div class="class-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et...</p>
                            </div>
                            <ul class="class-info list-unstyled">
                                <li class="pull-left">Peter Doe</li>
                                <li class="pull-right"><a href="class-detail" class="post-more">Read more<i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Class Grid ========== -->

    <!-- ========== Start Newsletter ========== -->

    <section class="newsletter">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Get started with UWELLING ACCADEMY</p>
                    </div>
                    <div class="col-lg-7">
                        <form class="newsletter-form" action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required>
                                <button class="main-btn" type="submit" name="send"><span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Newsletter ========== -->
</div>

@endsection