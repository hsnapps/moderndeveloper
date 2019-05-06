<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Unified Corporate Category Bootstrap Responsive Web Template| Home </title>
	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords"
		content="Unified Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="{{ secure_url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link href="{{ secure_url('css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="{{ secure_url('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="//fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <style>
        #return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            display: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        #return-to-top i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 16px;
            top: 13px;
            font-size: 19px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        #return-to-top:hover {
            background: rgba(0, 0, 0, 0.9);
        }
        #return-to-top:hover i {
            color: #fff;
            top: 5px;
        }
    </style>
</head>

<body>
	<div class="header-outs" id="header">
		<header>
			<div class="container-fluid px-lg-5 ">
				<nav class="mnu mx-auto">
					<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
					<input type="checkbox" id="drop">
					<ul class="menu">
						<li class="mr-lg-4 mr-3 active"><a href="{{ secure_url('/') }}">{{ __('app.home') }}</a></li>
						<li class="mr-lg-4 mr-3"><a href="#products" class="scroll">{{ __('app.products') }}</a></li>
						<li class="mr-lg-4 mr-3"><a href="#services" class="scroll">{{ __('app.services') }}</a></li>
						<li class="mr-lg-4 mr-3"><a href="{{ env('BLOG') }}" target="_blank">{{ __('app.blog') }}</a></li>
						<li><a href="#contact" class="scroll">{{ __('app.contact') }}</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!--banner -->
		<div class="baner-text text-center">
			<h1 class="mx-auto">{{ __('app.company') }}</h1>
			<p class="mx-auto mt-4 pt-2">{{ __('app.official_name') }}</p>
			<a class="btn btn-primary mt-lg-5 mt-3 exclulie-link-bnr" href="{{ secure_url('start') }}" role="button">{{ __('app.our_products') }}</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //banner -->
	<!-- news -->
	<section class="news py-5" id="products">
		<div class="container py-lg-5">
			<h3 class="heading text-center"> {{ __('app.slogan_1') }} <strong>{{ __('app.slogan_2') }}</strong> </h3>
			<div class="row news-grids py-lg-5 mt-3 text-center">
				<div class="col-md-4 newsgrid1">
					<img src="images/g5.jpg" alt="news image" class="img-fluid">
					<h6>{{ __('app.health_care') }}</h6>
					<p class="mt-4">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at
						molestie arcu pulvinar ut. </p>
				</div>
				<div class="col-md-4 mt-md-0 mt-5 newsgrid2">
					<img src="images/g2.jpg" alt="news image" class="img-fluid">
					<h6>{{ __('app.school') }} </h6>
					<p class="mt-4">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at
						molestie arcu pulvinar ut.</p>
				</div>
				<div class="col-md-4  mt-md-0 mt-5 newsgrid3">
					<img src="images/g3.jpg" alt="news image" class="img-fluid">
					<h6> {{ __('app.event') }}</h6>
					<p class="mt-4">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at
						molestie arcu pulvinar ut.</p>
				</div>
			</div>
			<div class="text-center mx-auto">
				<a class="btn btn-primary mt-lg-5 mt-3 exclulie-link-bnr" href="single.html" role="button">Read More</a>
			</div>
		</div>
	</section>
	<!-- //news -->
	<!-- ban_bottom -->
	<section class="ban_bottom1 py-5" id="more">
		<div class="container py-lg-5">
			<div class="ban_bottom_top text-center py-lg-5">
				<h3>{{ __('app.message') }}</h3>
			</div>
		</div>
	</section>
	<!-- //ban_bottom -->
	<!-- services -->
	<section class="services py-5" id="services">
		<div class="container py-lg-5">
			<h3 class="heading text-center">{{ __('app.our_services') }} </h3>
			<ul class="list-unstyled-1 mt-5">
				@foreach (__('services') as $service)
                <li>
                    <div class="row">
                        <div class="col-2 ic-lft">
                            <span class="{{ $service['icon'] }}"></span>
                        </div>
                        <div class="col-10">
                            <h6>{{ $service['name'] }} </h6>
                            <p class="mt-3">{{ $service['description'] }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
			</ul>
		</div>
	</section>
    <!-- //services -->

	<!-- blog -->
	<section class="blog_exclu3l py-5" id="blog">
		<div class="container py-lg-5">
			<div class="row blog_exclu3l_top">
				<div class="col-lg-8 blog_exclu3l_right">
					<h4 class="heading text-left mb-5"><a href="{{ env('BLOG') }}"> {{ __('app.last') }}</a></h4>
					<a href="{{ env('BLOG') }}" target="_blank"><img src="images/first-step.jpg" alt="news image" class="img-fluid"></a>
					<div class="blog_exclu3l-5">
						<h6>{{ $last->title->rendered }}</h6>
						<p>{!! $last->excerpt->rendered !!}</p>
						<a class="btn btn-primary mt-lg-4 mt-3 exclulie-link-bnr1" href="{{ $last->link }}" target="_blank"
							role="button"><span class="fa fa-arrow-right mr-2"></span>Continue Reading</a>
					</div>
                </div>

				<div class="col-lg-4 blog_exclu3l_left">
                    @foreach ($blogs as $blog)
					<div class="blog_exclu3l_left1">
						<div class="blog_exclu3l-2">
							<h5>{{ Carbon\Carbon::parse($blog->date)->format('M Y') }}</h5>
							<h3 class="mt-2"><a href="{{ $blog->link }}">{{ $blog->title->rendered }}</a></h3>
							<p class="mt-3">{!! $blog->excerpt->rendered !!}</p>
						</div>
                    </div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
    <!-- //blog -->

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-lg-5">
			<div class="text-center">
				<h2 class="heading text-center">QUESTIONS OR COMMENTS? <strong>GET IN TOUCH:</strong> </h2>
			</div>
			<div class="row contact-top">
				<div class="col-lg-6 contact_grid_right">
					<form action="#" method="post">
						<div class="row contact_top">
							<div class="col-sm-6">
								<input type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="col-sm-6">
								<input type="email" name="Email" placeholder="Email" required="">
							</div>
						</div>
						<textarea name="Message" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Message...';}"
							required="">Message...</textarea>
						<button type="submit" class="btn">Send Message</button>
						<button type="reset" class="btn">Clear Form</button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="col-lg-6 contact_grid_left">
					<p class="mb-4">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at
						molestie arcu pulvinar ut. pellentesque mi non laoreet eleifend porttitor mollisar</p>
					<div class="row">
						<div class="col-lg-6 contact_grid_left-2">
							<ul class="list-unstyled">
								<li>
									<div class="row">
										<div class="col-3">
											<span class="fa fa-home"></span>
										</div>
										<div class="col-9">
											<p>4568 Integer Porttitor Eleifend Road, PN 00201 USA</p>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="row">
										<div class="col-3">
											<span class="fa fa-phone"></span>
										</div>
										<div class="col-9">
											<p>(000) 000-0000</p>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="row">
										<div class="col-3">
											<span class="fa fa-envelope"></span>
										</div>
										<div class="col-9">
											<a href="mailto:name@example.com"> mail@example.com</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 contact_grid_left-1">
							<ul class="list-unstyled">
								<li>
									<div class="row">
										<div class="col-3">
											<span class="fa fa-facebook"></span>
										</div>
										<div class="col-9">
											<a href="#">facebook.com</a>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="row">
										<div class="col-3">
											<span class="fa fa-twitter"></span>
										</div>
										<div class="col-9">
											<a href="#">twitter.com</a>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="row">
										<div class="col-3">
											<span class="fa fa-instagram"></span>
										</div>
										<div class="col-9">
											<a href="#">instagram.com</a>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="row">
										<div class="col-3">
											<span class="fa fa-linkedin"></span>
										</div>
										<div class="col-9">
											<a href="#">linkedin.com</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
	<div class="cpy-right text-center">
		<div class="container">
			<p class="py-md-5 py-4">© 2019 Unified. All rights reserved.
			</p>
		</div>
    </div>

    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <script src="{{ secure_url('js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ secure_url('js/bootstrap.min.js') }}"></script>
    <script>
        // ===== Scroll to Top ====
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
    </script>
</body>
</html>
