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

                    <div class="table-responsiv">
                        <div id="geniustable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row btn-area">
                                <div class="col-sm-4">
                                    <div class="dataTables_length" id="geniustable_length"><label>Show <select name="geniustable_length" aria-controls="geniustable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-4">
                                    <div id="geniustable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="geniustable"></label></div>
                                </div>
                                <div class="col-sm-4 table-contents"><a class="add-btn" href="/admin/bus/create"><i class="fas fa-plus"></i> Add New Bus</a></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="geniustable" class="table table-hover dt-responsive dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="geniustable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 322px;">Id</th>
                                                <th width="40%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 437px;">Bus Name</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 99px;">Bus Type</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 181px;">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bus as $item)
                                            <tr role="row" class="odd">
                                                <td tabindex="0">{{$item->id}}</td>
                                                <td>{{$item->b_name}}</td>
                                                <td>{{$item->b_type}}</td>
                                                <td>
                                            <a class="btn success" href="/admin/bus/{{$item->id}}/edit"
                                                data-toggle="tooltip" data-original-title=" Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a data-toggle="tooltip" data-original-title="Delete" id="toastr-1" href="#"
                                                onclick="document.getElementById('delete-form{{$item->id}}').submit();"
                                                class="btn danger"><i class="fa fa-trash"></i></a>
                                            <form action="{{URL::to('/admin/bus/'.$item->id)}}" method="POST"
                                                id="delete-form{{$item->id}}"></form>
                                        </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div id="geniustable_processing" class="dataTables_processing card" style="display: none;"><img src="https://bixcash.pk/assets/images/1564224329loading3.gif"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="geniustable_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="geniustable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="geniustable_previous"><a href="#" aria-controls="geniustable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="geniustable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="geniustable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item next" id="geniustable_next"><a href="#" aria-controls="geniustable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
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