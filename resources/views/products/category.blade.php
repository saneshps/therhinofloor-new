@extends('layout.app')

@section('meta')

<meta name="keywords" content="{{$category->meta_keywords}}">

<meta name="description" content="{{$category->meta_description}}">

<title> {{$category->meta_title}} </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="{{$category->meta_title}}">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="{{ route('products.category', $category->short_code) }}" />

@endsection

@section('content')



<!--page-title-area start-->

<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{env('APP_ADMIN_URL')}}{{$category->banner}}">

  <link rel="preload" as="image" href="{{env('APP_ADMIN_URL')}}{{$category->banner}}" fetchpriority="high">

  <img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">

  <img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}} " alt="shape">



  <div class="container">

    <div class="row gx-4 gx-xxl-5 align-items-center">

      <div class="col-xl-6 col-md-6">

        <div class="page-title-wrapper text-md-start text-center">

          <h1 class="page-title mb-10">{{$category->name}} </h1>

          <nav aria-label="breadcrumb">

            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

              <li><a href="{{route('home')}}">Home</a></li>

              <li class="active" aria-current="page">{{$category->name}} </li>

            </ul>

          </nav>

        </div>

      </div>

    </div>

  </div>

</div>

<!--page-title-area end-->





<!--products-section start-->

<section class="products-section pt-80 pb-80 pt-lg-120 pb-lg-105">

  <div class="container">

    <div class="breadcrumbs-page">

      <nav aria-label="breadcrumb">

        <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

          <li><a href="{{route('home')}}">Home</a></li>

          <li class="active" aria-current="page">{{$category->name}}</li>



        </ul>

      </nav>

    </div>

    <div class="row">

      @foreach($categories as $product)

      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

        <figure class="product-wrapper white-bg mb-45">

          <div class="product-thumb">

            <a href="{{route('products.category',['slug'=>$product->short_code])}}"><img data-src="{{env('APP_ADMIN_URL')}}{{$product->icon_url}}" class="figure-img w-100 lozad" alt="{{$product->name}}"></a>



          </div>

          <figcaption class="figure-caption news-page">



            <h4 class="product-title"><a href="product-details.html">

                {{$product->name}}

              </a></h4>

            <div class="price">

              <span class="old-price p-0">

                <a href="{{route('products.category',['slug'=>$product->short_code])}}" class="ht_btn pro-list-btn">

                  <span> More <img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span>

                </a>

              </span>

            </div>

          </figcaption>

        </figure>

      </div>

      @endforeach

      @foreach($products as $product)
          @php
              $shortCode = optional($product->location)->short_code;
          @endphp

          @if($shortCode == 'sa' || $product->location_id == null)
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <figure class="product-wrapper white-bg mb-45">
                      <div class="product-thumb">
                          <a href="{{ route('products.detail', ['slug' => $product->slug]) }}">
                              <img data-src="{{ env('APP_ADMIN_URL') }}{{ $product->default_image }}" class="figure-img w-100 lozad" alt="{{ $product->name }}">
                          </a>
                      </div>
                      <figcaption class="figure-caption news-page">
                          <h4 class="product-title">
                              <a href="{{ route('products.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                          </h4>
                          <div class="price">
                              <span class="old-price p-0">
                                  <a href="{{ route('products.detail', ['slug' => $product->slug]) }}" class="ht_btn pro-list-btn">
                                      <span>More <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                  </a>
                              </span>
                          </div>
                      </figcaption>
                  </figure>
              </div>
          @endif
      @endforeach










    </div>

<style>

    #dex li{

        color:#333;

    }

</style>    

    

<div id="dex">

   {!! $category->description !!}

</div>   



  </div>

</section>

@include('layout._faq', ['faqs' => $faqs])

@endsection