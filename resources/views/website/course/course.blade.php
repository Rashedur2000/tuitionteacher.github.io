<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Science Labs</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{asset('website')}}/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">


		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{asset('course')}}/style.css">
		
		

	</head>


	<body>

		
		<div class="navigation_with_image">
			<div class="one">
			  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					  <a style="color: white;" class="nav-link" href="{{route('one')}}">Tuition Teacher <span class="sr-only">(current)</span></a>
					</li>
				  </ul>
				  <form class="form-inline my-2 my-lg-0">
					<a href="{{route('eight')}}" style="padding-right:25px; color: #fff;">Private Tutor </a>
					<a href="{{route('five')}}" style="padding-right:25px; color:#fff;">Online Courses </a>
					<a href="{{route('nine')}}" style="padding-right:95px; color:#fff;">Contact Us</a>
					<a href="{{route('two')}}"> <img src="{{asset('admin/login.png')}}" style="width: 50%; height:50%;" alt=""></a>
					</form>
				</div>
			  </nav>
			</div>
			<div class="two">
			  <div class="one">
				<img src="{{asset('admin/banner.png')}}" style="height: 155px; width:100%;" class="img-fluid" alt="Responsive image">
			  </div>
			</div>
		  </div>
		
		<div class="fullwidth-block">
			<div class="container">
				<h2 class="section-title">Our Courses</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<img src="{{asset('course')}}/images/python.png" alt="" class="feature-image">
							<h2 class="feature-title">Python</h2>
							<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
							<a href="{{route('six')}}" class="button">Buy Now</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<img src="{{asset('course')}}/images/java.png" alt="" class="feature-image">
							<h2 class="feature-title">Java</h2>
							<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
							<a href="{{route('six')}}" class="button">Buy Now</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<img src="{{asset('course')}}/images/python.png" alt="" class="feature-image">
							<h2 class="feature-title">Php</h2>
							<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
							<a href="{{route('six')}}" class="button">Buy Now</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<img src="{{asset('course')}}/images/python.png" alt="" class="feature-image">
							<h2 class="feature-title">Ruby</h2>
							<p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero tempore.</p>
							<a href="{{route('six')}}" class="button">Buy Now</a>
						</div>
					</div>
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .fullwidth-block -->


		<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>

		<script src="{{asset('course')}}/js/jquery-1.11.1.min.js"></script>
		<script src="{{asset('course')}}/js/plugins.js"></script>
		<script src="{{asset('course')}}/js/app.js"></script>
		
	</body>

</html>