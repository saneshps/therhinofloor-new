<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="floor mats, floor tiles, floor mats in Saudi Arabia, floor tiles in Saudi Arabia, entrance floor mats, aluminum entrance mats, outdoor floormats, sports floor mats">

<meta name="description" content="Rhinofloor is a premium tiles and mat supplier in the Saudi Arabia. All types of floor tiles and floor mats are available. Call us on:+971 50 210 9308">

<title> Floor tiles & mats: Shop the best quality floor mats & Floor tiles Online in Saudi Arabia </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Floor tiles & mats: Shop the best quality floor mats & Floor tiles Online in Saudi Arabia">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('applications.index')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>









  <!--page-title-area start-->

  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/application/application-banner.jpg')); ?>">

      <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/application/application-banner.jpg')); ?>"  fetchpriority="high">

    <!--<img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">-->

    <!--<img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?>" alt="shape">-->



    <div class="container">

      <div class="row gx-4 gx-xxl-5 align-items-center">

        <div class="col-xl-6 col-md-6">

          <div class="page-title-wrapper text-md-start text-center">

            <h1 class="page-title mb-10"> Application </h1>

            <nav aria-label="breadcrumb">

              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

                <li class="active" aria-current="page"> Application </li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--page-title-area end-->



  <!-- services__area start -->

  <section class="services__area2 pt-90 pt-lg-55 pb-170 pb-lg-110">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-6">

          <div class="section__title text-center mb-60">

            <h2 class="section__title__one "> Flooring <span class="text-theme">Applications</span></h2>

          </div>

        </div>

      </div>

      <div class="row">

        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-4 col-md-6 col-sm-6">

          <div class="single__services__box mb-60">

            <div class="services__thumb">

              <img class="w-100 lozad" data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($application->image); ?>" alt="<?php echo e($application->image_alt); ?>">

            </div>

            <div class="services__content">

              <!-- <div class="services__icon">

                <img src="<?php echo e(asset('assets/img/application/application-icon.png')); ?>" alt="Icon">

              </div> -->

              <h4 class="single__service__title"><a href="<?php echo e(route('applications.detail', $application->slug)); ?>">

                  <?php echo e($application->title); ?> </a>

              </h4>

              <a href="<?php echo e(route('applications.detail', $application->slug)); ?>"><img src="<?php echo e(asset('assets/img/icon/long-arrow.svg')); ?>" alt="Arrow"></a>

            </div>

          </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>















































      </div>



    </div>

  </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/hcoyym1o/therhinofloor.com/resources/views/applications/index.blade.php ENDPATH**/ ?>