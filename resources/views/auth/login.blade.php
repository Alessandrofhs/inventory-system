
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>{{ $pagetitle?? __('Login Intro') }}</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('/vendors/images/logoonly.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('/vendors/images/logoonly.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('/vendors/images/logoonly.png') }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/vendors/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('/vendors/styles/icon-font.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('/vendors/styles/style.css') }}" />

	</head>
	<body class="login-page">
		<div class="login-header box-shadow" style="background-color: #394360;">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="{{ route('login') }}">
						<img src="{{ asset('/vendors/images/logointro.png') }}" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="{{ route('register') }}" style="color: #ffffff;">Register</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center">
						<img src="{{ asset('/vendors/images/logointro.png') }}" alt="" style="max-width: 100%; height: auto;">
					</div>					
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To Intro</h2>
							</div>
							<form action="{{ route('login-proses') }}" method="POST">
								@csrf
								<div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Username/Email"
										name="username"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
								@error('username')
										<small>{{ $message }}</small>
								@enderror
								<div class="input-group custom">
									<input
										type="password"
										class="form-control form-control-lg"
										placeholder="password"
										name="password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
								@error('password')
										<small>{{ $message }}</small>
								@enderror
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="forgot-password.html">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										</div>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"
										>
											OR
										</div>
										<div class="input-group mb-0">
											<a
												class="btn btn-outline-primary btn-lg btn-block"
												href="{{ route('register') }}"
												>Register To Create Account</a
											>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{ asset('/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/layout-settings.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		
		@if ($message = Session::get('failed'))
		<script>
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: '{{ $message }}'
			});
		</script>
		@endif

		@if ($message = Session::get('success'))
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Success!',
					text: '{{ $message }}'
				});
			</script>
		@endif
	</body>
</html>
