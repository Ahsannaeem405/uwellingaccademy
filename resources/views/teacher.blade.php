@extends('theme.master')
@section('title', 'Class Details')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>PROFILO DOCENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li>PROFILO DOCENTE</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Teacher Profile ========== -->

    <section class="team" id="team">
        <div class="container">
            <div class="main-title text-center">

                <h2>IL NOSTRO FANTASTICO TEAM</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/custom/12.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="social-media text-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="teacherOne"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">ALESSANDRO DI SALVO</h4>
                            <a href="teacherOne">FISIOTERAPISTA & OSTEOPATA</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/custom/22.jpeg" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="social-media text-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="teacherTwo"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">RICCARDO PITARRESI</h4>
                            <a href="teacherTwo">DIETISTA</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/custom/3.jpeg" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="social-media text-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="teacherThree"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">LOU TRAPANI</h4>
                            <a href="teacherThree">MENTAL COACH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Teacher Profile ========== -->


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