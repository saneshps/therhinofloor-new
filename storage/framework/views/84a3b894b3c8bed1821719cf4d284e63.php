<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="floor tiles in Saudi Arabia ,pvc tile,industrial epoxy floor,plastic tiles  monthly searches ,heavy duty tiles,used ground protection ,ceramic tiles price in Saudi Arabia ,ceramic tiles price in Saudi Arabia,floor tile price in Saudi Arabia,ceramic tiles price in Saudi Arabia,pvc corner beading for tiles,pvc tile trim suppliers in Saudi Arabia,pvc corner beading for tiles,epoxy flooring price in Saudi Arabia,flooring companies in Saudi Arabia,plastic tiles for floor,outdoor interlocking plastic floor tiles,cheapest patio flooring,cheap outdoor flooring solutions,kajaria heavy duty tiles,heavy duty tiles design,used ground protection mats for sale,entry floor mat,front door carpet mat,rubber entrance mat,indoor waterproof floor mats,indoor floor mat,all weather indoor floor mats,entrance carpet,front door carpet,entrance mat,barrier matting,outdoor rubber mats,soft floor tiles,soft carpet tiles,soft tile flooring,soft carpets,hospital flooring specifications,horse stable flooring rubber,thick rubber matting for stables,exhibition carpet tiles,exhibition stand flooring,cheap stable rubber matting,horse stall flooring systems,exhibition carpet tiles,commercial carpet tiles pricevinyl flooring sheets,office flooring,office carpet,office carpet price per square foot,office carpet prices ,plastic carpet,plastic flooring,plastic floor carpet price,plastic sheet for floor,floor plastic carpe,10x10 portable dance floor,portable dance floor for home,ergonomic rubber mats,ergonomic matt,ergonomic mats,ergonomic floor mats for standing,,industrial floor mats,rubber mats for industrial use,rubber mat manufacturer,rubber mats for industrial use,fire resistant mat,fireproof rubber mat,esd mats,anti static floor mat,esd table mat Welding tables in Saudi Arabia, Welding fixtures in Saudi Arabia, Welding jigs in Saudi Arabia">
<meta name="description" content="Connect with Rhinofloor Saudi Arabia. Get details on products, quotes, and expert flooring advice. Quick assistance for homes, offices & industries.">
<title> Contact  Us | Rhinofloor Saudi Arabia  </title>
<meta property="og:site_name" content="Rhinofloor">
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="Contact us | Rhinofloor.ae">
<meta name='og:image' content='images/assets/ogg.png'>
<link rel="canonical" href="<?php echo e(route('contact-us')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




  <!--page-title-area start-->
  <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100" data-background="<?php echo e(asset('assets/img/contact/contact-banner.jpg')); ?>">
      <link rel="preload" as="image"  href="<?php echo e(asset('assets/img/contact/contact-banner.jpg')); ?>"  fetchpriority="high">
    <img class="page-title-shape shape-one " src="<?php echo e(asset('assets/img/shape/line-14d.svg')); ?>" alt="shape">
    <img class="page-title-shape shape-two" src="<?php echo e(asset('assets/img/shape/pattern-1a.svg')); ?>" alt="shape">

    <div class="container">
      <div class="row gx-4 gx-xxl-5 align-items-center">
        <div class="col-xl-6 col-md-6">
          <div class="page-title-wrapper text-md-start text-center">
            <h1 class="page-title mb-10">Contact Us </h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="active" aria-current="page"> Contact Us </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--page-title-area end-->

  <!--contact__section start-->
  <div class="contact__section pt-180 pb-140 pt-lg-120 pb-lg-120">
    <div class="container">

      <div class="row">
        <div class="col-xl-6 col-lg-12">
          <div class="row contact__info__wrapper me-xxl-4 pe-xxl-5 mb-45">

         
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single__info__box">
                <div class="icon">
                  <i class="bi bi-envelope"></i>
                </div>
                <span> <a href="mailto:sales@rhinofloor.ae"> sales@rhinofloor.ae </a> </span>
              </div>
            </div>


         
          </div>
        </div>
    
      </div>
    </div>
  </div>
  <!--contact__section end-->

  <!-- cta__area start -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(".btn5").click(function(e) {
        var data_id = $(this).attr("data-id");
        let text_code = $('#cpatchaTextBox_' + data_id).val();
        if (text_code) {
            if (!validateCaptcha(text_code)) {
                $('.error_contact_msg').hide();
                $('.error_contact_msg').removeClass('alert alert-danger').html(" ");
                $('.error_contact_msg').show();
                $('.error_contact_msg').addClass('alert alert-danger').html("<h6 style='color: #d30a0a;'>Captcha is invalid</h6>");
            
                $('#cpatchaTextBox_' + data_id).val("");
                refreshCaptcha();
                return false;
            } else {
                $(this).submit();
            }
        } else {
            $('.error_contact_msg').show();
            $('.error_contact_msg').addClass('alert alert-danger').html("<h6 style='color: #d30a0a;'>No Captcha</h6>");

            return false;
        }
    });
    $(".close").click(function(){
        $("#cp").hide();
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/contact-us.blade.php ENDPATH**/ ?>