<!doctype html>
<html dir=ltr lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=keywords
          content="auto parts, baby store, ecommerce, electronics, fashion, food, marketplace, modern, multi vendor, multipurpose, organic, responsive, shop, shopping, store">
    <meta name=description content="Zeomart - Multi-Vendor & Marketplace HTML Template">
    <meta name=CreativeLayers content=ATFN>
    @if(isset($page->meta_tag) && isset($page->meta_description))
        <meta name="keywords" content="{{ $page->meta_tag }}">
        <meta name="description" content="{{ $page->meta_description }}">
        <title>{{$gs->title}}</title>
    @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
        <meta name="keywords" content="{{ $blog->meta_tag }}">
        <meta name="description" content="{{ $blog->meta_description }}">
        <title>{{$gs->title}}</title>
    @elseif(isset($productt))
        <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
        <meta name="description"
              content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
        <meta property="og:title" content="{{$productt->name}}"/>
        <meta property="og:description"
              content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}"/>
        <meta property="og:image" content="{{asset('assets/images/'.$productt->photo)}}"/>
        <meta name="author" content="GeniusOcean">
        <title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>
    @else
        <meta name="keywords" content="{{ $seo->meta_keys }}">
        <meta name="author" content="GeniusOcean">
        <title>{{$gs->title}}</title>
    @endif
    <link rel=stylesheet href={{ asset("css/bootstrap.min.css")}}>
    <link rel=stylesheet href={{ asset("css/ace-responsive-menu.css")}}>
    <link rel=stylesheet href={{ asset("css/menu.css")}}>
    <link rel=stylesheet href={{ asset("css/fontawesome.css")}}>
    <link rel=stylesheet href={{ asset("css/flaticon.css")}}>
    <link rel=stylesheet href={{ asset("css/bootstrap-select.min.css")}}>
    <link rel=stylesheet href={{ asset("css/animate.css")}}>
    <link rel=stylesheet href={{ asset("css/slider.css")}}>
    <link rel=stylesheet href={{ asset("css/style.css")}}>
    <link rel=preconnect href=https://fonts.googleapis.com/>
    <link rel=preconnect href=https://fonts.gstatic.com/ crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&amp;family=Poppins:wght@700&amp;display=swap"
          rel=stylesheet>
    <link rel=stylesheet href={{asset("css/responsive.css")}}>
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=128x128 rel="shortcut icon" type=image/x-icon>
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=128x128 rel="shortcut icon">
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=60x60 rel=apple-touch-icon>
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=72x72 rel=apple-touch-icon>
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=114x114 rel=apple-touch-icon>
    <link href="{{asset('assets/images/'.$gs->favicon)}}" sizes=180x180 rel=apple-touch-icon>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>
<body>
<div class="wrapper ovh">
    <div class=preloader></div>
    <div class="header_middle pt20 pb20 dn-992">
        <div class=container>
            <div class=row>
                <div class="col-lg-2 col-xxl-2">
                    <div class=header_top_logo_home1>
                        {{--                        <div class=logo>Bixcash<span class=text-thm>.</span></div>--}}
                        <a href="{{ route('front.index') }}">
                            <img width="150px" src="{{asset('assets/images/'.$gs->logo)}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <div class=header_middle_advnc_search>
                        <div class=search_form_wrapper>
                            <div class=row>
                                <div class="col-auto pr0">
                                    <div class=actegory>
                                        <select class=selectpicker name="category" id="category_select">
                                            <option value="">{{ $langg->lang1 }}</option>
                                            @foreach($categories as $data)
                                                <option value="{{ $data->slug }}" {{ Request::route('category') == $data->slug ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-auto p0">

                                    <div class=top-search>
                                        <form class="form-search" id="searchForm" method="GET"
                                              action="{{ route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')]) }}"
                                              accept-charset=utf-8>
                                            <div class="box-search pre_line">
                                                @if (!empty(request()->input('sort')))
                                                    <input type="hidden" name="sort"
                                                           value="{{ request()->input('sort') }}">
                                                @endif
                                                @if (!empty(request()->input('minprice')))
                                                    <input type="hidden" name="minprice"
                                                           value="{{ request()->input('minprice') }}">
                                                @endif
                                                @if (!empty(request()->input('maxprice')))
                                                    <input type="hidden" name="maxprice"
                                                           value="{{ request()->input('maxprice') }}">
                                                @endif
                                                <input class=form_control id="prod_name" name="search"
                                                       placeholder="{{ $langg->lang2 }}"
                                                       value="{{ request()->input('search') }}" autocomplete="off">

                                                <div class=search-suggestions>
                                                    <div class=box-suggestions>
                                                        <ul>
                                                            <li>
                                                                <div class=thumb><img src=images/listing/sf1.png
                                                                                      alt=sf1.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony DJ Headphones 4334205465,
                                                                        Black, Standard
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src=images/listing/sf2.png
                                                                                      alt=sf2.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony E-Mount Full Frame FE
                                                                        24-70mm f/2.8 GM II G Master
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src=images/listing/sf3.png
                                                                                      alt=sf3.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>TV 55" 4-Series 4K UHD smart
                                                                        TV
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src=images/listing/sf4.png
                                                                                      alt=sf4.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Hugolog Baby Monitor, 2K
                                                                        Security Camera, PT Cameras for
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src=images/listing/sf5.png
                                                                                      alt=sf5.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Apple iPhone Retina 6s Plus
                                                                        64GB
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-auto p0">
                                    <div class=advscrh_frm_btn>
                                        <button type=submit class="btn search-btn"><span class=flaticon-search></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-4 pr0-lg">
                    <div class="hm_log_fav_cart_widget justify-content-center">
                        <div class=wrapper>
                            <ul class=mb0>
                                <li class=list-inline-item><a class=header_top_iconbox href="{{ route('user-wishlists') }}">
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span class=flaticon-heart></span></div>
                                            <div class=details>
                                                <p class=subtitle>Wishlist</p>
                                                <h5 class=title>My Items</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=list-inline-item>
                                    @if(!Auth::guard('web')->check())
                                    <a class="header_top_iconbox signin-filter-btn" href=#>
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span class=flaticon-profile></span></div>
                                            <div class=details>
                                                <p class=subtitle>Sign In</p>
                                                <h5 class=title>Account</h5>
                                            </div>
                                        </div>
                                    </a>
                                    @else
                                        <a class="header_top_iconbox signin-filter-btn" href="{{ Auth::user()->IsVendor() == 1 ? route('vendor-dashboard') : route('user-dashboard') }}">
                                            <div class="d-block d-md-flex">
                                                <div class=icon><span class=flaticon-profile></span></div>
                                                <div class=details>
                                                    <p class=subtitle>Welcome!</p>
                                                    <h5 class=title>{{ $langg->lang11 }}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                </li>
                                <li class=list-inline-item><a class="header_top_iconbox cart-filter-btn" href=#>
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span><img src={{ asset("images/icons/flaticon-shopping-cart-white.svg")}}
                                                                       alt=""></span><span class=badge>{{ Session::has('cart') ? count(Session::get('cart')->items) : '0' }}</span></div>
                                            <div class=details>
                                                <p class=subtitle>{{ Session::has('cart') ? App\Models\Product::convertPrice(Session::get('cart')->totalPrice) : '0.00' }}</p>
                                                <h5 class=title>Total</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-nav menu_style_home_one main-menu">
        <nav class=posr>
            <div class="container posr menu_bdrt1">
                <div class=menu-toggle>
                    <button type=button id=menu-btn>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                    </button>
                </div>
                <div class="posr logo1 home1_style">
                    <div id=mega-menu>
                        <a class=btn-mega href=#>
                            <img class=me-2 src="{{ asset("images/desktop-nav-menu-white.svg")}}" alt="Desktop Menu Icon">
                            <span class="fw500 fz16 color-white vam">{{ $langg->lang14 }}</span>
                        </a>
                        <ul class=menu>
                            @foreach($categories as $category)
                                @if(count($category->subs) == 0)
                                    <li>
                                        <a href=#>
                                    <span class="menu-icn">
                                        <img width="20px" src="{{ asset('assets/images/categories/'.$category->photo) }}" alt="">
                                    </span>
                                            <span class=menu-title>{{ $category->name }}</span>
                                        </a>
                                    </li>

                                    @else
                                    <li>
                                        <a class=dropdown href=#>
                                    <span class="menu-icn">
                                        <img width="20px" src="{{ asset('assets/images/categories/'.$category->photo) }}" alt="">
                                    </span>
                                            <span class=menu-title>{{ $category->name }}</span>
                                        </a>
                                        <div class=drop-menu>
                                            <div class=one-third>
                                                <div class=cat-title>{{ $category->name }}</div>
                                                <ul class=mb0>
                                                    @foreach($category->subs as $subcat)
                                                        <li>
                                                            <a href="#">{{$subcat->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <ul id=respMenu class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style=horizontal>
{{--                    @if($gs->is_home == 1)--}}
                    <li><a href="{{ route('front.index') }}"><span class=title>Home</span></a></li>
{{--                    @endif--}}
                    <li class=megamenu_style><a href=#><span class=title>Shop</span></a>
                        <ul class="row dropdown-megamenu">
                            @foreach($categories as $category)
                                @if(count($category->subs) > 0)
                                    <li class="col mega_menu_list pl30">
                                        <h4 class=title>{{ $category->name }}</h4>
                                        <ul>
                                            @foreach($category->subs as $subcat)
                                                <li><a href="#">{{ $subcat->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    @foreach(DB::table('pages')->where('header','=',1)->get() as $data)
                        <li><a href="{{ route('front.page',$data->slug) }}"><span class=title>{{ $data->title }}</span></a></li>
                    @endforeach
                </ul>
                <ul id=respMenu2 class="ace-responsive-menu widget_menu_home2 wa" data-menu-style=horizontal>
                    <li class="list-inline-item list_c"><a href=#>{{ $langg->lang20 }}</a></li>

                </ul>
            </div>
        </nav>
    </header>
    <div class=hiddenbar-body-ovelay></div>
    <div class=signin-hidden-sbar>
        <div class=hsidebar-header>
            <div class=sidebar-close-icon><span class=flaticon-close></span></div>
            <h4 class=title>Sign-In</h4>
        </div>
        <div class=hsidebar-content>
            <div class="log_reg_form sidebar_area">
                <div class=login_form>
                    <form action=#>
                        <div class="mb-2 mr-sm-2">
                            <label class=form-label>Username or email address</label>
                            <input class=form-control placeholder="Ali Tufan">
                        </div>
                        <div class="form-group mb5">
                            <label class=form-label>Password</label>
                            <input type=password class=form-control placeholder=Password>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type=checkbox class=custom-control-input id=exampleCheck3>
                            <label class=custom-control-label for=exampleCheck3>Remember me</label>
                            <a class="btn-fpswd float-end" href=#>Lost your password?</a>
                        </div>
                        <button type=submit class="btn btn-log btn-thm mt20">Login</button>
                        <p class="text-center mb25 mt10">Don't have an account? <a class=signup-filter-btn href=#>Create
                                account</a></p>
                        <div class=hr_content>
                            <hr>
                            <span class=hr_top_text>or</span>
                        </div>
                        <ul class="login_with_social text-center mt30 mb0">
                            <li class=list-inline-item><a href=#><i class="fab fa-facebook"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-google"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-twitter"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-apple"></i></a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('load.cart')
    <div class=signup-hidden-sbar>
        <div class=hsidebar-header>
            <div class=sidebar-close-icon><span class=flaticon-close></span></div>
            <h4 class=title>Create Your Account</h4>
        </div>
        <div class=hsidebar-content>
            <div class="log_reg_form sidebar_area">
                <div class=sign_up_form>
                    <form action=#>
                        <div class=form-group>
                            <label class=form-label>Your Name</label>
                            <input class=form-control placeholder="Ali Tufan">
                        </div>
                        <div class=form-group>
                            <label class=form-label>Username</label>
                            <input class=form-control placeholder=alitfn>
                        </div>
                        <div class=form-group>
                            <label class=form-label>Your Email</label>
                            <input type=email class=form-control placeholder=creativelayers088@gmail.com>
                        </div>
                        <div class="form-group mb20">
                            <label class=form-label>Password</label>
                            <input type=password class=form-control placeholder=******************>
                        </div>
                        <button type=submit class="btn btn-signup btn-thm">Create Account</button>
                        <p class="text-center mb25 mt10">Already have an account? <a href=page-login.html>Sign in</a>
                        </p>
                        <div class=hr_content>
                            <hr>
                            <span class=hr_top_text>or</span>
                        </div>
                        <ul class="login_with_social text-center mt30 mb0">
                            <li class=list-inline-item><a href=#><i class="fab fa-facebook"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-google"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-twitter"></i></a></li>
                            <li class=list-inline-item><a href=#><i class="fab fa-apple"></i></a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id=page class=stylehome1>
        <div class=mobile-menu>
            <div class="header stylehome1">
                <div class=menu_and_widgets>
                    <div class="mobile_menu_bar float-start">
                        <a class=menubar href=#menu><span></span></a>
                        <a class=mobile_logo href=#>Bixcash<span class=text-thm>.</span></a>
                    </div>
                    <div class=mobile_menu_widget_icons>
                        <ul class="cart mt15">
                            <li class=list-inline-item>
                                <a class="cart_btn signin-filter-btn" href=#><span class="icon flaticon-profile"></span></a>
                            </li>
                            <li class=list-inline-item>
                                <a class="cart_btn cart-filter-btn" href=#><span class=icon><img
                                                src=images/icons/flaticon-shopping-cart-white.svg alt=""></span><span
                                            class="badge bgc-thm">2</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=mobile_menu_search_widget>
                    <div class=header_middle_advnc_search>
                        <div class="container search_form_wrapper">
                            <div class=row>
                                <div>
                                    <div class="top-search text-start">
                                        <form action=# class=form-search accept-charset=utf-8>
                                            <div class=box-search>
                                                <input class=form_control name=search placeholder="Search products…">
                                                <div class="search-suggestions text-start">
                                                    <div class=box-suggestions>
                                                        <ul>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src=images/listing/sf1.png alt=sf1.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony DJ Headphones 4334205465,
                                                                        Black, Standard
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src=images/listing/sf2.png alt=sf2.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony E-Mount Full Frame FE
                                                                        24-70mm f/2.8 GM II G Master
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src=images/listing/sf3.png alt=sf3.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>TV 55" 4-Series 4K UHD smart
                                                                        TV
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src=images/listing/sf4.png alt=sf4.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Hugolog Baby Monitor, 2K
                                                                        Security Camera, PT Cameras for
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src=images/listing/sf5.png alt=sf5.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Apple iPhone Retina 6s Plus
                                                                        64GB
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <div class=advscrh_frm_btn>
                                        <button type=submit class="btn search-btn"><span class=flaticon-search></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=posr>
                    <div class=mobile_menu_close_btn><span class=flaticon-close></span></div>
                </div>
            </div>
        </div>
        <nav id=menu class=stylehome1>
            <ul>
                <li><span>Home</span>
                    <ul>
                        <li><a href=index-2.html>Home V1</a></li>
                        <li><a href=index2.html>Home V2</a></li>
                        <li><a href=index3.html>Home V3</a></li>
                        <li><a href=index4.html>Home V4</a></li>
                        <li><a href=index5.html>Home V5</a></li>
                        <li><a href=index6.html>Home V6</a></li>
                        <li><a href=index7.html>Home V7</a></li>
                        <li><a href=index8.html>Home V8</a></li>
                        <li><a href=index9.html>Home V9</a></li>
                        <li><a href=index10.html>Home V10</a></li>
                    </ul>
                </li>
                <li><span>Shop</span>
                    <ul>
                        <li><span>Shop Listing</span>
                            <ul>
                                <li><a href=page-shop-list-v1.html>Listing v1</a></li>
                                <li><a href=page-shop-list-v2.html>Listing v2</a></li>
                                <li><a href=page-shop-list-v3.html>Listing v3</a></li>
                                <li><a href=page-shop-list-v4.html>Listing v4</a></li>
                                <li><a href=page-shop-list-v5.html>Listing v5</a></li>
                                <li><a href=page-shop-list-v6.html>Listing v6</a></li>
                                <li><a href=page-shop-list-v7.html>Listing v7</a></li>
                                <li><a href=page-shop-list-v8.html>Listing v8</a></li>
                            </ul>
                        </li>
                        <li><span>Shop Single</span>
                            <ul>
                                <li><a href=page-shop-single-v1.html>Version 1</a></li>
                                <li><a href=page-shop-single-v2.html>Version 2</a></li>
                                <li><a href=page-shop-single-v3.html>Version 3</a></li>
                                <li><a href=page-shop-single-v4.html>Version 4</a></li>
                                <li><a href=page-shop-single-v5.html>Version 5</a></li>
                                <li><a href=page-shop-single-color-switch.html>Color Switch</a></li>
                                <li><a href=page-shop-single-image-switch.html>Image Switch</a></li>
                                <li><a href=page-shop-single-countdown.html>Single Countdown</a></li>
                                <li><a href=page-shop-single-external-product.html>External Product</a></li>
                                <li><a href=page-shop-single-grouped-product.html>Grouped Product</a></li>
                                <li><a href=page-shop-single-bought-together.html>Bought Together</a></li>
                            </ul>
                        </li>
                        <li><span>User Dashboard</span>
                            <ul>
                                <li><a href=page-dashboard.html>Dashboard</a></li>
                                <li><a href=page-dashboard-order.html>Orders</a></li>
                                <li><a href=page-dashboard-wish-list.html>Downloads</a></li>
                                <li><a href=page-dashboard-address.html>Addresses</a></li>
                                <li><a href=page-dashboard-account-details.html>Account Details</a></li>
                                <li><a href=page-dashboard-wish-list.html>Wishlist</a></li>
                                <li><a href=page-login.html>Logout</a></li>
                            </ul>
                        </li>
                        <li><span>Shop Pages</span>
                            <ul>
                                <li><a href=page-shop-cart.html>Cart</a></li>
                                <li><a href=page-shop-checkout.html>Checkout</a></li>
                                <li><a href=page-shop-order-received.html>Order Received</a></li>
                                <li><a href=page-order-tracking.html>Order Tracking</a></li>
                                <li><a href=page-store-location.html>Store Locator</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><a href=page-about.html>About Us</a></li>
                        <li><span>Accounts</span>
                            <ul>
                                <li><a href=page-account-details.html>Account Details</a></li>
                                <li><a href=page-account-order.html>Account Order</a></li>
                                <li><a href=page-account-address.html>Account Address</a></li>
                                <li><a href=page-account-wishlist.html>Account Wishlist</a></li>
                                <li><a href=page-account-invoice.html>Account Invoice</a></li>
                            </ul>
                        </li>
                        <li><a href=page-become-vendor.html>Become Vendor</a></li>
                        <li><span>Vendor Pages</span>
                            <ul>
                                <li><a href=page-vendor-list.html>Vendor List</a></li>
                                <li><a href=page-vendor-single.html>Vendor Single</a></li>
                                <li><a href=page-dashboard.html>Dashboard</a></li>
                                <li><a href=page-dashboard-products.html>Products</a></li>
                                <li><a href=page-dashboard-order.html>Order</a></li>
                                <li><a href=page-dashboard-customer.html>Customer</a></li>
                                <li><a href=page-dashboard-categories.html>Categories</a></li>
                                <li><a href=page-dashboard-message.html>Message</a></li>
                                <li><a href=page-dashboard-setting.html>Settings</a></li>
                            </ul>
                        </li>
                        <li><a href=page-brands.html>Brands</a></li>
                        <li><a href=page-contact.html>Contact</a></li>
                        <li><a href=page-coming-soon.html>Coming Soon</a></li>
                        <li><a href=page-help.html>Help</a></li>
                        <li><a href=page-error.html>404 Page</a></li>
                        <li><a href=page-faq.html>Faq</a></li>
                        <li><a href=page-invoices.html>Invoices</a></li>
                        <li><a href=page-login.html>Login</a></li>
                        <li><a href=page-register.html>Register</a></li>
                        <li><a href=page-terms.html>Terms and Conditions</a></li>
                        <li><a href=page-ui-element.html>UI Elements</a></li>
                    </ul>
                </li>
                <li><span>Blog</span>
                    <ul>
                        <li><a href=page-blog-grid.html>Blog Grid</a></li>
                        <li><a href=page-blog-grid-sidebar.html>Blog Grid Sidebar</a></li>
                        <li><a href=page-blog-details.html>Blog Details</a></li>
                        <li><a href=page-blog-list.html>Blog List</a></li>
                        <li><a href=page-blog-single.html>Blog Single</a></li>
                        <li><a href=page-blog-single2.html>Blog Single v2</a></li>
                    </ul>
                </li>
                <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">Departments</li>
                <li><span><i class="flaticon-cooking mr20"></i>Home & Kitchen</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Home & Kitchen</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-armchair mr20"></i>Home & Furniture</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Home & Furniture</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-smartphone-1 mr20"></i>Electronics</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Electronics</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-bride-dress mr20"></i>Clothing & Accessories</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Clothing & Accessories</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-heart-beat mr20"></i>Health & Beauty</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Health & Beauty</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-volleyball mr20"></i>Sport & Outdoor</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Sport & Outdoor</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-groceries mr20"></i>Grocery & Market</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Grocery & Market</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-remote-control mr20"></i>Toy & Video Games</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Toy & Video Games</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-feeding-bottle mr20"></i>Babies & Moms</span>
                    <ul>
                        <li><a href=page-shop-list-v1.html>Babies & Moms</a></li>
                    </ul>
                </li>
                <li><a class="tdu text-thm1 text-capitalize" href=#>See More <i class="far fa-angle-down"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="body_content_wrapper position-relative pt30">

        @yield('content')
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
    </div>
</div>
<script src="{{ asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{ asset("js/jquery-migrate-3.0.0.min.js")}}"></script>
<script src="{{ asset("js/popper.min.js")}}"></script>
<script src="{{ asset("js/bootstrap.min.js")}}"></script>
<script src="{{ asset("js/bootstrap-select.min.js")}}"></script>
<script src="{{ asset("js/jquery.mmenu.all.js")}}"></script>
<script src="{{ asset("js/ace-responsive-menu.js")}}"></script>
<script src="{{ asset("js/jquery-scrolltofixed-min.js")}}"></script>
<script src="{{ asset("js/wow.min.js")}}"></script>
<script src="{{ asset("js/slider.js")}}"></script>
<script src="{{ asset("js/scrollbalance.js")}}"></script>
<script src="{{ asset("js/script.js")}}"></script>
</body>

</html>