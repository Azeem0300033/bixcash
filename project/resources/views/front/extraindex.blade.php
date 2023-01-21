<section class="featured-product pt0 pb90">
	<div class=container>
		<div class=row>
			<div class=col-lg-6>
				<div class="main-title mb0-sm">
					<h2>{{ $langg->lang27 }}</h2>
				</div>
			</div>
			<div class=col-lg-6>
				<div class="popular_listing_sliders ui_kit_tab style2">
					<div class="nav nav-tabs mb30 justify-content-start justify-content-lg-end" role=tablist>
						<button class="nav-link active" id=nav-home-tab data-bs-toggle=tab
								data-bs-target=#nav-home role=tab aria-controls=nav-home aria-selected=true>Top {{ count($best_products) }}
						</button>
						<button class=nav-link id=nav-shopping-tab data-bs-toggle=tab
								data-bs-target=#nav-shopping role=tab aria-controls=nav-shopping
								aria-selected=false>Baby
						</button>
						<button class=nav-link id=nav-hotels-tab data-bs-toggle=tab data-bs-target=#nav-hotels
								role=tab aria-controls=nav-hotels aria-selected=false>Furniture
						</button>
						<button class=nav-link id=nav-destination-tab data-bs-toggle=tab
								data-bs-target=#nav-destination role=tab aria-controls=nav-destination
								aria-selected=false>Electronic
						</button>
						<button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab
								data-bs-target=#nav-bread role=tab aria-controls=nav-bread aria-selected=false>
							All
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class=row>
			<div class=col-lg-12>
				<div class="popular_listing_sliders row ui_kit_tab style2">
					<div class="tab-content col-lg-12" id=nav-tabContent>
						<div class="tab-pane fade show active" id=nav-home role=tabpanel
							 aria-labelledby=nav-home-tab>
							<div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
								@foreach($best_products as $product)
									<div class="item ovh">
										<div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
											 data-wow-duration=1.1s>
											<div class="thumb pb30">
												<img src="{{ $product->photo ? asset('assets/images/thumbnails/'.$product->thumbnail):asset('assets/images/noimage.png') }}" alt="Best Seller Item">
												<div class=thumb_info>
													<ul class=mb0>
														<li><a href=page-dashboard-wish-list.html><span
																		class=flaticon-heart></span></a></li>
														<li><a href=page-dashboard-wish-list.html><span
																		class=flaticon-show></span></a></li>
														<li><a href=page-shop-list-v6.html><span
																		class=flaticon-graph></span></a></li>
													</ul>
												</div>
												<div class="shop_item_cart_btn d-grid">
													<a href=page-shop-cart.html class="btn btn-thm">Add to Cart</a>
												</div>
											</div>
											<div class=details>
												<div class=sub_title>SAMSUNG</div>
												<div class=title><a href=page-shop-single-v1.html>Great Value Ultra
														Strong Paper Towels, Split Sheets, 6 Double </a></div>
												<div class="review d-flex db-500">
													<ul class="mb0 me-2">
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
													</ul>
													<div class=review_count><a href=#>3,014 reviews</a></div>
												</div>
												<div class=si_footer>
													<div class=price>$32.50 <small>
															<del>$45</del>
														</small></div>
												</div>
											</div>
										</div>
									</div>
								@endforeach

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="deliver-divider pt0 pb90">
	<div class=container>
		<div class=row>
			<div class=col-lg-12>
				<div class="online_delivery text-center">
					<h5 class=title>Members get free shipping* with no order minimum!*Restrictions apply.Try
						free 30-day trial</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="featured-product pt0">
	<div class=container>
		<div class=row>
			<div class=col-md-5>
				<div class="main-title mb0-sm">
					<h2>{{ $langg->lang29 }}</h2>
				</div>
			</div>
			<div class=col-md-7>
				<div class="popular_listing_sliders ui_kit_tab style2">
					<div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
						<button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab
								data-bs-target=#nav-narive role=tab aria-controls=nav-narive aria-selected=true>
							New arrivals
						</button>
						<button class=nav-link id=nav-bseller-tab data-bs-toggle=tab data-bs-target=#nav-bseller
								role=tab aria-controls=nav-bseller aria-selected=false>Best sellers
						</button>
						<button class=nav-link id=nav-brated-tab data-bs-toggle=tab data-bs-target=#nav-brated
								role=tab aria-controls=nav-brated aria-selected=false>Best rated
						</button>
						<button class="nav-link me-0" id=nav-afurniture-tab data-bs-toggle=tab
								data-bs-target=#nav-afurniture role=tab aria-controls=nav-afurniture
								aria-selected=false>All
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class=row>
			<div class=col-lg-12>
				<div class="popular_listing_sliders row ui_kit_tab style2">
					<div class="tab-content col-lg-12" id=nav-tabContent2>
							<div class="tab-pane fade show active" id=nav-narive role=tabpanel
								 aria-labelledby=nav-narive-tab>
								<div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
									@foreach($big_products as $big_product)
										<div class="item ovh">
										<div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
											 data-wow-duration=1.1s>
											<div class="thumb pb30"><img src="{{ $big_product->photo ? asset('assets/images/thumbnails/'.$big_product->thumbnail):asset('assets/images/noimage.png') }}" alt="Furniture Product">
												<div class=thumb_info>
													<ul class=mb0>
														<li><a href=page-dashboard-wish-list.html><span
																		class=flaticon-heart></span></a></li>
														<li><a href=page-dashboard-wish-list.html><span
																		class=flaticon-show></span></a></li>
														<li><a href=page-shop-list-v6.html><span
																		class=flaticon-graph></span></a></li>
													</ul>
												</div>
												<div class="shop_item_cart_btn d-grid"><a href=page-shop-cart.html
																						  class="btn btn-thm">Add to
														Cart</a></div>
											</div>
											<div class=details>
												<div class=sub_title>SAMSUNG</div>
												<div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K UHD
														HDR QLED Tizen Smart TV</a></div>
												<div class="review d-flex db-500">
													<ul class="mb0 me-2">
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
														<li class=list-inline-item><a href=#><i
																		class="fas fa-star"></i></a></li>
													</ul>
													<div class=review_count><a href=#>3,014 reviews</a></div>
												</div>
												<div class=si_footer>
													<div class=price>$32.50<small>
															<del>$45</del>
														</small></div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="featured-product pt0">
	<div class=container>
		<div class=row>
			<div class=col-md-5>
				<div class="main-title mb0-sm">
					<h2>{{ $langg->lang30 }}</h2>
				</div>
			</div>
			<div class=col-md-7>
				<div class="popular_listing_sliders ui_kit_tab style2">
					<div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
						<button class="nav-link active" id=nav-enarive-tab data-bs-toggle=tab
								data-bs-target=#nav-enarive role=tab aria-controls=nav-enarive
								aria-selected=true>New arrivals
						</button>
						<button class=nav-link id=nav-ebseller-tab data-bs-toggle=tab
								data-bs-target=#nav-ebseller role=tab aria-controls=nav-ebseller
								aria-selected=false>Best sellers
						</button>
						<button class=nav-link id=nav-ebrated-tab data-bs-toggle=tab data-bs-target=#nav-ebrated
								role=tab aria-controls=nav-ebrated aria-selected=false>Best rated
						</button>
						<button class="nav-link me-0" id=nav-aelectronic-tab data-bs-toggle=tab
								data-bs-target=#nav-aelectronic role=tab aria-controls=nav-aelectronic
								aria-selected=false>All
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class=row>
			<div class=col-lg-12>
				<div class="popular_listing_sliders row ui_kit_tab style2">
					<div class="tab-content col-lg-12" id=nav-tabContent3>
						<div class="tab-pane fade show active" id=nav-enarive role=tabpanel
							 aria-labelledby=nav-enarive-tab>
							<div class=row>
								<div class=col-lg-12>
									<div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
										@foreach($hot_products as $hot_product)
											<div class="item ovh">
												<div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
													 data-wow-duration=1.1s>
													<div class="thumb pb30"><img src="{{ $hot_product->photo ? asset('assets/images/thumbnails/'.$hot_product->thumbnail):asset('assets/images/noimage.png') }}"
																				 alt="Electronics Product">
														<div class=thumb_info>
															<ul class=mb0>
																<li><a href=page-dashboard-wish-list.html><span
																				class=flaticon-heart></span></a>
																</li>
																<li><a href=page-dashboard-wish-list.html><span
																				class=flaticon-show></span></a></li>
																<li><a href=page-shop-list-v6.html><span
																				class=flaticon-graph></span></a>
																</li>
															</ul>
														</div>
														<div class="shop_item_cart_btn d-grid"><a
																	href=page-shop-cart.html class="btn btn-thm">Add
																to Cart</a></div>
													</div>
													<div class=details>
														<div class=sub_title>Apple</div>
														<div class=title><a href=page-shop-single-v1.html>Apple
																Watch SE (GPS) 40mm Space Grey Aluminum Case
																with</a></div>
														<div class="review d-flex db-500">
															<ul class="mb0 me-2">
																<li class=list-inline-item><a href=#><i
																				class="fas fa-star"></i></a></li>
																<li class=list-inline-item><a href=#><i
																				class="fas fa-star"></i></a></li>
																<li class=list-inline-item><a href=#><i
																				class="fas fa-star"></i></a></li>
																<li class=list-inline-item><a href=#><i
																				class="fas fa-star"></i></a></li>
																<li class=list-inline-item><a href=#><i
																				class="fas fa-star"></i></a></li>
															</ul>
															<div class=review_count><a href=#>3,014 reviews</a>
															</div>
														</div>
														<div class=si_footer>
															<div class=price>$32.50<small>
																	<del>$45</del>
																</small></div>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="row mt100">
			<div class=col-lg-12>
				<div class="shop_item_7grid_slider slider_dib_400 dots_none nav_none shop_by_brand style2 owl-carousel owl-theme">
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.1s href=#>Wireless
							Networks</a></div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.3s href=#>Cell
							Phones</a></div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.5s href=#>Cameras</a>
					</div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.7s href=#>Head
							Phones</a></div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.9s
									   href=#>Accessories</a></div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.1s href=#>Gaming
							Monitors</a></div>
					<div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.3s href=#>Virtual
							Reality</a></div>
				</div>
			</div>
		</div>
		<div class="banner_one_large bdrs6 mt100 px-4 px-md-0">
			<div class=row>
				<div class="col-lg-5 offset-lg-1 align-self-center">
					<div class="apple_widget_home1 mb-4 mb-lg-0">
						<h1 class=title>Apple Watch</h1>
						<p class="para mt-3 mb-4">Now up to $70 off. Give Mom a gift that shows off your
							love.</p>
						<a href=page-shop-list-v1.html class="btn btn-thm">Shop Now</a></div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="apple_widget_home1 animate_content text-center">
						<div class="thumb animate_thumb"><img src=images/banner/banner-img1.png
															  alt="Banner Image"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="featured-product pt0">
	<div class=container>
		<div class=row>
			<div class=col-md-6>
				<div class="main-title mb0-sm">
					<h2>Hot New Arrivals</h2>
				</div>
			</div>
			<div class=col-md-6>
				<div class="popular_listing_sliders style2 ui_kit_tab">
					<div class="justify-content-md-end justify-content-start mb30 nav nav-tabs" role=tablist>
						<button aria-controls=nav-hnat20 aria-selected=true class="nav-link active"
								data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab role=tab>Top 20
						</button>
						<button aria-controls=nav-hnababy aria-selected=false class=nav-link
								data-bs-target=#nav-hnababy data-bs-toggle=tab id=nav-hnababy-tab role=tab>Baby
						</button>
						<button aria-controls=nav-hnafurniture aria-selected=false class=nav-link
								data-bs-target=#nav-hnafurniture data-bs-toggle=tab id=nav-hnafurniture-tab
								role=tab>Furniture
						</button>
						<button aria-controls=nav-hnaent aria-selected=false class="nav-link me-0"
								data-bs-target=#nav-hnaent data-bs-toggle=tab id=nav-hnaent-tab role=tab>
							Electronic
						</button>
						<button aria-controls=nav-hnaall aria-selected=false class="nav-link me-0"
								data-bs-target=#nav-hnaall data-bs-toggle=tab id=nav-hnaall-tab role=tab>All
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class=row>
			<div class=col-lg-12>
				<div class="row popular_listing_sliders style2 ui_kit_tab">
					<div class="col-lg-12 tab-content" id=nav-tabContent4>
						<div class="fade tab-pane active show" id=nav-hnat20 aria-labelledby=nav-hnat20-tab
							 role=tabpanel>
							<div class=row>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap1.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony DJ Headphones 4334205465,
													Black, Standard</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap2.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE 24-70mm
													f/2.8 GM II G Master</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap3.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap4.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap5.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap6.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra Silicone
													Case with S-Pen Bundle</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap7.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap8.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap Desk
													Chair Mesh Computer</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap9.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n Double
													Bridge Round Sunglasses</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap10.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell Phone
													Desk Mount Stand</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap11.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>PopSockets PopWallet+: Swappable
													and Repositionable</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap12.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer with
													Soothing Aloe</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fade tab-pane" id=nav-hnababy aria-labelledby=nav-hnababy-tab role=tabpanel>
							<div class=row>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap1.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony DJ Headphones 4334205465,
													Black, Standard</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap2.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE 24-70mm
													f/2.8 GM II G Master</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap3.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap4.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap5.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap6.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra Silicone
													Case with S-Pen Bundle</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap7.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap8.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap Desk
													Chair Mesh Computer</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap9.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n Double
													Bridge Round Sunglasses</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap10.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell Phone
													Desk Mount Stand</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap11.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>PopSockets PopWallet+: Swappable
													and Repositionable</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap12.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer with
													Soothing Aloe</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fade tab-pane" id=nav-hnafurniture aria-labelledby=nav-hnafurniture-tab
							 role=tabpanel>
							<div class=row>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap1.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony DJ Headphones 4334205465,
													Black, Standard</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap2.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE 24-70mm
													f/2.8 GM II G Master</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap3.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap4.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap5.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap6.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra Silicone
													Case with S-Pen Bundle</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap7.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap8.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap Desk
													Chair Mesh Computer</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap9.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n Double
													Bridge Round Sunglasses</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap10.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell Phone
													Desk Mount Stand</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap11.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>PopSockets PopWallet+: Swappable
													and Repositionable</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap12.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer with
													Soothing Aloe</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fade tab-pane" id=nav-hnaent aria-labelledby=nav-hnaent-tab role=tabpanel>
							<div class=row>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap1.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony DJ Headphones 4334205465,
													Black, Standard</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap2.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE 24-70mm
													f/2.8 GM II G Master</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap3.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap4.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap5.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap6.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra Silicone
													Case with S-Pen Bundle</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap7.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap8.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap Desk
													Chair Mesh Computer</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap9.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n Double
													Bridge Round Sunglasses</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap10.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell Phone
													Desk Mount Stand</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap11.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>PopSockets PopWallet+: Swappable
													and Repositionable</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap12.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer with
													Soothing Aloe</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fade tab-pane" id=nav-hnaall aria-labelledby=nav-hnaall-tab role=tabpanel>
							<div class=row>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap1.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony DJ Headphones 4334205465,
													Black, Standard</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap2.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE 24-70mm
													f/2.8 GM II G Master</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap3.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=0.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap4.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
													TV</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap5.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap6.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra Silicone
													Case with S-Pen Bundle</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap7.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
													64GB</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.7s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap8.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap Desk
													Chair Mesh Computer</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=1.9s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap9.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n Double
													Bridge Round Sunglasses</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.1s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap10.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell Phone
													Desk Mount Stand</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.3s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap11.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>PopSockets PopWallet+: Swappable
													and Repositionable</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
									 data-wow-duration=2.5s>
									<div class="align-items-center bdr1 d-flex shop_item tiny_style">
										<div class=flex-shrink-0><img alt="Hot New Arrival Product"
																	  src=images/shop-items/hnap12.png></div>
										<div class="flex-grow-1 ms-3">
											<div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer with
													Soothing Aloe</a></div>
											<div class="para text-thm1">$32.50</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>