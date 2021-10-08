<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>UDEMA | Modern Educational site template - SHARED ON THEMELOCK.COM</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="/user/image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/user/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/user/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/user/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/user/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user/css/style.css" rel="stylesheet">
	<link href="/user/css/vendors.css" rel="stylesheet">
	<link href="/user/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/user/css/custom.css" rel="stylesheet">

</head>

<body id="register_bg">
	
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
			<form autocomplete="off" method="post" action="{{route('user.users.store')}}">
                @csrf
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text" name="name">
						<label class="input_label">
						<span class="input__label-content">Your Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text" name="ur last name">
						<label class="input_label">
						<span class="input__label-content">Your Last Name</span>
					</label>
                    </span>
                    <span class="input">
					<input class="input_field" type="text" name=" phone">
						<label class="input_label">
						<span class="input__label-content">Your phone</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email" name="email">
						<label class="input_label">
						<span class="input__label-content">Your Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1" name="password">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password2" name="password_confirmation">
						<label class="input_label">
						<span class="input__label-content">Confirm password</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<button type="submit">Register to Udema</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="/user/login.html">Sign In</a></strong></div>
			</form>
			<div class="copy">© 2017 Udema</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="/user/js/jquery-2.2.4.min.js"></script>
    <script src="/user/js/common_scripts.js"></script>
    <script src="/user/js/main.js"></script>
	<script src="/user/assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="/user/js/pw_strenght.js"></script>
  
</body>
</html>