@extends('Frontend.Layouts.app')

@section('content')

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<section class="page_slider main_slider corner-bottom static">
				<div class="flexslider" data-nav="true" data-dots="false">
					<div class="ds text-left">
						<span class="flexslider-overlay"></span>
						<span class="embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/gY4fETApNh4?feature=oembed&amp;showinfo=0&amp;autoplay=1&amp;controls=0&amp;mute=1&amp;loop=1&amp;playlist=gY4fETApNh4" allowfullscreen=""></iframe>
						</span>
						<div class="container">
							<div class="row">
								<div class="col-12 itro_slider">
									<div class="intro_layers_wrapper">
										<div class="intro_layers">
											<div class="intro_layer animate" data-animation="fadeInDown">
												<h2 class="text-uppercase intro_featured_word">
													Jason
												</h2>
											</div>
											<div class="intro_layer animate" data-animation="fadeInUp">
												<h2 class="text-uppercase intro_featured_word name">
													Anders
												</h2>
											</div>
											<div class="intro_layer animate" data-animation="fadeIn">
												<p class="text-uppercase intro_after_featured_word">entrepreneur</p>
											</div>
											<div class="intro_layer page-bottom animate" data-animation="pullDown">
												<a class="btn btn-maincolor" href="about.html">Hire me</a>
											</div>
										</div>
										<!-- eof .intro_layers -->
										<div class="intro-layer  z-index-10">
											<div class="slide-social-icons float-right">
												<div class="animate" data-animation="fadeInDown">
													<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
												</div>
												<div class="animate" data-animation="fadeInDown">
													<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
												</div>
												<div class="animate" data-animation="fadeInDown">
													<a href="https://www.instagram.com/" class="fa fa-instagram last"></a>
												</div>
											</div>
										</div>
									</div>
									<!-- eof .intro_layers_wrapper -->
								</div>
								<!-- eof .col-* -->
								<div class="flexslider-bottom d-none d-xl-block">
									<a href="#about" class="mouse-button animated floating"></a>
								</div>
							</div>
							<!-- eof .row -->
						</div>
						<!-- eof .container -->
					</div>
				</div>
				<!-- eof flexslider -->
			</section>


			<section class="s-pt-30 ls about-main" id="about">
				<div class="container">
					<div class="row">
						<div class="divider-30"></div>
						<div class="col-md-8 offset-md-2">
							<div class="main-content text-center">
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div class="divider-55"></div>
								<h1>
									What I Can Do
								</h1>
								<p>
									Strategy, design and a bit of magic. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="serices-main ls s-pt-30 s-pt-md-50">
				<div class="container">
					<div class="row c-gutter-60 c-mb-60 c-mb-xl-0">
						<div class="col-lg-4 animate" data-animation="fadeInUp">
							<div class="icon-box box-shadow bordered text-center p-30">
								<div class="item-icon">
									<img src="images/1.png" alt="">
								</div>
								<h6>
									<a href="#">Explore</a>
								</h6>

								<p>
									Design Sprints
								</p>
								<p>
									Product Strategy
								</p>
								<p>
									UX Strategy
								</p>
							</div>
						</div>
						<div class="col-lg-4 animate" data-animation="fadeInUp">
							<div class="icon-box box-shadow text-center p-30">
								<div class="item-icon">
									<img src="images/2.png" alt="">
								</div>
								<h6>
									<a href="#">Create</a>
								</h6>
								<p>
									Information Architecture
									<p>
										UX/UI Design
									</p>
									<p>
										Branding
									</p>
							</div>
						</div>
						<div class="col-lg-4 animate" data-animation="fadeInUp">
							<div class="icon-box box-shadow text-center p-30">
								<div class="item-icon">
									<img src="images/3.png" alt="">
								</div>
								<h6>
									<a href="#">Learn</a>
								</h6>
								<p>
									Prototyping
								</p>
								<p>
									User Testing
								</p>
								<p>
									Learning
								</p>
							</div>
						</div>
					</div>
					<div class="divider-60 d-none d-xl-block"></div>
					<div class="col-md-8 offset-md-2 text-center">
						<a href="#" class="btn btn-outline-maincolor">Hire me</a>
						<div class="divider-60"></div>
						<div class="img-wrap text-center">
							<img src="img/vertical_line.png" alt="">
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-30 gallery-carousel main-gallery layout-2 container-px-0">
				<div class="container-fluid">
					<div class="divider-15"></div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-12 col-md-6 col-xl-3">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".web">Web</a>
										<a href="#" data-filter=".branding">branding</a>
										<a href="#" data-filter=".advertise">advertise</a>
									</div>
								</div>
							</div>
							<div class="divider-35 d-none d-xl-block"></div>
							<div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="4" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">
								<div class="vertical-item item-gallery content-absolute text-center ds web">
									<div class="item-media">
										<img src="images/gallery/gallery-1.jpg" alt="">
										<div class="media-links">
										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">web</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds branding">
									<div class="item-media">
										<img src="images/gallery/gallery-2.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">branding</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds advertise">
									<div class="item-media">
										<img src="images/gallery/gallery-3.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">advertise</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds branding">
									<div class="item-media">
										<img src="images/gallery/gallery-4.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">branding</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds advertise">
									<div class="item-media">
										<img src="images/gallery/gallery-5.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">advertise</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds web">
									<div class="item-media">
										<img src="images/gallery/gallery-6.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">web</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
							</div>
							<!-- .owl-carousel-->
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pb-60 s-pb-xl-10 ls process-part layout-2">
				<div class="container">
					<div class="divider-10"></div>
					<div class="img-wrap text-center">
						<img src="img/vertical_line.png" alt="">
					</div>
					<div class="divider-60 d-none d-lg-block"></div>
					<div class="row align-items-center c-mb-10 c-mb-lg-40">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right">
								<h1 class="step-title color-main">2010</h1>
								<h2 class="step-title">Beginning</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_5.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">The first experience in digital entrepreneuring, freelance projects for local companies</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-10 c-mb-lg-40">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part">
								<h1 class="step-title color-main2">2014</h1>
								<h2 class="step-title">Growth</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center">
								<img src="images/step_img_6.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">Working at the entrepreneuring company and passed way from Junior Manager to Senior</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center c-mb-10 c-mb-lg-40">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right part3">
								<h1 class="step-title color-main3">2016</h1>
								<h2 class="step-title">Founding</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_7.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">My partners and I founded entrepreneuring company</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-10 c-mb-lg-40">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part part4">
								<h1 class="step-title color-main4">2018</h1>
								<h2 class="step-title color1">Leading</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center last">
								<img src="images/step_img_8.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">We got a leading position in the Internet advertising market</p>
							</div>
						</div>
					</div>
					<div class="divider-20 d-none d-lg-block"></div>
					<div class="img-wrap text-center bottom-wrap">
						<img src="img/vertical_line.png" alt="">
					</div>
				</div>
			</section>

			<section id="section_testimonials" class="s-pt-0 s-pb-30  s-pt-lg-100 s-pb-lg-130 overflow-visible s-parallax testimonials-sliders layout-2 ds">
				<div class="corner corner-half ls "></div>
				<div class="container">
					<div class="row">
						<div class="divider-70 d-none d-xl-block"></div>
						<div class="col-md-12">
							<div class="owl-carousel" data-autoplay="false" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-nav="false" data-dots="true">
								<div class="quote-item">
									<p class="small-text author-job">
										Eye Insurance
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>George</span>
											<br>Baty</a>
									</h6>
									<p>
										<em class="big">
											I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Moving co
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>Jeffrey</span>
											<br> P. McAllister</a>
									</h6>
									<p>
										<em class="big">
											I highly recommend this company for all and any of your design needs. I am very happy with the new redesigned and restructured website they built for me.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Paradox
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>Josephine</span>
											<br> Anders</a>
									</h6>
									<p>
										<em class="big">
											This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Eye Insurance
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>George</span>
											<br>Baty</a>
									</h6>
									<p>
										<em class="big">
											I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Moving co
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>Jeffrey</span>
											<br> P. McAllister</a>
									</h6>
									<p>
										<em class="big">
											I highly recommend this company for all and any of your design needs. I am very happy with the new redesigned and restructured website they built for me.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Paradox
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>Josephine</span>
											<br> Anders</a>
									</h6>
									<p>
										<em class="big">
											This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.
										</em>
									</p>
								</div>
								<div class="quote-item">
									<p class="small-text author-job">
										Paradox
									</p>
									<h6>
										<a href="#" class="author-name">
											<span>Josephine</span>
											<br> Anders</a>
									</h6>
									<p>
										<em class="big">
											This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.
										</em>
									</p>
								</div>
							</div>
							<!-- .testimonials-slider -->
						</div>
					</div>
				</div>
				<div class="divider-40 d-none d-xl-block"></div>
				<div class="corner corner-half-inverse"></div>
			</section>

			<section class="ls s-pt-50 s-pb-10 s-pt-lg-75 s-pb-lg-100 s-pt-xl-10 video-post-section">
				<div class="container">
					<div class="small-line text-center">
						<img src="img/vertical_line.png" alt="">
					</div>
					<div class="divider-60 d-none d-lg-block"></div>
					<div class="row c-mb-0 c-mb-lg-60">
						<div class="col-12 col-lg-9">
							<div class="video-media">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
										<img src="images/video_1.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="video-content">
								<h1>
									Google Presentation
								</h1>
								<p class="empty-content">
									Speech on digital marketing tetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
								</p>
								<a href="#" class="btn btn-outline-maincolor">Read more</a>
							</div>
						</div>
					</div>
					<div class="divider-105 d-none d-xl-block"></div>
					<div class="row left-part c-mb-0 c-mb-lg-60">
						<div class="col-12 col-lg-3 order-last order-lg-first">
							<div class="video-content">
								<h1>
									Digital Enterpreneur
								</h1>
								<p class="empty-content">
									Speech on digital marketing tetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
								</p>
								<a href="#" class="btn btn-outline-maincolor">Read more</a>
							</div>
						</div>
						<div class="col-12 col-lg-9 order-first order-lg-last">
							<div class="video-media">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
										<img src="images/video_2.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="divider-100 d-none d-xl-block"></div>
					<div class="row c-mb-0">
						<div class="col-12 col-lg-9">
							<div class="video-media">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
										<img src="images/video_3.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="video-content">
								<h1>
									Facebook Presentation
								</h1>
								<p class="empty-content">
									Speech on digital marketing tetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
								</p>
								<a href="#" class="btn btn-outline-maincolor">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="page_slider layout-2">
				<div class="divider-15 d-none d-xl-block"></div>
				<div class="shortcode-team-slider">
					<h3 class="slider-title">Team</h3>
					<div class="flexslider team-slider" data-nav="false" data-dots="true">
						<ul class="slides">
							<li class="ls team-image">
								<img src="images/team/team_slide_06.jpg" alt="">
							</li>
							<li class="ls team-image">
								<img src="images/team/team_slide_05.jpg" alt="">
							</li>
							<li class="ls team-image">
								<img src="images/team/team_slide_07.jpg" alt="">
							</li>
							<li class="ls team-image">
								<img src="images/team/team_slide_08.jpg" alt="">
							</li>
						</ul>
					</div>
					<!-- eof flexslider -->
					<div class="flexslider-controls">
						<ul class="flex-control-nav-1">
							<li class="menu_item">
								Letha L. Young
								<span class="position">Marketer</span>
								<span class="team-social-icons">
									<span class="social-icons">
										<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
										<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
									</span>
								</span>
							</li>
							<li class="menu_item">
								Harold D. Cote
								<span class="position">Developer</span>
								<span class="team-social-icons">
									<span class="social-icons">
										<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
										<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
									</span>
								</span>
							</li>
							<li class="menu_item">
								Oren R. Odom
								<span class="position">Marketer</span>
								<span class="team-social-icons">
									<span class="social-icons">
										<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
										<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
									</span>
								</span>
							</li>
							<li class="menu_item flex-active">
								Gregory F. Parrino
								<span class="position">CEO</span>
								<span class="team-social-icons">
									<span class="social-icons">
										<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
										<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
									</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="divider-45 d-none d-xl-block"></div>
			</section>


			<section class="s-pt-130 s-pb-60 s-pb-md-60 s-pb-lg-130 s-parallax ls ms blog-owl overflow-visible blog-featured-posts">
				<div class="container-fluid">
					<div class="divider-110 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-12 col-lg-7 offset-lg-2">
							<div class="owl-carousel top-right-nav" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="true" data-dots="false" data-loop="true" data-margin="60" data-nav-prev="<span>prev<br>post</span>" data-nav-next="<span>next<br>post</span>">
								<article class="vertical-item text-center content-padding padding-small ls post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<a href="post1.html">
											<img src="images/gallery/gallery-3.jpg" alt="">
										</a>
									</div>
									<!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<div class="entry-meta">
												<span class="screen-reader-text">Posted on</span>
												<a href="post1.html" rel="bookmark">
													<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">March 11, 2018
													</time>
												</a>
											</div>
											<!-- .entry-meta -->
											<h6 class="entry-title">
												<a href="post1.html" rel="bookmark">
													Live support, key of satisfaction
												</a>
											</h6>
										</header>
										<!-- .entry-header -->

										<div class="entry-content">
											<p>If lead generation is one of the main goals</p>
										</div>
										<!-- .entry-content -->
										<div class="post-author small-text">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>

								<article class="vertical-item text-center content-padding padding-small ls post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<a href="post1.html">
											<img src="images/gallery/gallery-1.jpg" alt="">
										</a>
									</div>
									<!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<div class="entry-meta">
												<span class="screen-reader-text">Posted on</span>
												<a href="post1.html" rel="bookmark">
													<time class="entry-date published updated" datetime="2018-03-15T15:15:12+00:00">March 15, 2018
													</time>
												</a>
											</div>
											<!-- .entry-meta -->
											<h6 class="entry-title">
												<a href="post1.html" rel="bookmark">
													Maximize B2B Web Retargeting
												</a>
											</h6>
										</header>
										<!-- .entry-header -->

										<div class="entry-content">
											<p>Marketers tend to put a ton of energy and resources</p>
										</div>
										<!-- .entry-content -->
										<div class="post-author small-text">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
								<article class="vertical-item text-center content-padding padding-small ls post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<a href="post1.html">
											<img src="images/gallery/gallery-5.jpg" alt="">
										</a>
									</div>
									<!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<div class="entry-meta">
												<span class="screen-reader-text">Posted on</span>
												<a href="post1.html" rel="bookmark">
													<time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">March 18, 2018
													</time>
												</a>
											</div>
											<!-- .entry-meta -->
											<h6 class="entry-title">
												<a href="post1.html" rel="bookmark">
													A 5-Minute B2B Website Audit
												</a>
											</h6>
										</header>
										<!-- .entry-header -->
										<div class="entry-content">
											<p>The last few weeks of December typically</p>
										</div>
										<!-- .entry-content -->
										<div class="post-author small-text">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
							</div>
						</div>
					</div>
					<div class="divider-110 d-none d-xl-block"></div>
				</div>
			</section>


			<section class="s-pt-60 s-pb-50 ls contact-form-light">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="main-content text-center">
								<img src="img/vertical_line.png" alt="">
								<div class="divider-55"></div>
								<h1 class="fw-500">
									Have Questions?
									<br> Let’s Talk!
								</h1>
								<p>
									Let’s Get Started Your Project Now
								</p>
								<div class="divider-20 d-none d-xl-block"></div>
								<form class="contact-form c-mb-20 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="name">Full Name
													<span class="required">*</span>
												</label>
												<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="First Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="name">Last Name
													<span class="required">*</span>
												</label>
												<input type="text" aria-required="true" size="30" value="" name="name" id="last-name" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="phone">Phone
													<span class="required">*</span>
												</label>
												<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="email">Email address
													<span class="required">*</span>
												</label>
												<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group has-placeholder">
												<label for="message">Your Message</label>
												<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 text-center">
											<div class="form-group">
												<div class="divider-40"></div>
												<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-outline-maincolor">Send Message</button>
											</div>
										</div>
									</div>
								</form>
								<div class="divider-60"></div>
								<img src="img/vertical_line.png" alt="">
							</div>
						</div>
					</div>
					<div class="divider-10"></div>
				</div>
			</section>
			<section class="page_copyright light-copy ls s-py-25 copyright-ls">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright
								<span class="copyright_year">2018</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
    @endsection