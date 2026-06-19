<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($application->application_meta->keywords); ?>">
<meta name="description" content="<?php echo e($application->application_meta->meta_details); ?>">
<title> <?php echo e($application->application_meta->meta_title); ?></title>
<meta property="og:site_name" content="Rhinofloor">
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo e($application->application_meta->meta_title); ?>">
<meta name='og:image' content='images/assets/ogg.png'>
<link rel="canonical" href="<?php echo e(route('applications.detail', $application->slug)); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>




  <!--page-title-area start-->
  <div class="page-title-area pt-180 pb-180 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(env('APP_ADMIN_URL').$application_banner->image_url); ?>" style="background-image: url(&quot;<?php echo e(env('APP_ADMIN_URL').$application_banner->image_url); ?>&quot;);">
      <link rel="preload" as="image"  href="<?php echo e(env('APP_ADMIN_URL').$application_banner->image_url); ?>"  fetchpriority="high">
    <img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">
    <img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?>" alt="shape">

    <div class="container">
      <div class="row gx-4 gx-xxl-5 align-items-center">
        <div class="col-xl-6 col-md-6">
          <div class="page-title-wrapper text-md-start text-center">
            <h1 class="page-title mb-10"> <?php echo e($application->title); ?> </h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
            <?php echo $application->description; ?>



            <?php if(count($application_gallery) > 0 || count($application->application_videos) > 0): ?>
            <div class="product-review-section pb-lg-40">
              <div class="row align-items-center justify-content-start">
                <div class="col-lg-12">
                  <ul class="grey-bg nav nav-tabs product-tab" id="myTab" role="tablist">
                    <?php if(count($application_gallery) > 0): ?>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> Images
                      </button>
                    </li>
                    <?php endif; ?>
                    <?php if(count($application->application_videos) > 0): ?>
                    <li class="nav-item <?php echo e(count($application_gallery) > 0 ? '':'active'); ?>" role="presentation">
                      <button class="nav-link" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2" aria-selected="false"> Videos
                      </button>
                    </li>
                    <?php endif; ?>

                  </ul>

                </div>
                <div class="col-lg-12">
                  <div class="tab-content mt-40 mb-45" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row">
                        <?php $__currentLoopData = $application_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 application-details-gallery">
                          <a data-fancybox="gallery" href="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($app_image->image_url); ?>">
                            <img class="lozad" data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($app_image->image_url); ?>" alt="<?php echo e($app_image->image_alt); ?>">
                          </a>
                          <h5> <?php echo e($app_image->image_alt); ?> </h5>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




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
                        <?php $__currentLoopData = $application->application_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
                        $video->video_url, $match);
                        $youtube_id = $match[1];
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 service-single-video mb-40">
                          <img class="w-100 img-fluid lozad" data-src="http://img.youtube.com/vi/<?php echo e($youtube_id); ?>/hqdefault.jpg" alt="<?php echo e($video->title); ?>">
                          <a class="popup-video" href="<?php echo e($video->video_url); ?>"><i class="bi bi-play-fill"></i></a>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>




          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget-right-section ms-xl-3 mb-40">
            <ul class="list-none service-widget grey-bg">
              <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('applications.detail', $application->slug)); ?>"> <?php echo e($application->title); ?> <span class="float-end"><i class="bi bi-arrow-right-short"></i></span></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
 
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/applications/detail.blade.php ENDPATH**/ ?>