		<header class="theme-main-menu theme-menu-one black-bg">
			<div class="main-header-area">
				<div class="container header-custom-container">
					<div class="row align-items-center">
						<div class="col-lg-2 col-sm-4 col-6 d-none d-lg-inline-block">
							<div class="logo-area">
								<a class="front" href="{{route('home')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="rhinofloor"></a>
							</div>
						</div>
						<div class="col-lg-10 col-md-12 custom-border px-lg-0">
							<div class="row align-items-center top__header__info pt-10 pb-10">
								<div class="col-xl-9 col-lg-12">
									<ul class="ps-lg-5 list-none header-info d-flex align-items-center justify-content-xl-start justify-content-lg-end justify-content-center">

										<li class="phn-call">
											<div class="header-info-box">
												<div class="icon">
													<img src="{{asset('assets/img/icon/phone.svg')}}" alt="Phone">
												</div>
												<div class="text-content">
													<span>Call</span>
													<h6> <a href="tel:+966554222379"> +966 55 422 2379 </a> </h6>
												</div>
											</div>
										</li>

										<li class="loctn">
											<div class="header-info-box">
												<div class="icon">
													<img src="{{asset('assets/img/icon/location.svg')}}" alt="Phone">
												</div>
												<div class="text-content">
													<span> Location</span>
													<h6> Saudi Arabia  </h6> 
												</div>
											</div>
										</li>

										<li class="mail-id">
											<div class="header-info-box">
												<div class="icon">
													<img src="{{asset('assets/img/icon/email.png')}}" alt="email">
												</div>
												<div class="text-content">
													<span> Email </span>
													<h6> <a href="mailto:sales@rhinofloor.ae"> sales@rhinofloor.ae </a></h6>
												</div>
											</div>
										</li>

									</ul>
								</div>
								<div class="col-xl-3 d-none d-xl-inline-block text-lg-end">
									<div class="social_media">
										<a href="https://www.facebook.com/people/Rhino-Floor/100063764514991/" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="https://www.instagram.com/rhino.floor/?igshid=k4kzc88x9zrl" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.linkedin.com/company/rhino-floor/?originalSubdomain=ae" target="_blank">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="https://api.whatsapp.com/send?phone=+971542791581&text=Hello Rhino Floor!" target="_blank">
											<i class="fab fa-whatsapp"></i>
										</a>


									</div>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-xl-11 col-lg-10 col-md-12">
									<div class="main-menu d-none d-lg-block ps-xl-5 ps-lg-3">
										<nav id="mobile-menu">
											<ul class="menu-list ps-0">
												<li> <a href="{{route('home')}}"> Home </a> </li>
												<li> <a href="{{route('our-story')}}"> Our Story </a> </li>
												<li> <a href="#"> Products <i class="fas fa-angle-down"></i> </a>
													<ul class="sub-menu">
        													@php
        													$i = 0;
        													@endphp
        													@foreach ($total_categories as $category)
                                                              
        													<li>  
        													 @if(count($category->products) > 0 || $sub_categories_count[$i] != 0)
        															<a href="{{route('products.category', $category->short_code)}}">{{$category->name}} <span class="sub-menu-arrow"><i class="bi bi-chevron-right"></i></span></a>
        															<ul class="sub-menu">
        																@if(count($category->products) > 0)
        																@foreach($category->products as $product)
        																<li> <a href="{{route('products.detail', $product->slug)}}"> {{$product->name}} </a> </li>
        																@endforeach
        																@endif
        																@if($sub_categories_count[$i] != 0)
        																@foreach($category->childs as $sub_category)
        																<li> <a href="{{route('products.category',['slug'=>$sub_category->short_code])}}"> {{$sub_category->name}} </a> </li>
        																@endforeach
        																@endif
        
        																</a>
        													
        												        	</ul>
        													@else
        													<a href="{{route('products.category', $category->short_code)}}"> {{$category->name}} </a>
        													@endif
        
        
        												   </li>
        												@php
        												$i++;
        												@endphp
        												@endforeach
											   </ul>
											</li>
											{{-- <li> <a href="{{route('applications.index')}}"> Applications </a> </li> --}}
											<li> <a href="{{route('applications.index')}}"> Applications <i class="fas fa-angle-down"></i> </a>
												<ul class="sub-menu">

													@foreach($applications as $app)
													<li> <a href="{{route('applications.detail', $app->slug)}}"> {{$app->title}}</a> </li>
													@endforeach



												</ul>
											</li>

											 <li> <a href="{{route('works')}}"> Gallery </a> </li> 
											<li> <a href="{{route('blogs.index')}}"> Blogs </a> </li>
											<li> <a href="{{route('news.index')}}"> News </a> </li>
											<li> <a href="{{route('contact-us')}}"> Contact Us</a> </li>

											</ul>
										</nav>
									</div>
								</div>
								<div class="col-6 d-lg-none d-md-inline-block">
									<div class="logo-area">
										<a class="front" href="{{route('home')}}"><img src="{{asset('assets/img/logo/header-logo-1.png')}}" alt="Header-logo"></a>
									</div>
								</div>
								<div class="col-xl-1 col-lg-2 col-6">
									<div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
										<!-- <div class="search-area me-4">
											<a class="search_input" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
												<img src="{{asset('assets/img/icon/search.svg')}}" alt="Search">
											</a>
										</div> -->

										<div class="hamburger-menu">
											<a class="round-menu" href="javascript:void(0);">
												<i class="far fa-bars"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
 
		</header>