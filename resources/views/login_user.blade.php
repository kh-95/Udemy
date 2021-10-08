
@extend('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    @include('site.style')
</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="/user/index.html"><img src="/user/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form method="POST" action ="{{route('site.content')}}">
                  @csrf
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field @error('email') is-invalid @enderror" type="email" required autocomplete="email" name="email">
						<label class="input_label">
						<span class="input__label-content">Your email</span>
                    </label>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
                    </label>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</span>
					<small><a href="#0">Forgot password?</a></small>
				</div>
			<button type="submit" class=>"btn_1 rounded full-width add_top_60">Login to Udema</button>
				<div class="text-center add_top_10">New to Udema? <strong><a href="register.html">Sign up!</a></strong></div>
			</form>
			<div class="copy">© 2017 Udema</div>
		</aside>
	</div>
	<!-- /login -->
		
	@include('site.script')
</body>
</html>
