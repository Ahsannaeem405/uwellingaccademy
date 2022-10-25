@extends('theme.master')
@section('title', 'Class Details')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>Class Details</h2>
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li>Class Details</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Class Details ========== -->

    <section class="classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="class-details">
                        <div class="class">
                            <div class="class-img">
                            <img src="images/custom/class/1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="class-content">
                                <div class="class-title">
                                    <a href="class-details.html">
                                        <h4>Yoga For Beginners</h4>
                                    </a>
                                </div>
                                <ul class="details list-unstyled">
                                    <li><i class="fa fa-calendar"></i>Mon, Tue</li>
                                    <li><i class="fa fa-clock-o"></i>10:00 - 11:00</li>
                                </ul>
                                <div class="class-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui officia deserunt mollit anim.</p>
                                    <p>Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia
                                        deserunt.mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus
                                        error.sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                        nesciunt. neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                </div>
                                <div class="class-footer">
                                    <div class="class-share">
                                        <h5>Share:</h5>
                                        <ul class="list-unstyled social-media">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="class-tags">
                                        <h5>Tags</h5>
                                        <ul class="tags-list list-unstyled">
                                            <li>
                                                <a href="#">yoga</a>
                                            </li>
                                            <li>
                                                <a href="#">meditation</a>
                                            </li>
                                            <li>
                                                <a href="#">trainer</a>
                                            </li>
                                            <li>
                                                <a href="#">yoga center</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="class-comments">
                                    <h3>03 Comments</h3>
                                    <div class="class-comment">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="comment-image">
                                                <img src="images/custom/23.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>Nihan Doe</h4>
                                                <span>22 Jan, 2020</span>
                                                <a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt labore et dolore magna aliqua. enim ad
                                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="class-comment reply">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="comment-image">
                                                <img src="images/custom/4.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>Enjy Taylor</h4>
                                                <span>22 Jan, 2020</span>
                                                <a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
                                                <p>Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui
                                                    officia deserunt.mollit anim id est laborum. sed ut.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="class-comment">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="comment-image">
                                                <img src="images/custom/32.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>Karim Doe</h4>
                                                <span>22 Jan, 2020</span>
                                                <a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt labore et dolore magna aliqua. enim ad
                                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="class-form">
                                    <h3>Leave a Comment</h3>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message"
                                                        placeholder="Your Comment" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <button class="main-btn" type="submit" name="comment"><span>Submit
                                                        Comment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="class-sidebar">
                        <div class="sidebar-search">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="search" class="form-control" name="search-field" placeholder="Search.."
                                        required>
                                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-info">
                            <h4>Class Information</h4>
                            <ul class="info-list list-unstyled">
                                <li>
                                    <span>Trainer: </span>Jack Hakman
                                </li>
                                <li>
                                    <span>Days: </span>Mon, Tue
                                </li>
                                <li>
                                    <span>Time: </span>10:00 - 11:00
                                </li>
                                <li>
                                    <span>Location: </span>New York City
                                </li>
                            </ul>
                        </div>
                        <a class="register main-btn" href="#"><span>Register Now</span></a>
                        <div class="sidebar-classes">
                            <h4>Related Class</h4>
                            <div class="class-inner">
                                <div class="class-image">
                                    <img class="img-fluid" src="images/classes/2.jpg" alt>
                                </div>
                                <div class="class-info">
                                    <h5><a href="#">Balance Body &amp; Mind</a></h5>
                                    <p>By: Elina Ekman</p>
                                </div>
                            </div>
                            <div class="class-inner">
                                <div class="class-image">
                                    <img class="img-fluid" src="images/classes/3.jpg" alt>
                                </div>
                                <div class="class-info">
                                    <h5><a href="#">Yoga Classes for Children</a></h5>
                                    <p>By: Razan Smith</p>
                                </div>
                            </div>
                            <div class="class-inner">
                                <div class="class-image">
                                    <img class="img-fluid" src="images/classes/4.jpg" alt>
                                </div>
                                <div class="class-info">
                                    <h5><a href="#">Increased body awareness</a></h5>
                                    <p>By: Lily Garner</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tags">
                            <h4>Tags</h4>
                            <ul class="tags-list list-unstyled">
                                <li>
                                    <a href="#">basic yoga</a>
                                </li>
                                <li>
                                    <a href="#">meditation</a>
                                </li>
                                <li>
                                    <a href="#">workshop</a>
                                </li>
                                <li>
                                    <a href="#">fitness</a>
                                </li>
                                <li>
                                    <a href="#">yoga tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Class Details ========== -->

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