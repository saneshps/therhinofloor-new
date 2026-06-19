@extends('layout.app')
@section('meta')
<meta name="keywords" content="{{$blog->keywords}}">
<meta name="description" content="{{$blog->meta_description}}">
<title> {{$blog->meta_title}} </title>
<meta property="og:site_name" content="Rhinofloor">
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$blog->meta_title}}">
<meta name='og:image' content='images/assets/ogg.png'>
@endsection
@section('content')



  <!--page-title-area start-->
  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{asset('assets/img/blog/blog-banner.jpg')}}">
      <link rel="preload" as="image"  href="{{asset('assets/img/blog/blog-banner.jpg')}}"  fetchpriority="high">
    <img class="page-title-shape shape-one lozad" data-src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">
    <img class="page-title-shape shape-two lozad" data-src="{{asset('assets/img/shape/pattern-1a.svg')}}" alt="shape">

    <div class="container">
      <div class="row gx-4 gx-xxl-5 align-items-center">
        <div class="col-xl-12 col-md-12">
          <div class="page-title-wrapper text-md-start text-center">
            <h1 class="page-title mb-10">{{$blog->title}}</h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active" aria-current="page">{{$blog->title}}</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--page-title-area end-->

  <!-- blog__details__area start -->
  <section class="blog__details__area pt-100 pt-lg-120 pb-170 pb-lg-110">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 blog-details">
          <div class="blog__details__wrapper">

            <div class="blog__meta mb-25">
              <a class="date-text text-body" href="#"> {!! \Carbon\Carbon::parse($blog->created_at)->format('d M Y') !!} </a>
              <a class="meta-author float-end" href="#">By <span class="text-heding fw-semi">
                  Rhinofloor
                </span></a>
            </div>
            <div class="row align-items-center mt-30">
              <div class="col-xl-12 mb-30">
                {!! $blog->description !!}
              </div>
            </div>


          </div>
        </div>
        <div class="col-lg-5">
          <div class="widget-right-section ps-xl-4 mb-40">
            <div class="widget widget__search grey-bg mb-0">
              <div class="widget-title-box mb-20">
                <h4 class="widget__title__three">Search Here</h4>
              </div>
              <form class="subscribe-form" action="#">
                <input type="text" placeholder="Search Anything">
                <button class="widget-btn"><i class="bi bi-search"></i></button>
              </form>
            </div>
            <div class="grey-bg widget widget-post mb-60">
              <div class="widget-title-box mb-20">
                <h4 class="widget__title__three">Recent Post</h4>
              </div>
              <ul class="post-list">
                @foreach($recent_posts as $recent_post)
                <li>
                  <div class="blog-post mb-20">
                    <div class="post-content">
                      <span>{!! \Carbon\Carbon::parse($recent_post->created_at)->format('d M Y') !!} </span>
                      <h6 class="mb-10"><a href="{{route('blogs.detail',$recent_post->slug)}}"> {{$recent_post->title}}
                        </a></h6>
                    </div>
                    <a href="{{route('blogs.detail',$recent_post->slug)}}"><img class="blog-thumb-img lozad" data-src="{{env('APP_ADMIN_URL')}}{{$recent_post->default_image}}" alt="{{$recent_post->alt}}"></a>
                  </div>
                </li>
                @endforeach




              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection