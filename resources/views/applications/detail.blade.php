@extends('layout.app')
@section('meta')
<meta name="keywords" content="{{$application->application_meta->keywords}}">
<meta name="description" content="{{$application->application_meta->meta_details}}">
<title> {{$application->application_meta->meta_title}}</title>
<meta property="og:site_name" content="Rhinofloor">
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$application->application_meta->meta_title}}">
<meta name='og:image' content='images/assets/ogg.png'>
<link rel="canonical" href="{{ route('applications.detail', $application->slug) }}" />
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush
@section('content')




  <!--page-title-area start-->
  <div class="page-title-area pt-180 pb-180 pt-lg-120 pb-lg-125 pb-md-100" data-background="{{env('APP_ADMIN_URL').$application_banner->image_url}}" style="background-image: url(&quot;{{env('APP_ADMIN_URL').$application_banner->image_url}}&quot;);">
      <link rel="preload" as="image"  href="{{env('APP_ADMIN_URL').$application_banner->image_url}}"  fetchpriority="high">
    <img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">
    <img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}}" alt="shape">

    <div class="container">
      <div class="row gx-4 gx-xxl-5 align-items-center">
        <div class="col-xl-6 col-md-6">
          <div class="page-title-wrapper text-md-start text-center">
            <h1 class="page-title mb-10"> {{$application->title}} </h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active" aria-current="page"> Application Details </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--page-title-area end-->

  <!-- services__area start -->
  <section class="services__details__area pt-100 pt-lg-120 pb-60 pb-lg-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="services__details__wrapper">
            {!! $application->description !!}


            @if(count($application_gallery) > 0 || count($application->application_videos) > 0)
            <div class="product-review-section pb-lg-40">
              <div class="row align-items-center justify-content-start">
                <div class="col-lg-12">
                  <ul class="grey-bg nav nav-tabs product-tab" id="myTab" role="tablist">
                    @if(count($application_gallery) > 0)
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> Images
                      </button>
                    </li>
                    @endif
                    @if(count($application->application_videos) > 0)
                    <li class="nav-item {{count($application_gallery) > 0 ? '':'active'}}" role="presentation">
                      <button class="nav-link" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2" aria-selected="false"> Videos
                      </button>
                    </li>
                    @endif

                  </ul>

                </div>
                <div class="col-lg-12">
                  <div class="tab-content mt-40 mb-45" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row">
                        @foreach ($application_gallery as $app_image)
                        <div class="col-xl-4 col-lg-6 col-md-6 application-details-gallery">
                          <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{$app_image->image_url}}">
                            <img class="lozad" data-src="{{env('APP_ADMIN_URL')}}{{$app_image->image_url}}" alt="{{$app_image->image_alt}}">
                          </a>
                          <h5> {{$app_image->image_alt}} </h5>
                        </div>
                        @endforeach




                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 catalogues">
                          <iframe src="assets/img/pdf/Fortelock-Catalogue.pdf" height="250"></iframe>
                          <br>

                          <a href="assets/img/pdf/Fortelock-Catalogue.pdf" class="ht_btn catalogue-download-btn"><span> Download
                              <i class="fas fa-download"></i>
                            </span></a>
                        </div>

                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                      <div class="row align-items-center">
                        @foreach($application->application_videos as $video)
                        @php
                        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
                        $video->video_url, $match);
                        $youtube_id = $match[1];
                        @endphp
                        <div class="col-xl-4 col-lg-6 col-md-6 service-single-video mb-40">
                          <img class="w-100 img-fluid lozad" data-src="http://img.youtube.com/vi/{{$youtube_id}}/hqdefault.jpg" alt="{{$video->title}}">
                          <a class="popup-video" href="{{$video->video_url}}"><i class="bi bi-play-fill"></i></a>
                        </div>

                        @endforeach


                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            @endif




          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget-right-section ms-xl-3 mb-40">
            <ul class="list-none service-widget grey-bg">
              @foreach($applications as $application)
              <li><a href="{{route('applications.detail', $application->slug)}}"> {{ $application->title}} <span class="float-end"><i class="bi bi-arrow-right-short"></i></span></a></li>
              @endforeach

            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>

@include('layout._faq', ['faqs' => $faqs])

@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush