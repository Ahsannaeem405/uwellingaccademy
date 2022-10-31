@extends('theme.master')
@section('title', 'Teacher Two')
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
                        <img src="images/custom/22.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="trainer-info">
                        <h3>About</h3>
                        <p>
                            Fondatore e CEO di Uwelling: Riccardo Pitarresi, laureato in Dietistica con 110 e lode
                            all'Università
                            degli Studi di Palermo il 27 Aprile 2016. Esercita la libera professione da oltre 5 anni ,
                            con una ascesa
                            travolgente nel mercato palermitano che ha sviluppato centinaia di consulenze e atleti
                            agonisti ed
                            amatori soddisfatti dei meravigliosi risultati ottenuti. Ha praticato arti marziali a
                            livello agonistico per
                            oltre 10 anni, conseguendo numerosi titoli regionali e nazionali, toccando con mano la vera
                            essenza
                            dello sport e di tutto ciò che ne consegue. E’ stato referente nutrizionale di realtà
                            sportive
                            palermitane indiscusse quali Body Studio SRL che conta 5 centri sportivi e 7000 utenti e
                            Polisportiva
                            Palermo e Polisportiva Mimmo Ferrito . Docente universitario di Biochimica primaria,
                            cellulare e
                            genetica presso Westbrook University sita in Palermo. Sognatore e visionario, porterà
                            Uwelling e
                            Uwelling Academy nel divenire il Gold Standard nazionale per il benessere.
                        </p>
                        <ul class="info list-unstyled">
                            <li><span>Name: </span>RICCARDO PITARRESI</li>
                            <li><span>Speciality: </span>DIETISTA</li>
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
                                <h4 class="member-name">ALESSANDRO DI SALVO</h4>
                                <span>FISIOTERAPISTA & OSTEOPATA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
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
                                <span>MENTAL COACH </span>
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