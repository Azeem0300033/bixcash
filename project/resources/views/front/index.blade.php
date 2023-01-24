@extends('layouts.front')
@section('content')
	<section class=home-one>
		<div class=container>
			<div class=row>
				<div class=col-lg-12>
					<div class="main-banner-wrapper home1_style bdrs6 ovh">
						<div class="banner-style-one owl-theme owl-carousel">
							@foreach($sliders as $data)
							<div class="slide slide-one" style=background-image:url("{{ asset('assets/images/sliders/'.$data->photo) }}");height:600px>
								<div class=container>
									@isset($data->title_text)
										<div class="row home-content">
											<div class="col-lg-6 offset-lg-1 col-xl-5">
												@if($data->subtitle_text)
													<span class="tag" style="color: '{{ $data->subtitle_color }}';  font-size: '{{ $data->subtitle_size }}'">{{ $data->subtitle_text }}</span>
												@endif
												<h3 class="banner-title" style="color: '{{ $data->title_color }}'; font-size: '{{ $data->title_size }}'">{{ $data->title_text }}</h3>
												{{--											<p>Discover our new items. Up to<span class=fw500>25% Off !</span></p>--}}
												<a href="{{$data->link}}" class="btn banner-btn btn-thm">Shop Now</a>
											</div>
										</div>
									@endisset
								</div>
							</div>
							@endforeach
						</div>
						<div class="carousel-btn-block banner-carousel-btn"><span class="carousel-btn left-btn"><i
										class="fas fa-chevron-left left"></i></span><span
									class="carousel-btn right-btn"><i class="fas fa-chevron-right right"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features pt30 pb20">
		<div class="container bb1">
			<div class="row ovh">
				<div class="col-sm-6 col-xl-3">
					<div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.0s>
						<div class=icon><span class=flaticon-fast-delivery></span></div>
						<div class=details>
							<h5 class=title>Free Shipping</h5>
							<p class=para>Free Shipping for orders over $200</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.2s>
						<div class=icon><span class=flaticon-shield></span></div>
						<div class=details>
							<h5 class=title>Money Guarantee</h5>
							<p class=para>Within 30 days for an exchange.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.4s>
						<div class=icon><span class=flaticon-headphones></span></div>
						<div class=details>
							<h5 class=title>Online Support</h5>
							<p class=para>24 hours a day, 7 days a week</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3">
					<div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.6s>
						<div class=icon><span class=flaticon-credit-card></span></div>
						<div class=details>
							<h5 class=title>Flexible Payment</h5>
							<p class=para>Pay with Multiple Credit Cards</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="top-category pb30 pt20">
		<div class=container>
			<div class=row>
				<div class=col-lg-12>
					<div class="d-flex justify-content-between">
						<div class=main-title>
							<h2>Shop by Category</h2>
						</div>
						<div class="main-title mb-5"><a class="title_more_btn mt10" href="javascript:void(0)">View All Categories</a></div>
					</div>
				</div>
			</div>
			<div class="row ovh">
				@foreach($categories->where('is_featured','=',1) as $category)
				<div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.7s><a
							href="{{ route('front.category',$cat->slug) }}">
						<div class=iconbox>
							<div class=icon><img src="{{ asset('assets/images/categories/'.$category->image) }}" alt="Category Image"></div>
							<div class=details>
								<h5 class=title>{{ $category->name }}</h5>
								<p class=subtitle>{{ count($category->products) }} {{ $langg->lang4 }}</p>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
			<div class="row ovh mt70">
				<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.7s>
					<div class="banner_one home1_style color1 mb30">
						<div class="thumb style1"><img class=float-end src=images/banner/smartwatch.png
													   alt=smartwatch></div>
						<div class=details>
							<p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
							<h3 class=title>Health Care Monitor</h3>
							<a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.9s>
					<div class="banner_one home1_style color2 mb30">
						<div class="thumb style1"><img class=float-end src=images/banner/earphone.png alt=EarPhone>
						</div>
						<div class=details>
							<p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
							<h3 class=title>Stainless Steel Scissors</h3>
							<a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1.1s>
					<div class="banner_one home1_style color3 mb30">
						<div class=thumb><img class=float-end src=images/banner/smartdevice.png alt=smartdevice.png>
							<div class=off_banner><img src=images/banner/off-banner.png alt="Off Banner"></div>
						</div>
						<div class=details>
							<p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
							<h3 class=title>Blood Pressure Meter</h3>
							<a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('front.extraindex')
	<section id=our-partners class="our-partners pt0 pb60">
		<div class=container>
			<div class=row>
				<div class=col-lg-12>
					<div class="text-center mb35">
						<h5 class=fz16>Trusted by the world’s best</h5>
					</div>
				</div>
				<div class=col-lg-12>
					<div class="shop_item_6grid_slider slider_dib_sm dots_none nav_none owl-carousel owl-theme">
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=0.3s><img
										src=images/partners/1.png alt=1.png></div>
						</div>
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=0.5s><img
										src=images/partners/2.png alt=2.png></div>
						</div>
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=0.7s><img
										src=images/partners/3.png alt=3.png></div>
						</div>
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=0.9s><img
										src=images/partners/4.png alt=4.png></div>
						</div>
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=1.1s><img
										src=images/partners/5.png alt=5.png></div>
						</div>
						<div class=item>
							<div class="partner_item wow fadeInUp" data-wow-duration=1.3s><img
										src=images/partners/6.png alt=6.png></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer_one home1 bdrt1">
		<div class="container pb60">
			<div class=row>
				<div class="col-lg-6 offset-lg-3">
					<div class="mailchimp_widget mb30-md text-center">
						<div class="icon float-start"><span class=flaticon-email-1></span></div>
						<div class=details>
							<h3 class=title>Subscribe and get 20% discount.</h3>
						</div>
					</div>
					<div class=footer_social_widget>
						<form class=footer_mailchimp_form>
							<div class="row align-items-center">
								<div class=col-auto>
									<input type=email class=form-control placeholder="Your email address">
									<button class="ms-sm-2 btn-thm" type=submit>Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row mt60">
				<div class="col-sm-6 col-md-5 col-lg-3 col-xl-3">
					<div class=footer_contact_widget>
						<h4>Contact Us</h4>
						<div class="footer_contact_iconbox d-flex mb-4">
							<div class=icon><span class=flaticon-phone-call></span></div>
							<div class="details ms-4">
								<h5 class=title>Monday-Friday: 08am-9pm</h5>
								<a href=#>+(1) 123 456 7890</a></div>
						</div>
						<div class="footer_contact_iconbox d-flex">
							<div class=icon><span class=flaticon-email></span></div>
							<div class="details ms-4">
								<h5 class=title>Need help with your order?</h5>
								<a href=#>support@zeomart.com</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
					<div class=footer_qlink_widget>
						<h4>About Zenmart</h4>
						<ul class=list-unstyled>
							<li><a href=#>Track Your Order</a></li>
							<li><a href=#>Product Guides</a></li>
							<li><a href=#>Wishlists</a></li>
							<li><a href=#>Privacy Policy</a></li>
							<li><a href=#>Store Locator</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
					<div class=footer_qlink_widget>
						<h4>Customer Support</h4>
						<ul class=list-unstyled>
							<li><a href=#>Contact Us</a></li>
							<li><a href=#>Help Centre</a></li>
							<li><a href=#>Returns & Exchanges</a></li>
							<li><a href=#>Best Buy Financing</a></li>
							<li><a href=#>Best Buy Gift Card</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
					<div class=footer_qlink_widget>
						<h4>Services</h4>
						<ul class=list-unstyled>
							<li><a href=#>Geek Squad</a></li>
							<li><a href=#>In-Home Advisor</a></li>
							<li><a href=#>Trade-In Program</a></li>
							<li><a href=#>Electronics Recycling</a></li>
							<li><a href=#>Best Buy Health</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-8 col-md-5 col-lg-3 col-xl-3">
					<div class=footer_social_widget>
						<h4 class=title>Follow us</h4>
						<div class="social_icon_list mt30">
							<ul class=mb20>
								<li class=list-inline-item><a href=#><i class="fab fa-facebook"></i></a></li>
								<li class=list-inline-item><a href=#><i class="fab fa-twitter"></i></a></li>
								<li class=list-inline-item><a href=#><i class="fab fa-instagram"></i></a></li>
								<li class=list-inline-item><a href=#><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="footer_mobile_app_widget mb25">
						<h4 class="title mb10">Mobile Apps</h4>
						<div class=mobile_app_list>
							<ul class=mb0>
								<li><a href=#><span class=flaticon-apple></span>iOS App</a></li>
								<li><a href=#><span class=flaticon-android></span>Android App</a></li>
							</ul>
						</div>
					</div>
					<div class=footer_acceped_card_widget>
						<h4 class="title mb20">We accept</h4>
						<div class=acceped_card_list>
							<ul class="d-flex mb-0">
								<li class=me-2><a href=#><img src=images/resource/visa-card.png alt=visa-card></a>
								</li>
								<li class=me-2><a href=#><img src=images/resource/master-card.png
															  alt=master-card></a></li>
								<li class=me-2><a href=#><img src=images/resource/apple-pay.png alt=apple-pay></a>
								</li>
								<li class=me-2><a href=#><img src=images/resource/discover-card.png
															  alt=discover-card></a></li>
								<li class=me-2><a href=#><img src=images/resource/paypal.png alt=paypal></a></li>
								<li><a href=#><img src=images/resource/amex-card.png alt=amex-card></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container bdrt1 pt20 pb20">
			<div class=row>
				<div class=col-lg-6>
					<div class="copyright-widget text-center text-lg-start d-block d-lg-flex mb15-md">
						<p class=me-4>© 2022 Zeomart. All Rights Reserved</p>
						<p><a href=#>Privacy</a>·<a href=#>Terms</a>·<a href=#>Sitemap</a></p>
					</div>
				</div>
				<div class=col-lg-6>
					<div class="footer_bottom_right_widgets text-center text-lg-end">
						<ul class=mb0>
							<li class="list-inline-item mb20-340">
								<select class="selectpicker show-tick">
									<option>Currency : USD</option>
									<option>Euro</option>
									<option>Pound</option>
								</select>
							</li>
							<li class=list-inline-item>
								<select class="selectpicker show-tick">
									<option>Language: English</option>
									<option>Frenc</option>
									<option>Italian</option>
									<option>Spanish</option>
									<option>Turkey</option>
								</select>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<a class=scrollToHome href=#><i class="fas fa-angle-up"></i></a>

@endsection

@section('scripts')
	<script>
        $(window).on('load',function() {

            setTimeout(function(){

                $('#extraData').load('{{route('front.extraIndex')}}');

            }, 500);
        });

	</script>
@endsection