<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/style.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('template0/css/style_admin.css') }}"> -->
	<script src="https://kit.fontawesome.com/1ee61738a6.js" crossorigin="anonymous"></script>
	<script src="{{ asset('template0/js/functions.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/color-01.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template0/css/order-history.css') }}">
	

  

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <x-template0.mainheader/>

    <x-core.alert/>

    {{$slot}}

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/64cd09cacc26a871b02d459c/1h70esg8m';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

    <x-template0.mainfooter/>


	
	<script src="{{ asset('template0/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('template0/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('template0/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template0/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('template0/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('template0/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('template0/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('template0/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('template0/js/functions.js') }}"></script>
	<script src="https://kit.fontawesome.com/1ee61738a6.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></script>
	
	@if(session('status'))
	<script>
		swal("{{ session('status') }}");
	</script>

	@endif


</body>

</html>