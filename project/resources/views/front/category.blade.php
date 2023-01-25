@extends('layouts.front')
@section('content')
    <!-- Custom Shop Category List Menu -->
    <section class="p0 bb1 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom_shop_category_nav_list_menu">
                        <ul class="mb0 d-flex">
                            <li><a href="#">Home</a></li>
                            @if (!empty($cat))
                                <li>
                                    <a href="{{route('front.category', $cat->slug)}}">{{ $cat->name }}</a>
                                </li>
                            @endif
                            @if (!empty($subcat))
                                <li>
                                    <a href="{{route('front.category', [$cat->slug, $subcat->slug])}}">{{ $subcat->name }}</a>
                                </li>
                            @endif
                            @if (!empty($childcat))
                                <li>
                                    <a href="{{route('front.category', [$cat->slug, $subcat->slug, $childcat->slug])}}">{{ $childcat->name }}</a>
                                </li>
                            @endif
                            @if (empty($childcat) && empty($subcat) && empty($cat))
                                <li>
                                    <a href="{{route('front.category')}}">{{ $langg->lang36 }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-listing pt10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title bb1 pb10">
                        <h2 class="title">{{ $cat->name }}</h2>
                        <p>Shop laptops, desktops, monitors, tablets, PC gaming, hard drives and storage, accessories
                            and more</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-7 col-lg-6">
                    <div class="filter_components">
                        <ul class="mb0 align-items-center text-start">
                            <li class="d-block d-sm-inline-block me-2 mb-3"><a class="all-filter-btn flter_btn"
                                                                               href="#"><span
                                            class="flaticon-sort me-2"></span>All Filter</a></li>
                            <li class="d-none d-md-inline-block me-2 mb-3">
                                <div class="custom_dropdown_widget">
                                    <div class="drop_btn">Price <i class="fa fa-angle-down"></i></div>
                                    <div class="drop_content pb20">
                                        <div class="zmart_custom_range_slider mt30">
                                            <input class="mb5" data-addui="slider" data-min="20" data-formatter="usd"
                                                   data-fontsize="14" data-step="0.02" data-range="true"
                                                   data-timeout="70987" value="20.50,70987.00"/>
                                        </div>
                                        <div class="enable_disable_btns d-grid">
                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>
                                            <a class="btn btn2" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
{{--                            <li class="d-none d-md-inline-block me-2 mb-3">--}}
{{--                                <div class="custom_dropdown_widget">--}}
{{--                                    <div class="drop_btn2">Brand <i class="fa fa-angle-down"></i></div>--}}
{{--                                    <div class="drop_content2 pb20 text-start">--}}
{{--                                        <div class="blog_search_widget mb15">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <input type="text" class="form-control mb15" placeholder="Search"--}}
{{--                                                       aria-label="Recipient's username">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar_widget_checkbox">--}}
{{--                                            <div class="ui_kit_checkbox mb15">--}}
{{--                                                <label class="custom_checkbox">Apple <span class="float-end">87</span>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="checkmark"></span>--}}
{{--                                                </label>--}}
{{--                                                <label class="custom_checkbox" checked="checked">Asus <span--}}
{{--                                                            class="float-end">92</span>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="checkmark"></span>--}}
{{--                                                </label>--}}
{{--                                                <label class="custom_checkbox">Acer <span class="float-end">123</span>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="checkmark"></span>--}}
{{--                                                </label>--}}
{{--                                                <label class="custom_checkbox">Dell <span class="float-end">49</span>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="checkmark"></span>--}}
{{--                                                </label>--}}
{{--                                                <label class="custom_checkbox">Lenovo <span class="float-end">12</span>--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="checkmark"></span>--}}
{{--                                                </label>--}}
{{--                                                <a href="#" class="shop_btn">Show More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="enable_disable_btns d-grid mt25">--}}
{{--                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>--}}
{{--                                            <a class="btn btn2" href="#">Cancel</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            <li class="d-none d-md-inline-block me-0 mb-3">
                                <div class="custom_dropdown_widget">
                                    <div class="drop_btn3">Category <i class="fa fa-angle-down"></i></div>
                                    <div class="drop_content3 pb20 text-start">
                                        <div class="blog_search_widget mb15">
                                            <div class="input-group">
                                                <input type="text" class="form-control mb15" placeholder="Search"
                                                       aria-label="Recipient's username">
                                            </div>
                                        </div>
                                        <div class="sidebar_widget_checkbox">
                                            <div class="ui_kit_checkbox mb15">
                                                @foreach ($categories as $element)
                                                <label class="custom_checkbox">{{ $element->name }} <span class="float-end">{{ count($cat->subs) }}</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                @endforeach
{{--                                                <a href="#" class="shop_btn">Show More</a>--}}
                                            </div>
                                        </div>
                                        <div class="enable_disable_btns d-grid mt25">
                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>
                                            <a class="btn btn2" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-5 col-lg-6">
                    <div class="filter_components text-end">
                        <ul class="mb0">
                            <li class="list-inline-item me-0">
                                <div class="page_control_shorting mb20">
                                    <select class="selectpicker show-tick">
                                        <option>Default sorting</option>
                                        <option>Best Seller</option>
                                        <option>Best Match</option>
                                        <option>Price Low</option>
                                        <option>Price High</option>
                                    </select>
                                </div>
                            </li>
                            <li class="d-none d-md-inline-block list px-2"><a href="#">List</a></li>
                            <li class="d-none d-md-inline-block gird ps-2"><a href="#">Grid</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    @if (count($prods) > 0)
                        @foreach ($prods as $key => $prod)
                            <div class="col-sm-6 col-lg-3 col-md-3 mb-2">
                                <div class="shop_item bdr1 m--1">
                                    <div class="thumb pb30">
                                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="Shop Item1">
                                        <div class="thumb_info">
                                            <ul class="mb0">
                                                <li><a href="page-dashboard-wish-list.html"><span
                                                                class="flaticon-heart"></span></a>
                                                </li>
                                                <li><a href="page-dashboard-wish-list.html"><span
                                                                class="flaticon-show"></span></a>
                                                </li>
                                                <li><a href="page-shop-list-v6.html"><span
                                                                class="flaticon-graph"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid">
                                            <a href="page-shop-cart.html" class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="sub_title">SAMSUNG</div>
                                        <div class="title"><a href="{{ route('front.product', $prod->slug) }}">{{ $prod->showName() }}</a></div>
                                        <div class="review d-flex">
                                            <ul class="mb0 me-2">
                                                <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                            </ul>
                                            <div class="review_count"><a href="#">3,014 reviews</a></div>
                                        </div>
                                        <div class="si_footer">
                                            <div class="price">
                                                {{ $prod->setCurrency() }}
                                                <small>
                                                    <del>{{ $prod->showPreviousPrice() }}</del>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="page-center mt-5">
                                {!! $prods->appends(['search' => request()->input('search')])->links() !!}
                            </div>
                        </div>

                    @else
                        <div class="col-lg-12">
                            <div class="page-center">
                                <h4 class="text-center">{{ $langg->lang60 }}</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')

    <script>

        $(document).ready(function () {

            // when dynamic attribute changes
            $(".attribute-input, #sortby").on('change', function () {
                $("#ajaxLoader").show();
                filter();
            });

            // when price changed & clicked in search button
            $(".filter-btn").on('click', function (e) {
                e.preventDefault();
                $("#ajaxLoader").show();
                filter();
            });
        });

        function filter() {
            let filterlink = '';

            if ($("#prod_name").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?search=' + $("#prod_name").val();
                } else {
                    filterlink += '&search=' + $("#prod_name").val();
                }
            }

            $(".attribute-input").each(function () {
                if ($(this).is(':checked')) {
                    if (filterlink == '') {
                        filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?' + $(this).attr('name') + '=' + $(this).val();
                    } else {
                        filterlink += '&' + $(this).attr('name') + '=' + $(this).val();
                    }
                }
            });

            if ($("#sortby").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?' + $("#sortby").attr('name') + '=' + $("#sortby").val();
                } else {
                    filterlink += '&' + $("#sortby").attr('name') + '=' + $("#sortby").val();
                }
            }

            if ($("#min_price").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?' + $("#min_price").attr('name') + '=' + $("#min_price").val();
                } else {
                    filterlink += '&' + $("#min_price").attr('name') + '=' + $("#min_price").val();
                }
            }

            if ($("#max_price").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?' + $("#max_price").attr('name') + '=' + $("#max_price").val();
                } else {
                    filterlink += '&' + $("#max_price").attr('name') + '=' + $("#max_price").val();
                }
            }

            // console.log(filterlink);
            console.log(encodeURI(filterlink));
            $("#ajaxContent").load(encodeURI(filterlink), function (data) {
                // add query string to pagination
                addToPagination();
                $("#ajaxLoader").fadeOut(1000);
            });
        }

        // append parameters to pagination links
        function addToPagination() {
            // add to attributes in pagination links
            $('ul.pagination li a').each(function () {
                let url = $(this).attr('href');
                let queryString = '?' + url.split('?')[1]; // "?page=1234...."

                let urlParams = new URLSearchParams(queryString);
                let page = urlParams.get('page'); // value of 'page' parameter

                let fullUrl = '{{route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')])}}?page=' + page + '&search=' + '{{request()->input('search')}}';

                $(".attribute-input").each(function () {
                    if ($(this).is(':checked')) {
                        fullUrl += '&' + encodeURI($(this).attr('name')) + '=' + encodeURI($(this).val());
                    }
                });

                if ($("#sortby").val() != '') {
                    fullUrl += '&sort=' + encodeURI($("#sortby").val());
                }

                if ($("#min_price").val() != '') {
                    fullUrl += '&min=' + encodeURI($("#min_price").val());
                }

                if ($("#max_price").val() != '') {
                    fullUrl += '&max=' + encodeURI($("#max_price").val());
                }

                $(this).attr('href', fullUrl);
            });
        }

        $(document).on('click', '.categori-item-area .pagination li a', function (event) {
            event.preventDefault();
            if ($(this).attr('href') != '#' && $(this).attr('href')) {
                $('#preloader').show();
                $('#ajaxContent').load($(this).attr('href'), function (response, status, xhr) {
                    if (status == "success") {
                        $('#preloader').fadeOut();
                        $("html,body").animate({
                            scrollTop: 0
                        }, 1);

                        addToPagination();
                    }
                });
            }
        });

    </script>

    <script type="text/javascript">

        $(function () {

            $("#slider-range").slider({
                range: true,
                orientation: "horizontal",
                min: 0,
                max: 10000000,
                values: [{{ isset($_GET['min']) ? $_GET['min'] : '0' }}, {{ isset($_GET['max']) ? $_GET['max'] : '10000000' }}],
                step: 5,

                slide: function (event, ui) {
                    if (ui.values[0] == ui.values[1]) {
                        return false;
                    }

                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
            });

            $("#min_price").val($("#slider-range").slider("values", 0));
            $("#max_price").val($("#slider-range").slider("values", 1));

        });

    </script>

@endsection