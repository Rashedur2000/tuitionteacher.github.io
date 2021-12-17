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

    
        <div class="contact d-flex justify-content-between">
              <div class="form_one col-lg-5 table-bordered mt-5" style="margin-left: 135px;">
                <form>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="md-form amber-textarea active-amber-textarea-2">
                    <label for="form16">Your Text</label>
                    <textarea id="form16" class="md-textarea form-control" rows="3" placeholder="Enter Your Text"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-bottom:15px; margin-left: 245px;">Submit</button>
                </form>
              </div>


              <div class="form_one col-lg-5 table-bordered mt-5" style="margin-right: 85px;">
                  <table>
                    <a href="#"><img src="{{asset('admin/contact.png')}}" style="width: 100%; height: 351px;" alt=""></a>
                  </table>
              </div>


        </div>

      <div class="container">
          <div class="row">
              <div class="col-lg-4"></div>
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





