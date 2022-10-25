@extends('theme.master')
@section('title', 'Contact Us')
@section('content')
@include('admin.message')

<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>Contact Us</h2>
                <ul class="list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Contact ========== -->

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="contact-boxes">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-box two">
                                    <div class="icon-box">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="content-box">
                                        <h5>Email Address</h5>
                                        <p><a href="mailto:admin@uwellingaccademy.com"
                                                class="__cf_email__"><span>admin@uwellingaccademy.com</span></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <div class="icon-box">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="content-box">
                                        <p>CERCA QUI PER TROVARE CORSI, COACHING CLASSI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <form class="contact-form" action="mail.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" required value=""
                                onkeyup="this.setAttribute('value', this.value);">
                            <label for="name">Name</label>
                            <span class="input-border"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" required value=""
                                onkeyup="this.setAttribute('value', this.value);">
                            <label for="email">Email</label>
                            <span class="input-border"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" required value=""
                                onkeyup="this.setAttribute('value', this.value);">
                            <label for="subject">Subject</label>
                            <span class="input-border"></span>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" required data-value=""
                                onkeyup="this.setAttribute('data-value', this.value);"></textarea>
                            <label for="message">Your Message</label>
                            <span class="input-border"></span>
                        </div>
                        <!-- Button Send Message  -->
                        <button class="contact-btn main-btn" type="submit" name="send"><span>Send
                                Message</span></button>
                        <!-- Form Message  -->
                        <div class="form-message text-center"><span></span></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Contact ========== -->

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