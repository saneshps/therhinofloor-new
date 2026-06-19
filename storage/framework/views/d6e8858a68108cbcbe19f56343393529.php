<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="tech blogs on flooring, best blogs on flooing, latest tech blogs">

<meta name="description" content="Read  our Rhinofloor blog for the latest in flooring solutions. Discover how to choose, install & maintain durable mats and tiles for any space.">

<title> Blogs |Rhinofloor,Saudi Arabia </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="Tech blogs in Saudi Arabia | Rhino Floor Saudi Arabia">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('blogs.index')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>









	<!--page-title-area start-->

	<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/blog/blog-banner.jpg')); ?>">

	    <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/blog/blog-banner.jpg')); ?>"  fetchpriority="high">

		<img class="page-title-shape shape-one" src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">

		<img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?>" alt="shape">



		<div class="container">

			<div class="row gx-4 gx-xxl-5 align-items-center">

				<div class="col-xl-6 col-md-6">

					<div class="page-title-wrapper text-md-start text-center">

						<h1 class="page-title mb-10">Blog</h1>

						<nav aria-label="breadcrumb">

							<ul class="breadcrumb list-none justify-content-center justify-content-md-start">

								<li><a href="<?php echo e(route('home')); ?>">Home</a></li>

								<li class="active" aria-current="page">Blog</li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!--page-title-area end-->



	<!-- blog__area start -->

	<section class="blog__area pt-100 pt-lg-120 pb-170 pb-lg-120">

		<div class="container">

			<div class="section__title text-center mb-50">

				<h2 class="section__title__one"> Our Blogs </h2>

			</div>

			<div class="row align-items-flex-start justify-content-center">

				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="col-xl-4 col-lg-4 col-md-6">

					<div class="blog__one mb-30">

						<div class="blog__thumb mb-25">

							<a href="<?php echo e(route('blogs.detail',$blog->slug)); ?>">

								<img class="w-100 lozad" data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($blog->default_image); ?>" alt="<?php echo e($blog->alt); ?>">

							</a>

						</div>

						<div class="blog__meta mb-10">

							<a href="<?php echo e(route('blogs.detail',$blog->slug)); ?>"> Rhino Floor</a>

							<a class="date-text" href="<?php echo e(route('blogs.detail',$blog->slug)); ?>"><?php echo \Carbon\Carbon::parse($blog->created_at)->format('d M Y'); ?></a>

						</div>

						<h3 class="blog__title"><a href="<?php echo e(route('blogs.detail',$blog->slug)); ?>"> <?php echo e($blog->title); ?></a></h3>

					</div>

				</div>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>

		</div>

	</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/hcoyym1o/therhinofloor.com/resources/views/blogs/index.blade.php ENDPATH**/ ?>