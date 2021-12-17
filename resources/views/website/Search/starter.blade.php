<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
        <!-- Place favicon.ico in the root directory -->
       

        

</head>
<body class="hold-transition sidebar-mini">


      


<div class="wrapper">
 
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Search Teacher</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      @csrf
      <div class="card-body">
        <div class="form-check">          
          <label for="cars">Choose District:</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Dsitrict</option>
            <option value="saab">Dhaka</option>
            <option value="opel">KHulna</option>
            <option value="audi">Chittagong</option>
          </select>
        </div>
        <div class="form-check">          
          <label for="cars">Choose Area:</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Area</option>
            <option value="saab">Wari</option>
            <option value="opel">Dhanmondi</option>
            <option value="audi">GUlshan</option>
            <option value="audi">Uttara</option>
            <option value="audi">Mirpur</option>
          </select>
        </div>
        <div class="form-check">          
          <label for="cars">Choose Medium:</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Medium</option>
            <option value="saab">Bangla</option>
            <option value="opel">English</option>
            <option value="audi">Spenish</option>
            <option value="audi">Arbi</option>
          </select>
        </div>
        <div class="form-check">          
          <label for="cars">Choose Class:</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Class</option>
            <option value="saab">Class 10</option>
            <option value="saab">Class 9</option>
            <option value="saab">Class 11</option>
            <option value="saab">Class 12</option>
          </select>
        </div>
        <div class="form-check">          
          <label for="cars">Choose Subject:</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Subjects</option>
            <option value="saab">Bangla</option>
            <option value="saab">English</option>
            <option value="saab">ICT</option>
            <option value="saab">Math</option>
            <option value="saab">Physics</option>
            <option value="saab">Chemistry</option>
          </select>
        </div>
        <div class="form-check">          
          <label for="cars">Choose Gender</label>
          <select id="cars" name="carlist" form="carform">
            <option value="volvo">Gender</option>
            <option value="saab">Male</option>
            <option value="saab">Female</option>
          </select>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary" onclick="alert('We Will Contact You Later. Thanks!')">Submit</button>
      </div>
    </form>
  </div>

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>

       
</body>
</html>
