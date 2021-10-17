<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Mision TIC 2022"/>
    <!-- <meta name="keywords" content=""/>-->
    <meta name="author" content="Hernan Medina F"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/bootstrap.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/style.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/dark.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/swiper.css")}} type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href={{ asset("../css/business.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/fonts.css")}} type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href={{ asset("../css/font-icons.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/animate.css")}} type="text/css" />
	<link rel="stylesheet" href={{ asset("../css/magnific-popup.css")}} type="text/css" />

	{{-- <link rel="stylesheet" href={{ asset("../css/et-line.css")}} type="text/css" /> --}}

	<link rel="stylesheet" href={{ asset("../css/custom.css")}} type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href={{ asset("../css/colors.php?color=00BED7")}} type="text/css" />
    
    <!-- push styles -->
    @stack('styles')
	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}
		
		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error,
		.form-group textarea ~ label.error { display: none !important; }
		</style>

</head>
<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        @include('parts.navbar')

        <section>
            @yield('content')
        </section>

        @include('parts.footer')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('../js/jquery.js')}}"></script>
    <script src="{{ asset('../js/functions.js')}}"></script>
    <!-- push scripts -->
    @stack('scripts')
    <script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-features').owlCarousel({
				items: 1,
				margin: 60,
			    nav: true,
			    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
			    dots: false,
			    stagePadding: 30,
			    responsive:{
					768: { items: 2 },
					1200: { stagePadding: 200 }
				},
			});
		});
	</script>
</body>
</html>