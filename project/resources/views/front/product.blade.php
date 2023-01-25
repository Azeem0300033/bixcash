@extends('layouts.front')

@section('content')

  <section class="p0 bb1 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="custom_shop_category_nav_list_menu">
            <ul class="mb0 d-flex">
              <li><a href="#">All Electronics</a></li>
              <li><a href="#">Smart TV</a></li>
              <li><a class="active" href="#">Laptops</a></li>
              <li><a href="#">Cell Phones</a></li>
              <li><a href="#">Camera & Photo</a></li>
              <li><a href="#">Portable Audio</a></li>
              <li><a href="#">Computers</a></li>
              <li><a href="#">iPad & Tablets</a></li>
              <li><a href="#">Pc Gaming</a></li>
              <li><a href="#">Smart Home</a></li>
              <li><a href="#">Headphones</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="shop-single-content pb80 pt0 ovh">
    <div class="container">
      <div class="row wrap">
        <div class="col-xl-7">
          <div class="column">
            <div class="shop_single_natabmenu">
              <div class="d-block d-sm-flex align-items-start posr pb100-xs">
                <div class="nav d-flex flex-sm-column nav-pills me-0 me-sm-3 custom_nav_list" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                  <button class="nav-link me-3 me-sm-0" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="images/shop/ss1.png" alt=""></button>
                  <button class="nav-link me-3 me-sm-0" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/shop/ss2.png" alt=""></button>
                  <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="images/shop/ss3.png" alt=""></button>
                </div>
                <div class="tab-content ms-0 m-xl-auto custom_tab_contents" id="v-pills-tabContent">
                  <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="shop_single_navmenu_content justify-content-center">
                      <a class="product_popup popup-img" href="images/shop/ss1.png"><span class="flaticon-full-screen"></span></a>
                      <div class="zoomimg_wrapper m-auto">
                        <img class="zoom-img" id="zoom_01" src="images/shop/ss1.png" data-zoom-image="images/shop/ss1.png" width="510" alt="Shop Single Image"/>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="shop_single_navmenu_content justify-content-center">
                      <a class="product_popup popup-img" href="images/shop/ss2.png"><span class="flaticon-full-screen"></span></a>
                      <div class="zoomimg_wrapper m-auto hizoom hi2">
                        <img class="zoom-img" id="zoom_02" src="images/shop/ss2.png" data-zoom-image="images/shop/ss2.png" width="510" alt="Shop Single Image"/>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="shop_single_navmenu_content justify-content-center">
                      <a class="product_popup popup-img" href="images/shop/ss3.png"><span class="flaticon-full-screen"></span></a>
                      <div class="zoomimg_wrapper m-auto hizoom hi3">
                        <img class="zoom-img" id="zoom_03" src="images/shop/ss3.png" data-zoom-image="images/shop/ss3.png" width="510" alt="Shop Single Image"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="shop_single_product_details ps-0 mt-4 d-block d-xl-none">
              <div class="sspd_price mt-4 mb25">$3.399 <small><del class="mr10">$1,419.92</del></small></div>
              <div class="mb-0">
                <ul class="cart_btn_widget shop_single3_style db-767 d-flex mb-0">
                  <li class="me-3 mb-2">
                    <div class="cart_btn home_page_sidebar">
                      <div class="quantity-block home_page_sidebar">
                        <button class="quantity-arrow-minus2 shop_single_page_sidebar"><img src="images/icons/minus.svg" alt=""></button>
                        <input class="quantity-num2 shop_single_page_sidebar" type="number" value="3">
                        <button class="quantity-arrow-plus2 shop_single_page_sidebar"> <span class="flaticon-close"></span> </button>
                      </div>
                    </div>
                  </li>
                  <li class="me-0 me-sm-3 mb-3"><a href="#" class="btn btn-thm bdrs60">Add to cart</a></li>
                  <li class="me-0 me-sm-3 mb-3"><a href="#" class="btn btn-white bdr_thm bdrs60">Buy Now</a></li>
                </ul>
                <ul class="shop_single_wishlist_area db-400 d-flex align-items-center mb-3">
                  <li class="pe-2 ms-2 ms-sm-0"><a href="#"><span class="flaticon-heart me-2"></span>Wishlist</a></li>
                  <li class="pe-2 ms-2"><a href="#"><span class="flaticon-graph me-2"></span>Compare</a></li>
                  <li class="pe-2 ms-2"><a href="#"><span class="flaticon-question me-2"></span>Ask a Question</a></li>
                  <li class="ms-2"><a href="#"><span class="flaticon-share me-2"></span>Share</a></li>
                </ul>
              </div>
              <hr>
              <div class="vendor_iconbox style2 d-flex mb-1 mt-4">
                <span class="icon fz30 heading-color"><span class="flaticon-truck"></span></span>
                <div class="details ms-3 mt-0">
                  <p class="heading-color">Free Shipping & Returns: On all orders over $200.00</p>
                </div>
              </div>
              <div class="vendor_iconbox style2 d-flex mb-1">
                <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
                <div class="details ms-3 mt-0">
                  <p class="heading-color">Sold and shipped by <a href="#" class="fw500 heading-color fz16">TFN-STORE | TUFAN STORE LLC Fulfilled by Zenmart</a></p>
                </div>
              </div>
              <div class="vendor_iconbox style2 d-flex mb-0">
                <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
                <div class="details ms-3 mt-0">
                  <p class="heading-color">Free 15-Day returns <a class="tdu" href="#">Details</a></p>
                </div>
              </div>
              <hr>
              <div class="shop_single_siderbar_mini_content mt-4">
                <h4>More seller options (2)</h4>
                <p>Starting from $1,249.00</p>
                <a class="tdu" href="#">Compare all sellers</a>
              </div>
            </div>
            <div class="shortcode_widget_accprdons shop_single_accordion px-0 mt-5">
              <div class="faq_according text-start">
                <div class="shop_single_description">
                  <h4 class="title">Overview</h4>
                  <p class="para">The first notebook of its kind, this Apple MacBook Pro is a beast. With the blazing-fast M1 Pro chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need.</p>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body px-0 pt-0"><p class="para">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need.</p></div>
                      </div>
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed px-0 pt-3 text-thm1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">See More <span class="fas fa-angle-down ml10"></span></button>
                      </h2>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">More Information</button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse show ps-1" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="mt20">Powerful performance</h5>
                        <div class="shop_item_list_features shop_single_style mb30">
                          <ul class="mb0 order_list list-style-type-bullet">
                            <li><a href="#">English-language MacBook Pro</a></li>
                            <li><a href="#">10-core Apple M1 Pro chip for a giant leap in CPU, GPU, and machine learning performance</a></li>
                            <li><a href="#">16GB of RAM so everything you do is fast and fluid</a></li>
                            <li><a href="#">16-core Neural Engine for advanced machine learning</a></li>
                            <li><a href="#">16-core GPU</a></li>
                            <li><a href="#">Ultrafast 1TB solid state drive (SSD) is blazing fast, so you can take all your photos and videos with you no matter.</a></li>
                          </ul>
                        </div>
                        <h5>Display and audio</h5>
                        <div class="shop_item_list_features shop_single_style">
                          <ul class="mb0 order_list list-style-type-bullet">
                            <li><a href="#">16.2-inch liquid retina XDR display delivers a responsive and natural viewing experience</a></li>
                            <li><a href="#">3456 x 2234 native resolution with support for millions of colours</a></li>
                            <li><a href="#">ProMotion technology for adaptive refresh rates up to 120Hz</a></li>
                            <li><a href="#">Studio-quality three-mic array with high signal-to-noise ratio and directional beamforming</a></li>
                            <li><a href="#">High fidelity six speaker sound system with forece-cancelling woofers</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Details & Specs</button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="shop_single_table table-responsive">
                          <table class="table table-striped table-borderless">
                            <thead>
                            <tr>
                              <th scope="col">Brand</th>
                              <th class="ps-2" scope="col">Apple</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <th scope="row">Model Name</th>
                              <td>MacBook Pro</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Screen Size</th>
                              <td>16.2 Inches</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Color Space</th>
                              <td>Space Gray</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Hard Disk Size</th>
                              <td>1 TB</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">CPU Model</th>
                              <td>Apple M1</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Ram Memory Installed Size</th>
                              <td>16 GB</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Operating System</th>
                              <td>Mac OS</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Graphics Card Description</th>
                              <td>Integrated</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Graphics Coprocessor</th>
                              <td>M1 Pro</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What's Included</button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse ps-1 mt-3" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="shop_item_list_features shop_single_style">
                          <ul class="mb0 order_list list-style-type-bullet">
                            <li><a href="#">16-inch MacBook Pro</a></li>
                            <li><a href="#">140W USB‑C Power Adapter</a></li>
                            <li><a href="#">USB‑C to MagSafe 3 Cable (2 m)</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Vendor</button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse mt-3" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="vendor_grid shop_single_style">
                              <div class="details pt-0">
                                <div class="flex-grow-1">
                                  <div class="d-block d-md-flex align-items-center">
                                    <h5 class="title me-2 mb-0">Apple Store</h5>
                                    <div class="sspd_postdate me-2 mb10-sm">
                                      <div class="sspd_review">
                                        <ul class="mb0">
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <h6 class="sub_title mb-0">965 seller reviews</h6>
                                  </div>
                                </div>
                                <div class="vendor_address mt10 mb20">
                                  <ul class="mb0">
                                    <li><a href="#">Fast Delivery: Ships in 1 day</a></li>
                                    <li><a href="#">Free Cargo</a></li>
                                  </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="price">$32.50 <small><del>$45</del></small></div>
                                  <a class="btn btn-white bdr_thm" href="#">Go Product</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="vendor_grid shop_single_style">
                              <div class="details pt-0">
                                <div class="flex-grow-1">
                                  <div class="d-block d-md-flex align-items-center">
                                    <h5 class="title me-2 mb-0">Apple Store</h5>
                                    <div class="sspd_postdate me-2 mb10-sm">
                                      <div class="sspd_review">
                                        <ul class="mb0">
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <h6 class="sub_title mb-0">965 seller reviews</h6>
                                  </div>
                                </div>
                                <div class="vendor_address mt10 mb20">
                                  <ul class="mb0">
                                    <li><a href="#">Fast Delivery: Ships in 1 day</a></li>
                                    <li><a href="#">Free Cargo</a></li>
                                  </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="price">$32.50 <small><del>$45</del></small></div>
                                  <a class="btn btn-white bdr_thm" href="#">Go Product</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="vendor_grid shop_single_style">
                              <div class="details pt-0">
                                <div class="flex-grow-1">
                                  <div class="d-block d-md-flex align-items-center">
                                    <h5 class="title me-2 mb-0">Apple Store</h5>
                                    <div class="sspd_postdate me-2 mb10-sm">
                                      <div class="sspd_review">
                                        <ul class="mb0">
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <h6 class="sub_title mb-0">965 seller reviews</h6>
                                  </div>
                                </div>
                                <div class="vendor_address mt10 mb20">
                                  <ul class="mb0">
                                    <li><a href="#">Fast Delivery: Ships in 1 day</a></li>
                                    <li><a href="#">Free Cargo</a></li>
                                  </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="price">$32.50 <small><del>$45</del></small></div>
                                  <a class="btn btn-white bdr_thm" href="#">Go Product</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="vendor_grid shop_single_style">
                              <div class="details pt-0">
                                <div class="flex-grow-1">
                                  <div class="d-block d-md-flex align-items-center">
                                    <h5 class="title me-2 mb-0">Apple Store</h5>
                                    <div class="sspd_postdate me-2 mb10-sm">
                                      <div class="sspd_review">
                                        <ul class="mb0">
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <h6 class="sub_title mb-0">965 seller reviews</h6>
                                  </div>
                                </div>
                                <div class="vendor_address mt10 mb20">
                                  <ul class="mb0">
                                    <li><a href="#">Fast Delivery: Ships in 1 day</a></li>
                                    <li><a href="#">Free Cargo</a></li>
                                  </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="price">$32.50 <small><del>$45</del></small></div>
                                  <a class="btn btn-white bdr_thm" href="#">Go Product</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Shipping and Returns</button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <p class="shipping_return_para mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor aliquam tortor at suscipit. Etiam accumsan, est id vehicula cursus, eros ligula suscipit massa, sed auctor felis mi eu massa. Sed vulputate nisi nibh, vel maximus velit auctor nec. Integer consectetur elementum turpis, nec fermentum ipsum tempor quis. Praesent a quam congue, egestas erat sit amet, finibus justo. Quisque viverra neque vehicula eros gravida ultricies. Ut lacinia enim nec consequat tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus ultricies ornare feugiat. Donec vitae rhoncus sapien, ac aliquet nunc.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSive">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Questions and Answers</button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSive" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="shop_single_qna">
                          <div class="search_field mt-3">
                            <div class="blog_search_widget">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Have a question? Search for answer" aria-label="Recipient's username">
                                <button class="btn btn-thm" type="button"><span class="fa fa-search"></span></button>
                              </div>
                            </div>
                          </div>
                          <div class="question_with_poster mt-3">
                            <h5 class="title">Q: Can dvds be played on apple computers?</h5>
                            <p class="author">Asked by Ali Tufan - May 14, 2022 on zenmart.com</p>
                          </div>
                          <div class="question_with_answer mt-3 ms-3">
                            <h5 class="title">A: If you buy a separate CD/DVD drive.</h5>
                            <p class="author mb-0">Answered by TFN-Store - May 24, 2022</p>
                          </div>
                          <div class="question_with_poster mt-3">
                            <h5 class="title">Q: Can dvds be played on apple computers?</h5>
                            <p class="author">Asked by Ali Tufan - May 14, 2022 on zenmart.com</p>
                          </div>
                          <div class="question_with_answer mt-3 ms-3">
                            <h5 class="title">A: If you buy a separate CD/DVD drive.</h5>
                            <p class="author mb-0">Answered by TFN-Store - May 24, 2022</p>
                          </div>
                          <div class="more_btn mt30 text-center">
                            <a href="#" class="btn btn-lg btn-white bdr_thm">Explore all questions</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-0">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Customer Reviews</button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-10 col-xl-7">
                            <div class="review_average mb30">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="title">4.9</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <div class="sspd_postdate">
                                    <div class="sspd_review">
                                      <ul class="mb0">
                                        <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="total_review">2 reviews</div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                              <div class="me-1">5 star</div>
                              <div class="progress-bar mx-3">
                                <div class="progress-bar__bg"></div>
                                <div class="progress-bar__bar"></div>
                              </div>
                              <div class="heading-color">89%</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                              <div class="me-1">4 star</div>
                              <div class="progress-bar mx-3">
                                <div class="progress-bar__bg"></div>
                                <div class="progress-bar__bar"></div>
                              </div>
                              <div class="heading-color">04%</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                              <div class="me-1">3 star</div>
                              <div class="progress-bar mx-3">
                                <div class="progress-bar__bg"></div>
                                <div class="progress-bar__bar"></div>
                              </div>
                              <div class="heading-color">03%</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                              <div class="me-1">2 star</div>
                              <div class="progress-bar mx-3">
                                <div class="progress-bar__bg"></div>
                                <div class="progress-bar__bar"></div>
                              </div>
                              <div class="heading-color">01%</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb30">
                              <div class="me-1">1 star</div>
                              <div class="progress-bar mx-3">
                                <div class="progress-bar__bg"></div>
                                <div class="progress-bar__bar"></div>
                              </div>
                              <div class="heading-color">04%</div>
                            </div>
                            <div class="all_review_btn mb30">
                              <a href="#" class="btn btn-lg btn-white bdr_thm">Write Your Review</a>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="product_single_content mb30">
                              <div class="mbp_pagination_comments">
                                <h5 class="mb30">10 Review For This Product</h5>
                                <div class="mbp_first d-flex align-items-center mb20">
                                  <div class="flex-shrink-0"> <img src="images/blog/reviewer2.png" class="mr-3" alt="reviewer2.png"> </div>
                                  <div class="flex-grow-1 ms-4">
                                    <div class="d-block d-md-flex">
                                      <div class="sspd_postdate me-2 mb10-sm">
                                        <div class="sspd_review">
                                          <ul class="mb0">
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <h5 class="sub_title">A high performance Mac with a long lasting battery</h5>
                                    </div>
                                    <div class="review_post_meta">Reviewed by Ali Tufan - April 27, 2022</div>
                                  </div>
                                </div>
                                <div class="review_content_para mb30">
                                  <p class="mt15 mb30">This is an unusually large advance over previous models, especially in raw computing power, but also in fun things like screen and headphone support.</p>
                                  <p>This Amazon listing has two different processors, the M1 Pro (listed as 16-Core GPU "style") and the M1 Max (32-Core GPU). I'll call one the Pro, the other the Max. I got the base Pro, but much of what I'll say applies to both, and I'll have some comments specifically about the Max too. (MBP below = MacBook Pro.)</p>
                                </div>
                                <ul class="mb20">
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                </ul>
                                <div class="review_cansel_btns d-flex mb30">
                                  <a href="#" class="btn me-2">Helpful</a>
                                  <a href="#" class="btn">Report abuse</a>
                                </div>
                                <div class="mbp_first d-flex align-items-center mb20">
                                  <div class="flex-shrink-0"> <img src="images/blog/reviewer2.png" class="mr-3" alt="reviewer2.png"> </div>
                                  <div class="flex-grow-1 ms-4">
                                    <div class="d-block d-md-flex">
                                      <div class="sspd_postdate me-2 mb10-sm">
                                        <div class="sspd_review">
                                          <ul class="mb0">
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <h5 class="sub_title">A high performance Mac with a long lasting battery</h5>
                                    </div>
                                    <div class="review_post_meta">Reviewed by Ali Tufan - April 27, 2022</div>
                                  </div>
                                </div>
                                <div class="review_content_para mb30">
                                  <p class="mt15 mb30">This is an unusually large advance over previous models, especially in raw computing power, but also in fun things like screen and headphone support.</p>
                                  <p>This Amazon listing has two different processors, the M1 Pro (listed as 16-Core GPU "style") and the M1 Max (32-Core GPU). I'll call one the Pro, the other the Max. I got the base Pro, but much of what I'll say applies to both, and I'll have some comments specifically about the Max too. (MBP below = MacBook Pro.)</p>
                                </div>
                                <ul class="mb20">
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                  <li class="list-inline-item mb5-414"><img src="images/resource/review-img.png" alt="review-img"></li>
                                </ul>
                                <div class="review_cansel_btns d-flex mb30 bb1 pb30">
                                  <a href="#" class="btn me-2">Helpful</a>
                                  <a href="#" class="btn">Report abuse</a>
                                </div>
                                <div class="all_review_btn text-center">
                                  <a href="#" class="btn btn-lg btn-white bdr_thm">See All Review</a>
                                </div>
                              </div>
                            </div>
                            <div class="bsp_reveiw_wrt mb-0">
                              <form class="comments_form">
                                <div class="row">
                                  <div class="col-md-12">
                                    <h4 class="title mb20">Add a Review</h4>
                                    <p class="heading-color">Your email address will not be published. Required fields are marked *</p>
                                    <h5 class="mb0">Your rating of this product</h5>
                                    <div class="sspd_postdate vendor_single">
                                      <div class="sspd_review">
                                        <ul class="mb0">
                                          <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fal fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fal fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fal fa-star"></i></a></li>
                                          <li class="list-inline-item"><a href="#"><i class="fal fa-star"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="heading-color mb10">Your review</label>
                                      <textarea class="form-control" rows="6"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="heading-color mb10">Name</label>
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="heading-color mb10">Email</label>
                                      <input type="email" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-thm">Submit</button>
                                  </div>
                                </div>
                              </form>
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
        </div>
        <div class="col-xl-4 offset-xl-1 d-none d-xl-block z0">
          <div class="column">
            <div class="shop_single_product_details sidebar mb-3 mb-xl-0">
              <ul class="d-flex">
                <li class="border-right">APPLE</li>
                <li class="mx-3">
                  <div class="sspd_review">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                  </div>
                </li>
                <li>3,014 reviews</li>
              </ul>
              <h4 class="title mb15">Apple MacBook Pro 16" (2021) - Space Grey (Apple M1 Pro Chip / 1TB SSD / 16GB RAM)</h4>
              <hr>
              <div class="sspd_price mb25 mt20">$1,419.92 <small><del class="mr10">$3.399</del></small></div>
              <ul class="cart_btns ui_kit_button mb15 d-flex justify-content-between">
                <li>
                  <div class="cart_btn home_page_sidebar">
                    <div class="quantity-block home_page_sidebar">
                      <button class="quantity-arrow-minus2 shop_single_page_sidebar"><img src="images/icons/minus.svg" alt=""></button>
                      <input class="quantity-num2 shop_single_page_sidebar" type="number" value="3">
                      <button class="quantity-arrow-plus2 shop_single_page_sidebar"> <span class="flaticon-close"></span> </button>
                    </div>
                  </div>
                </li>
                <li><button type="button" class="btn btn-thm">Add to cart</button></li>
              </ul>
              <div class="d-grid mb-3">
                <a href="#" class="btn btn-white bdr_thm ss_cart_btn">Buy Now</a>
              </div>
              <ul class="shop_single_wishlist_area d-block d-sm-flex align-items-center">
                <li class="pe-2 ms-2 ms-sm-0"><a href="#"><span class="flaticon-heart me-2"></span>Wishlist</a></li>
                <li class="pe-2 ms-2"><a href="#"><span class="flaticon-graph me-2"></span>Compare</a></li>
                <li class="pe-2 ms-2"><a href="#"><span class="flaticon-question me-2"></span>Ask a Question</a></li>
                <li class="ms-2"><a href="#"><span class="flaticon-share me-2"></span>Share</a></li>
              </ul>
              <hr>
              <div class="vendor_iconbox style2 d-block d-sm-flex mb-1">
                <span class="icon fz30 heading-color"><span class="flaticon-truck"></span></span>
                <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                  <p class="heading-color">Free shipping, <span class="fw500">arrives by Thu, Jun 2</span> to Sacramento, 95829 <span class="fw500">Want it faster?</span> <span class="tdu">Add an address</span> to see options <a class="tdu" href="#">More options</a></p>
                </div>
              </div>
              <div class="vendor_iconbox style2 d-block d-sm-flex mb-1">
                <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
                <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                  <p class="heading-color">Sold and shipped by</p>
                  <h5>TFN-STORE | TUFAN STORE LLC Fulfilled by Zenmart</h5>
                </div>
              </div>
              <div class="vendor_iconbox style2 d-block d-sm-flex mb-0">
                <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
                <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                  <p class="heading-color">Free 15-Day returns <a class="tdu" href="#">Details</a></p>
                </div>
              </div>
              <hr>
              <div class="shop_single_siderbar_mini_content">
                <h4>More seller options (2)</h4>
                <p>Starting from $1,249.00</p>
                <a class="tdu" href="#">Compare all sellers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title">
            <h2 class="title">Related products</h2>
          </div>
          <div class="navi_pagi_top_right related_product_slider slider_dib_sm shop_item_6grid_slider owl-theme owl-carousel">
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item1.png" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item7.png" alt="Shop Item7">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item3.png" alt="Shop Item3">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Microsoft Surface Laptop Go 12.4" Multi-Touch - Intel Core i5, 8GB RAM, 128GB SSD, Windows 10 Home in S Mode - Certified Refurbished</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$399.00 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item4.png" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i5-1135G7/512GB SSD/8GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item5.png" alt="Shop Item5">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="#">ASUS VivoBook 15 X515 15.6" Laptop - Slate Grey (Intel Core i3-1005G1/256GB SSD/8GB RAM/Win 11 S)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB RAM/GeForce RTX 3050/Win 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item1.png" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop Item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item3.png" alt="Shop Item3">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item4.png" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) - Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item5.png" alt="Shop Item5">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Sony</div>
                  <div class="title"><a href="#">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB SSD/8GB RAM/Windows 10)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB RAM/GeForce RTX 3050/Win 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt50">
        <div class="col-lg-12">
          <div class="main-title">
            <h2 class="title">You may also like</h2>
          </div>
          <div class="navi_pagi_top_right related_product_slider slider_dib_sm shop_item_6grid_slider owl-theme owl-carousel">
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item1.png" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item7.png" alt="Shop Item7">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item3.png" alt="Shop Item3">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Microsoft Surface Laptop Go 12.4" Multi-Touch - Intel Core i5, 8GB RAM, 128GB SSD, Windows 10 Home in S Mode - Certified Refurbished</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$399.00 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item4.png" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i5-1135G7/512GB SSD/8GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item5.png" alt="Shop Item5">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="#">ASUS VivoBook 15 X515 15.6" Laptop - Slate Grey (Intel Core i3-1005G1/256GB SSD/8GB RAM/Win 11 S)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB RAM/GeForce RTX 3050/Win 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item1.png" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop Item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item3.png" alt="Shop Item3">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item4.png" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) - Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item5.png" alt="Shop Item5">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Sony</div>
                  <div class="title"><a href="#">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB SSD/8GB RAM/Windows 10)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$32.50 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
                <div class="thumb pb30">
                  <img class="w100" src="images/shop-items/shop-item6.png" alt="Shop item6">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-heart"></span></a></li>
                      <li><a href="page-dashboard-wish-list.html"><span class="flaticon-show"></span></a></li>
                      <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>
                  <div class="shop_item_cart_btn d-grid">
                    <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                  </div>
                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB RAM/GeForce RTX 3050/Win 11)</a></div>
                  <div class="review d-flex db-400">
                    <ul class="mb0 me-2">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                    <div class="review_count"><a href="#">3,014 reviews</a></div>
                  </div>
                  <div class="si_footer">
                    <div class="price">$18.124 <small><del>$45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')

<script type="text/javascript">

  $(document).on("submit", "#emailreply1", function () {
    var token = $(this).find('input[name=_token]').val();
    var subject = $(this).find('input[name=subject]').val();
    var message = $(this).find('textarea[name=message]').val();
    var $type  = $(this).find('input[name=type]').val();
    $('#subj1').prop('disabled', true);
    $('#msg1').prop('disabled', true);
    $('#emlsub').prop('disabled', true);
    $.ajax({
      type: 'post',
      url: "{{URL::to('/user/admin/user/send/message')}}",
      data: {
        '_token': token,
        'subject': subject,
        'message': message,
        'type'   : $type
      },
      success: function (data) {
        $('#subj1').prop('disabled', false);
        $('#msg1').prop('disabled', false);
        $('#subj1').val('');
        $('#msg1').val('');
        $('#emlsub').prop('disabled', false);
        if(data == 0)
          toastr.error("Oops Something Goes Wrong !!");
        else
          toastr.success("Message Sent !!");
        $('.close').click();
      }

    });
    return false;
  });

</script>


<script type="text/javascript">

  $(document).on("submit", "#emailreply", function () {
    var token = $(this).find('input[name=_token]').val();
    var subject = $(this).find('input[name=subject]').val();
    var message = $(this).find('textarea[name=message]').val();
    var email = $(this).find('input[name=email]').val();
    var name = $(this).find('input[name=name]').val();
    var user_id = $(this).find('input[name=user_id]').val();
    var vendor_id = $(this).find('input[name=vendor_id]').val();
    $('#subj').prop('disabled', true);
    $('#msg').prop('disabled', true);
    $('#emlsub').prop('disabled', true);
    $.ajax({
      type: 'post',
      url: "{{URL::to('/vendor/contact')}}",
      data: {
        '_token': token,
        'subject': subject,
        'message': message,
        'email': email,
        'name': name,
        'user_id': user_id,
        'vendor_id': vendor_id
      },
      success: function () {
        $('#subj').prop('disabled', false);
        $('#msg').prop('disabled', false);
        $('#subj').val('');
        $('#msg').val('');
        $('#emlsub').prop('disabled', false);
        toastr.success("{{ $langg->message_sent }}");
        $('.ti-close').click();
      }
    });
    return false;
  });

</script>

@endsection
