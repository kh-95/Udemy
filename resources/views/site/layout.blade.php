<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>UDEMA | Modern Educational site template - 
		@yield('tittle')
	</title>

    @include('site.style')

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_2">
	@include('site.header')
	</header>
	<!-- /header -->
	
	<main>
		@yield('content')
	</main>
	<!-- /main -->

	<footer>
		@include('site.footer')
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
 @include('site.script')
	
</body>
</html>