
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($blog->keywords); ?>">
<meta name="description" content="<?php echo e($blog->meta_description); ?>">
<title> <?php echo e($blog->meta_title); ?> </title>
<meta property="og:site_name" content="Rhinofloor">
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo e($blog->meta_title); ?>">
<meta name='og:image' content='images/assets/ogg.png'>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



  <!--page-title-area start-->
  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/blog/blog-banner.jpg')); ?>">
      <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/blog/blog-banner.jpg')); ?>"  fetchpriority="high">
    <img class="page-title-shape shape-one lozad" data-src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">
    <img class="page-title-shape shape-two lozad" data-src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?>" alt="shape">

    <div class="container">
      <div class="row gx-4 gx-xxl-5 align-items-center">
        <div class="col-xl-12 col-md-12">
          <div class="page-title-wrapper text-md-start text-center">
            <h1 class="page-title mb-10"><?php echo e($blog->title); ?></h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="active" aria-current="page"><?php echo e($blog->title); ?></li>
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
              <a class="date-text text-body" href="#"> <?php echo \Carbon\Carbon::parse($blog->created_at)->format('d M Y'); ?> </a>
              <a class="meta-author float-end" href="#">By <span class="text-heding fw-semi">
                  Rhinofloor
                </span></a>
            </div>
            <div class="row align-items-center mt-30">
              <div class="col-xl-12 mb-30">
                <?php echo $blog->description; ?>

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
                <?php $__currentLoopData = $recent_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <div class="blog-post mb-20">
                    <div class="post-content">
                      <span><?php echo \Carbon\Carbon::parse($recent_post->created_at)->format('d M Y'); ?> </span>
                      <h6 class="mb-10"><a href="<?php echo e(route('blogs.detail',$recent_post->slug)); ?>"> <?php echo e($recent_post->title); ?>

                        </a></h6>
                    </div>
                    <a href="<?php echo e(route('blogs.detail',$recent_post->slug)); ?>"><img class="blog-thumb-img lozad" data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($recent_post->default_image); ?>" alt="<?php echo e($recent_post->alt); ?>"></a>
                  </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/blogs/detail.blade.php ENDPATH**/ ?>