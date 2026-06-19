@extends('layout.app')

@section('meta')

<meta name="keywords" content="tech blogs on flooring, best blogs on flooing, latest tech blogs">

<meta name="description" content="Read  our Rhinofloor blog for the latest in flooring solutions. Discover how to choose, install & maintain durable mats and tiles for any space.">

<title> Blogs |Rhinofloor,Saudi Arabia </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Tech blogs in Saudi Arabia | Rhino Floor Saudi Arabia">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="{{ route('blogs.index') }}" />

@endsection

@section('content')









	<!--page-title-area start-->

	<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{asset('assets/img/blog/blog-banner.jpg')}}">

	    <link rel="preload" as="image"  href="{{asset('assets/img/blog/blog-banner.jpg')}}"  fetchpriority="high">

		<img class="page-title-shape shape-one" src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">

		<img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}}" alt="shape">



		<div class="container">

			<div class="row gx-4 gx-xxl-5 align-items-center">

				<div class="col-xl-6 col-md-6">

					<div class="page-title-wrapper text-md-start text-center">

						<h1 class="page-title mb-10">Blog</h1>

						<nav aria-label="breadcrumb">

							<ul class="breadcrumb list-none justify-content-center justify-content-md-start">

								<li><a href="{{route('home')}}">Home</a></li>

								<li class="active" aria-current="page">Blog</li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!--page-title-area end-->



	<!-- blog__area start -->

	<section class="blog__area pt-100 pt-lg-120 pb-170 pb-lg-120">

		<div class="container">

			<div class="section__title text-center mb-50">

				<h2 class="section__title__one"> Our Blogs </h2>

			</div>

			<div class="row align-items-flex-start justify-content-center">

				@foreach($blogs as $blog)

				<div class="col-xl-4 col-lg-4 col-md-6">

					<div class="blog__one mb-30">

						<div class="blog__thumb mb-25">

							<a href="{{route('blogs.detail',$blog->slug)}}">

								<img class="w-100 lozad" data-src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->alt}}">

							</a>

						</div>

						<div class="blog__meta mb-10">

							<a href="{{route('blogs.detail',$blog->slug)}}"> Rhino Floor</a>

							<a class="date-text" href="{{route('blogs.detail',$blog->slug)}}">{!! \Carbon\Carbon::parse($blog->created_at)->format('d M Y') !!}</a>

						</div>

						<h3 class="blog__title"><a href="{{route('blogs.detail',$blog->slug)}}"> {{$blog->title}}</a></h3>

					</div>

				</div>

				@endforeach

			</div>

		</div>

	</section>



@endsection