@extends('layouts.front')


@section('content')
<style>
    /* store page css */

    .form-inline .form-group {
        display: -ms-flexbox;
        display: unset;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #fff;
        background-color: #191970;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .nav-link.disabled {
        color: #fff;
        background-color: #191970;
        border-color: #dee2e6 #dee2e6 #fff;
    }
    
    .search-box {
        margin-top: 2%;
        margin-bottom: 10px;
    }

    .search-box .row {
        width: 87%;
    }

    .search-box .category {
        width: 76%;
        height: 40px;
        border: 0px solid;
        background: #fd9500;
        color: white;
        padding-left: 10px;
        border-radius: 4px;
    }

    form.example input[type=text] {
        padding: 7px;
        font-size: 17px;
        border: 1px solid #fd9500;
        float: left;
        width: 80%;
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 7px;
        background: #fd9500;
        color: white;
        font-size: 17px;
        border: 1px solid #fd9500;
        border-left: none;
        cursor: pointer;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
    }

    form.example button:hover {
        background: #fd9500;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    .search-box .advance {
        width: 80%;
        border: 2px solid #fd9500;
        height: 43px;
        border-radius: 3px;
        background: none;
        color: #fd9500;
        font-weight: 600;
    }

    .store-item {
        margin-top: 2%;
        margin-bottom: 2%;
    }


    .store-item .sort {
        background: linear-gradient(to right, #9ec8ff 0%, #ffffff 100%);
        width: 100%;
    }

    .store-item .sort p {
        padding: 2%;
    }

    .store-item .sort p select {
        padding: 3px;
        width: 25%;
    }

    .store-item .coupon {
        box-shadow: 0 10px 10px 0 rgb(214 215 216 / 60%);
        height: auto;
        border-radius: 5px;
        border: 1px solid rgb(214 215 216 / 60%);
        margin-bottom: 3%;
    }

    .store-item .coupon .coupon-thumb {
        margin-left: 4%;
    }

    .store-item .coupon .coupon-thumb img {
        width: 100%;
        margin-top: 5%;
        margin-bottom: 5%;
        border-radius: 5px;
    }

    .store-item .coupon .row {
        width: 100%;
    }

    .store-item .coupon .coupon-thumb .btn-border {
        border: 2px solid #fd9500;
        background: transparent;
        color: #fd9500;
        font-weight: 600;
        width: 52%;
    }

    .store-item .coupon .coupon-thumb .btn-color {
        border: 2px solid #fd9500;
        background: #fd9500;
        color: #fff;
        font-weight: 600;
        width: 45%;
    }

    .store-item .coupon .coupon-thumb .price {
        color: #fd9500;
        font-weight: 800;
    }

    .coupon-content h6 {
        color: #18d26e;
        font-size: 15px;
        margin-top: 9px;
        margin-left: 24px;
    }

    .coupon-content h5 {
        color: black;
        font-size: 15px;
        margin-top: 9px;
        margin-left: 24px;
        padding-bottom: 8px;
    }

    .coupon-content h4 {
        color: #fd9500;
        font-size: 15px;
        margin-top: 9px;
        font-weight: 600;
        margin-left: 24px;
    }

    .filter {
        background: linear-gradient(to bottom, #b8d7ff 0%, #ffffff 100%);
        height: auto;
        margin-top: 10%;
        padding: 11%;
    }

    .filter h5 {
        color: #fd9500;
        font-weight: 600;
        font-size: 16px;
    }

    .filter select {
        padding: 4px;
        width: 49%;
        margin-bottom: 6%;
    }

    .filter-search {
        background: #fd9500;
        width: 54%;
        height: 38px;
        border: 0px solid;
        color: white;
        font-weight: 600;
        font-size: 19px;
        border-radius: 3px;
    }

    .coupon-content {
        margin-top: 5%;
    }



    .nav-tabs .nav-item span {
        font-size: 10px;
        margin-left: 10px;
    }

    @media(max-width:991px) {
        .formHolder input {
            width: 100%;
            margin-left: 0px !important;
        }

        .formHolder label {
            margin-left: 0px !important;
        }

        .formHolder .form-group {
            width: 100%;
        }

        .formHolder #searchButton {
            margin-left: 0% !important;
            width: 100% !important;
        }

        .banners a img {
            width: 100%;
            margin-top: 4%;
        }
    }

    /* store page css */
</style>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="pages">
                    <li>
                        <a href="{{ route('front.index') }}">
                            {{ $langg->lang17 }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.contact') }}">
                            {{ $langg->lang20 }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->


<!-- Contact Us Area Start -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-section-title">

                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="left-area">
                    <div class="contact-form">
                        <div class="gocover" style="background: url({{ asset('assets/images/'.$gs->loader) }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                        <div class="contentHolder" style="display: block;">
                            <div class="wrapper">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <span class="offBg"></span>
                                        <a class="nav-link active busIcon" href="//travel.daraz.pk/?spm=a2a0e.13893938.searchpage.1.7d5a37d9CztSld&amp;scm=1003.4.icms-zebra-101436581-5948008.OTHER_6018281734_6029823" data-spm-anchor-id="a2a0e.13893938.searchpage.1"><i style="color:#fff" class="fas fa-bus"></i> Bus</a>
                                    </li>
                                    <li class="nav-item">
                                        <span> Coming Soon</span>
                                        <a class="nav-link disabled hotelIcon"><i style="color:#fff" class="fas fa-plane"></i> Flights</a>
                                    </li>
                                    <li class="nav-item">
                                        <span> Coming Soon</span>
                                        <a class="nav-link disabled flightIcon"><i style="color:#fff" class="fas fa-hotel"></i> Hotels</a>
                                    </li>
                                    <li class="nav-item lastChild dropdown">
                                        <span class="offBg"></span>
                                        <a style="background: #191970;color:#fff;font-weight: 600;" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="myTripsToggle">My Trips</a>
                                        <div class="dropdown-menu" id="myTripsDropdown">
                                            <a class="dropdown-item" id="drop-1">To Pay</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" id="drop-2">Upcoming</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" id="drop-3">All Trips</a>
                                        </div>
                                    </li>
                                </ul>
                                <!--<div class="formHolder">-->
                                <!--     <form style="margin-top:10px" action="search-bus" class="form-inline" method="POST">-->
                                <!--        {{csrf_field()}}-->
                                <!--        <div class="form-group">-->
                                <!--            <label style="margin-left: 10px;margin-bottom: 5px;" for="fromWhere">From Where?</label>-->
                                <!--            <input style="margin-left: 25px;" autocomplete="off" type="text" name="where" class="form-control busIcon" id="fromWhere" placeholder="From Where?">-->
                                <!--            <span id="fromWhereError" class="error"></span>-->
                                <!--            <div class="fromWhereList" id="fromWhereList"></div>-->
                                <!--        </div>-->
                                        
                                <!--        <div class="form-group">-->
                                <!--            <label style="margin-left: 10px;margin-bottom: 5px;" for="toWhere">To Where?</label>-->
                                <!--            <input style="margin-left: 25px;" autocomplete="off" type="text" name="to" class="form-control locationIcon" id="toWhere" placeholder="To Where?">-->
                                <!--            <span id="toWhereError" class="error"></span>-->
                                <!--            <div class="toWhereList" id="toWhereList"></div>-->
                                <!--        </div>-->
                                <!--        <div class="form-group">-->
                                <!--            <label style="margin-left: 10px;margin-bottom: 5px;" for="departureDate">Departure Date</label>-->
                                <!--            <input style="margin-left: 25px;" type="date" class="form-control dateIcon" name="date" id="departureDate" placeholder="Departure Date" min="2021-04-24" max="2021-05-07">-->
                                <!--            <span id="departureDateError" class="error"></span>-->
                                <!--        </div>-->
                                <!--        <div class="form-group">-->
                                <!--            <label style="margin-left: 10px;margin-bottom: 5px;" for="departureDate">Departure Time</label>-->
                                <!--            <input style="margin-left: 25px;" type="time" class="form-control timeIcon" name="time" id="departureTime" placeholder="Departure Date" min="2021-04-24" max="2021-05-07">-->
                                <!--            <span id="departureDateError" class="error"></span>-->
                                <!--        </div>-->
                                <!--        <div class="form-group">-->
                                            <!--<button type="button" id="resetButtonMsite" class="btn largelHidden">Reset</button>-->
                                <!--            <button style="background: #191970;margin-top: 25px;margin-left: 18%;width:140px" type="submit" class="btn" id="searchButton"><a style="color: white;">Search</a></button>-->
                                <!--            <button id="loginButton" style="display: none">Login</button>-->
                                <!--        </div>-->
                                <!--    </form>-->
                                <!--</div>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="mainContent" style="display: block;">
                    <!-- Items -->
                    <div class="store-item">

                        <div class="row">

                            <!--<div class="col-md-4 col-lg-4">-->
                            <!--    <div class="filter">-->
                            <!--        <h5>Merk:</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Hemyr, Hobby</option>-->
                            <!--        </select>-->

                            <!--        <h5>Type:</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Type</option>-->
                            <!--        </select>-->

                            <!--        <h5>Sort Capmer :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value=""></option>-->
                            <!--        </select>-->

                            <!--        <h5>Kilometerstand :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Van</option>-->
                            <!--        </select>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Tot</option>-->
                            <!--        </select>-->

                            <!--        <h5>Slaapplaatsen :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Slaapplaatsen</option>-->
                            <!--        </select>-->

                            <!--        <h5>Prijs :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Van: Green minimum</option>-->
                            <!--        </select>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Tot: Green minimum</option>-->
                            <!--        </select>-->

                            <!--        <h5>Bouwjaar :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Van: </option>-->
                            <!--        </select>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Tot: </option>-->
                            <!--        </select>-->

                            <!--        <h5>Gewicht (kg) :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Van: </option>-->
                            <!--        </select>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Tot: </option>-->
                            <!--        </select>-->

                            <!--        <h5>Length (m) :</h5>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Van: </option>-->
                            <!--        </select>-->
                            <!--        <select name="" id="">-->
                            <!--            <option value="">Tot: </option>-->
                            <!--        </select>-->

                            <!--        <h5>Conditie :</h5>-->
                            <!--        <select style="width: 100%;" name="" id="">-->
                            <!--            <option value="">maak en kruiz </option>-->
                            <!--        </select>-->

                            <!--        <h5>Max toelaatbaar gewicht (kg) :</h5>-->
                            <!--        <div class="checkbox">-->
                            <!--            <label>-->
                            <!--                <input type="checkbox" value="">-->
                            <!--                Tot 3500 (B rijbewijs)-->
                            <!--            </label>-->
                            <!--        </div>-->
                            <!--        <div class="checkbox">-->
                            <!--            <label>-->
                            <!--                <input type="checkbox" value="">-->
                            <!--                3500 of meer (C1 rijbewijs)-->
                            <!--            </label>-->
                            <!--        </div>-->

                            <!--        <h5>Zakelijk / Particulier :</h5>-->
                            <!--        <select style="width: 100%;" name="" id="">-->
                            <!--            <option value="">maak en kruiz </option>-->
                            <!--        </select>-->

                            <!--        <p align="end"><button class="filter-search">Search</button></p>-->


                            <!--    </div>-->
                            <!--</div>-->

                            <div class="col-md-8 col-lg-8">
                                <div class="coupon-content">
                                    @foreach($s_where as $item)
                                    <div class="coupon">

                                        <div class="row">


                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <div class="coupon-content">
                                                    <a href="/Bus-Single/{{$item->id}}">
                                                        <h6>{{$item->b_name}}</h6>
                                                    </a>
                                                    <h5>{{$item->b_station}} | {{$item->b_drop}} | {{$item->b_time}}</h5>
                                                    <h4>{{$item->b_type}}</h4>
                                                    <h5>{{$item->b_price}}</h5>
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="thumbnail coupon-thumb">
                                                    <img src="{{asset('images/Bus/'.$item->b_logo)}}" width="50">
                                                    <div class="caption">

                                                        <p align="center">
                                                            <a href="#" class="price">{{$item->b_price}} </a>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Items -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End-->

@endsection