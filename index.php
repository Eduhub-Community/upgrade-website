<!DOCTYPE html>

<head>
	<!-- meta charec set -->
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Page Title -->
	<title>EduHub Community</title>
	<!-- Meta Description -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Deepak Verma">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Font -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Twitter Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jquery.fancybox  -->
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<!-- animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/main.css">
	<!-- media-queries -->
	<link rel="stylesheet" href="css/media-queries.css">
	<!-- testimonial-section -->
	<link rel="stylesheet" href="css/testimonial.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Blog Posts CSS -->
	<link rel="stylesheet" href="css/blogPosts.css">
	<!-- Modernizer Script for old Browsers -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
	<link rel="manifest" href="favicon_io/site.webmanifest">
	<script src="./js/animation.js"></script>

</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<img src="img/preloader.gif" alt="Preloader">
	</div>
	<!-- end preloader -->

<?php
	include './header.php';
	include './social.php';

?>



	<!--
        Home Slider
        ==================================== -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/banner.jpg" alt="first slide" class="bg">
				<div class="carousel-caption">
					<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">EduHub<span>
							Community</span>!</h2>
					<h3 data-wow-duration="1000ms" class="wow slideInLeft animated">Let's Take<span class="color">
							You</span>
						forward.</h3>
					<ul class="social-links text-center">
						<li>
							<a href="https://www.youtube.com/channel/UCPpG3qqMH_0QDvSzHyjjZJQ">
								<i class="fa fa-youtube"></i>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/eduhub-community">
								<i class="fa fa-linkedin fa-lg"></i>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-github fa-lg"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/eduhub_community/">
								<i class="fa fa-instagram fa-lg"></i>
							</a>
						</li>
					</ul>
					<br>
					<h4>
						<b>Building India's Largest Student Community 🚀</b>
					</h4><br><br>

					<!-- buttons -->
					<div class="social-button">
						<a href="https://chat.whatsapp.com/GMNWoMEOgmh4oZnMb0iAXB">
							<button class="buttonNewWhatsapp">
								<img src="img/whatsapp icon2.png" width="30" />
								Join Us On
								<b>Whatsapp</b>
							</button>
						</a>
						<br>

						<a href="https://discord.gg/pdFu2waA3U">
							<button class="buttonNewTele">
								<img src="img/Discord icon" width="50" />
								Join Us On
								<b>Discord</b>
							</button>
						</a>

						<br>
						<a href="https://t.me/joinchat/0Y0nT-yXjGxmM2Vl">
							<button class="buttonNewDis"><img src="img/teleram icon.png" width="35" />
								Join Us On
								<b>Telegram</b>
							</button>
						</a>
					</div>

				</div>
			</div>
			<div class="item">
				<img src="team.jpg" alt="second slide" class="bg c2">
				<div class="carousel-caption carousel-caption-reverse">
					<div class="type-anim-div">
						<p class="line-1 anim-typewriter" id="line-1"></p>
					</div>
					<div class="social-button">
						<a href="https://chat.whatsapp.com/GMNWoMEOgmh4oZnMb0iAXB">
							<button class="buttonNewWhatsapp">
								<img src="img/whatsapp icon2.png" width="30" />
								Join Us On
								<b>Whatsapp</b>
							</button>
						</a>
						<br>

						<a href="https://discord.gg/pdFu2waA3U">
							<button class="buttonNewTele">
								<img src="img/Discord icon" width="50" />
								Join Us On
								<b>Discord</b>
							</button>
						</a>

						<br>
						<a href="https://t.me/joinchat/0Y0nT-yXjGxmM2Vl">
							<button class="buttonNewDis"><img src="img/teleram icon.png" width="35" />
								Join Us On
								<b>Telegram</b>
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="item ">
				<img src="img/banner.jpg" alt="third slide" class="bg">
				<div class="carousel-caption carousel-caption-reverse">
					<div class="type-anim-div">
						<p class="line-1 anim-typewriter" id="line-2">|</p>
					</div>
					<div class="social-button">
						<a href="https://chat.whatsapp.com/GMNWoMEOgmh4oZnMb0iAXB">
							<button class="buttonNewWhatsapp">
								<img src="img/whatsapp icon2.png" width="30" />
								Join Us On
								<b>Whatsapp</b>
							</button>
						</a>
						<br>

						<a href="https://discord.gg/pdFu2waA3U">
							<button class="buttonNewTele">
								<img src="img/Discord icon" width="50" />
								Join Us On
								<b>Discord</b>
							</button>
						</a>

						<br>
						<a href="https://t.me/joinchat/0Y0nT-yXjGxmM2Vl">
							<button class="buttonNewDis"><img src="img/teleram icon.png" width="35" />
								Join Us On
								<b>Telegram</b>
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="icon-prev" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="icon-next" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- </div> -->

	<section id="features" class="features">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
					<h2>AIM</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-cogs fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Innovate</h3>
							<p>We innovate your ideas and let you explore your potential. Eduhub says your
								skills can be enhanced further if we put them in front of a community or group
								of folks.
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-users fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Connect</h3>
							<p>Connecting with Eduhub converts your ideas and skills into something which is
								titled as productive. Sharing your mind is sharing your worth too.
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-signal fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Grow</h3>
							<p>Combination of innovative ideas and sharing them makes an individual matches
								their mindset to the fullest and eduhub do so for you.
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

			</div>
		</div>
	</section>

	<!--
        End Features
        ==================================== -->

	<!--
        Events
        ==================================== -->

	<section id="works" class="works clearfix">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center">
					<h2>Events</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center">
					<p>A positive attitude causes a chain reaction of positive thoughts, events and
						outcomes. It is a catalyst and it sparks extraordinary results.
					</p>
				</div>

				<!-- <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
							<li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
							<li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
							<li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
						</ul>
					</div> -->

			</div>
		</div>
		<div class="container text-center">
			<div class="project-wrapper">

				<figure class="mix work-item branding">
					<img src="img/works/event-1.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="#">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>All About Internship</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Samarjeet Banik is a R&D intern at Samsung R&D institute. He was an Ex
							Functional Tester intern at DigiLocker. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item web">
					<img src="img/works/event-2.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=IeZ5dY9kZTs&t=36s">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Getting Started by DSA & CP</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Vaibhav Kumar graduated in 2021 KIIT and he is a Competitive Programmer. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item logo-design">
					<img src="img/works/event-3.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=iL-HIv8rV8Q">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Getting Started by Open Source and Git & Github</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Vivek Anand Sharma aka Slim Coder, he is a Software engineer.He has a great
							professional experience in software development. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item photography">
					<img src="img/works/event-4.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=ZNLGdc4Mnj8">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>UI/UX Designing</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Rahul Rana is a Co-Founder of Community Classroom, Product Designer at
							Parallell, a GSSOC Contributor, Microsoft LSA'21, Google DSC mentor and more. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item branding">
					<img src="img/works/event-5.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=h5FjL2A4usE">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>All about Node js</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Roman Frolov is a Senior Software Engineer at Codesphere, ex-CTO of TAU,
							and a winner of Hack Moscow. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item web">
					<img src="img/works/event-6.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=980hbso5uMs">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Roadmap to Flutter Development</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Aditya Thakur is a Flutter Developer with experience in building cross
							platform applications for Android, iOS and web. Winner of IEEE Mandi 'Go Online'
							challenge at Electrothon 3.0 by NIT Hamirpur. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item logo-design">
					<img src="img/works/event-7.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=JesesOrvEr4">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>All about TwittHer</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Shewta Gurnani is 2022 grad from IIT Una. She will be joining Twitter as an
							SDE intern in Identity and Access Management team. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item photography">
					<img src="img/works/event-8.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=tyiKBJp5hOI">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Outreacy Internships</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Vani Chitkara is undergraduate engineering student. She is DSC Lead and
							also Outreachy'21 Intern at OpenArchive. "</p>
					</figcaption>
				</figure>
				<figure class="mix work-item photography">
					<img src="img/works/event-9.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Google Step Intern</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Nishtha Goyal, Google Step'21 Intern, is a pre-final year student at IGDTUW
							in the IT department. "</p>
					</figcaption>
				</figure>
				<figure class="mix work-item photography">
					<img src="img/works/event-10.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" href="https://www.youtube.com/watch?v=HP_6Wv_ygsM&t=3008s">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Opportunities Roadmap for 2nd & 3rd years</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Vibali Joshi is an upcoming SWE INtern'22 @Microsoft, PM intern @CueMath
							and WIT LEad @GDSC-IIEST. "</p>
					</figcaption>
				</figure>
				<figure class="mix work-item photography">
					<img src="img/works/event-11.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" href="#">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Intro to Web Development</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Samarjeet Banik is a R&D intern at Samsung R&D institute. He was an Ex
							Functional Tester intern at DigiLocker. "</p>
					</figcaption>
				</figure>

				<figure class="mix work-item photography">
					<img src="img/works/event-12.jpeg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" href="https://youtu.be/9X2J0Zuanjs">
							<i class="fa fa-youtube-play fa-2x"></i>
						</a>
						<h4>Open Source and Hands On Git and Github Session</h4>
						<h4 style="font-size:15px;">About Speaker</h4>
						<p>" Sahitya Roy is Founder of eduhub community.</p>
					</figcaption>
				</figure>

			</div>

		</div>
	</section>

	<!--
        End Events
        ==================================== -->

	<div class="campus-box">
		<div class="campus-info">
			<h2 class="campus-heading" style="text-align: center;">Become a Campus Leader</h2>
			<br>
			<p class="campus-para" style="text-align: center;">Join us in building a
				reliable and worthy community to empower them to create real-time, live projects
				and get exposure to the industry

			</p>
		</div>
		<div class="apply-div" style="text-align: center;">
			<a class="apply-btn" href="">
				<span>Apply Now</span>
			</a>
		</div>
	</div>

	<!--
        Testimonials
        ==================================== -->

	<section class="testimonial">
		<div class="container">
			<div class="section-title">
				<h2>WHAT DOES THE COMMUNITY SAY ABOUT US?</h2>
			</div>
		</div>
		<div class="testimonials-carousel-wrap">
			<div class="testimonials-carousel">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testi-item">
								<div class="para">
									<i class="fa fa-quote-left quote"></i>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Eduhub community
										helped me realise how great can be my public relations and communication skills.
									</p>
									<br><br><br>
								</div>
								<div class="content">
									<div class="image">
										<img src="img/team/Amar.jpg" alt="XYZ">
									</div>
									<div class="info">
										<div class="name">Amar</div>
										<div class="job">PR Lead</div>
									</div>
								</div>
							</div>
						</div>

						<!--second--->
						<div class="swiper-slide">
							<div class="testi-item">
								<div class="para">
									<i class="fa fa-quote-left quote"></i>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The community members
										are really helpful and cooperative.Each and everyone helped me get better on my
										skills.</p>
									<br><br><br>
								</div>
								<div class="content">
									<div class="image">
										<img src="img/team/Akhil.jpg" alt="XYZ">
									</div>
									<div class="info">
										<div class="name">Akhil</div>
										<div class="job">Outreach Vice Lead</div>
									</div>
								</div>
							</div>
						</div>
						<!--third-->

						<div class="swiper-slide">
							<div class="testi-item">
								<div class="para">
									<i class="fa fa-quote-left quote"></i>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With awesome people
										and great work culture managing the community and doing development have gone
										hand hand for me pretty nicely.</p>
									<br><br><br>
								</div>
								<div class="content">
									<div class="image">
										<img src="img/team/Anuradha.jpg" alt="XYZ">
									</div>
									<div class="info">
										<div class="name">Anuradha
										</div>
										<div class="job">Community Manager | Web Developer</div>
									</div>
								</div>
							</div>
						</div>

						<!--fourth-->
						<div class="swiper-slide">
							<div class="testi-item">
								<div class="para">
									<i class="fa fa-quote-left quote"></i>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I got to know why
										community work has more value by joining Eduhub. The work culture and broad
										mindset here makes me more effient at my skills.</p>
									<br><br><br>
								</div>
								<div class="content">
									<div class="image">
										<img src="img/team/Rudra.jpeg" alt="XYZ">
									</div>
									<div class="info">
										<div class="name">Rudramadhaba</div>
										<div class="job">HR Vice Lead | Web Developer</div>
									</div>
								</div>
							</div>
						</div>

						<!--fifth-->
						<div class="swiper-slide">
							<div class="testi-item">
								<div class="para">
									<i class="fa fa-quote-left quote"></i>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I have never thought
										these community can do such wonders together but the team work has made dreams
										come true.</p>
									<br><br><br>
								</div>
								<div class="content">
									<div class="image">
										<img src="img/team/Sahitya.jpeg" alt="XYZ">
									</div>
									<div class="info">
										<div class="name">Sahitya</div>
										<div class="job">Co Founder</div>
									</div>
								</div>
							</div>
						</div>
						<!--testi end-->

					</div>
				</div>
			</div>

			<div class="tc-pagination"></div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<script src="js/testimonial.js"></script>

	<!--
        End Testimonials
        ==================================== -->

	<!--
        Meet Our Team
        ==================================== -->

	<section class="section-team team">
		<div class="container justify-content-center" id="team">
			<!-- Start Header Section -->
			<div class="row justify-content-center text-center">
				<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
					<h2>Meet Our Team</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
					<p>Teamwork is the ability to work together toward a common vision</p>
				</div>
			</div>

			<!-- / End Header Section -->

			<div class="row text-center">
				<!-- Start Single Person -->
				<div class="col">
					<div class="single-person">
						<div class="person-image">
							<img src="./img/team/Priya.jpeg" alt="">

						</div>
						<div class="person-info">
							<h3 class="full-name">Priya Chandak</h3>
							<span class="speciality">Founder</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col">
					<div class="single-person">
						<div class="person-image">
							<img src="./img/team/Sahitya.jpeg" alt="">

						</div>
						<div class="person-info">
							<h3 class="full-name">Sahitya Roy</h3>
							<span class="speciality">Founder</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col">
					<div class="single-person">
						<div class="person-image">
							<img src="./img/team/Anuradha.jpg" alt="">

						</div>
						<div class="person-info">
							<h3 class="full-name">Anuradha Jadon</h3>
							<span class="speciality">Community Manager
							</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col">
					<div class="single-person">
						<div class="person-image">
							<img src="./img/team/Deepak.jpeg" alt="">

						</div>
						<div class="person-info">
							<h3 class="full-name">Deepak Verma</h3>
							<span class="speciality">Web Developer Lead</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
			</div>
		</div>

		<div class="row text-center ">
			<a href="./1.0/TeamPage.html" class="button1">Know More</a>
		</div>
	</section>

	<!--
        End Meet Our Team
        ==================================== -->

	<!--
        Some fun facts
        ==================================== -->

	<section id="facts" class="facts">
		<div class="parallax-overlay">
			<div class="container">
				<div class="row number-counters">

					<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
						<h2>Some Fun Facts</h2>
						<div class="devider">
							<i class="fa fa-heart-o fa-lg"></i>
						</div>
					</div>

					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
						data-wow-duration="500ms">
						<div class="counters-item">
							<i class="fa fa-user fa-3x"></i>
							<strong data-to="2000">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>Community Members</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
						data-wow-delay="300ms">
						<div class="counters-item">
							<i class="fa fa-calendar-o fa-3x"></i>
							<strong data-to="13">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>Events Organised</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
						data-wow-delay="600ms">
						<div class="counters-item">
							<i class="fa fa-graduation-cap fa-3x"></i>
							<strong data-to="30">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>Campus Leaders</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
						data-wow-delay="900ms">
						<div class="counters-item">
							<i class="fa fa-youtube-play fa-3x"></i>
							<strong data-to="560">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>Followers</p>
						</div>
					</div>
					<!-- end first count item -->

				</div>
			</div>
		</div>
	</section>

	<!--
        End Some fun facts
        ==================================== -->

	<!--
        Blog Posts
        ==================================== -->
	<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
		<h2>Blog Posts</h2>
		<div class="devider">
			<i class="fa fa-heart-o fa-lg"></i>
		</div>
	</div>

	<div class="containerBlog" id="mainBlog">
		<div class="card">
			<div class="card-header">
				<img src="https://github.com/Anjali17aj/eduhub-website/blob/main/img/Eduhubcummunity.png?raw=true.jpg"
					alt="rover" class="card-img-top" />
			</div>
			<div class="card-body">

				<h4>
					Importance of Community:

				</h4>
				<p>
					In the digital era , Eduhub made learning more interactive and collaborative,
					this helps people better engage with the material that they are learning and
					have trouble with and fun opportunities to practice what they learn

				</p>
				<span class="tag tag-teal">Read More</span>
				<div class="user">
					<img src="https://avatars.githubusercontent.com/u/86406506?v=4" alt="user" />
					<div class="user-info">
						<h5>ANJALI</h5>
						<small>October2021</small>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<img src="https://github.com/Anjali17aj/eduhub-website/blob/main/img/c++.png?raw=true.jpg" alt="ballons"
					class="card-img-top" />
			</div>
			<div class="card-body">
				<h4>

					C/C++
				</h4>
				<p>
					Getting into c/c++ Today??? C++ is a general-purpose programming language
					created by Bjarne Stroustrup as an extension of the C programming language.
					<br>
					Happy Coding :D
				</p>
				<span class="tag tag-teal">Read More</span>
				<div class="user">
					<img src="https://lh3.googleusercontent.com/ogw/ADea4I6P4r8RuUDE31P2drAXdXxgClcHIbYSkcN49mYWCw=s83-c-mo"
						alt="user" />
					<div class="user-info">
						<h5>Prachi AJ</h5>
						<small>21st October 2021</small>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<img src="https://github.com/Anjali17aj/eduhub-website/blob/main/img/html.png?raw=true.jpg" alt="city"
					class="card-img-top" />
			</div>
			<div class="card-body">
				<h4>
					HTML :Is HTML used today?
				</h4>
				<p>
					HTML (HyperText Markup Language) : main building block for all website.HTML was
					first written by Tim Berners-Lee in 1993.The markup tells web browsers how to
					display a web page's words and images.
					<br>
					Happy Learning :D

				</p>
				<span class="tag tag-teal">Read More</span>
				<div class="user">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK6odsy2xzkb6vhMfyZ3urn7uTtpuPznvLkQ&usqp=CAU"
						alt="user" />
					<div class="user-info">
						<h5>SR</h5>
						<small>Eduhub</small>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--
        End Blog Posts
        ==================================== -->

	<!--
        Community partner
        ==================================== -->

	<section id="communityPartner" class="communityPartner">
		<div class="container">
			<div class="row mb50">

				<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
					<h2>OUR COMMUNITY PARTNERS</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12"></div>
				<div class="communityPartner__box1 col-lg-4 col-md-3 col-sm-4 col-xs-12  wow fadeInLeft animated"
					data-wow-duration="500ms">
					<div class="communityPartner__box2 ">
						<a href="https://givemycertificate.com/" style="text-decoration: none;" target="_blank">
							<img src="./img/CommunityPartners/givemycertificate.png" class="communityPartner__image "
								alt="">
						</a>
					</div>
					<div class="communityPartner__box2 ">
						<a href="https://dataprotocol.com/" style="text-decoration: none;" target="_blank">
							<img src="./img/CommunityPartners/dataprotocol.jpeg" class="communityPartner__image "
								alt="">
						</a>
					</div>
				</div>
			</div>

			<!--
       End  Community partner
        ==================================== -->

			<!--
      Student partner
        ==================================== -->

			<div class="row mb50">
				<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
					<h2>Our Community is Spread across the globe</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>
				<section id="client-logo">
					<div class="logo">
						<div class="marquee">
							<ul class="marquee-content">
								<li><img src="img/CommunityPartners/abes.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/dataprotocol.jpeg" alt=""></li>
								<!-- <li><img src="img/CommunityPartners/givemycertificate.jpeg" alt=""></li> -->
								<!--<li><img src="img/CommunityPartners/givemycertificate.png" alt=""></li>-->
								<li><img src="img/CommunityPartners/gu.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/iiitb.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/lpu.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/nie.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/rgukt.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/sist.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/ski.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/soa.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/SSIT.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/uem.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/vit.jpeg" alt=""></li>
								<li><img src="img/CommunityPartners/vssut.jpeg" alt=""></li>
							</ul>
						</div>
					</div>
				</section>
			</div>
		</div>

	</section>

	<!--
       End  Student partner
        ==================================== -->

	<!--
        Contact Us
        ==================================== -->

	<section id="contact" class="contact">
		<div class="container">
			<div class="row mb50">

				<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
					<h2>Let’s Connect</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
					<p>Interacting and getting the latest suggestive ways is the key to enhance our
						skills. So connect yourself to EDUHUB COMMUNITY and explore us as well.</p>
				</div>

				<!-- contact address -->
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
					<div class="contact-address">
						<h3>Eduhub Community Wecomes You !</h3>
						<p>Let's take you forward.</p>

					</div>
				</div>
				<!-- end contact address -->

				<!-- contact form -->
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
					data-wow-delay="300ms">
					<div class="contact-form">
						<h3>Say hello!</h3>
						<form action="#" id="contact-form">
							<div class="input-group name-email">
								<div class="input-field">
									<input type="text" name="name" id="name" placeholder="Name" class="form-control">
								</div>
								<div class="input-field">
									<input type="email" name="email" id="email" placeholder="Email"
										class="form-control">
								</div>
							</div>
							<div class="input-group">
								<textarea name="message" id="message" placeholder="Message"
									class="form-control"></textarea>
							</div>
							<div class="input-group">
								<!-- <span id="error" class="d-none text-danger">Form submission failed! Please try again.</span> -->
								<input type="submit" id="form-submit" class="pull-right" value="Send message">
							</div>
						</form>
					</div>
				</div>
				<!-- end contact form -->

				<!-- footer social links -->
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
					data-wow-delay="600ms">
					<ul class="footer-social">

						<!--<li><a href="https://twitter.com/" target="_blank" ><i class="fa fa-twitter fa-2x"></i></a></li>-->
						<li>
							<a href="https://www.youtube.com/channel/UCPpG3qqMH_0QDvSzHyjjZJQ" target="_blank">
								<i class="fa fa-youtube-play fa-2x"></i>
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/eduhubcommunity" target="_blank">
								<i class="fa fa-facebook fa-2x"></i>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/eduhub-community">
								<i class="fa fa-linkedin fa-2x" target="_blank"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/eduhub_community" target="_blank">
								<i class="fa fa-instagram fa-2x"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- end footer social links -->

			</div>
		</div>

	</section>

	<!--
        End Contact Us
        ==================================== -->

	<footer id="footer" class="footer text-center">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
					<div class="footer-single">
						<img src="img/logo.png" alt="" style="height:150px">
						<p>Come and Join our community to learn, Contribute, and Grow.

						</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
					data-wow-delay="300ms">
					<div class="footer-single">
						<h6>Subscribe
						</h6>
						<form action="newsletters.php" method="POST" class="subscribe">
							<input name="email" type="email" placeholder="Enter your Email address" id="subscribe"
								style="outline: none;" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								required>
							<input name="submit" type="submit" value="&#8594;" id="subs">
						</form>
						<p>Stay updated for our upcoming events.
						</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
					data-wow-delay="600ms">
					<div class="footer-single">
						<h6>Social Media's</h6>
						<ul>
							<li>
								<a href="https://www.linkedin.com/company/eduhub-community" target="_blank">Linkedin</a>
							</li>
							<li>
								<a href="https://www.instagram.com/eduhub_community/" target="_blank">Instagram</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCPpG3qqMH_0QDvSzHyjjZJQ"
									target="_blank">Youtube</a>
							</li>
							<li>
								<a href="https://github.com/Eduhub-Community" target="_blank">Github</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
					data-wow-delay="900ms">
					<div class="footer-single">
						<h6>Support</h6>
						<ul>
							<li>
								<a href="#contact">Contact Us</a>
							</li>
							<li>
								<a href="#team">Our Team</a>
							</li>
							<li>
								<a href="#features">Our Aim</a>
							</li>
							<li>
								<a href="#works">Events</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright text-center">
						Copyright © 2021
						<a href="">EduHub Community</a>.
					</p>
				</div>
			</div>
		</div>
	</footer>

	<a href="javascript:void(0);" id="back-top">
		<i class="fa fa-angle-up fa-3x"></i>
	</a>

	<!-- Essential jQuery Plugins
		================================================== -->
	<!-- Main jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Single Page Nav -->
	<script src="js/jquery.singlePageNav.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Twitter Bootstrap -->

	<!-- jquery.fancybox.pack -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- jquery.mixitup.min -->
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- jquery.parallax -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countTo -->
	<script src="js/jquery-countTo.js"></script>
	<!-- jquery.appear -->
	<script src="js/jquery.appear.js"></script>
	<!-- Contact form validation -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
	<!-- Google Map -->
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
	<!-- jquery easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- jquery easing -->
	<script src="js/wow.min.js"></script>

	<!-- emailjs cdn -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
	<!-- emailjs cdn -->

	<script>
		var wow = new WOW({
			boxClass: 'wow', // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 120, // distance to the element when triggering the animation (default is 0)
			mobile: false, // trigger animations on mobile devices (default is true)
			live: true // act on asynchronously loaded content (default is true)
		});
		wow.init();
	</script>
	<!-- Custom Functions -->
	<script src="js/custom.js"></script>

	<script type="text/javascript">
		$(function () {
			/* ========================================================================= */
			/*	Contact Form
			/* ========================================================================= */

			$('#contact-form').validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required: true
					}
				},
				messages: {
					name: {
						required: "come on, you have a name don't you?",
						minlength: "your name must consist of at least 2 characters"
					},
					email: {
						required: "no email, no message"
					},
					message: {
						required: "um...yea, you have to write something to send this form.",
						minlength: "thats all? really?"
					}
				},
				submitHandler: function (form) {
					// <!-- emailjs to mail contact form data -->
					$(form)
						.submit(function (e) {
							emailjs.init("PASTE YOUR USER ID HERE");

							emailjs
								.sendForm('contact_service', 'template_contact', '#contact-form')
								.then(function (response) {
									//    console.log('SUCCESS!', response.status, response.text);
									$('#contact-form :input').attr('disabled', 'disabled');
									$(form).html("<span id='success' class='text-success'>Thanks for contacting us! We will be in " +
										"touch with you shortly.</span>");
									document
										.getElementById("contact-form")
										.reset();
									// alert("Form Submitted Successfully");
								}, function (error) {
									$(form)
										.fadeTo("slow", 0.15, function () {
											$('#error').fadeIn();
										});
								});
							e.preventDefault();
						});
					// <!-- emailjs to mail contact form data -->
				}
			});
		});
	</script>
</body>

</html>