<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="<?php echo e($category->meta_keywords); ?>">

<meta name="description" content="<?php echo e($category->meta_description); ?>">

<title> <?php echo e($category->meta_title); ?> </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="<?php echo e($category->meta_title); ?>">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('products.category', $category->short_code)); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<!--page-title-area start-->

<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($category->banner); ?>">

  <link rel="preload" as="image" href="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($category->banner); ?>" fetchpriority="high">

  <img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">

  <img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?> " alt="shape">



  <div class="container">

    <div class="row gx-4 gx-xxl-5 align-items-center">

      <div class="col-xl-6 col-md-6">

        <div class="page-title-wrapper text-md-start text-center">

          <h1 class="page-title mb-10"><?php echo e($category->name); ?> </h1>

          <nav aria-label="breadcrumb">

            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

              <li class="active" aria-current="page"><?php echo e($category->name); ?> </li>

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

          <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

          <li class="active" aria-current="page"><?php echo e($category->name); ?></li>



        </ul>

      </nav>

    </div>

    <div class="row">

      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

        <figure class="product-wrapper white-bg mb-45">

          <div class="product-thumb">

            <a href="<?php echo e(route('products.category',['slug'=>$product->short_code])); ?>"><img data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($product->icon_url); ?>" class="figure-img w-100 lozad" alt="<?php echo e($product->name); ?>"></a>



          </div>

          <figcaption class="figure-caption news-page">



            <h4 class="product-title"><a href="product-details.html">

                <?php echo e($product->name); ?>


              </a></h4>

            <div class="price">

              <span class="old-price p-0">

                <a href="<?php echo e(route('products.category',['slug'=>$product->short_code])); ?>" class="ht_btn pro-list-btn">

                  <span> More <img src="<?php echo e(asset('assets/img/icon/arrow1.svg')); ?>" alt=""></span>

                </a>

              </span>

            </div>

          </figcaption>

        </figure>

      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
              $shortCode = optional($product->location)->short_code;
          ?>

          <?php if($shortCode == 'sa' || $product->location_id == null): ?>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <figure class="product-wrapper white-bg mb-45">
                      <div class="product-thumb">
                          <a href="<?php echo e(route('products.detail', ['slug' => $product->slug])); ?>">
                              <img data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($product->default_image); ?>" class="figure-img w-100 lozad" alt="<?php echo e($product->name); ?>">
                          </a>
                      </div>
                      <figcaption class="figure-caption news-page">
                          <h4 class="product-title">
                              <a href="<?php echo e(route('products.detail', ['slug' => $product->slug])); ?>"><?php echo e($product->name); ?></a>
                          </h4>
                          <div class="price">
                              <span class="old-price p-0">
                                  <a href="<?php echo e(route('products.detail', ['slug' => $product->slug])); ?>" class="ht_btn pro-list-btn">
                                      <span>More <img src="<?php echo e(asset('assets/img/icon/arrow1.svg')); ?>" alt=""></span>
                                  </a>
                              </span>
                          </div>
                      </figcaption>
                  </figure>
              </div>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>










    </div>

<style>

    #dex li{

        color:#333;

    }

</style>    

    

<div id="dex">

   <?php echo $category->description; ?>


</div>   



  </div>

</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/products/category.blade.php ENDPATH**/ ?>