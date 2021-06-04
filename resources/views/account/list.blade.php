@extends('Layout.default')

@section('page_content')
       <!-- start Payment Details -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head" style="display: flex;justify-content: space-between;">
                                    <header>Danh sách tài khoản</header>
									<a href="{{route('account_manager.create') }}" class="btn btn-primary">Thêm tài khoản</a>
									
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>No</th>
														<th>Name</th>
														<th>Check In</th>
														<th>Check Out</th>
														<th>Edit</th>
													</tr>
												</thead>
												@php
													$i = 1;
												@endphp
												<tbody>
													@foreach ($users as  $user)
													<tr>
														<td>{{$i++}}</td>
														<td>{{$user['name']}}</td>
														<td>{{$user['email']}}</td>
														<td>{{$user['password']}}</td>
														<td>
															<a href="{{route('account_manager.edit',$user->id)}}" class="btn btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="{{route('account_manager.delete',$user->id)}}" class="btn btn-tbl-delete btn-xs">
																<i class="fa fa-trash-o "></i>
															</a>
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
        <!-- end Payment Details -->
@endsection
