@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('bus') }}">
<div class="content-area">
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Bus</h4>
                <ul class="links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>
                    <li>
                        <a href="javascript:;">Bus </a>
                    </li>
                    <!--<li>-->
                    <!--	<a href="{{ route('admin-blog-index') }}">{{ __('Posts') }}</a>-->
                    <!--</li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="mr-table allproduct">

                    <div class="alert alert-success validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                        <p class="text-left"></p>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">EDIT BUS</h5>

                    </div>
                    <div class="content-area">

                        <div class="add-product-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-description">
                                        <div class="body-area">
                                            <div class="alert alert-danger validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <ul class="text-left">
                                                </ul>
                                            </div>
                                            <form method="POST" enctype="multipart/form-data" action="{{ route('admin-bus-update',$bus->id) }}" class="form-horizontal">
                                            
                                                {{csrf_field()}}

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Bus Name *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="b_name" placeholder="Name" required="" value="{{$bus->b_name}}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Type *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="b_type" placeholder="Type" required="" value="{{$bus->b_type}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Pickup Station *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="b_station" placeholder="Pickup Station" required="" value="{{$bus->b_station}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Drop Station *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="b_drop" placeholder="Drop Station" required="" value="{{$bus->b_drop}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Bus Logo *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="file" class="input-field" name="b_logo" value="">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Price *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="b_price" placeholder="Price" required="" value="{{$bus->b_price}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Date *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="date" class="input-field" name="b_date" placeholder="Price" required="" value="{{$bus->b_date}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Time *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="time" class="input-field" name="b_time" required="" value="{{$bus->b_time}}">
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <button class="addProductSubmit-btn" type="submit">Update Bus</button>
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




@endsection



@section('scripts')





@endsection