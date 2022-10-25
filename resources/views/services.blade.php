@extends('theme.master')
@section('title', 'Services')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>SERVIZI</h2>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li>SERVIZI</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Services ========== -->

    <section class="services" id="services">
        <div class="container">
            <div class="main-title text-center">
                <span class="separator">

                </span>
                <h2>CI OCCUPIAMO DI</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service one">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>RIPROGRAMMAZIONE A TUTTO TONDO</h4>
                            <p>Un team di professionisti esperti in coaching in vari settori ti riprogrammeranno per
                                consentirti di essere autonomo a 360°, per riprendere in mano la tua vita ed aumentare
                                le
                                tue performance sotto ogni punto di vista.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service two">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>MINDSET VINCENTE</h4>
                            <p>Verrai sottoposto a varie metodologie di riprogrammazione sul fronte sia mentale che
                                fisico
                                per raggiungere la tua versione migliore ed ottenere un boost di performance lavorativo
                                e
                                personale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service three">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>ALLENAMENTO CORPO E MENTE</h4>
                            <p>Avrai accesso a diverse classi d’allenamento per ricondizionare il tuo corpo e la tua
                                psiche
                                al benessere: scegli le discipline che più fanno al caso tuo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service four">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>OFFRIRE PERCORSI PERSONALIZZATI</h4>
                            <p>Potrai richiedere o usufruire di percorsi personalizzati per raggiungere specifiche skill
                                su
                                ambiti di tuo interesse maggiore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service five">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>OFFRIRTI L’ACCESSO A TUTTI I NOSTRI CORSI IN MEMBERSHIP</h4>
                            <p>Potrai accedere ai nostri corsi sottoscrivendo una VIP MEMBERSHIP per poter visione tutto
                                il
                                materiale a disposizione nella nostra piattaforma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service six">
                        <div class="service-bg"></div>
                        <div class="service-item">
                            <div class="service-icon">
                            </div>
                            <h4>ORGANIZZARE EVENTI DAL VIVO</h4>
                            <p>Potrai partecipare ai nostri eventi esclusivi per progredire con il tuo percorso
                                evolutivo da
                                HOMO SAPIENS ad HOMO NOVUS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Services ========== -->


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