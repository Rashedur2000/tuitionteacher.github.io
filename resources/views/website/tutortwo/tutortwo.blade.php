













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


      <div class="tutor_two">
          <div class="one">
            <img src="{{asset('admin/banner.png')}}" style="height: 155px; width:100%;" class="img-fluid" alt="Responsive image">
          </div>
          <div class="two">
            <table cellpadding="0" cellspacing="0" border="0" style="display: inline-block;;background: grey; width:850px; margin-left: 350px; margin-top: -51px;  border-radius:25px;">
                <tr>

                    <td>
                        <a href="#" ><img src="{{asset('admin/hire.png')}}" alt="" style="width:202px; height:350px; border-radius: 25px;"></a>
                    </td>
                    {{-- 1st Column ends --}}

                    <td>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Experience</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">6 months +</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Current Status</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Available</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Expected Taka(minimum)t</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">5000 taka</td>
                            </tr>
                           
                        </table>
                    </td>
                    {{-- 1st Column ends --}}
                    
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" >
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Days Per Week</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">3-4 days</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Tutoring Style</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Private</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Preferred Medium</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Category</td>
                            </tr>
                           
                        </table>
                    </td>
                    {{-- 3rd Column ends --}}
                    
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" >
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Preferred Class</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Class vi-x</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;"> Preferred Subjects</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Math, Higher Math</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Preferred Area</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 45px; padding-top: 15px; padding-right:25px; padding-bottom:15px;">Wari, Narinda, Shamibagh</td>
                            </tr>
                           
                        </table>
                    </td>
                    {{-- 4th Column ends --}}
                    
                   
                   

                </tr>
            </table>
        
            <a href="#" class="btn btn-primary" style="margin-left: 700px; margin-top: 25px;" onclick="alert('We Will Contact You Later. Thanks!')">Hire Now</a>
        
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





