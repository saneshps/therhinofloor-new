@extends('layout.app')

@section('meta')

<meta name="keywords" content="floormat SaudiArabia, floortiles Saudi Arabia, entrancemat SaudiArabia, aluminiumentrancemat, heavydutytiles, industrialmatsin SaudiArabia, pvcfloormats, pvcfloortiles, ondoorfloormats, outdoorfloormats">

<meta name="description" content="Floors born tough, our floor tiles are Strong, Durable & Aesthetic.  Our product applications can be used in diverse segment from Industries, Warehouses to Stables, from Gymnasiums, Hospitals, Swimming pool, Garage, Exhibitions to Events the list goes on. Our portfolio includes PVC tiles, Heavy Duty Tiles, Work-Station Mats, Ergonomic Anti-Fatigue mats, Entrance floor matting, Outdoor tiles and Sports tiles. Contact rhinofloor.ae Saudi Arabia for more information.">

<title> Newsfeeds in Saudi Arabia | Newsfeeds in Rhino floor </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Newsfeeds in Saudi Arabia | Newsfeeds in Rhino floor">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="{{ route('news.index') }}" />

@endsection

@section('content')









<!--page-title-area start-->

<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{asset('assets/img/news/news-banner.jpg')}}">

	<link rel="preload" as="image" href="{{asset('assets/img/news/news-banner.jpg')}}" fetchpriority="high">

	<img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">

	<img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}}" alt="shape">



	<div class="container">

		<div class="row gx-4 gx-xxl-5 align-items-center">

			<div class="col-xl-6 col-md-6">

				<div class="page-title-wrapper text-md-start text-center">

					<h1 class="page-title mb-10">News</h1>

					<nav aria-label="breadcrumb">

						<ul class="breadcrumb list-none justify-content-center justify-content-md-start">

							<li><a href="{{route('home')}}">Home</a></li>

							<li class="active" aria-current="page">News</li>

						</ul>

					</nav>

				</div>

			</div>

		</div>

	</div>

</div>

<!--page-title-area end-->



<!--News-section start-->

<section class="products-section pt-100 pb-165 pt-lg-120 pb-lg-105">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-6">

				<div class="section__title text-center mb-50">

					<h4 class="sub__title__one mb-0"> NEWS FEEDS </h4>

					<div class="snake-line mb-15">

						<img src="{{asset('assets/img/shape/snake-line-1a.svg')}}" alt="line">

					</div>



				</div>

			</div>

		</div>



		<!--<div class="row">-->

		<!--	@foreach($news as $new)-->

		<!--	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">-->

		<!--		<figure class="product-wrapper white-bg mb-45">-->

		<!--			<div class="product-thumb">-->

		<!--				<a href="{{$new->link}}" target="_blank"><img data-src="{{env('APP_ADMIN_URL')}}{{$new->image}}" class="figure-img w-100 lozad" alt="news"></a>-->



		<!--			</div>-->

		<!--			<figcaption class="figure-caption news-page">-->

		<!--				<div class="product-tag"> <i class="fas fa-heart"></i> {{$new->likes}} Likes </div>-->

		<!--				<h4 class="product-title"><a href="javscript:void(0)">-->

		<!--						{{$new->title}}-->

		<!--					</a></h4>-->

		<!--			    {!! Str::limit($new->description, 100) . '...' !!}		-->

						

		<!--				<p class="read-linked"> <a href="{{$new->link}}" target="_blank">-->

		<!--						Read More <i class="fab fa-linkedin"></i> </a></p>-->



		<!--			</figcaption>-->

		<!--		</figure>-->

		<!--	</div>-->

		<!--	@endforeach-->











		<!--</div>-->



	</div>

</section>



@endsection