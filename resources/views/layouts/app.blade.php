	<!DOCTYPE html>
	<html lang="en">

	<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Dmarc - @yield('title')</title>
	  <meta content="" name="descriptison">
	  <meta content="" name="keywords">
	  <link href="/assets/assets/img/favicon.png" rel="icon">
	  <link href="/assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	  <link href="/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	  <link href="/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	  <link href="/assets/assets/css/style.css" rel="stylesheet">
	</head>
    <body>
		<!-- ======= Header ======= -->
		<header id="header">
		  <div class="container-fluid">
		    <div class="logo float-left">
		      <h1 class="text-light"><a href="/"><span>Dmarc</span></a></h1>
		    </div>
		    <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
		    <nav class="nav-menu">
		      <ul>
		        <li class="active"><a href="/">Home</a></li>
		        <li><a href="/xml-reader">Xml</a></li>
		      </ul>
		    </nav><!-- .nav-menu -->

		  </div>
		</header><!-- End #header -->
        <div class="">
            @yield('content')
        </div>
       
         <!-- ======= Footer ======= -->
        
         <!-- Vendor JS Files -->
         <script src="/assets/assets/vendor/jquery/jquery.min.js"></script>
         <script src="/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script src="/assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
         <!-- Template Main JS File -->
         <script src="/assets/assets/js/main.js"></script>
		
       </body>

       </html>
    </body>
</html>