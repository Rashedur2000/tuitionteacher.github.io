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

  



<div class="wrapper"></div>

    <div class="container">
        <div class="row">
            <div class="card card-primary col-lg-8" style="margin-left: 180px; margin-top: 5px;">
                <div class="card-header">
                    <h3 class="card-title">Tutor Registration</h3>
                </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Institution">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gender">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NID">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Medium">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Qualification">
                            </div>
                            <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Present Address">
                            </div>
                            <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>
                                <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" onclick="alert('We Will Contact You Later. Thanks!')">Submit</button>
                        </div>
                        </form>
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
