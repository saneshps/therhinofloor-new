<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	@yield('meta')
	<!--font-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#f4a81d">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f4a81d">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#f4a81d">

	<!-- <link rel="manifest" href="site.webmanifest" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" />
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/fonts/bootstrap-icons/font-css.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css?v=1.0')}}"/>
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFKZGK8L');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="HViJm96S5pz7K3djFeBnPgwpn6AynPXQbXOG3Hc-6Kw" />
	@stack('styles')

<link rel="alternate" hreflang="en-SA" href="https://therhinofloor.com/sa"/>
<link rel="alternate" hreflang="x-default" href="https://therhinofloor.com/"/>
<link rel="alternate" hreflang="en-AE" href="https://therhinofloor.com/sa"/>

</head>


<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFKZGK8L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="main-page-wrapper" style="overflow: hidden !important;">
		<!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

		<!-- Add your site or application content here -->
		<!-- preloader -->



		<!-- <div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
			</div>
		</div> -->
		<!-- preloader end  -->
		<!-- offcanvas start  -->
		<div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
			<div class="offcanvas-header">
				<a data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fas fa-times search-close" id="search-close"></i>
				</a>
			</div>
			<div class="offcanvas-body">
				<!-- Fullscreen search -->
				<div class="search-wrap">
					<form method="get">
						<input type="search" class="main-search-input" placeholder="Search Your Keyword...">
					</form>
				</div>
				<!-- end fullscreen search -->
			</div>
		</div>
		<!-- offcanvas end  -->

		<!-- header-area start -->
		@include('layout._header')
		<aside class="slide-bar">
			<div class="close-mobile-menu">
				<a href="javascript:void(0);">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<!-- offset-sidebar start -->
			<div class="offset-sidebar">
				<div class="offset-widget offset-logo mb-30">
					<a href="{{ route('home') }}">
						<img src="{{asset('assets/img/logo/header-logo-1.png')}}" alt="logo">
					</a>
				</div>
				<div class="mobile-menu"></div>
				<div class="offset-widget mb-40">
					<div class="info-widget">
						<h4 class="offset-title mb-20">About Us</h4>
						<p class="mb-30">
							HIGH-QUALITY FLOOR MATS & FLOOR TILE SUPPLIER IN SAUDI ARABIA
						</p>
					</div>
				</div>
				<div class="offset-widget mb-30 pr-10">
					<div class="info-widget info-widget2">
						<h4 class="offset-title mb-20">Contact Info</h4>
					
						<p>
							<i class="fal fa-envelope-open"></i>
							<a href="mailto:sales@rhinofloor.ae" target="_blank"> sales@rhinofloor.ae </a>
						</p>
					</div>
				</div>
				<!-- <div class="login-btn text-center">
					<a class="ht_btn w-100" href="login.html">Login</a>
				</div> -->
			</div>
			<!-- offset-sidebar end -->

		</aside>
		<div class="body-overlay"></div>
		<main>
		@yield('content')
		<!--@include('layout._map')-->
       </main>
		@include('layout._footer')
		<!--footer-area end-->
	</div>

	<!-- JS here -->

	<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
	<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/aos.js')}}"></script>
	<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
    <script>
        var code = [];

        function createCaptcha() {
            //clear the contents of captcha div first 
            //document.getElementById('captcha').innerHTML = "";        
            document.getElementsByClassName('captcha-div').innerHTML = "";
            let cdiv = document.getElementsByClassName('captcha-div').length;
            for (i = 0; i < cdiv; i++) {
                let randomCode = generateCapchaCode();

                var canv = document.createElement("canvas");
                canv.id = "captcha_" + i;
                canv.className = "mycaptcha";
                canv.width = 100;
                canv.height = 50;
                var ctx = canv.getContext("2d");
                ctx.font = "25px Georgia";
                ctx.strokeText(randomCode, 0, 30);
                //storing captcha so that can validate you can save it somewhere else according to your specific requirements
                code[i] = randomCode;
                document.getElementById('captcha_' + i).appendChild(canv); // adds the canvas to the body element
            }

        }

        function generateCapchaCode() {
            var charsArray =
                "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
            var lengthOtp = 6;
            var captcha = [];
            for (var i = 0; i < lengthOtp; i++) {
                //below code will not allow Repetition of Characters
                var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) == -1)
                    captcha.push(charsArray[index]);
                else i--;
            }
            return captcha.join("");
        }

        function validateCaptcha(text_val) {
            //event.preventDefault();
            //debugger
            if (code.indexOf(text_val) !== -1) {
                $(".error_request_form").hide();
                $('.error_request_form').removeClass('alert alert-danger').html("");
                return true;
            } else {
                $(".error_request_form").show();
                $('.error_request_form').addClass('alert alert-danger').html("Captcha is invalid");
                return false;
                $(".mycaptcha").remove();
                createCaptcha();
            }







            //if (document.getElementById("cpatchaTextBox").value == code) {
            // if ($("input[name=cpatchatxtbox]").val() == code) {
            //     alert("Valid Captcha");
            // } else {
            //     alert("Invalid Captcha. try Again");
            //     createCaptcha();
            // }
        }

        function refreshCaptcha() {
            $(".mycaptcha").remove();
            createCaptcha();
        }
    </script>
    <script>
        $(document).ready(function() {
            createCaptcha();

        });
    </script>
    <!-- Sbuscribe -->




	<!--Custom JS here -->
	<script src="{{asset('assets/js/main.js')}}"></script>
	@stack('scripts')
	<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
	<script>
		const observer = lozad();
		observer.observe();
	</script>


</body>

</html>