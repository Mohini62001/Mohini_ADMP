@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
								
							</div>
							@if(session()->has('success'))
												
									<i class="alert alert-success">{{session('success')}}</i>
												
								@endif
						</div>
						
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor ID</th>
													<th>Profile Img</th>
													<th>Specialist ID</th>
													<th>First Name</th>
													<th>Last Name</th>
												    <th>Doc status</th>
													<th>Edit</th>
													<th>Delete</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php
													foreach($doctor_arr as $data) 
													{
												?>
												<tr>
												<td><?php echo $data->id?></td>
												<td><img src="{{asset('upload/doctor/' . $data->profile_img)}}" height="50px" width="50px"/></td>
												<td><?php echo $data->specialist_id?></td>
												<td><?php echo $data->first_name?></td>
												<td><?php echo $data->last_name?></td>
												<td><?php echo $data->doctor_status ?></td>
												<td><a href="{{url('edit/'.$data->id)}}" class="btn btn-danger">Edit</a></td>
												<td><a href="{{url('admin-add-doctor/'. $data->id)}}" class="btn btn-primary">Delete</a></td>
												</tr>
												<?php
												}
												?>
												
											
													
													
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection