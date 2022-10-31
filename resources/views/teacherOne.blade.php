@extends('theme.master')
@section('title', 'Teacher One')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

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
                            <img src="images/custom/12.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-md-8">
						<div class="trainer-info">
							<h3>About</h3>
							<p>Alessandro Di Salvo, laureato in Fisioterapia all'Università degli studi di Palermo il 17 aprile
								2014 specializzato in Medicina Osteopatica. Esercita la libera professione da 7 anni in ascesa nel panorama
								palermitano e già affermato in piccole realtà come quella Bagherese. Ha permesso a centinaia di sportivi di
								rieducare il gesto atletico e migliorare le loro prestazioni evitando gli infortuni, tratta pazienti di ogni età al
								fine di ridurre algie e riduzioni di mobilità. Attraverso la terapia manuale riduce la sintomatologia di diversi
								disturbi come gastrite, colite e disturbi dell'equilibrio. Ha sviluppato tecniche di auto-trattamento che
								permette ai suo pazienti di mantenere lo stato di salute e benessere a lungo. Il suo obbiettivo è di divulgare i
								benefici del trattamento manuale migliorando la vita di tutti i giorni e la produttività di tutta la società.</p>
							<ul class="info list-unstyled">
								<li><span>Name: </span>ALESSANDRO DI SALVO</li>
								<li><span>Speciality: </span>FISIOTERAPISTA & OSTEOPATA</li>
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
								<span>DIETISTA</span>
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