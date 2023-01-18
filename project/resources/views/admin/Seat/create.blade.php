@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('bus') }}">
<div class="content-area">
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Seat</h4>
                <ul class="links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>
                    <li>
                        <a href="javascript:;">Seat </a>
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
                        <h5 class="modal-title">ADD NEW SEAT</h5>

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
                                            <form method="POST" action="{{ URL::to('/admin/seat') }}" enctype="multipart/form-data" class="form-horizontal">
                                                {{csrf_field()}}

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Bus Name *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <select name="bus" required="">
                                                        <option value="">Select Bus</option>
                                                        @foreach($bus as $item)
                                                                          <option value="{{$item->b_name}}">{{$item->b_name}}</option>
                                                                          @endforeach
                                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">
                                                            <h4 class="heading">Seat No *</h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="seat_no" placeholder="Seat" required="" value="">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="left-area">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <button class="addProductSubmit-btn" type="submit">Create Seat</button>
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