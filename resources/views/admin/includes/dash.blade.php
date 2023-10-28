@extends('admin.index',['menu'=> 1])
@section('title', 'Dashboard') 
@section('content') 

	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Home</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.blade.php"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">

								<!-- product profit start -->
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-red">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Entreprises</h6>
													<h3 class="m-b-0 text-white">
														@if(isset($data))
   															 <h3 class="m-b-0 text-white">{{ count($data) }}</h3>
														@else
															<p>Not data.</p>
														@endif
														
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-building"></i>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Étudiants</h6>
													<h3 class="m-b-0 text-white">
														@if(isset($stg))
															<h3 class="m-b-0 text-white">{{ count($stg) }}</h3>
														@else
															<p>Not data.</p>
														@endif
															
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-user-graduate"></i>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">S'inscrire</h6>
													<h3 class="m-b-0 text-white">
														@if(isset($loginaction))
															<h3 class="m-b-0 text-white">{{ count($loginaction) }}</h3>
														@else
															<p>Not data.</p>
														@endif
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-user-plus"></i>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-yellow">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Entretien</h6>
													<h3 class="m-b-0 text-white">
														@if(isset($Entretien))
															<h3 class="m-b-0 text-white">{{ count($Entretien) }}</h3>
														@else
															<p>Not data.</p>
														@endif
													</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-briefcase"></i>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- product profit end -->
								
								
								<!-- sessions-section start -->
								@include('admin/temp/TableStg')
							
							</div>

							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 