<?php if(isset($faqs) && $faqs->isNotEmpty()): ?>
<section class="faq__area pt-80 pb-80 pt-lg-60 pb-lg-50">
  <div class="grey-bg faq__section__wrapper pt-80 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section__title text-center mb-50">
            <h4 class="sub__title__one mb-0">FAQs</h4>
            <div class="snake-line mb-15">
              <img src="<?php echo e(asset('assets/img/shape/snake-line-1a.svg')); ?>" alt="line">
            </div>
            <h2 class="section__title__one">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion accordion-one" id="faqAccordion">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="accordion-item mb-20">
              <h2 class="accordion-header" id="faqHeading<?php echo e($faq->id); ?>">
                <button
                  class="accordion-button <?php echo e($loop->first ? '' : 'collapsed'); ?>"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse<?php echo e($faq->id); ?>"
                  aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                  aria-controls="faqCollapse<?php echo e($faq->id); ?>">
                  <?php echo e($faq->question); ?>

                </button>
              </h2>
              <div
                id="faqCollapse<?php echo e($faq->id); ?>"
                class="accordion-collapse collapse <?php echo e($loop->first ? 'show' : ''); ?>"
                aria-labelledby="faqHeading<?php echo e($faq->id); ?>"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><?php echo e($faq->answer); ?></p>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>
<?php /**PATH /home2/hcoyym1o/therhinofloor.com/resources/views/layout/_faq.blade.php ENDPATH**/ ?>