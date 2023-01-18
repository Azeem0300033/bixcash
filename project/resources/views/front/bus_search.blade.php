@extends('layouts.front')


@section('content')
<style>
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

    .nav-tabs .nav-item span {
        font-size: 10px;
        margin-left: 10px;
    }

    .banners a img {
        width: 100%;
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
                                        <a style="color:#fff;font-weight: 600;background-color: #191970;" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="myTripsToggle">My Trips</a>
                                        <div class="dropdown-menu" id="myTripsDropdown">
                                            <a class="dropdown-item" id="drop-1">To Pay</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" id="drop-2">Upcoming</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" id="drop-3">All Trips</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="formHolder">
                                    <form style="margin-top:10px" action="search-bus" class="form-inline" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label style="margin-left: 10px;margin-bottom: 5px;" for="fromWhere">From Where?</label>
                                            <input style="margin-left: 25px;" autocomplete="off" type="text" name="where" class="form-control busIcon" id="fromWhere" placeholder="From Where?">
                                            <span id="fromWhereError" class="error"></span>
                                            <div class="fromWhereList" id="fromWhereList"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label style="margin-left: 10px;margin-bottom: 5px;" for="toWhere">To Where?</label>
                                            <input style="margin-left: 25px;" autocomplete="off" type="text" name="to" class="form-control locationIcon" id="toWhere" placeholder="To Where?">
                                            <span id="toWhereError" class="error"></span>
                                            <div class="toWhereList" id="toWhereList"></div>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin-left: 10px;margin-bottom: 5px;" for="departureDate">Departure Date</label>
                                            <input style="margin-left: 25px;" type="date" class="form-control dateIcon" name="date" id="departureDate" placeholder="Departure Date" min="2021-04-24" max="2021-05-07">
                                            <span id="departureDateError" class="error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin-left: 10px;margin-bottom: 5px;" for="departureDate">Departure Time</label>
                                            <input style="margin-left: 25px;" type="time" class="form-control timeIcon" name="time" id="departureTime" placeholder="Departure Date" min="2021-04-24" max="2021-05-07">
                                            <span id="departureDateError" class="error"></span>
                                        </div>
                                        <div class="form-group">
                                            <!--<button type="button" id="resetButtonMsite" class="btn largelHidden">Reset</button>-->
                                            <button style="background: #191970;margin-top: 25px;margin-left: 18%;width:140px" type="submit" class="btn" id="searchButton"><a style="color: white;">Search</a></button>
                                            <button id="loginButton" style="display: none">Login</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:2%" class="row banners">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <a href="#"><img src="//laz-img-cdn.alicdn.com/images/ims-web/TB1jk20hSslXu8jSZFuXXXg7FXa.png" alt="Tips"></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <a href="#"><img src="{{asset('images/banner2.jfif')}}" alt="Flat 40 Off"></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <a href="#"><img src="{{asset('images/banner1.jfif')}}" alt="USP"></a>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End-->

@endsection