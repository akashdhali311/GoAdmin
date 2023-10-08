@extends('Frontend.Layouts.app')

@section('content')
	<div id="canvas">
		<div id="box_wrapper">

			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Works</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index-2.html">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active">
									Gallery Regular
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-50 s-pb-100 gallery-pagination gallery-regular">
				<div class="d-none d-lg-block divider-20"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".web-design">Web Design</a>
										<a href="#" data-filter=".logo-design">Logo Design</a>
										<a href="#" data-filter=".advertisement">Advertisement</a>
										<a href="#" data-filter=".branding">Branding</a>
										<a href="#" data-filter=".design">Design</a>
										<a href="#" data-filter=".photo">Photo</a>
									</div>
								</div>
							</div>


							<div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

								<div class="col-xl-4 col-sm-6 web-design design">

									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/01.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Lorem ipsum dolor sit</a>
											</h6>
										</div>
									</div>

								</div>

								<div class="col-xl-4 col-sm-6 advertisement branding">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/02.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Amet consetetur sadip</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 logo-design design advertisement">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/03.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Elitr sed diam nonumy</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 web-design logo-design">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/04.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Tempor invidunt ut</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 advertisement photo branding">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/05.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Labore et dolore magna</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 logo-design photo design branding">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/06.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Aliquyam erat sed diam</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 web-design design advertisement">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/07.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Voluptua vero</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 web-design logo-design branding">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/08.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Eos et accusam justo duo</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 web-design photo design">

									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/09.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Consectetur adicing elit</a>
											</h6>
										</div>
									</div>

								</div>

								<div class="col-xl-4 col-sm-6 advertisement branding">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/10.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Dolores et ea rebum</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 logo-design design advertisement">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/11.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Stet clita kasd gubergren</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 web-design logo-design">
									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
											<img src="{{asset('backend')}}/images/gallery/12.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a class="tags small-text" href="https://html.modernwebtemplates.com/gallery-item.html">Photo</a>
												<br>
												<a href="https://html.modernwebtemplates.com/gallery-item.html">Clita kasd gubergren</a>
											</h6>
										</div>
									</div>
								</div>

							</div>
							<!-- .isotope-wrapper-->

							<nav class="navigation pagination @@navClass" role="navigation">
								<h2 class="screen-reader-text">Posts navigation</h2>
								<div class="nav-links">
									<a class="prev page-numbers" href="blog-1.html">
										<i class="fa fa-chevron-left"></i>
										<span class="screen-reader-text">Previous page</span>
									</a>
									<span class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>
										1
									</span>
									<a class="page-numbers" href="blog-1.html">
										<span class="meta-nav screen-reader-text">Page </span>
										2
									</a>
									<a class="page-numbers" href="blog-1.html">
										<span class="meta-nav screen-reader-text">Page </span>
										3
									</a>
									<a class="next page-numbers" href="blog-1.html">
										<span class="screen-reader-text">Next page</span>
										<i class="fa fa-chevron-right"></i>
									</a>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-block divider-105"></div>
			</section>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	@endsection