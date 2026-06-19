	<footer class="footer-area" style="overflow: hidden !important;">
			<div class="footer-bg-two pt-95">
				<img class="shapes__1" src="<?php echo e(asset('assets/img/shape/star-3a.svg')); ?>" alt="">
				<img class="shapes__2" src="<?php echo e(asset('assets/img/shape/line-7a.svg')); ?>" alt="">
				<div class="blur__shape"></div>
				<div class="container pt-10 pt-lg-10">
					<div class="row mb-25">
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30 px-xxl-3">
								<a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/img/logo/header-logo-1.png')); ?>" alt="Logo"></a>
								<p class="footer__description mt-40"> Everyone loves a perfect Floor. And the Floor takes a lot,
									from the masses which walks on it, the equipment placed to the heavy loads which moves on it.
								</p>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30">
								<h3 class="phone__nimber mb-25 text-white"> Our Products </h3>
								<ul class="fot-list">
									<?php $__currentLoopData = $total_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="<?php echo e(route('products.detail',$product->slug)); ?>"> <?php echo e($product->display_title!="" ? $product->display_title : $product->name); ?></a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


								</ul>


							</div>
						</div>
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30">
								<div class="footer__contact">
									<h3 class="phone__nimber mb-25"> <a> Contact Us </a> </h3>
								
									<p class="mb-25">
									

										Mail : <a href="mailto:sales@rhinofloor.ae"> sales@rhinofloor.ae </a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-6 col-md-6">
							<div class="footer__widget mb-30">
								<h4 class="widget__title"> Connect with Us </h4>
								<div class="ht-footer-subscribe-form mt-20 mb-40">
									<div class="social_media">
										<a href="https://www.facebook.com/people/Rhino-Floor/100063764514991/" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="https://www.instagram.com/rhino.floor?igshid=k4kzc88x9zrl" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.linkedin.com/company/rhino-floor/" target="_blank">
											<i class="fab fa-linkedin-in"></i>
										</a>
											<a href="https://api.whatsapp.com/send?phone=+971542791581&text=Hello from Rhino Floor!" target="_blank">

											<i class="fab fa-whatsapp"></i>

										</a>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container copyright__border">
					<div class="copyright__area pt-30">
						<div class="row align-items-center">
							<div class="col-lg-6 text-center text-lg-start">
								<div class="copyright__text mb-30">
									<p>

										© <?php echo e(date('Y')); ?> <a class="fw-bold" href="https://www.therhinofloor.com/" target="_blank">www.therhinofloor.com </a>
										All rights reserved. Powered By <a href="https://girafcreatives.com/in/" target="_blank"> Giraf </a>
									</p>
								</div>
							</div>
							<div class="col-lg-6 text-center text-lg-end">
								<ul class="footer__menu mb-30">
									<li>
										<a href="<?php echo e(route('our-story')); ?>"> About Us </a>
									</li>
									<li>
										<a href="<?php echo e(route('works')); ?>"> Our Works </a>
									</li>
									<li>
										<a href="<?php echo e(route('faq')); ?>"> FAQ </a>
									</li>
									<li>
										<a href="<?php echo e(route('contact-us')); ?>"> Contact Us </a>
									</li>

									<li>
										<a href="<?php echo e(route('privacy-policy')); ?>">Privacy Policy</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><?php /**PATH /home4/hcoyym1o/therhinofloor.com/resources/views/layout/_footer.blade.php ENDPATH**/ ?>