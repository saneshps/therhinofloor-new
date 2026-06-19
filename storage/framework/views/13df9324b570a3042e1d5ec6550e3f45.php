<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="floor mats, floor tiles, floor mats in Saudi Arabia, floor tiles in Saudi Arabia, entrance floor mats, aluminum entrance mats, outdoor floormats, sports floor mats">

<meta name="description" content="Buy floor mats & tiles in Saudi Arabia at Rhinofloor. Premium quality, durable, and stylish flooring solutions for homes, offices & industries.">

<title> Premium Floor Tiles & Mats Supplier in Saudi Arabia |Rhinofloor </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Floor tiles & mats: Shop the best quality floor mats & Floor tiles Online in Saudi Arabia">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('works')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>









  <!--page-title-area start-->

  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/application/industrial-sector.jpg')); ?>">

      <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/application/industrial-sector.jpg')); ?>"  fetchpriority="high">

    <img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">

    <img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?> " alt="shape">



    <div class="container">

      <div class="row gx-4 gx-xxl-5 align-items-center">

        <div class="col-xl-6 col-md-6">

          <div class="page-title-wrapper text-md-start text-center">

            <h1 class="page-title mb-10"> Gallery </h1>

            <nav aria-label="breadcrumb">

              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

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

        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xl-4 col-lg-6 col-md-6">

          <div class="work-box">

            <a data-fancybox="gallery" href="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($img->image); ?>">

              <img class="lozad" data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($img->image); ?>" alt="<?php echo e($img->image_alt); ?>">

            </a>

            <h5> <?php echo e($img->title); ?> </h5>

          </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

    </div>

  </section>

  <!-- faq__area end -->





<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/hcoyym1o/therhinofloor.com/resources/views/our-works.blade.php ENDPATH**/ ?>