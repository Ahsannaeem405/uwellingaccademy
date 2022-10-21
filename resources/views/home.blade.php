@extends('theme.master')
@section('title', 'Online Courses')
@section('content')

@include('admin.message')
<!-- categories-tab start-->
{{-- <section id="categories-tab" class="categories-tab-main-block">
    <div class="container">
        <div id="categories-tab-slider" class="categories-tab-block owl-carousel">
            @php
                $category = App\Categories::orderBy('position','ASC')->get();
            @endphp
            @foreach($category as $cat)
                @if($cat->status == 1)
                <div class="item categories-tab-dtl">
                    <a href="{{ route('category.page',$cat->id) }}" title="{{ $cat->title }}"><i class="fa {{ $cat->icon }}"></i>{{ $cat->title }}</a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>--}}
<!-- categories-tab end-->
@php
$sliders = App\Slider::orderBy('position', 'ASC')->get();
@endphp
@if(isset($sliders))



<!-- custom design -->
<!-- custom design -->
<section class="home demo2" id="home">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="home-content display-table">
                    <div class="display-table-cell">
                        <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Welcome to </br>Uwelling Accademy</h2>
                        <h4 class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                            <p>PROVA TUTTI I MERAVIGLIOSI SERVIZI E SCEGLI TRA</p>
                                <h6>	
                                    <p>CORSI</p>
                                    <p>COACHING</p>
                                    <p>CLASSI</p>
                                </h6>
                        </h4>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">UWELLING ACCADEMY NASCE DAL DESIRERIO DI OFFRIRE SERVIZI UNICI PER CREARE MENTI E CORPI PIU CONSAPEVOLI DEL PROPRIO BENESSERE</p>
                        <div class="my-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s">
                            <a href="about-us.html" class="main-btn"><span>Learn More</span></a>
                            <a href="#contact" class="main-btn custom-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-7">
                <div class="home-video">
                <video width="700" height="auto" controls autoplay loop>
                        <source src="images/video.mp4" type="video/mp4">
                        <source src="images/video.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                </video> 
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- ========== End Home ========== -->
		
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
								<p>Un team di professionisti esperti in coaching in vari settori ti riprogrammeranno per consentirti di essere autonomo a 360°, per riprendere in mano la tua vita ed aumentare le tue performance sotto ogni punto di vista.</p>
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
								<p>Verrai sottoposto a varie metodologie di riprogrammazione sul fronte sia mentale che fisico per raggiungere la tua versione migliore ed ottenere un boost di performance lavorativo e personale.</p>
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
								<p>Avrai accesso a diverse classi d’allenamento per ricondizionare il tuo corpo e la tua psiche al benessere: scegli le discipline che più fanno al caso tuo.</p>
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
								<p>Potrai richiedere o usufruire di percorsi personalizzati per raggiungere specifiche skill su ambiti di tuo interesse maggiore.</p>
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
								<p>Potrai accedere ai nostri corsi sottoscrivendo una VIP MEMBERSHIP per poter visione tutto il materiale a disposizione nella nostra piattaforma.</p>
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
								<p>Potrai partecipare ai nostri eventi esclusivi per progredire con il tuo percorso evolutivo da HOMO SAPIENS ad HOMO NOVUS.</p>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End Services ========== -->
        
        <!-- ========== Start About Us ========== -->
        
        <section class="about-us" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 info">
                        <div class="about-info">
							<h3>VISION DI UWELLING ACCADEMY</h3>
							<h4>IN COSA CREDIAMO E PERCHE' LO FACCIAMO</h4>
                            <div class="about-progress">
								<div class="progress-container">
									<span class="percent" style="left: calc(90% - 21px);">90%</span>
									<h4>MENTALITA' VINCENTE</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="progress-container">
									<span class="percent" style="left: calc(85% - 21px);">85%</span>
									<h4>FLESSIBILITA' E PERFORMANCE</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="progress-container">
									<span class="percent" style="left: calc(75% - 21px);">75%</span>
									<h4>SKILL DI AUTOTRATTAMENTO E</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="progress-container">
									<span class="percent" style="left: calc(70% - 21px);">70%</span>
									<h4>PREVENZIONE DOLORI</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<a href="#" target="_blank" class="main-btn"><span>Read More</span></a>
                        </div>
                    </div>
					<div class="col-lg-6 image">
                        <div class="about-image">
                            <img class="img-fluid" src="images/custom/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End About Us ========== -->

		<!-- ========== Start Schedule ========== -->
        
		<section class="class-schedule" id="class-schedule">
			<div class="container">
				<div class="main-title text-center">
					<span class="separator">

					</span>
					<h2>Class Schedule</h2>
				</div>
				<div class="filter-menu">
					<ul class="list-filter list-unstyled">
						<li class="active" data-filter=".all" data-type=".all">All Classes</li>
						<li data-filter=".body-balance" data-type=".body-balance">Class 1</li>
						<li data-filter=".hatha-yoga" data-type=".hatha-yoga">Class 2</li>
						<li data-filter=".children-yoga"data-type=".children-yoga">Class 3</li>
						<li data-filter=".pilates" data-type=".pilates">Class 4</li>
						<li data-filter=".yoga-dance" data-type=".yoga-dance">Class 5</li>
					</ul>
				</div>
				<div class="timetable text-center d-none d-lg-block">
					<table>
						<tr class="table-head">
							<td></td>
							<td>
								Monday
							</td>
							<td>
								Tuesday
							</td>
							<td>
								Wednesday
							</td>
							<td>
								Thursday
							</td>
							<td>
								Friday
							</td>
							<td>
								Saturday
							</td>
							<td>
								Sunday
							</td>
						</tr>
						<tr>
							<td class="time">
								09.00
							</td>
							<td class="body-balance all animated fadeIn">
								<h4>Class 1</h4>
								<span>9:00 - 10:00</span>
								<h5>Elina Ekman</h5>
							</td>
							<td></td>
							<td class="hatha-yoga all animated fadeIn">
								<h4>Class 2</h4>
								<span>9:00 - 10:00</span>
								<h5>Jack Hakman</h5>
							</td>
							<td class="children-yoga all animated fadeIn">
								<h4>Class 3</h4>
								<span>9:00 - 10:00</span>
								<h5>Razan Smith</h5>
							</td>
							<td class="pilates all animated fadeIn">
								<h4>Class 4</h4>
								<span>9:00 - 10:00</span>
								<h5>Peter Doe</h5>
							</td>
							<td></td>
							<td class="yoga-dance all animated fadeIn">
								<h4>Class 5</h4>
								<span>9:00 - 10:00</span>
								<h5>Lily Garner</h5>
							</td>
						</tr>
						<tr>
							<td class="time">
								10.00
							</td>
							<td></td>
							<td class="body-balance all animated fadeIn">
								<h4>Class 1</h4>
								<span>10:00 - 11:00</span>
								<h5>Elina Ekman</h5>
							</td>
							<td class="yoga-dance all animated fadeIn">
								<h4>Class 5</h4>
								<span>10:00 - 11:00</span>
								<h5>Lily Garner</h5>
							</td>
							<td></td>
							<td class="hatha-yoga all animated fadeIn">
								<h4>Class 2</h4>
								<span>10:00 - 11:00</span>
								<h5>Jack Hakman</h5>
							</td>
							<td class="pilates all animated fadeIn">
								<h4>Class 4</h4>
								<span>10:00 - 11:00</span>
								<h5>Peter Doe</h5>
							</td>
							<td></td>
						</tr>
						<tr>
							<td class="time">
								11.00
							</td>
							<td class="yoga-dance all animated fadeIn">
								<h4>Class 5</h4>
								<span>11:00 - 12:00</span>
								<h5>Lily Garner</h5>
							</td>
							<td class="hatha-yoga all animated fadeIn">
								<h4>Class 2</h4>
								<span>11:00 - 12:00</span>
								<h5>Jack Hakman</h5>
							</td>
							<td></td>
							<td class="body-balance all animated fadeIn">
								<h4>Class 1</h4>
								<span>11:00 - 12:00</span>
								<h5>Elina Ekman</h5>
							</td>
							<td></td>
							<td class="hatha-yoga all animated fadeIn">
								<h4>Class 2</h4>
								<span>11:00 - 12:00</span>
								<h5>Jack Hakman</h5>
							</td>
							<td class="yoga-dance all animated fadeIn">
								<h4>Class 5</h4>
								<span>11:00 - 12:00</span>
								<h5>Lily Garner</h5>
							</td>
						</tr>
						<tr>
							<td class="time">
								12.00
							</td>
							<td></td>
							<td class="body-balance all animated fadeIn">
								<h4>Class 1</h4>
								<span>12:00 - 13:00</span>
								<h5>Elina Ekman</h5>
							</td>
							<td class="children-yoga all animated fadeIn">
								<h4>Class 3</h4>
								<span>12:00 - 13:00</span>
								<h5>Razan Smith</h5>
							</td>
							<td></td>
							<td class="pilates all animated fadeIn">
								<h4>Class 4</h4>
								<span>12:00 - 13:00</span>
								<h5>Peter Doe</h5>
							</td>
							<td></td>
							<td class="body-balance all animated fadeIn">
								<h4>Class 1</h4>
								<span>12:00 - 13:00</span>
								<h5>Elina Ekman</h5>
							</td>
						</tr>
					</table>
				</div>
				<div class="timetable-small d-block d-lg-none">
					<div class="group-list">
						<h3>Monday</h3>
						<ul class="list-unstyled">
							<li class="body-balance all">
								<h4>Class 5</h4>
								<span>09:00 - 10:00</span>
							</li>
							<li class="yoga-dance all">
								<h4>Class 2</h4>
								<span>11:00 - 12:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Tuesday</h3>
						<ul class="list-unstyled">
							<li class="body-balance all">
								<h4>Class 1</h4>
								<span>10:00 - 11:00</span>
							</li>
							<li class="hatha-yoga all">
								<h4>Class 3</h4>
								<span>11:00 - 12:00</span>
							</li>
							<li class="body-balance all">
								<h4>Class 4</h4>
								<span>12:00 - 13:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Wednesday</h3>
						<ul class="list-unstyled">
							<li class="hatha-yoga all">
								<h4>Class 1</h4>
								<span>09:00 - 10:00</span>
							</li>
							<li class="yoga-dance all">
								<h4>Class 2</h4>
								<span>10:00 - 11:00</span>
							</li>
							<li class="children-yoga all">
								<h4>Class 4</h4>
								<span>12:00 - 13:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Thursday</h3>
						<ul class="list-unstyled">
							<li class="children-yoga all">
								<h4>Class 4</h4>
								<span>09:00 - 10:00</span>
							</li>
							<li class="body-balance all">
								<h4>Class 5</h4>
								<span>11:00 - 12:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Friday</h3>
						<ul class="list-unstyled">
							<li class="pilates all">
								<h4>Class 3</h4>
								<span>09:00 - 10:00</span>
							</li>
							<li class="hatha-yoga all">
								<h4>Class 2</h4>
								<span>10:00 - 11:00</span>
							</li>
							<li class="pilates all">
								<h4>Class 3</h4>
								<span>12:00 - 13:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Saturday</h3>
						<ul class="list-unstyled">
							<li class="pilates all">
								<h4>Class 3</h4>
								<span>10:00 - 11:00</span>
							</li>
							<li class="hatha-yoga all">
								<h4>Class 2</h4>
								<span>11:00 - 12:00</span>
							</li>
						</ul>
					</div>
					<div class="group-list">
						<h3>Sunday</h3>
						<ul class="list-unstyled">
							<li class="yoga-dance all">
								<h4>Class 1</h4>
								<span>09:00 - 10:00</span>
							</li>
							<li class="yoga-dance all">
								<h4>Class 2</h4>
								<span>11:00 - 12:00</span>
							</li>
							<li class="body-balance all"> 
								<h4>Class 3</h4>
								<span>12:00 - 13:00</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== End Schedule ========== -->
				
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
		
		<!-- ========== Start Events ========== -->
		
		<section class="events" id="events">
			<div class="container">
				<div class="main-title text-center">
					<span class="separator">

					</span>
					<h2>Upcoming Events</h2>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="event">
							<div class="event-img">
								<img src="images/custom/1.jpg" alt="">
							</div>
							<div class="event-content">
								<div class="event-title">
									<a href="#"><h4>LIVE EVENT 21/01/2023</h4></a>
								</div>
								<ul class="event-info list-unstyled">
									<li class="time"><i class="flaticon-clock-circular-outline"></i>8:00 am 3:00 pm</li>
									<li><i class="flaticon-placeholder"></i>New York City</li>
								</ul>
								<div class="event-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                                </div>
								<a class="event-more" href="#">Continue Reading</a>
								<div class="event-date"><span>18</span> Feb</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="event">
							<div class="event-img">
								<img src="images/custom/2.jpg" alt="">
							</div>
							<div class="event-content">
								<div class="event-title">
									<a href="#"><h4>LIVE EVENT 22/01/2023</h4></a>
								</div>
								<ul class="event-info list-unstyled">
									<li class="time"><i class="flaticon-clock-circular-outline"></i>8:00 am 3:00 pm</li>
									<li><i class="flaticon-placeholder"></i>New York City</li>
								</ul>
								<div class="event-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                                </div>
								<a class="event-more" href="#">Continue Reading</a>
								<div class="event-date"><span>20</span> Feb</div>
							</div>
						</div>
					</div>
				</div>
				<div class="my-btn text-center">
					<a href="#" target="_blank" class="main-btn"><span>All Events</span></a>
				</div>
			</div>
		</section>
		
		<!-- ========== End Events ========== -->
		
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
                                <img src="images/custom/1.jpg" class="img-fluid" alt="">
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
                                <img src="images/custom/2.jpeg" class="img-fluid" alt="">
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
		
		<!-- ========== Start Pricing ========== -->
        
        <!-- <section class="pricing" id="pricing">
            <div class="container">
				<div class="main-title text-center">
					<span class="separator">

					</span>
					<h2>HIGHLIGHTS COURSES, COACHING AND CLASSES</h2>
				</div>
                <div class="pricing-plans">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-plan">
								<div class="pricing-head">
									<div class="pricing-title">
										<h2>HERE COURSE 1</h2>
									</div>
									<div class="pricing-price">
										<p><span class="up">$</span> <span class="price">50</span> <span class="down">/Mo</span></p>
									</div>
								</div>
                                <ul class="pricing-features list-unstyled">
                                    <li>Special Class</li>
                                    <li>Free Tutorials</li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="main-btn custom-btn"><span>Buy Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-plan two">
                                <div class="pricing-head">

									<div class="pricing-title">
										<h2>HERE COACHING 1</h2>
									</div>
									<div class="pricing-price">
										<p><span class="up">$</span> <span class="price">100</span> <span class="down">/Mo</span></p>
									</div>
								</div>
                                <ul class="pricing-features list-unstyled">
                                    <li>Special Class</li>
                                    <li>Free Tutorials</li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="main-btn"><span>Buy Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                            <div class="pricing-plan">
                                <div class="pricing-head">
									<div class="pricing-title">
										<h2>HERE CLASS 1</h2>
									</div>
									<div class="pricing-price">
										<p><span class="up">$</span> <span class="price">170</span> <span class="down">/Mo</span></p>
									</div>
								</div>
                                <ul class="pricing-features list-unstyled">
                                    <li>Special Class</li>
                                    <li>Free Tutorials</li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="main-btn custom-btn"><span>Buy Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        
        <!-- ========== End Pricing ========== -->
        
        <!-- ========== Start Testimonials ========== -->
        
        <section id="testimonials" class="testimonials">
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
								<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut."</p>
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
								<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut."</p>
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
									<img src="images/custom/3.jpg" alt="client">
								</div>
								<div class="client-details">
									<h6>Silvia Hatmun</h6>
								</div>
							</div>
							<div class="description">
								<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut."</p>
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
								<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut."</p>
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
        
        <!-- ========== Start Contact ========== -->
        
        <!-- <section class="contact" id="contact">
            <div class="container">
				<div class="main-title text-center">
					<span class="separator">
					</span>
					<h2>CONTACT US</h2>
				</div>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <form class="contact-form" action="https://hasnaanajmi.com/env/Pranayama/mail.php" method="post">
                            <div class="form-group">
								<input type="text" class="form-control" id="name" name="name" required value="" onkeyup="this.setAttribute('value', this.value);">
                                <label for="name">Name</label>
                                <span class="input-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" required value="" onkeyup="this.setAttribute('value', this.value);">
                                <label for="email">Email</label>
                                <span class="input-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" required value="" onkeyup="this.setAttribute('value', this.value);">
                                <label for="subject">Subject</label>
                                <span class="input-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" required data-value="" onkeyup="this.setAttribute('data-value', this.value);"></textarea>
                                <label for="message">Your Message</label>
                                <span class="input-border"></span>
                            </div>
                            Button Send Message 
                            <button class="contact-btn main-btn" type="submit" name="send"><span>Send Message</span></button>
							Form Message 
							<div class="form-message text-center"><span></span></div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        
        <!-- ========== End Contact ========== -->
        
        <!-- ========== Start Newsletter ========== -->
		
		<!-- <section class="newsletter">
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
									<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
									<button class="main-btn" type="submit" name="send"><span>Subscribe</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
        <!-- ========== End Newsletter ========== -->
<!-- custom design -->
<!-- custom design -->


<!-- home end -->
<!-- learning-work start -->


@endsection

@section('custom-script')
<script>
    (function($) {
      "use strict";
        $(function() {
           $( "#home-tab" ).trigger( "click" );
        });
    })(jQuery);

    function showtab(id){
        $.ajax({
            type : 'GET',
            url  : '{{ url('/tabcontent') }}/'+id,
            dataType  : 'html',
            success : function(data){

                $('#tabShow').html('');
                $('#tabShow').append(data);
            }
        });
    }
</script>

@endsection
