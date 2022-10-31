@extends('theme.master')
@section('title', 'Teacher Three')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>Squadra Singola</h2>
                <ul class="list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>Squadra Singola</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Team Single ========== -->

    <section class="team-single">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="trainer-image">
                        <img src="images/custom/3.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="trainer-info">
                        <h3>About</h3>
                        <p>
                            Luigi Trapani è mental coach con una specializzazione in psicologia clinica e neuroscienze.
                            Ha maturato un esperienza decennale nel trattamento e la gestione di pazienti con malattie
                            neurodegenerative e demenze, co-autore della boxe therapy insieme al dottore tamburo di
                            fisioproject, disciplina emergente nel campo del trattamento ansiogeno e stressogeno
                            correlato ai benefici degli sport da combattimento. Operatore di nutraceutica ed esperto di
                            meditazione energetica e mindfulness. attivo nel palermitano da tre anni crea programmi di
                            crescita personale e potenziamento mentale per tutti i soggetti affetti da stanchezza
                            mentale,
                            fisica ed emotiva.
                        </p>
                        <p>
                            Il suo principale è obbiettivo è far brillare il mondo e ricostruire l'identità autentica
                            del
                            prossimo, sbloccandone il potenziale latente
                        </p>
                        <ul class="info list-unstyled">
                            <li><span>Name: </span>LOU TRAPANI</li>
                            <li><span>Speciality: </span>MENTAL COACH</li>
                            <li><span>Email: </span><a href="#" class="__cf_email__" data-cfemail=""></a></li>
                            <li><span>Phone: </span></li>
                            <li><span>social: </span>
                                <ul class="social list-unstyled">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class="view-classes" href="#"><i class="fa fa-chevron-circle-right"></i>View Classes</a>
                    </div>
                </div>
            </div>

            <div class="related-trainers">
                <h3>Formatori Correlati</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-4">
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
                                <h4 class="member-name">RICCARDO PITARRESI</h4>
                                <span>DIETISTA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
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
                                <h4 class="member-name">ALESSANDRO DI SALVO</h4>
                                <span>FISIOTERAPISTA & OSTEOPATA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Team Single ========== -->


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