













<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutor Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">

  
</head>
<body class="hold-transition sidebar-mini">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark pt-5 pb-5">
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a style="color: white;" class="nav-link" href="#">Tuition Teacher <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="#" style="padding-right:25px; color: #fff;">Private Tutor </a>
            <a href="#" style="padding-right:25px; color:#fff;">Online Courses </a>
            <a href="#" style="padding-right:95px; color:#fff;">Contact Us</a>
            <a href="#"> <img src="{{asset('admin/login.png')}}" style="width: 50%; height:50%;" alt=""></a>
          </form>
        </div> --}}
      </nav>


      <div class="landing d-flex justify-content-between">
          <div class="landone" style="margin-top: 155px; margin-left: 525px">
              <h1>Tuition <br> Teacher</h1>
          </div>
          <div class="landtwo d-flex justify-content-between" style="margin-top: 155px; margin-right: 425px">
              <div class="one">
                <a href="{{route('five')}}" style="margin-right: 55px"><img src="{{asset('admin/landone.png')}}" alt=""></a> <br> <h5 style="margin-top: 15px">Online Course</h5>
              </div>
              <div class="two">
                <a href="{{route('eight')}}"><img src="{{asset('admin/landtwo.png')}}" alt=""></a> <br> <h5 style="margin-top: 15px">Private Tutor</h5>
              </div>
          </div>
      </div>


<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>



</body>
</html>





