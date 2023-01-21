<div class=cart-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Your Cart</h4>
    </div>
    @if(Session::has('cart'))
    <div class=hsidebar-content>
        <div class="log_fav_cart_widget hsidebar_home_page">
            <div class=wrapper>
                <ul class=cart>
                    <li class=list-inline-item>
                        <ul class=dropdown_content>
                            @foreach(Session::get('cart')->items as $product)
                            <li class=list_content>
                                <div>
                                    <img class="float-start mt10" src="{{ $product['item']['photo'] ? filter_var($product['item']['photo'], FILTER_VALIDATE_URL) ?$product['item']['photo']:asset('assets/images/products/'.$product['item']['photo']):asset('assets/images/noimage.png') }}" alt=75x75>
                                    <p>
                                        {{strlen($product['item']['name']) > 45 ? substr($product['item']['name'],0,45).'...' : $product['item']['name']}}
                                    </p>
                                    <div class="cart_btn home_page_sidebar mt10">
                                        <div class="quantity-block home_page_sidebar">
                                            <button class="quantity-arrow-minus home_page_sidebar"><img
                                                        src={{ asset("images/icons/minus.svg")}} alt=""></button>
                                            <input class="quantity-num home_page_sidebar" type=number value="{{$product['qty']}}">
                                            <button class="quantity-arrow-plus home_page_sidebar"><span
                                                        class=flaticon-close></span></button>
                                        </div>
                                        <span class="home_page_sidebar price">$3.399</span>
                                    </div>
                                    <span class=close_icon><i class=flaticon-close></i></span>
                                </div>
                            </li>
                            @endforeach
                            <li class=list_content_total_price>
                                <h5>Total: <span class="total_price float-end">{{ Session::has('cart') ? App\Models\Product::convertPrice(Session::get('cart')->totalPrice) : '0.00' }}</span></h5>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=hsidebar_footer_content>
        <div class=list_last_content>
            <div class=lc>
{{--                <p class=para>Buy $98.00 more to enjoy FREE Shipping</p>--}}
{{--                <div class="uilayout_range home1_style">--}}
{{--                    <div class="sidebar_range_slider mb30 mt25">--}}
{{--                        <input class=range-example-km value=80>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <a href=# class="cart_btns btn btn-white">View Cart</a>
                <a href=# class="checkout_btns btn btn-thm">Checkout</a>
            </div>
        </div>
    </div>
    @else
        <h3 class="text-center mt-5">{{ $langg->lang8 }}</h3>
    @endif
</div>