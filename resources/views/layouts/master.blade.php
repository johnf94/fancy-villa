<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>@yield('tittle')</title>
	<meta name="keywords" content='@yield('pageKeywords')' />
	<meta name="description" content='@yield('pageDescription')' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
    	Roller Template
		http://www.templatemo.com/preview/templatemo_424_roller
    -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">	
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- FontAwesome Icons -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	@section('cssImport')
		
	@show
</head>
<body>
	<div id="responsive-menu">
        <ul class="menu-holder">
            <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#about"><i class="fa fa-cogs"></i>About</a></li>
            <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
            <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
            <li><a href="#blog"><i class="fa fa-comment"></i>blog</a></li>
            <li><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
        </ul>
    </div>
	<div class="templatemo-header tm-orange-bg-transparent">
		<div class="templatemo-header-inner">					
			<div class="container">
				<h1 class="templatemo-logo text-uppercase pull-left">Fancy Villa <img src="assets/logo.png" alt="logo Fancy Villa"></h1>
				<nav class="hidden-xs templatemo-nav pull-right text-uppercase">
					<ul class="menu-holder">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#services">Services</a></li>
						
						<li><a href="#blog">blog</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
				<div class="text-right visible-xs">
                    <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
                </div>			
			</div>
		</div> <!-- templatemo-header-inner -->
	</div> <!-- templatemo-header -->
	<section class="tm-dark-bg tm-section" id="home">
		<div class="container">
			<div class="row">
			@section('main-content')
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="images/templatemo-banner.png" alt="Banner" class="img-responsive center-block">				
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-home-right">
						<h1 class="tm-home-title text-uppercase">Lorem ipsum dolor</h1>
						<h2 class="tm-home-subtitle tm-orange-text text-uppercase">consec stur adipiscing elit</h2>
						<div class="tm-home-description">
							<p>Roller HTML5 Template is free responsive layout by <span class="blue">template</span><span class="green">mo</span>. You can download, modify and apply this layout for any of your website. Credits go to <a rel="nofollow" href="http://www.smashingmagazine.com/2012/11/20/art-professions-icons-png/">Art Professions</a> Icon and <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images.</p>
							<p>Rvel blandit mi condimentum. Aenean finibus eros orci, eget fini noemer stbus .raesent sagittis velit eget dui accumsan pharetra.</p>
						</div>					
						<a href="#" class="tm-home-more tm-dark-text tm-orange-bg">View More</a>
					</div>				
				</div>
			@show
			</div>			
		</div>		
	</section>
	@section('home-content')
		
	@show

	<!-- testimonials -->
	
	<footer class="text-right tm-dark-bg">		
		<p class="text-uppercase container small">Copyright &copy; 2084 <a href="#">Company Name</a></p>
	</footer>
	<script src="js/jquery-1.11.1.min.js"></script> 
    <script src="js/templatemo_script.js"></script>
	@section('javaScritImport')
		
	@endsection
</body>
</html>