<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>World Robotic For Peace</title>
	<link rel="icon" href="client/images/favicon.ico" type="image/ico" />
	<link rel="stylesheet" href="client/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="client/custom/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="client/custom/js/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-sm fixed-top black">
		<div class="container">
			<a href="/" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
				<div class="logo-nav"></div>
			</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-edit"
							onclick="$('#home-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});"
							style="color: #fff;">Home
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-edit"
							onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});"
							style="color: #fff;">About
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-edit"
							onclick="$('#kompetisi-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});"
							style="color: #fff;">Events
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-edit"
							onclick="$('#kontak-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});"
							style="color: #fff;">Contact
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ base_url('login') }}"><button class="btn px-5 signup">Login/Register</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header id="home-section">
		<div class="container">
			<div class="row">
				<div class="col col-header">
					<div class="head">
						<div class="bendera"></div>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col col-header">
					<div class="title"></div>
				</div>
			</div>
			<div class="row">
				<div class="col col-header">
					<div class="head">
						<!-- <div class="bendera"></div> -->
						<!-- <b>10th</b> <span class="idea">World Robotic For Peace</span>
						<p class="small_font">In <span class="idea">Development</span></p>
						<p class="idea" style="font-size: 20px">Maulana Malik Ibrahim State Islamic University Malang </p> -->
					</div>
					<div class="tagline">
						<p>
							Collaboration With : <br>
							<span class="text-bold">International Robotic Training and Competition</span>
						</p>
					</div>
					<!-- <div class="row row2">
						<div class="col">
							<a href="client/rulebook/RULEBOOK Credia.id.pdf">
								<img class="shadow" src="client/images/home/rulebook-min.png" alt="" width="260px">
							</a>
						</div>
					</div> -->
					<div class="row row2">
						<div class="col sponsor">
							<p>Support By :</p>
							<div class="sponsors"></div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</header>

	<section id="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-test">
					<!-- <img class="col-test-img" src="client/images/about-2.png" alt=""> -->
				</div>
				<div class="col-md-6 col-about-2">
					<h2 class="about2"><span class="text-nexa-light">About</span> World Robotic For Peace</h2>
					<!-- Creative Idea in Development(Credia.id) merupakan kompetisi Nasional dalam rangkaian event Malang Startup Summit 2019 yang diselenggarakan oleh Indonesia Startup Founder(IDSF) bekerjasama dengan Multimedia & Robotic Creative (Motive) Studio. MSS 2019 adalah event pekan startup pertama kali dan terbesar di kota malang. setelah melewati beberapa pre event, MSS 2019 hadir kembali dengan main event kompetisi bertajuk Creative Idea in Development, Startup Exhibition, Startup Class, dan Talkshow. kompetisi Credia.id mengangkat tema "Be a Smart People in Facing Industry 4.0; Creative Faster, Innovative Better" dengan beberapa cabang lomba yakni IOT Development, Game Development, Autonomus Sumo Robotic, Line Follower Robotic, dan Cinematography Competition. -->
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  
				</div>
				<!-- <button class="btn px-4 btn-primary btn-about">DAFTAR SEMINAR DISINI</button> -->
			</div>
		</div>
	</section>
	<section id="">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-kompetisi">
					<center>
						<h1 class="h1-kompetisi"><span class="text-nexa-light">Timeline</span> Events</h1>
						<hr class="hr-kompetisi"><!-- 
				</div>
			</div>
			<div class="row"> -->
				<!-- <div style="margin-top: 100px"> -->
                    <!-- <center><h1 class="h1-kompetisi">Timeline</h1> -->
                    <!-- <hr class="hr-kompetisi"> -->
                    </center>
                    
                    <div class="row">
                        <div id="timeline">
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-left">
                                </div>
                                <div class="col-sm-12 col-md-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Registrasi, Pembayaran dan pengumpulan proposal.</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 September – 10 Oktober 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-right">
                                    
                                </div>
                                <div class="offset-md-6 col-sm-12 col-md-6   timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Pengumuman Tahap Penyisihan</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-left">
                                    
                                </div>
                                <div class="col-sm-12 col-md-6   timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Realisasi Karya</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober – 25 November 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-right">
                                    
                                </div>
                                <div class="offset-md-6 col-sm-12 col-md-6  timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Pengumpulan Video Teaser</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober - 28 November 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-left">
                                    
                                </div>
                                <div class="col-sm-12 col-md-6   timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Realisasi Karya</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober – 25 November 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-right">
                                    
                                </div>
                                <div class="offset-md-6 col-sm-12 col-md-6 timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Pengumpulan Video Teaser</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober - 28 November 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-left">
                                    
                                </div>
                                <div class="col-sm-12 col-md-6   timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Konfirmasi kehadiran dalam expo dan penjurian final</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">25 November 2019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-movement">
                                <div class="timeline-badge center-right">
                                    
                                </div>
                                <div class="offset-md-6 col-sm-12 col-md-6 timeline-item">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="timeline-panel credits  anim animate fadeInLeft">
                                                <ul class="timeline-panel-ul">
                                                    <div class="righting-wrap">
                                                        <li><a href="#" class="importo">Expo dan penjurian</a></li>
                                                        <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 Desember 20192019</span></span> </li>
                                                    </div>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   

			</div>
		</div>
	</section>
	<section id="">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-kompetisi">
					<center>
						<h1 class="h1-kompetisi"><span class="text-nexa-light">Video</span> Events</h1>
						<hr class="hr-kompetisi">
				</div>
			</div>
			<div class="row">
    <iframe width="100%" height="420px" src="https://www.youtube.com/embed/t5944G3GEg0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			</div>
		</div>
	</section>
	<section id="kompetisi-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-kompetisi">
					<center>
						<h1 class="h1-kompetisi"><span class="text-nexa-light">Our</span> Events</h1>
						<hr class="hr-kompetisi">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/ico_iot-min.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Internet Of Things</h4>
							<h2 class="text-total-hadiah">Total Hadiah Rp. 13.750.000</h2>
						<a href="{{base_url('internetOfThings')}}"><button class="btn btn-light btn-kompetisi">Read More...</button></a>												
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/ico_game-min.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Game Development</h4>
							<h2 class="text-total-hadiah">Total Hadiah Rp. 10.750.000</h2>
						<a href="{{base_url('game-development')}}"><button class="btn btn-light btn-kompetisi">Read More...</button></a>						
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/ico_sumo-min.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Sumo Robot</h4>
							<h2 class="text-total-hadiah">Total Hadiah Rp. 6.000.000</h2>
							<a href="{{ base_url('sumo-robot') }}"><button class="btn btn-light btn-kompetisi">Read
									More...</button></a>
								
						</div>
					</div>
				</div>
<!-- 				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/ico_linefollower-min.png" alt="{{base_url('line-follower')}}" style="max-height: 100px;">
							<h4 class="card-title">Line Follower</h4>
							<h2 class="text-total-hadiah">Total Hadiah Rp. 6.000.000</h2>
							<a href="{{ base_url('line-follower') }}"><button class="btn btn-light btn-kompetisi">Read
									More...</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/ico_cinema-min.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Cinematography</h4>
							<h2 class="text-total-hadiah">Total Hadiah Rp. 9.750.000</h2>
						<a href="{{base_url('cinematography')}}"><button class="btn btn-light btn-kompetisi">Read More...</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<img src="client/images/home/startup summit.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Malang Startup Summit</h4>
							<h2 class="text-total-hadiah">Startup Class & Exhibition</h2>
						<a href="{{base_url('startupSummit')}}"><button class="btn btn-light btn-kompetisi">Read More...</button></a>
						</div>
					</div>
				</div>
				<!-- </div> --> -->
			</div>
		</div>
	</section>
	<section id="gallery-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-kompetisi">
                        <center><h1 class="h1-kompetisi">Gallery</h1>
                        <hr class="hr-kompetisi">
                        </center>
                    </div>
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="client/images/home/default_image-min.png" alt="" style="max-height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<section id="kontak-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-kompetisi">
					<h1 class="h1-kompetisi"><span class="text-nexa-light">Contact</span> Us</h1>
					<hr class="hr-kompetisi">
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<h3 class="text-center send">Send your feedback</h3>
							<div class="form-kontak">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" name="subject" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea class="textarea form-control" name="pesan"></textarea>
								</div>
								<button type="submit" class="btn btn-img">
									<img src="/client/images/home/ico_submit-min.png" alt="" width="200px">
								</button>
							</div>
							<div class="sosmed">
								<ul class="list-sosmed">
									<li>
										<a href="https://www.facebook.com/credia.id2019">
											<img src="/client/images/home/ico_fb-min.png" width="30px" alt="">
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/credia.id">
											<img src="/client/images/home/ico_insta-min.png" width="30px" alt="">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="/client/images/home/ico_web-min.png" width="30px" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-map">
					<!-- Start Google Map -->
					<section id="mu-google-map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d987.8654924181109!2d112.60658098209555!3d-7.951118966323383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78826fc57f14d9%3A0x938b1d774acf884f!2sFakultas+Sains+dan+Teknolgi+UIN+Maulana+Malik+Ibrahim+Malang!5e0!3m2!1sid!2sid!4v1548318488445"
							width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
					</section>
					<!-- End Google Map -->
				</div>
			</div>
		</div>
	</section>
	<section id="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-kompetisi">
					<div>
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		// // Scrolling Effect
		$(window).on("scroll", function () {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
				$('.logo-nav').addClass('logo-nav-white');
			} else {
				// $('nav').removeClass('black');
				$('.logo-nav').removeClass('logo-nav-white');
			}
		})

	</script>
	<script src="client/custom/js/jquery.min.js"></script>
	<script src="client/custom/js/popper.min.js"></script>
	<script src="client/custom/js/bootstrap.min.js"></script>
	<script src="client/custom/js/animatescroll.js"></script>
	<script src="client/custom/js/main.js"></script>
	<script>
		window.sr = ScrollReveal({
			reset: true
		});
		sr.reveal('.col-header', {
			duration: 2000,
			origin: 'left',
			distance: '200px'
		});
		sr.reveal('.col-test', {
			duration: 2000,
			origin: 'left',
			distance: '200px'
		});
		sr.reveal('.col-about-2', {
			duration: 2000,
			delay: 500,
			origin: 'bottom',
			distance: '200px'
		});
		sr.reveal('.col-kompetisi', {
			duration: 2000,
			origin: 'left',
			distance: '200px'
		});
		sr.reveal('.card-columns', {
			duration: 2000,
			delay: 500,
			origin: 'bottom',
			distance: '100px'
		});
		sr.reveal('.col-acara', {
			duration: 2000,
			origin: 'left',
			distance: '200px'
		});
		sr.reveal('.video-content', {
			duration: 2000,
			delay: 500,
			origin: 'bottom',
			distance: '200px'
		});
		sr.reveal('.col-timeline', {
			duration: 2000,
			origin: 'top',
			distance: '100px'
		});
		sr.reveal('.text-timeline', {
			duration: 2000,
			delay: 500,
			origin: 'left',
			distance: '100px'
		});

	</script>
</body>

</html>
