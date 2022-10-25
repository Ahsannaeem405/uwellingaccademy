@extends('theme.master')
@section('title', 'About Us')
@section('content')
@include('admin.message')
<!-- main wrapper -->
<!-- ========== Start Page Title ========== -->

<div class="inner-pages">
  <section class="page-title" id="page-title">
      <div class="container">
          <div class="content">
              <h2>CHI SIAMO</h2>
              <ul class="list-unstyled">
                  <li><a href="">Home</a></li>
                  <li>CHI SIAMO</li>
              </ul>
          </div>
      </div>
  </section>

  <!-- ========== End Page Title ========== -->

  <!-- ========== Start About Us ========== -->

  <section class="about-us" id="about-us">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 info">

                  <div class="about-info">
                      <span class="separator">

                      </span>
                      <h1>VISION DI UWELLING ACCADEMY</h1>

                      <div class="about-progress">
                          <div class="progress-container">
                              <div class="row">
                                  <div class="col-lg-8 col-md-6">
                                      <div class="member-info">
                                          <p>
                                              Spesso ti senti giù di morale, esausto e senza energie, anche senza un
                                              apparente motivo? Ti alzi
                                              sempre di malumore e più stanco della sera prima, indipendentemente dalla
                                              giornata che ti aspetta?
                                          </p>
                                          <p>
                                              Beh, purtroppo non sei il solo: al giorno d’oggi, sempre più persone
                                              sperimentano stati di malessere
                                              generale che non sono riconducibili a singole cause circostanziali e,
                                              proprio per questo, più difficili da
                                              individuare e risolvere.
                                          </p>
                                          <p>
                                              I ritmi frenetici della vita quotidiana di oggi certo non aiutano, eppure il
                                              vero e proprio exploit c’è
                                              stato in seguito alla pandemia e alla conseguente situazione quanto mai
                                              precaria: isolamento,
                                              lockdown vari, distanziamento sociale e drastica riduzione (quando non vera
                                              e propria eliminazione)
                                              della vita sociale hanno aggravato delle problematiche già esistenti.
                                          </p>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                                      <div class="member-img1">
                                          <!-- <img src="images/logo-04.png" alt="UwellingAcademy" width="250"> -->
                                          <div class="logo">
                                              @php
                                              $setting = App\Setting::first();
                                              @endphp

                                              @if($setting->logo_type == 'L')
                                              <a href="{{ url('/') }}"><img
                                                      src="{{ asset('images/logo/'.$setting->logo) }}" class="img-fluid"
                                                      alt="logo"></a>
                                              @else()
                                              <a href="{{ url('/') }}"><b>
                                                      <div class="logotext">
                                                          {{ str_limit($setting->project_title, $limit=6, $end="") }}
                                                      </div>
                                                  </b></a>
                                              @endif
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-12">
                                      <p>
                                          Tutto questo si è andato ad aggiungere a una situazione già difficile di suo: il
                                          lavoro precario,
                                          l’aumento dell’inflazione e quindi del costo della vita, la guerra, l’emergenza
                                          ambientale…
                                      </p>
                                      <p>
                                          Insomma, quando le cose là fuori diventano così negative e preoccupanti, è
                                          chiaro che ogni ulteriore
                                          difficoltà personale (famiglia, amici, relazioni, lavoro…) fa da detonatore per
                                          il nostro equilibrio
                                          psicofisico. Senza dimenticare le molte persone che, già in precedenza,
                                          soffrivano dei più disparati
                                          disturbi e legittimamente vorrebbero trovare una soluzione definitiva.
                                      </p>
                                      <p>
                                          A fronte di queste problematiche, che abbiamo detto essere spesso subdole in
                                          quanto non
                                          direttamente collegate a una sola causa specifica (e soprattutto molto diffuse
                                          tra la popolazione)
                                          bisogna anche sottolineare le notizie positive.
                                      </p>
                                      <p>
                                          Per questo tipo di malessere il rimedio c’è e funziona. Bisogna essere chiari,
                                          evitando di cadere nella
                                          trappola portata avanti da certi media e sui social: l’idea generale, infatti, è
                                          che tale “malessere
                                          diffuso” sia il male dei nostri giorni e, di conseguenza, dobbiamo imparare a
                                          conviverci e ad
                                          accettarlo. Niente di più sbagliato.
                                      </p>
                                      <p>
                                          Per risolvere questi conflitti interiori, come per molte altre patologie
                                          “classiche”, è bene partire da
                                          una conoscenza approfondita del proprio corpo: come fare?
                                      </p>
                                      <p>
                                          U Welling Academy si occupa proprio di questo: una serie di docenti altamente
                                          preparati
                                          organizzano dei corsi di diverse ore per tutte le persone che vogliono risolvere
                                          diversi problemi di
                                          salute (fisica e mentale), ritrovando un pieno equilibrio psicofisico. I
                                          partecipanti vengono divisi in
                                          vere e proprie classi, ognuna con il suo coach completamente dedicato.
                                      </p>
                                      <p>
                                          L’Academy propone diverse tipologie di corsi, ognuno con un focus su una (o
                                          alcune) problematica
                                          comune nella nostra vita quotidiana di oggi. I docenti sono fortemente
                                          specializzati: le loro
                                          certificazioni e la loro esperienza sul campo ti consentiranno di intraprendere
                                          un percorso di
                                          miglioramento e, insieme ai tuoi compagni, risolvere una volta per tutte le
                                          problematiche che ti
                                          affliggono, qualunque sia la loro natura.
                                      </p>
                                      <p>
                                          Non accontentarti, sblocca la tua mente e il tuo potenziale: impara a godere
                                          appieno della tua vita!
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- ========== End About Us ========== -->

  <!-- ========== Start Call To Action ========== -->

  <section class="call-to-action text-center">
      <div class="container">
          <div class="content">
              <h3>DIVENTA DOCENTE UWELLING ACADEMY</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
              <a href="#" class="main-btn custom-btn"><span>Join Now</span></a>
          </div>
      </div>
  </section>

  <!-- ========== End Call To Action ========== -->

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
                                  <a href="teacher-one.html"><i class="fa fa-info-circle"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4 class="member-name">ALESSANDRO DI SALVO</h4>
                          <span>FISIOTERAPISTA & OSTEOPATA</span>
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
                                  <a href="teacher-two.html"><i class="fa fa-info-circle"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4 class="member-name">RICCARDO PITARRESI</h4>
                          <span>DIETISTA</span>
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
                                  <a href="teacher-three.html"><i class="fa fa-info-circle"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="member-info">
                          <h4 class="member-name">LOU TRAPANI</h4>
                          <span>MENTAL COACH</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- ========== End Teacher Profile ========== -->

  <!-- ========== Start Testimonials ========== -->

  <section id="testimonials" class="testimonials mb-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12 owl-carousel owl-theme">
                  <!-- New Item -->
                  <div class="testimonial-box">
                      <div class="client-info">
                          <div class="client-pic">
                              <img src="images/custom/1.jpg" alt="client">
                          </div>
                          <div class="client-details">
                              <h6>Elina Demir</h6>
                          </div>
                      </div>
                      <div class="description">
                          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris nisi ut."</p>
                          <div class="star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <!-- New Item -->
                  <div class="testimonial-box">
                      <div class="client-info">
                          <div class="client-pic">
                              <img src="images/custom/2.jpg" alt="client">
                          </div>
                          <div class="client-details">
                              <h6>Alexander Smith</h6>
                          </div>
                      </div>
                      <div class="description">
                          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris nisi ut."</p>
                          <div class="star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <!-- New Item -->
                  <div class="testimonial-box">
                      <div class="client-info">
                          <div class="client-pic">
                              <img src="images/custom/3.jpeg" alt="client">
                          </div>
                          <div class="client-details">
                              <h6>Silvia Hatmun</h6>
                          </div>
                      </div>
                      <div class="description">
                          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris nisi ut."</p>
                          <div class="star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <!-- New Item -->
                  <div class="testimonial-box">
                      <div class="client-info">
                          <div class="client-pic">
                              <img src="images/custom/4.jpg" alt="client">
                          </div>
                          <div class="client-details">
                              <h6>Egy Paulian</h6>
                          </div>
                      </div>
                      <div class="description">
                          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris nisi ut."</p>
                          <div class="star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- ========== End Testimonials ========== -->

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
  <!-- end main wrapper -->
</div>
@endsection

@section('custom-script')
<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
</script>

@endsection