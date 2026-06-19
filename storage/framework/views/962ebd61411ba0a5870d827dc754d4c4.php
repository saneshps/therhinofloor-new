<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="floor tiles in dubai ,pvc tile,industrial epoxy floor,plastic tiles  monthly searches ,heavy duty tiles,used ground protection ,ceramic tiles price in sharjah ,ceramic tiles price in sharjah,floor tile price in dubai,ceramic tiles price in sharjah,pvc corner beading for tiles,pvc tile trim suppliers in uae,pvc corner beading for tiles,epoxy flooring price in dubai,flooring companies in uae,plastic tiles for floor,outdoor interlocking plastic floor tiles,cheapest patio flooring,cheap outdoor flooring solutions,kajaria heavy duty tiles,heavy duty tiles design,used ground protection mats for sale,entry floor mat,front door carpet mat,rubber entrance mat,indoor waterproof floor mats,indoor floor mat,all weather indoor floor mats,entrance carpet,front door carpet,entrance mat,barrier matting,outdoor rubber mats,soft floor tiles,soft carpet tiles,soft tile flooring,soft carpets,hospital flooring specifications,horse stable flooring rubber,thick rubber matting for stables,exhibition carpet tiles,exhibition stand flooring,cheap stable rubber matting,horse stall flooring systems,exhibition carpet tiles,commercial carpet tiles pricevinyl flooring sheets,office flooring,office carpet,office carpet price per square foot,office carpet prices ,plastic carpet,plastic flooring,plastic floor carpet price,plastic sheet for floor,floor plastic carpe,10x10 portable dance floor,portable dance floor for home,ergonomic rubber mats,ergonomic matt,ergonomic mats,ergonomic floor mats for standing,,industrial floor mats,rubber mats for industrial use,rubber mat manufacturer,rubber mats for industrial use,fire resistant mat,fireproof rubber mat,esd mats,anti static floor mat,esd table mat Welding tables in UAE, Welding fixtures in UAE, Welding jigs in UAE">

<meta name="description" content="Floors born tough, our floor tiles are Strong, Durable & Aesthetic.  Our product applications can be used in diverse segment from Industries, Warehouses to Stables, from Gymnasiums, Hospitals, Swimming pool, Garage, Exhibitions to Events the list goes on. Our portfolio includes PVC tiles, Heavy Duty Tiles, Work-Station Mats, Ergonomic Anti-Fatigue mats, Entrance floor matting, Outdoor tiles and Sports tiles. Contact rhinofloor.ae Sharjah, UAE for more information.">

<title> Products in Dubai UAE | Products Mats in UAE </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Products in Dubai UAE | Products Mats in UAE">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('products.index')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



  <!--page-title-area start-->

  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/product/product-banner.jpg')); ?>" style="background-image: url(&quot;<?php echo e(asset('assets/img/product/product-banner.jpg')); ?>&quot;);>

      <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/product/product-banner.jpg')); ?>"  fetchpriority="high">

    <!--<img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">-->

    <!--<img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?> " alt="shape">-->



    <div class="container">

      <div class="row gx-4 gx-xxl-5 align-items-center">

        <div class="col-xl-6 col-md-6">

          <div class="page-title-wrapper text-md-start text-center">

            <h1 class="page-title mb-10">Our Products </h1>

            <nav aria-label="breadcrumb">

              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

                <li class="active" aria-current="page"> Our Products </li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--page-title-area end-->





  <!--products-section start-->

  <section class="products-section pt-180 pb-165 pt-lg-120 pb-lg-105">

    <div class="container">



      <div class="row">

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

          <figure class="product-wrapper white-bg mb-45">

            <div class="product-thumb">

              <a href="#"><img src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($product->icon_url); ?>" class="figure-img w-100" alt="<?php echo e($product->name); ?>"></a>



            </div>

            <figcaption class="figure-caption">



              <h4 class="product-title"><a href="<?php echo e(route('products.category', $product->short_code)); ?>">

                  <?php echo e($product->name); ?>


                </a></h4>

              <div class="price">

                <span class="old-price p-0">

                  <a href="<?php echo e(route('products.category', $product->short_code)); ?>" class="ht_btn pro-list-btn">

                    <span> More <img src="<?php echo e(asset('assets/img/icon/arrow1.svg')); ?>" alt=""></span>

                  </a>

                </span>

              </div>

            </figcaption>

          </figure>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









      </div>



    </div>

  </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/products/index.blade.php ENDPATH**/ ?>