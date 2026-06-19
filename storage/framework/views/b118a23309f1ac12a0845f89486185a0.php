<?php $__env->startSection('meta'); ?>

<meta name="keywords" content="<?php echo e($product->product_meta->keywords); ?>">

<meta name="description" content="<?php echo e($product->product_meta->meta_details); ?>">

<title> <?php echo e($product->product_meta->meta_title); ?> </title>

<meta property="og:site_name" content="Rhinofloor">

<meta property="og:url" content="">

<meta property="og:type" content="website">

<meta property="og:title" content="<?php echo e($product->product_meta->meta_title); ?>">

<meta name='og:image' content='images/assets/ogg.png'>

<link rel="canonical" href="<?php echo e(route('products.detail', $product->slug)); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>









<!--page-title-area start-->

<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(isset($product_banner)?env('APP_ADMIN_URL').$product_banner->image_url:''); ?>" style="background-image: url(&quot;<?php echo e(isset($product_banner)?env('APP_ADMIN_URL').$product_banner->image_url:''); ?>&quot;);">

  <link rel="preload" as="image" href="<?php echo e(isset($product_banner)?env('APP_ADMIN_URL').$product_banner->image_url:''); ?>" fetchpriority="high">

  <img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">

  <img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?> " alt="shape">



  <div class="container">

    <div class="row gx-4 gx-xxl-5 align-items-center">

      <div class="col-xl-6 col-md-6">

        <div class="page-title-wrapper text-md-start text-center">

          <h1 class="page-title mb-10"> <?php echo e($product->name); ?> </h1>

          <nav aria-label="breadcrumb">

            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

              <li class="active" aria-current="page"> Products Details </li>

            </ul>

          </nav>

        </div>

      </div>

    </div>

  </div>

</div>

<!--page-title-area end-->





<!--product-details-section start-->

<section class="product-details-section pt-180 pt-lg-90 pb-50">

  <div class="container">

    <!-- breadcrumbs -->

    <div class="breadcrumbs-page">

      <nav aria-label="breadcrumb">

        <ul class="breadcrumb list-none justify-content-center justify-content-md-start">

          <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

          <li><a href="<?php echo e(route('products.category',$product->category->short_code)); ?>"><?php echo e($product->category->name); ?></a></li>

          <li class="active" aria-current="page"><?php echo e($product->name); ?></li>

        </ul>

      </nav>

    </div>

    <!-- breadcrumbs -->

    <div class="row align-items-start">

      <?php if($product->default_image!=""||$product_gallery->count()>0): ?>



      <div class="col-lg-6 mb-40">

        <div class="swiper product__slider">

          <div class="swiper-wrapper mb-20">

            <?php if($product->default_image!=""): ?>

            <div class="swiper-slide product-item">



              <a data-fancybox="gallery" href="<?php echo e(env('APP_ADMIN_URL').$product->default_image); ?>">

                <img class="w-100 lozad" data-src="<?php echo e(env('APP_ADMIN_URL').$product->default_image); ?>" alt="Fortelock">

              </a>



            </div>

            <?php endif; ?>

            <?php if($product_gallery->count()>0): ?>

            <?php $__currentLoopData = $product_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="swiper-slide product-item">



              <a data-fancybox="gallery" href="<?php echo e(env('APP_ADMIN_URL').$gallery->image_url); ?>">

                <img class="w-100 lozad" data-src="<?php echo e(env('APP_ADMIN_URL').$gallery->image_url); ?>" alt="Fortelock">

              </a>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

          </div>

        </div>

        <div class="swiper product__thumbs__slider">

          <div class="swiper-wrapper">

            <?php if($product->default_image!=""): ?>

            <div class="swiper-slide product__thumb">

              <img class="lozad" data-src="<?php echo e(env('APP_ADMIN_URL').$product->default_image); ?>" alt="Big Image">

            </div>

            <?php endif; ?>

            <?php if($product_gallery->count()>0): ?>

            <?php $__currentLoopData = $product_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="swiper-slide product__thumb">

              <img class="lozad" data-src="<?php echo e(env('APP_ADMIN_URL').$gallery->image_url); ?>" alt="Big Image">

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>



          </div>

        </div>

      </div>

      <?php endif; ?>

      <style>

    .product-description-head #read-more {

      display: flex;

      flex-direction: column;

      font-weight: 700;

      color: black;

    }



    .product-description-head #read-less {

      display: flex;

      flex-direction: column;

      font-weight: 700;

      color: black;

    }



  </style>

      <div class="col-lg-6 mb-40">

        <div class="product-details-content pt-lg-4 ps-xl-5">

          <div class="product-details">







            <?php if($product->description!=""): ?>

            <div class="product-description-head" id="short_desc">



              <div id="text-info">

              <?php echo \Illuminate\Support\Str::limit($product->description, 650, $end='...'); ?><br>

              </div>

              <a href="javascript:void(0);" id="read-more">Read More >> </a>

            </div>



            <div class="product-description-head" style="display:none;" id="long_desc">



              <?php echo $product->description; ?>


              

              <a href="javascript:void(0);" id="read-less">

                << Read Less </a>

            </div>

            <?php endif; ?>







            <!-- <a href="#" class="cart-btn">Buy Now</a> -->



            <a type="button" class="btn btn-primary cart-btn" data-toggle="modal" data-target="#exampleModalCenter">

              Express Interest

            </a>





            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                  <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle"> Express Interest

                      For

                      the Product

                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                      <span aria-hidden="true">×</span>

                    </button>

                  </div>

                  <div class="modal-body">

                     

                      <div class="error_enquiry_form"></div>

                    <form id="contact" class="interest_send" action="" method="post">







                      <div class="form-group">

                       

                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="" data-sider-insert-id="f175008d-3510-4f72-8e5d-5b7398adac77" data-sider-select-id="86e14447-4da8-4b20-9f91-70e6130302e8">



                      </div>



                      <div class="form-group">

                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required="">



                      </div>



                      <div class="form-group">

                        <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required="" name="phone">



                      </div>

                         <div class="form-group">

                                <div class="row">

                                    <div class="col-md-12 d-flex mb-3">

                                        <div id="captcha_0" class="captcha-div"></div>

                                        <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha"> <i class="fas fa-sync-alt" aria-hidden="true" style="font-size: 19px;padding-top: 13px;"></i></a>

                                    </div>

                                    <div class="col-md-12 d-flex mb-3">

                                        <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_0" />

                                    </div>

                                </div>

                            </div>



                      <button type="button" id="express-interest-submit" class="btn submit-b" data-id="0"> <span>

                          Submit</span> </button>





                    </form>

                  </div>

                    <div class="row" id="enquiry_loader">

                                    <div class="col-md-12" style="text-align: center;">

                                        <img src="<?php echo e(asset('assets/img/spinning-loading.gif')); ?>" style="width: 133px;" />

                                    </div>

                                </div>

                                <div class="alert alert-success alert-block" id="success_enquiry_block" style="bottom:-14px">

                                    <button type="button" class="close" data-dismiss="alert">×</button>

                                    <strong id="success_enquiry_message_block"></strong>

                                </div>



                </div>

              </div>

            </div>

            <!-- Modal -->



            <!-- <div class="social_media media_grey mt-50 mb-30">

                <span class="social-tag pe-1 me-sm-4">Share Now:</span>

                <a href="https://www.facebook.com/people/Rhino-Floor/100063764514991/" target="_blank">

                  <i class="fab fa-facebook-f"></i>

                </a>

                <a href="https://www.instagram.com/rhino.floor/?igshid=k4kzc88x9zrl" target="_blank">

                  <i class="fab fa-instagram"></i>

                </a>

                <a href="https://www.linkedin.com/company/rhino-floor/?originalSubdomain=ae" target="_blank">

                  <i class="fab fa-linkedin-in"></i>

                </a>



              </div> -->

            <?php if(isset($product->product_brand)): ?>

            <div class="suppliers-know-more">

              <img data-src="<?php echo e(env('APP_ADMIN_URL')); ?><?php echo e($product->product_brand->logo_url); ?>" class="lozad" alt="suppliers">

              <a href="<?php echo e($product->product_brand->website); ?>" class="ht_btn"><span> Know More <img src="assets/img/icon/arrow1.svg" alt=""></span></a>

            </div>

            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!--product-details-section end-->







<!--product-review-section start-->

<div class="product-review-section pb-100 pb-lg-40">

  <div class="container">

    <div class="row">

      <div class="col-xl-3 col-lg-4 col-md-6 product-manager">

        <h3> <?php echo e($product->product_manager->designation); ?></h3>

        <img data-src="<?php echo e(env('APP_ADMIN_URL').$product->product_manager->image_url); ?>" alt="<?php echo e($product->product_manager->designation); ?>" class="img-fluid lozad">

        <h4> <?php echo e($product->product_manager->name); ?> </h4>

        <h6> <a href="mailto:sales@rhinofloor.ae"> sales@rhinofloor.ae </a> </h6>

        <h5> <a href="tel:+97165264382"> +971 65 26 43 82 </a> </h5>

      </div>

      <div class="col-xl-9 col-lg-8 col-md-12">

        <div class="row align-items-center justify-content-start">

          <div class="col-lg-12">

            <ul class="grey-bg nav nav-tabs product-tab" id="myTab" role="tablist">

              <!-- <li class="nav-item" role="presentation">

                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> Key Features </button>

                </li> -->

              <?php if(count($product->product_catalogues) > 0): ?>

              <li class="nav-item" role="presentation">

                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Download Catalogues

                </button>

              </li>

              <?php endif; ?>

              <?php if(count($product->product_videos) > 0): ?>

              <li class="nav-item" role="presentation">

                <button class="nav-link <?php echo e(count($product->product_catalogues) > 0 ? '' : 'active'); ?>" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2" aria-selected="false"> Videos

                </button>

              </li>

              <?php endif; ?>



            </ul>



          </div>

          <div class="col-lg-12">

            <div class="tab-content mt-40 mb-45" id="myTabContent">

              <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                  <ul class="product-detail-tab">

                    <li> This type of industrial floor tile and mat is recommended for areas

                      characterized by high stress,

                      the need for durability, for high-quality, quick installation and

                      renovation.

                    </li>

                    <li> A PVC floor particularly stands out for its waterproof and

                      anti-slip properties, sound dampening and chemical resistance </li>

                  </ul>

                </div> -->

              <?php if(count($product->product_catalogues) > 0): ?>

              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="row align-items-center">



                  <?php $__currentLoopData = $product->product_catalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                  <div class="col-xl-4 col-lg-6 col-md-6 catalogues">

                    <iframe src="<?php echo e(env('APP_ADMIN_URL').$catalogue->catalogue); ?>" height="250"></iframe>

                    <br>



                    <a href="<?php echo e(env('APP_ADMIN_URL').$catalogue->catalogue); ?>" class="ht_btn catalogue-download-btn"><span> Download

                        <i class="fas fa-download"></i>

                      </span></a>

                  </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                </div>

              </div>

              <?php endif; ?>

              <?php if(count($product->product_videos) > 0): ?>

              <div class="tab-pane fade <?php echo e(count($product->product_catalogues) > 0 ? '' : 'show active'); ?>" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">

                <div class="row align-items-center">

                  <?php $__currentLoopData = $product->product_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php

                  preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',

                  $video->video_url, $match);

                  $youtube_id = $match[1];

                  ?>

                  <div class="col-xl-6 col-lg-6 col-md-6 service-single-video mb-40">

                    <img class="w-100 img-fluid" src="http://img.youtube.com/vi/<?php echo e($youtube_id); ?>/hqdefault.jpg" alt="img">

                    <a class="popup-video" href="<?php echo e($video->video_url); ?>"><i class="bi bi-play-fill"></i></a>

                  </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>

              </div>

              <?php endif; ?>



            </div>

          </div>

        </div>

      </div>

    </div>



  </div>

</div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>



    <script type="text/javascript">

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $("#success_enquiry_block").hide();

        $("#enquiry_loader").hide();

        $("#express-interest-submit").click(function(e) {



            e.preventDefault();

            var data_id = $(this).attr("data-id");

            let text_code = $('#cpatchaTextBox_' + data_id).val();



            if (text_code) {

                if (!validateCaptcha(text_code)) {

                    $('.error_enquiry_form').hide();

                    $('.error_enquiry_form').removeClass('alert alert-danger').html(" ");

                    $('.error_enquiry_form').show();

                    $('.error_enquiry_form').addClass('alert alert-danger').html("Captcha Invalid");

                    $('#cpatchaTextBox_' + data_id).val("");

                    refreshCaptcha();

                    return false;

                }



            } else {

                $('.error_enquiry_form').show();

                $('.error_enquiry_form').addClass('alert alert-danger').html("No Captcha");



                return false;

            }

			

	  if ($("#name").val() == "") {

		  $(".error_enquiry_form").show();

        $(".error_enquiry_form").addClass('alert alert-danger').text("Please enter Name");

        return false;

      }



      if ($("#phone").val() == "") {

		  $(".error_enquiry_form").show();

        $(".error_enquiry_form").addClass('alert alert-danger').text("Please Enter Phone");

        return false;

      }



      if ($("#email").val() == "") {

		  $(".error_enquiry_form").show();

        $(".error_enquiry_form").addClass('alert alert-danger').text("Please Enter Email");

        return false;

      }



     



            var name = $("#name").val();

            var phone = $("#phone").val();

            var email = $("#email").val();

            var product = "<?php echo e($product->name); ?>"; 

           // var csrf = $('meta[name="csrf-token"]').attr('content');

            $.ajax({

                method: "POST",

                url: "<?php echo e(route('express-interest')); ?>",

                data: {

                    name: name,

                    phone: phone,

                    email: email,

                    product: product,

                 



                },

                beforeSend: function(xhr) {

                    // Show the loader

                    $('.error_enquiry_form').hide();

                    $("#enquiry_loader").show();



                },

                success: function(response) {

                    

                    $("#enquiry_loader").hide();

                    $('.error_enquiry_form').hide();

                    $("#success_enquiry_block").show();

                    $("#success_enquiry_message_block").html(response.success);

                    $("#name").val("");

                    $("#phone").val("");

                    $("#email").val("");

                    $('#cpatchaTextBox_' + data_id).val("");

                    refreshCaptcha();

                    //    $("#country_quatation").prop('selected', false).find('option:first').prop('selected', true);



                },

                error: function(data) {

                    $("#enquiry_loader").hide();

                    $(".error_enquiry_form").show();

                    let err_str = '';

                    if (data.responseJSON.errors) {

                        err_str = '<dl class="row"><dt class="col-sm-3"></dt><dt class="col-sm-9"><p><b>Whoops!!</b> There is some Problem</p></dt>';

                        $.each(data.responseJSON.errors, function(key, val) {

                            err_str += '<dt class="col-sm-3">' + key.replace("_", " ") + ' </dt><dd class="col-sm-9">' + val + '</dd>';

                        });

                        err_str += '</dl>';

                        $('.error_request_form').addClass('alert alert-danger').html(err_str);



                        return false;

                    }



                }

            });



        });

    </script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>

  $('#read-more').on('click', function(e) {

    $('#long_desc').css({

      'display': 'block'

    });

    $('#short_desc').css({

      'display': 'none'

    });

  });



  $('#read-less').on('click', function(e) {

    $('#long_desc').css({

      'display': 'none'

    });

    $('#short_desc').css({

      'display': 'block'

    });

  });

</script>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/products/detail.blade.php ENDPATH**/ ?>