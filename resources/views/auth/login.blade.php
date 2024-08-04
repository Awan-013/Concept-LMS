<!DOCTYPE html>
<html lang="en">

	<head><base href="../../../">
		<title>Concept LMS</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/book.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<a href="/" class="py-9 mb-5">
								<img alt="Logo" src="assets/media/logos/book.png" class="h-150px" />
							</a>
							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Selamat datang di Concept LMS</h1>
							<p class="fw-bold fs-2" style="color: #986923;">UAS Semester 1
							<br />Pemograman WEB 1</p>
						</div>
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<form class="form w-100" id="kt_sign_in_form" action="/postlogin" method="POST">
								{{ csrf_field() }}
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Sign In to Concept LMS</h1>
									<div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="/sign-up" class="link-primary fw-bolder">Create an Account</a></div>
								</div>
								<div class="card-body">
								@if (session('message'))
										<div class="alert alert-info">
											{{ session('message') }}
										</div>
								@endif			
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<div class="fv-row mb-10">
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
								</div>
								<div class="fv-row mb-10">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!-- <a href="../../demo1/dist/authentication/layouts/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
									</div>
									<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
								</div>
								<div class="text-center">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Continue</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>var hostUrl = "assets/";</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
	</body>
</html>