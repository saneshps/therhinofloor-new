@extends('layout.app')

@section('meta')

<meta name="keywords" content="floor mats, floor tiles, floor mats in Saudi Arabia, floor tiles in Saudi Arabia, entrance floor mats, aluminum entrance mats, outdoor floormats, sports floor mats">

<meta name="description" content="Buy Industrial mats & tiles in Saudi Arabia which is durable, stylish, and easy-to-maintain flooring solutions for homes, offices & commercial spaces.">

<title> High-Quality Floor Mats & Tiles Supplier in Saudi Arabia | Rhinofloor </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Industrial Floor Mats & Tiles Supplier Saudi Arabia |Rhinofloor">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="{{ route('home') }}" />

 

@endsection

@section('content')





<!-- slide-bar end -->





<!-- theme__main__banner start -->

<div class="swiper hero__slider__three">

	<div class="swiper-wrapper">



		@foreach($banners as $banner)



		<div class="swiper-slide">

			<section class="main__slider__section2 pt-150 pb-205 pt-md-240 pb-md-105" data-background="{{env('APP_ADMIN_URL')}}{{ $banner->image_url }}">

				<link rel="preload" as="image" href="{{ env('APP_ADMIN_URL') }}{{ $banner->image_url }}" fetchpriority="high">



				<div class="blur__box"></div>

				<div class="container">

					<div class="row align-items-center justify-content-center">

						<div class="col-lg-10">

							<div class="theme__content text-center mt-185">

								<h2 class="main__title mb-20">

									<h2 class="main__title mb-20">

										{{$banner->title}}

									</h2>





							</div>

						</div>

					</div>

				</div>





				<img class="shapes shapes__1" src="{{asset('assets/img/shape/hero-half-circle-1c.svg')}}" alt="Shape One">

			</section>

		</div>

		@endforeach



	</div>

	<!-- swiper-scrollbar -->

	<div class="swiper-scrollbar d-none d-lg-inline-block"></div>



	<!-- swiper-pagination -->

	<div class="swiper-pagination d-none d-lg-inline-block"></div>



	<!-- swiper-arrow-pagination -->

	<div class="swiper-button-prev d-none d-lg-inline-block"><i class="bi bi-chevron-left"></i></div>

	<div class="swiper-button-next d-none d-lg-inline-block"><i class="bi bi-chevron-right"></i></div>

</div>

<!-- theme__maina__banner end -->





<!-- about__area start -->

<section class="about__area">

	<div class="about__section__wrapper2 pt-245 pb-140 pt-lg-120 pb-lg-40 pb-md-20 pt-sm-30 pb-lg-0">

		<img class="about__shape__1" src="{{asset('assets/img/shape/about-line-2a.svg')}}" alt="About Shape">

		<div class="container">

			<div class="row align-items-center">

				<div class="col-xl-7 col-lg-6">

					<div class="about__img__wrapper__four mb-30">

						<img class="main__img__5d d-none d-xl-inline-block" src="{{asset('assets/img/about/about-img-5d.jpg')}}" alt="About">

						<img class="main__img__4b" src="{{asset('assets/img/about/about-img-4d.jpg')}}" alt="About">

						<!--<div class="experience__box">-->

						<!--	<img class="icon" src="{{asset('assets/img/icon/icon-9a.svg')}}" alt="Icon">-->

						<!--	<span>A+</span>-->

						<!--	<h3>25+ Years Of Experiences</h3>-->

						<!--</div>-->

					</div>

				</div>

				<div class="col-xl-5 col-lg-6">

					<div class="about__text__wrapper ps-xl-3 mb-30">

						<div class="section__title mb-30">

							<h4 class="sub__title__one text-theme mb-20">About Company</h4>

							<h1 class="section__title__one mb-25"> HIGH-QUALITY FLOOR MATS & FLOOR TILES IN SAUDI ARABIA

							</h1>

							<p class="mb-35"> Everyone loves a perfect Floor. And the Floor takes a lot, from the masses which

								walks on it, the equipment placed to the heavy loads which moves on it.



								At Rhino, we offer unique Flooring solutions that are strong as well as

								aesthetic. Our floor tiles and mats meet diverse needs, from a factory, sports

								hall, garage to a commercial building, the list goes on & on. Hallmarked for its

								durability & performance, we call these solutions BORN TOUGH !</p>

							<a href="{{route('our-story')}}" class="ht_btn hover-bg"><span>More Details <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>

						</div>



					</div>

				</div>

			</div>



			<div class="row abt-box">

				<div class="col-lg-3 col-md-6">

					<div class="single__box premium-box mb-30">

						<div class="icon mb-35">

							<img class="front-icon" src="{{asset('assets/img/about/Premium-Materials.png')}}" alt="Icon">

							<img class="back-icon" src="{{asset('assets/img/about/Premium-Materials-white.png')}}" alt="Icon">

						</div>

						<h3 class="single__box__title"><a href="{{route('products.index')}}"> Premium Materials </a></h3>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="single__box premium-box mb-30">

						<div class="icon mb-35">

							<img class="front-icon" src="{{asset('assets/img/about/Long-Lasting.png')}}" alt="Icon">

							<img class="back-icon" src="{{asset('assets/img/about/Long-Lasting-white.png')}}" alt="Icon">

						</div>

						<h3 class="single__box__title"><a href="{{route('products.index')}}"> Long-Lasting </a></h3>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="single__box premium-box mb-30">

						<div class="icon mb-35">

							<img class="front-icon" src="{{asset('assets/img/about/Easy-to-clean.png')}}" alt="Icon">

							<img class="back-icon" src="{{asset('assets/img/about/Easy-to-clean-white.png')}}" alt="Icon">

						</div>

						<h3 class="single__box__title"><a href="{{route('products.index')}}"> Easy to clean </a></h3>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="single__box premium-box mb-30">

						<div class="icon mb-35">

							<img class="front-icon" src="{{asset('assets/img/about/heavy-duty.png')}}" alt="Icon">

							<img class="back-icon" src="{{asset('assets/img/about/heavy-duty-white.png')}}" alt="Icon">

						</div>

						<h3 class="single__box__title"><a href="{{route('products.index')}}"> Heavy-duty </a></h3>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- about__area end -->













<!-- Products__area start -->

<section class="services__area2 pb-70 pb-lg-45">

	<div class="services__bg__wrapper pt-100 pb-250" data-background="{{asset('assets/img/product/bg-image.jpg')}}">

		<!-- <div class="big-style-text"> Products </div> -->

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-lg-6">

					<div class="section__title text-center mb-60">

						<h4 class="sub__title__one text-theme mb-20"> Our Products </h4>

						<h2 class="section__title__one text-white">Exploring the World of flooring

						</h2>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="container services__slider__wrapper">

		<div class="row">

			<div class="col-lg-12">

				<div class="swiper services__slider__two pb-60">

					<div class="swiper-wrapper">

						@foreach($products as $product)

						<div class="swiper-slide">

							<div class="single__services__two mb-60">

								<div class="services__thumb">

									<img class="w-100" src="{{env('APP_ADMIN_URL').$product->default_image}}" alt=" {{$product->display_title!="" ? $product->display_title : $product->name }}" style="object-fit: cover;height: 400px;">

								</div>

								<div class="services__content">

									<img class="traingle__shape" src="{{asset('assets/img/shape/traingle-1b.png')}}" alt="Triangle">

									<img class="traingle__shape tri__2" src="{{asset('assets/img/shape/traingle-2b.png')}}" alt="Triangle">

									<h4 class="service__title__two mb-0">

										<!-- <span class="icon"><img src="{{asset('assets/img/icon/product.png')}}" alt="Icon"></span> -->

										<a href="{{route('products.detail', $product->slug)}}"> {{$product->display_title!="" ? $product->display_title : $product->name }}

										</a>

									</h4>

								</div>

							</div>

						</div>

						@endforeach









					</div>

					<!-- If we need pagination -->

					<div class="swiper-pagination"></div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- Products__area end -->



<!-- choose__us__area start -->

<section class="chose__us__area pt-10 pt-lg-60 pb-85 pb-lg-30 pt-sm-10">

	<div class="chose__section__wrapper">

		<div class="big-style-text">Why</div>

		<div class="chose__video__content" data-background="{{asset('assets/img/chose/chose-video-bg-1.jpg')}}">

			<div class="video__wrapper">

				<a class="popup-video mb-30" href="https://www.youtube.com/watch?v=pMVUcckzCUg"><i class="bi bi-play-fill"></i></a>

			</div>

		</div>

		<div class="container">

			<div class="row">

				<div class="col-lg-6"></div>

				<div class="col-lg-6">

					<div class="chose__text__wrapper ps-xl-5 ms-xl-4 mb-30 pt-50">

						<h4 class="sub__title__one mb-0">Why Choose Us</h4>

						<div class="snake-line mb-15">

							<img src="{{asset('assets/img/shape/snake-line-1a.svg')}}" alt="line">

						</div>

						<h2 class="section__title__one mb-30"> The Benefits of Choosing Our products

						</h2>

						<ul class="text-list list-none">

							<li> Quality and Durability </li>

							<li> Customization Options </li>

							<li> Innovative Design </li>

							<li> Environmental Commitment </li>

							<li> Competitive Pricing </li>

							<li> Exceptional Customer Service </li>

							<li> Industry Expertise </li>

						</ul>

						<div class="mt-60">

							<a href="{{route('our-story')}}" class="ht_btn hover-bg"><span>More Details <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- choose__us__area end -->



<!-- working__process__area start -->

<section class="working__process__area">

	<div class="grey-bg process__wrapper__about pt-40 pt-lg-20 pb-200 pb-lg-30 pb-md-90">

		<img class="shapes__1" src="{{asset('assets/img/shape/about-line-2a.svg')}}" alt="shape">

		<img class="shapes__2" src="{{asset('assets/img/shape/faq-line-5a.svg')}}" alt="shape">

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-lg-6">

					<div class="section__title text-center mb-60 pe-xxl-4">

						<h4 class="sub__title__one text-theme mb-20"> WHAT WE DO! </h4>

						<h2 class="section__title__one mb-25"> It's all about flooring

						</h2>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-lg-4 col-md-6">

					<div class="single__process__box mb-40">

						<img class="star-icon" src="{{asset('assets/img/icon/icon-48d.svg')}}" alt="icon">

						<!-- <div class="tag">

										Step 01

									</div> -->

						<div class="icon mb-25">

							<img src="{{asset('assets/img/chose/produts.png')}}" alt="Icon">

						</div>

						<h4 class="single__box__title"><a href="{{route('products.index')}}"> PRODUCTS </a></h4>

						<p> PVC tiles, Heavy duty Tiles, entrance floor matting and out door matting </p>



						<a href="{{route('products.index')}}" class="ht_btn pro-list-btn">

							<span> More <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span>

						</a>

					</div>

				</div>

				<div class="col-lg-4 col-md-6">

					<div class="single__process__box mb-40">

						<img class="star-icon" src="{{asset('assets/img/icon/icon-48d.svg')}}" alt="icon">



						<div class="icon mb-25">

							<img src="{{asset('assets/img/chose/applications.png')}}" alt="Icon">

						</div>

						<h4 class="single__box__title"><a href="{{route('applications.index')}}"> APPLICATIONS </a></h4>

						<p> Rhino tiles are easy to install, durable with easy cleaning solutions </p>

						<a href="{{route('applications.index')}}" class="ht_btn pro-list-btn">

							<span> More <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span>

						</a>

					</div>

				</div>

				<div class="col-lg-4 col-md-6">

					<div class="single__process__box mb-40">

						<img class="star-icon" src="{{asset('assets/img/icon/icon-48d.svg')}}" alt="icon">



						<div class="icon mb-25">

							<img src="{{asset('assets/img/chose/contact.png')}}" alt="Icon">

						</div>

						<h4 class="single__box__title"><a href="{{route('contact-us')}}"> CONTACT US </a></h4>

						<p> Call us and let us listen to you and provide you with Rhino Floor solutions </p>

						<a href="{{route('contact-us')}}" class="ht_btn pro-list-btn">

							<span> More <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt="rhinofloor"></span>

						</a>

					</div>

				</div>



			</div>

		</div>

	</div>

</section>

<!-- working__process__area end -->



<!-- case__study__area start -->

{{-- <section class="case__study__area pt-90 pb-90 pt-lg-60 pb-lg-60 pt-sm-0">

		<div class="big-style-text">Case</div>

		<div class="big-style-text text-two">Study</div>

		<div class="container-fluid px-0">

			<div class="row justify-content-center">

				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">

					<div class="section__title text-center mb-60">

						<h4 class="sub__title__one mb-0">Case Study</h4>

						<div class="snake-line mb-15">

							<img src="assets/img/shape/snake-line-1a.svg" alt="line">

						</div>

						<h2 class="section__title__one">Case Studies Demonstrating Our Impact in the Industry

						</h2>

					</div>

				</div>

			</div>

			<div class="swiper case__slider__one">

				<div class="swiper-wrapper">

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/11.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/12.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/13.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/14.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/15.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/16.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/11.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

					<div class="swiper-slide">

						<div class="case__single__box">

							<div class="case__thumb">

								<img class="img-fluid" src="assets/img/case/12.jpg" alt="">

							</div>

							<a href="products.html" class="icon"><i class="bi bi-plus"></i></a>

							<div class="case__content">

								<h3 class="case__title mb-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>

								<a href="products.html" class="case__btn">More Details <span><img src="assets/img/icon/arrow2.svg" alt=""></span></a>

								<img class="overlay__icon" src="assets/img/icon/icon-8a.svg" alt="Icon">

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section> --}}

<!-- case__study__area end -->



<!-- testimonial__area start -->

<section class="testimonial__area">

	<div class="grey-bg testimonial__section__three pt-40 pb-40 pt-lg-10 pb-lg-60 pb-md-50 pt-sm-20 pb-sm-0 pt-md-10">

		<div class="container">

			{{--<div class="row justify-content-center">

					<div class="col-xl-5 col-lg-6">

						<div class="section__title text-center mb-50">

							<h4 class="sub__title__three mb-25">Our Testimonials</h4>

							<h2 class="section__title__one mb-30">What Our Client’s Say About Us</h2>

						</div>

					</div>

				</div>--}}

			{{--<div class="swiper testimonial__slider__three pb-120 pb-md-10">

					<div class="swiper-wrapper">

						<div class="swiper-slide">

							<div class="testimonial__wrapper__three">

								<img class="quote__3c" src="assets/img/icon/quotation-1c-svg.png" alt="quote">

								<div class="author d-flex align-items-center mb-25">

									<div class="author__img mr-20">

										<img src="assets/img/testimonial/1.png" alt="testimonial">

									</div>

									<div class="auhtor__content">

										<h3 class="author__name"> Jane Doe, </h3>

										<h5 class="author__designation"> Office Manager </h5>

									</div>

								</div>

								<!-- <h4 class="testimonial__title mb-20">“Best solar energy system installed”</h4> -->

								<p class="testimonial__desc mb-20"> "I recently purchased a set of custom floor mats from [Company Name] for my home,

									and I couldn't be happier. The quality is exceptional, and they add a touch of elegance to my living room.

									The mats are also very durable and easy to clean, which is perfect for my busy household."



								</p>



							</div>

						</div>

						<div class="swiper-slide">

							<div class="testimonial__wrapper__three">

								<img class="quote__3c" src="assets/img/icon/quotation-1c-svg.png" alt="quote">

								<div class="author d-flex align-items-center mb-25">

									<div class="author__img mr-20">

										<img src="assets/img/testimonial/1.png" alt="testimonial">

									</div>

									<div class="auhtor__content">

										<h3 class="author__name"> John Smith, </h3>

										<h5 class="author__designation"> Office Manager </h5>

									</div>

								</div>



								<p class="testimonial__desc mb-20"> "Our office has been using floor mats from [Company Name] for over a year now,

									and they have significantly improved the cleanliness and safety of our workplace. The mats are very effective

									at trapping dirt and moisture, and they look professional. Highly recommended for any business."



								</p>



							</div>

						</div>

						<div class="swiper-slide">

							<div class="testimonial__wrapper__three">

								<img class="quote__3c" src="assets/img/icon/quotation-1c-svg.png" alt="quote">

								<div class="author d-flex align-items-center mb-25">

									<div class="author__img mr-20">

										<img src="assets/img/testimonial/1.png" alt="testimonial">

									</div>

									<div class="auhtor__content">

										<h3 class="author__name"> Emily Johnson, </h3>

										<h5 class="author__designation"> Car Enthusiast </h5>

									</div>

								</div>

								<p class="testimonial__desc mb-20"> "I ordered a set of floor mats for my car from [Company Name],

									and they exceeded my expectations. The fit was perfect, and the materials used are top-notch.

									My car's interior has never looked better. Thank you for such an excellent product!"



								</p>



							</div>

						</div>

						<div class="swiper-slide">

							<div class="testimonial__wrapper__three">

								<img class="quote__3c" src="assets/img/icon/quotation-1c-svg.png" alt="quote">

								<div class="author d-flex align-items-center mb-25">

									<div class="author__img mr-20">

										<img src="assets/img/testimonial/1.png" alt="testimonial">

									</div>

									<div class="auhtor__content">

										<h3 class="author__name">Sarah Lee, </h3>

										<h5 class="author__designation"> Fitness Trainer </h5>

									</div>

								</div>

								<p class="testimonial__desc mb-20"> "The gym mats we purchased from [Company Name]

									have transformed our workout area. They provide excellent support and grip,

									making our workouts safer and more effective. The customer service was

									also outstanding, guiding us through the best options for our needs."



								</p>



							</div>

						</div>

					</div>

					<!-- swiper-arrow-pagination -->

					<div class="swiper-button-prev d-none d-lg-inline-block"><i class="bi bi-chevron-left"></i>

					</div>

					<div class="swiper-button-next d-none d-lg-inline-block"><i class="bi bi-chevron-right"></i>

					</div>--}}

		</div>

	</div>

	</div>

</section>

<!-- testimonial__area end -->



<!--News-section start-->

<!--<section class="products-section pt-100 pb-165 pt-lg-80 pb-lg-15 pt-sm-20 pb-sm-20 pt-md-20 pb-md-30">-->

<!--	<div class="container">-->

<!--		<div class="row justify-content-center">-->

<!--			<div class="col-lg-6">-->

<!--				<div class="section__title text-center mb-50">-->

<!--					<h4 class="sub__title__one mb-0"> NEWS FEEDS </h4>-->

<!--					<div class="snake-line mb-15">-->

<!--						<img src="{{asset('assets/img/shape/snake-line-1a.svg')}}" alt="line">-->

<!--					</div>-->

<!--					<h2 class="section__title__one"> <span> NEWS FEEDS </span>-->

<!--					</h2>-->

<!--				</div>-->

<!--			</div>-->

<!--		</div>-->

<!--		<div class="row">-->

<!--			@foreach($news as $new)-->

<!--			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">-->

<!--				<figure class="product-wrapper white-bg mb-45">-->

<!--					<div class="product-thumb">-->

<!--						<a href="{{$new->link}}" target="_blank"><img data-src="{{env('APP_ADMIN_URL')}}{{$new->image}}" class="figure-img w-100 lozad" alt="{{$new->image_alt}}"></a>-->



<!--					</div>-->

<!--					<figcaption class="figure-caption">-->

<!--						<div class="product-tag"> <i class="fas fa-heart"></i> {{$new->likes}} Likes </div>-->

<!--						<h4 class="product-title"><a href="{{$new->link}}" target="_blank">-->

<!--								{{$new->title}}-->

<!--							</a></h4>-->

<!--						<p class="read-linked"> <a href="{{$new->link}}" target="_blank">-->

<!--								Read More <i class="fab fa-linkedin"></i> </a></p>-->



<!--					</figcaption>-->

<!--				</figure>-->

<!--			</div>-->

<!--			@endforeach-->







<!--		</div>-->

<!--		<div class="row">-->

<!--			<div class="col-lg-12 mt-15 justify-content-center d-flex">-->

				<!-- Button -->

<!--				<a href="{{route('news.index')}}" class="ht_btn hover-bg"><span> More News <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>-->

				<!-- Button -->

<!--			</div>-->

<!--		</div>-->

<!--	</div>-->

<!--</section>-->

<!--News-section end-->



<!-- Discover__Rhino__area start -->

<section class="video__area">

	<div class="video__section__wrapper pb-80 pb-lg-60">

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-lg-7">

					<div class="section__title text-center mb-50">

						<h4 class="sub__title__one mb-0"> DISCOVER RHINO </h4>

						<div class="snake-line mb-15">

							<img src="assets/img/shape/snake-line-1a.svg" alt="line">

						</div>

						<h2 class="section__title__one"> DISCOVER RHINO </h2>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-lg-12">

					@php

					$video_url="https://www.youtube.com/watch?v=34CaY3CkS90";

					preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',

					$video_url, $match);

					$youtube_id = $match[1];

					@endphp

					<div class="full__video__bg" data-background="http://img.youtube.com/vi/{{$youtube_id}}/maxresdefault.jpg">

						<div class="video__wrapper">

							<img class="video__text" src="assets/img/video/video-text-circular.svg" alt="Circular">

							<a class="popup-video" href="{{$video_url}}"><i class="bi bi-play-fill"></i></a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- Discover__Rhino__area end -->



<!-- blog__area start -->

<!--<section class="blog__area pt-80 pt-md-60 pb-70 pb-lg-20 pt-lg-10 pt-sm-20">-->

<!--	<div class="big-style-text">Blogs</div>-->

<!--	<div class="container">-->

<!--		<div class="row justify-content-center">-->

<!--			<div class="col-lg-7">-->

<!--				<div class="section__title text-center mb-50">-->

<!--					<h4 class="sub__title__one mb-0">Latest Blogs</h4>-->

<!--					<div class="snake-line mb-15">-->

<!--						<img src="{{asset('assets/img/shape/snake-line-1a.svg')}}" alt="line">-->

<!--					</div>-->

<!--					<h2 class="section__title__one">Our Recent Blogs</h2>-->

<!--				</div>-->

<!--			</div>-->

<!--		</div>-->

<!--		<div class="row align-items-flex-start justify-content-center">-->

<!--			@foreach($blogs as $blog)-->

<!--			<div class="col-xl-4 col-lg-4 col-md-6">-->

<!--				<div class="blog__one mb-30">-->

<!--					<div class="blog__thumb mb-25">-->

<!--						<a href="{{route('blogs.detail',$blog->slug)}}">-->

<!--							<img class="w-100 lozad" data-src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->alt}}"></a>-->

<!--					</div>-->

<!--					<div class="blog__meta mb-10">-->

<!--						<a href="{{route('blogs.detail',$blog->slug)}}"> Rhino Floor</a>-->

<!--						<a class="date-text" href="{{route('blogs.detail',$blog->slug)}}">{!! \Carbon\Carbon::parse($blog->created_at)->format('d M Y') !!}</a>-->

<!--					</div>-->

<!--					<h3 class="blog__title"><a href="{{route('blogs.detail',$blog->slug)}}"> {{$blog->title}}</a></h3>-->

<!--				</div>-->

<!--			</div>-->

<!--			@endforeach-->





<!--		</div>-->

<!--		<div class="more__btn__box text-center mt-30">-->

<!--			<a href="{{route('blogs.index')}}" class="ht_btn hover-bg"><span> More Blogs <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt="blog"></span></a>-->

<!--		</div>-->

<!--	</div>-->

<!--</section>-->

<!-- blog__area end -->



<!-- brand__area start -->

<div class="brand__area pt-20 pb-100 pt-lg-60 pb-lg-60 pt-sm-20 pb-sm-40 pt-md-10 pb-md-30">

	<div class="container">





		<div class="row justify-content-center">

			<div class="col-lg-6">

				<div class="section__title text-center mb-70 px-3 mb-sm-20 mb-md-20">

					<h4 class="sub__title__one mb-0"> Our Partners </h4>

					<div class="snake-line mb-15">

						<img src="{{asset('assets/img/shape/snake-line-1a.svg')}}" alt="line">

					</div>

				</div>

			</div>

		</div>



		<div class="row">

			<div class="col-lg-12">

				<div class="swiper brand__slider__one">

					<div class="swiper-wrapper justify-content-center">

						@foreach($suppliers as $supp)

						<div class="swiper-slide">

							<div class="brand__img">

								<a href="#"><img class="lozad" data-src="{{env('APP_ADMIN_URL')}}{{$supp->logo_url}}" alt="{{$supp->brand}}"></a>

							</div>

						</div>

						@endforeach

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- brand__area end -->



<!-- cta__area start -->





@endsection