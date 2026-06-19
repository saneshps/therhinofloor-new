@if(isset($faqs) && $faqs->isNotEmpty())
<section class="faq__area pt-80 pb-80 pt-lg-60 pb-lg-50">
  <div class="grey-bg faq__section__wrapper pt-80 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section__title text-center mb-50">
            <h4 class="sub__title__one mb-0">FAQs</h4>
            <div class="snake-line mb-15">
              <img src="{{ asset('assets/img/shape/snake-line-1a.svg') }}" alt="line">
            </div>
            <h2 class="section__title__one">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion accordion-one" id="faqAccordion">
            @foreach($faqs as $faq)
            <div class="accordion-item mb-20">
              <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">
                <button
                  class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse{{ $faq->id }}"
                  aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                  aria-controls="faqCollapse{{ $faq->id }}">
                  {{ $faq->question }}
                </button>
              </h2>
              <div
                id="faqCollapse{{ $faq->id }}"
                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                aria-labelledby="faqHeading{{ $faq->id }}"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>{{ $faq->answer }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endif
