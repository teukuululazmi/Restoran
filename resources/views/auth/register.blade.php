{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Restoran</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/login.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Registration form -->
				<form class="login-form" method="POST" action="{{ route('register') }}">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Create account</h5>
								<span class="d-block text-muted">All fields are required</span>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
								<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Your contacts</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" placeholder="Repeat email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Additions</span>
							</div>

							<div class="form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Send me <a href="#">test account settings</a>
									</label>
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Subscribe to monthly newsletter
									</label>
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" data-fouc>
										Accept <a href="#">terms of service</a>
									</label>
								</div>
							</div>

							<button type="submit" class="btn bg-teal-400 btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{ date('Y') }} <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
