<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enverse Data</title>
	<!-- include the site stylesheet -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet"> --}}
	<!-- include the site stylesheet -->
    {{-- @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); --}}
    {{-- @import url('https://use.fontawesome.com/releases/v5.8.2/css/all.css'); --}}
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> --}}
	<!-- include the site stylesheet -->
	{{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> --}}
	<!-- include the site stylesheet -->
	{{-- <link rel="stylesheet" type="text/css" href="css/fancybox.css"> --}}
	<!-- include the site stylesheet -->
	{{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}

</head>
<body>
	<!-- pageWrapper of the page -->
	<div class="pageWrapper">
		<!-- pageHeader of the page -->
		<header class="pageHeader">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-6 col-sm-4 col-lg-3">
						<!-- logo of the page -->
						<div class="logo">
							<a href="home.html">
								<img src="{{ asset('public/css/images/logo.jpeg') }}"alt="Montero" class="img-fluid" width="200%">
							</a>
						</div>
					</div>
					<div class="col-6 col-sm-8 col-lg-9 position-static">
						<!-- mainNavHolder of the page -->
						<div class="mainNavHolder d-flex flex-wrap align-items-center justify-content-end">
							<div class="btnHolder d-sm-block order-lg-2 ml-n5 ml-sm-0 ml-lg-8">
								<a href="javascript:void(0);" class="btn btn-primary text-uppercase rounded-pill fwSemibold" data-toggle="modal" data-target="#exampleModal">
									contact us <span class="fas fa-arrow-right ml-1 ml-sm-2"></span>
								</a>
							</div>
							<!-- navbar of the page -->
							<nav class="navbar navbar-expand-lg navbar-light p-0 position-static">
								<button class="navbar-toggler NavToggler ml-2 ml-sm-3" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse mainNavCollapse text-capitalize" id="pageMainNavCollapse">
									<!-- navbar-nav of the page -->
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link smooth"  href="/">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link smooth" data-scroll-nav="1" href="#">about us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link smooth" data-scroll-nav="2" href="#">our service</a>
										</li>
										<li class="nav-item">
											<a class="nav-link smooth" data-scroll-nav="3" href="#">testimonial</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link smooth" href="/blog">Blog</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- main of the page -->
		<main>
            @yield('content')
        </main>
		<!-- pageFooter of the page -->
		<footer class="pageFooter position-relative d-flex">
			<div class="alignCenter w-100 align-items-center d-flex">
				<div class="container pt-14 pb-7 pb-lg-9">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-3">
							<!-- txtWrap of the page -->
							<div class="txtWrap pt-1 pr-lg-5 pr-xl-10 mb-6">
								<div class="fLogo mb-6 mb-lg-9">
									<a href="home.html">
										<img src="{{ asset('public/css/images/logo2.png') }}"alt="Montero" class="img-fluid">
									</a>
								</div>
								<p>2020 - 2019 © <a href="home">Jehovah Creations.</a> All rights reserved.</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<h6 class="h5 text-capitalize mb-5 mb-sm-7 mb-lg-9">help center</h6>
							<!-- fLink of the page -->
							<ul class="fLink list-unstyled mb-6">
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">FAQS</a></li>
								<li><a href="javascript:void(0);">Support Center</a></li>
								<li><a href="javascript:void(0);">Use of Term </a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<h6 class="h5 text-capitalize mb-5 mb-sm-7 mb-lg-9">our services</h6>
							<!-- fLink of the page -->
							<ul class="fLink list-unstyled mb-6">
								<li><a href="javascript:void(0);">Web Design</a></li>
								<li><a href="javascript:void(0);">Web Development</a></li>
								<li><a href="javascript:void(0);">Product Management</a></li>
								<li><a href="javascript:void(0);">Motion Graphic</a></li>
								<li><a href="javascript:void(0);">User Interaction Design</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<h6 class="h5 text-capitalize mb-5 mb-sm-7 mb-lg-9">social media</h6>
							<!-- socialNetworks of the page -->
							<ul class="socialNetworks d-flex flex-wrap list-unstyled">
								<li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
								<li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
								<li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
								<li><a href="javascript:void(0);" class="fab fa-vimeo-v"></a></li>
							</ul>
						</div>
					</div>
				</div>
			<span class="circleGradient d-sm-block overflow-hidden rounded-circle position-absolute" data-circle="circleI"></span>
			<span class="circleGradient d-sm-block overflow-hidden rounded-circle position-absolute" data-circle="circleII"></span>
			<span class="ovelGradient d-block position-absolute">
				<img src="{{ asset('public/css/images/ovel2.png') }}alt="Graident image" class="img-fluid">
			</span>
		</footer>
		<!-- Modal -->
		<div class="modal p-0 fade px-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<!-- modal-dialog of the page -->
			<div class="modal-dialog contactPopup mx-auto" role="document">
				<!-- modal-content of the page -->
				<div class="modal-content text-center">
					<!-- contactForm of the page -->
					<div class="contactForm modal-body py-10 px-4 pt-sm-13 pb-sm-14 px-sm-11">
						<!-- contactForm of the page -->
						<form id="contactForm" data-toggle="validator">
							<h6 class="h6 text-capitalize mb-1">Get Your Free Quote</h6>
							<p>Supporting call-to-action goes here</p>
							 <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
					         	<span aria-hidden="true">&times;</span>
					        </button>
					        <div class="row">
						        <div class="col-12">
									<input id="name" class="form-control" type="text" placeholder="Your Name" required data-error="NEW ERROR MESSAGE">
								</div>
								<div class="col-12">
									<input id="email" class="form-control" type="emial" placeholder="Your Email" required data-error="NEW ERROR MESSAGE">
								</div>
								<div class="col-12">
									<textarea id="message" class="form-control" placeholder="Your Message" required data-error="NEW ERROR MESSAGE"></textarea>
								</div>
								<div class="col-12">
									<div id="msgSubmit" class="form-message"></div>
								</div>
								<div class="col-12">
									<button class="btn btn-primary py-3 w-100 text-uppercase rounded-pill fwSemibold">sned your message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="{{ asset('public/css/images/svg/puff.svg') }}"width="100" alt="loader"></div>
		</div>
	</div>
    <script>function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }</script>
	<!-- include jQuery -->

    <script type="text/javascript" src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> --}}
	<!-- include jQuery -->
	{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
	<!-- include jQuery -->
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
	<!-- include jQuery -->
	{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
	<!-- include jQuery -->
    <script src="{{ asset('public/css/js/jqueryCustom.js')}}"></script>
    <script src="{{ asset('public/css/js/formValidator.js')}}"></script>
	{{-- <script src="js/jqueryCustom.js"></script> --}}
	<!-- include jQuery -->
	{{-- <script src="js/formValidator.js"></script> --}}
	<!-- include jQuery -->
    <script type="text/javascript" src="{{ URL::to('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
	{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
</body>
</html>
