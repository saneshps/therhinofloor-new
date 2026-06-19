@extends('layout.app')

@section('meta')

<meta name="keywords" content="floor mats, floor tiles, floor mats in Saudi Arabia, floor tiles in Saudi Arabia, entrance floor mats, aluminum entrance mats, outdoor floormats, sports floor mats">

<meta name="description" content="Buy floor mats & tiles in Saudi Arabia at Rhinofloor. Premium quality, durable, and stylish flooring solutions for homes, offices & industries.">

<title> Premium Floor Tiles & Mats Supplier in Saudi Arabia |Rhinofloor </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Floor tiles & mats: Shop the best quality floor mats & Floor tiles Online in Saudi Arabia">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="{{ route('works') }}" />

@endsection

@push('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

@endpush

@section('content')









  <!--page-title-area start-->

  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{asset('assets/img/application/industrial-sector.jpg')}}">

      <link rel="preload" as="image"  href="{{asset('assets/img/application/industrial-sector.jpg')}}"  fetchpriority="high">

    <img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">

    <img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}} " alt="shape">



    <div class="container">

      <div class="row gx-4 gx-xxl-5 align-items-center">

        <div class="col-xl-6 col-md-6">

          <div class="page-title-wrapper text-md-start text-center">

            <h1 class="page-title mb-10"> Gallery </h1>

            <nav aria-label="breadcrumb">

              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

                <li><a href="{{route('home')}}">Home</a></li>

                <li class="active" aria-current="page"> Gallery</li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--page-title-area end-->



  <!-- faq__area start -->

  <section class="our-works-area">

    <div class="container">

      <div class="row">

        @foreach($gallery as $img)

        <div class="col-xl-4 col-lg-6 col-md-6">

          <div class="work-box">

            <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{ $img->image }}">

              <img class="lozad" data-src="{{env('APP_ADMIN_URL')}}{{ $img->image }}" alt="{{ $img->image_alt }}">

            </a>

            <h5> {{ $img->title }} </h5>

          </div>

        </div>

        @endforeach

      </div>

    </div>

  </section>

  <!-- faq__area end -->





@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

@endpush