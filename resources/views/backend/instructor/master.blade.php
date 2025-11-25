
<!doctype html>
<html lang="en">

<head>
	@include('backend.section.link')
	
	<title>LMS Instructor Dashboard</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('backend.instructor.section.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('backend.instructor.section.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('content')
		</div>
		<!--end page wrapper -->
		
		@include('backend.section.footer')
	</div>
	<!--end wrapper-->


	
	@include('backend.section.script')
	
</body>

</html>