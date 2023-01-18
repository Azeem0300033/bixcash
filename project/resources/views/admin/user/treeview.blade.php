@extends('layouts.admin') 

@section('content')  
					<input type="hidden" id="headerdata" value="{{ __("CUSTOMER") }}">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">{{ __("Customers") }}</h4>
										<ul class="links">
											<li>
												<a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
											</li>
											<li>
												<a href="{{ route('admin-user-index') }}">{{ __("Customers") }}</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
								    <div class="heading-area">
								
	                                <div class="action-list" >
	                                       <a  class="add-btn"  href="{{ route('admin-level-tree','level=1') }}">
	                                        {{ __("Level 1") }}
	                                        </a>
	                                        <a  class="add-btn"  href="{{ route('admin-level-tree','level=2') }}">
	                                        {{ __("Level 2") }}
	                                        </a>
	                                        <a  class="add-btn"  href="{{ route('admin-level-tree','level=3') }}">
	                                        {{ __("Level 3") }}
	                                        </a>
	                                         <a  class="add-btn" href="{{ route('admin-level-tree','level=4') }}">
	                                        {{ __("Level 4") }}
	                                        </a>
	                                         <a  class="add-btn"  href="{{ route('admin-level-tree','level=5') }}">
	                                        {{ __("Level 5") }}
	                                        </a>
	                                         <a  class="add-btn"  href="{{ route('admin-level-tree','level=6') }}">
	                                        {{ __("Level 6") }}
	                                        </a>
	                                         <a  class="add-btn"  href="{{ route('admin-level-tree','level=7') }}">
	                                        {{ __("Level 7") }}
	                                        </a>
	                                  
	                                  </div>
								</div>
									<div class="mr-table allproduct">
									
										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th>{{ __("Name") }}</th>
									                        <th>{{ __("Email") }}</th>
									                        <th>{{ __("Options") }}</th>
														</tr>
													</thead>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php if(!empty($_GET['level'])){ $level = $_GET['level']; }else{ $level = '1'; }  ?>
@endsection    

@section('scripts')

{{-- DATA TABLE --}}
    


    <script type="text/javascript">

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-level-views','level='.$level) }}',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
            			{ data: 'action', searchable: false, orderable: false }
                     ],
               language : {
                	processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                },
                drawCallback : function( settings ) {
                        $('.select').niceSelect();  
                }
            });
																
    </script>

{{-- DATA TABLE --}}
    
@endsection   