
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
		<style>
			/* Tambahkan gaya umum untuk body */
body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f4;
}

/* Tambahkan gaya untuk header */
.login-header {
    padding: 15px;
    color: white;
}

/* Tambahkan gaya untuk container registrasi */
.register-page-wrap {
    min-height: 100vh;
}

.container {
    max-width: 1200px;
}

/* Tambahkan gaya untuk kotak registrasi */
.register-box {
    padding: 30px;
}

/* Tambahkan gaya untuk tombol register */
.btn-primary {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

/* Tambahkan gaya untuk input form */
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Tambahkan gaya untuk pesan kesalahan */
small {
    color: red;
}

/* Gaya untuk gambar */
img {
    max-width: 100%;
    height: auto;
}

/* Gaya untuk tombol welcome-modal */
.welcome-modal-btn {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    position: fixed;
    bottom: 20px;
    right: 20px;
}

		</style>

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
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
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
						<li><a href="{{ route('login') }}" style="color: white">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
						<img src="{{ asset('/vendors/images/logointro.png') }}" alt="" style="max-width: 100%; height: auto;"/>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form action="{{ route('register-proses') }}" method="POST">
									@csrf
									<div class="form-wrap max-width-600 mx-auto">
										<h5 class="text-center mb-4">Create Your Account</h5>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Full Name</label>
											<div class="col-sm-8">
												<input type="text" name="fullname" class="form-control form-c" value="{{ old('fullname') }}" />
											</div>
											@error('fullname')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email*</label>
											<div class="col-sm-8">
												<input type="email" name="email" class="form-control" value="{{ old('email') }}" />
											</div>
											@error('email')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-8">
												<input type="text" name="username" class="form-control" value="{{ old('username') }}" />
											</div>
											@error('username')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Role</label>
											<div class="col-sm-8">
												<select name="role" class="form-control">
													<option selected disabled>Choose...</option>
													<option value="admin">Admin</option>
													<option value="lecturer">Lecturer</option>
													<option value="student">Student</option>
												</select>
											</div>
											@error('role')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">
												<div class="form-check">
													<input type="radio" name="gender" value="male" id="male" class="form-check-input">
													<label for="male" class="form-check-label">Male</label>
												</div>
												<div class="form-check">
													<input type="radio" name="gender" value="female" id="female" class="form-check-input">
													<label for="female" class="form-check-label">Female</label>
												</div>
											</div>
											@error('gender')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8 d-flex justify-content-start">
												<input type="password" name="password" class="form-control" value="{{ old('password') }}" />
											</div>
											@error('password')
													<small>{{ $message }}</small>
											@enderror
										</div>
								
										<div class="form-group row">
											<div class="col-sm-8 offset-sm-4">
												<button type="submit" class="btn btn-primary">Register</button>
											</div>
										</div>
									</div>
								</form>																
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{ asset('/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
		<script src="{{ asset('/vendors/scripts/steps-setting.js') }}"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
