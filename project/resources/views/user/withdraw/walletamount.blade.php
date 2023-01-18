@extends('layouts.front')
@section('content')


<section class="user-dashbord">
    <div class="container">
      <div class="row">
        @include('includes.user-dashboard-sidebar')
        <div class="col-lg-8">
					<div class="user-profile-details">
						<div class="order-history">
							<div class="header-area">
								<h4 class="title" >
									Wallet History
								
								</h4>
							</div>
							<div class="mr-table allproduct mt-4">
									<div class="table-responsiv">
											<table id="example" class="table table-hover dt-responsive" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th>Pay Date</th>
														<th>Amount</th>
														<th>Level</th>
														<th>Status</th>
												
													</tr>
												</thead>
												<tbody>
                            @foreach($data as $withdraw)
                                <tr>
                                    <td>{{date('d-M-Y',strtotime($withdraw->pay_date))}}</td>
                                    <td>{{$withdraw->amount}}</td>
                                    <td>{{$withdraw->level}}</td>
                                    <td>
                                        @if($withdraw->pay_status  == 1)
                                           Paid 
                                        @else
                                           Pending 
                                        @endif
                                        </td>
                                </tr>
                            @endforeach
												</tbody>
											</table>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection