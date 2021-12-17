













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


      <table cellpadding="0" cellspacing="0" border="0" style="background: grey; width:850px; margin-left: 350px; margin-top:100px; border-radius:25px;">
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Course Duration</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">20 Hourse +</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Difficulty</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Beginners</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Total Enrollment</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">783 Student +</td>
                    </tr>
                   
                </table>
            </td>
            {{-- 1st Column ends --}}
            <td>
                <table cellpadding="0" cellspacing="0" border="0" >
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Language</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Bangla</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Category</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Programming</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Instructor Name</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Rashedur Rahman</td>
                    </tr>
                   
                </table>
            </td>
            {{-- 2nd Column ends --}}
            <td>
                <a href="#" ><img src="{{asset('admin/hridoy.png')}}" alt="" style="width:90%; height:300px; border-radius: 25px;"></a>
            </td>
            {{-- 3rd Column ends --}}
        </tr>
    </table>

    <a href="#" class="btn btn-primary" style="margin-left: 700px; margin-top: 25px;" onclick="alert('We Will Contact You Later. Thanks!')">Enroll Now</a>



        

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>



</body>
</html>





