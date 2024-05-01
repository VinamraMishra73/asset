<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dpit Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #000;
    }

   
    .navbar {
      background-color: #333;
      color: #fff;
      border-radius: 0;
      margin-bottom: 0;
      height: 120px; 
    }

    .navbar-brand {
      font-size: 24px;
      padding: 20px;
      height: 100%;
    }

    .navbar-brand img {
      max-height: 100%; 
      max-width: 100%; 
    }

    .navbar-nav > li > a {
      color: #fff;
      font-size: 18px;
      padding: 15px 20px;
    }

    .navbar-nav > li > a:hover,
    .navbar-nav > li > a:focus {
      background-color: #555;
    }

   
    .sidenav {
      background-color: #fff;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .sidenav h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .sidenav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidenav ul li {
      margin-bottom: 10px;
    }

    .sidenav ul li a {
      color: #333;
      font-size: 18px;
    }

    .sidenav ul li a:hover {
      color: #555;
    }

   
    .main-content {
      padding: 20px;
    }

    .dashboard-item {
      text-align: center;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease; 
    }

    .dashboard-item h4 {
      margin-top: 0;
      font-size: 20px;
    }

    
    .box-blue {
      background: linear-gradient(to right, #3498db, #5eaefc);
      color: #fff;
    }

    .box-green {
      background: linear-gradient(to right, #2ecc71, #49dd8e);
      color: #fff;
    }

    .box-orange {
      background: linear-gradient(to right, #e67e22, #f1a94e);
      color: #fff;
    }

    .box-purple {
      background: linear-gradient(to right, #9b59b6, #bc70cf);
      color: #fff;
    }

    .box-red {
      background: linear-gradient(to right, #e74c3c, #f68670);
      color: #fff;
    }

    
    .dashboard-item:hover {
      transform: translateY(-5px); 
    }

    
    footer {
      background-color: #333;
      color: #fff;
      text-align: left;
      padding: 20px 0;
    }

    footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    display: flex;
    justify-content: center;
}
    footer p {
      margin: 0;
    }
    .left-logo {
            position: absolute;
            top: 8px;
            left: 5px;
            bottom: 10px;
    }
    .right-logo {
            position: absolute;
            top: 5px;
            right: 10px;
           
        }
        .right1-logo {
            position: absolute;
            top: 6px;
            right: 60px;
           
        }
        .custom-header {
      background-color: #80BCBD;
      color: black;
      text-align: center;
      padding-top: 20px;
      padding-bottom: 20px;
      border-bottom: 4px solid black;
    }
    
  </style>
</head>
<body>
<div class="custom-header">
  <h1><b>Dpit Information Management System<b></h1>
</div>
<div class="left-logo">
    <img src="resources/images/production.png" alt="White Logo" width="350" class="left-logo"> 
    </div>

    <div class="right-logo">
    <img src="resources/images/mod.png" alt="White Logo" width="80" class="right-logo"> 
    </div>
    <div class="right1-logo">
    <img src="resources/images/mod1.png" alt="White Logo" width="210" class="right1-logo"> 
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 sidenav">
      <h2 class="fas fa-home"> HOME </h2>
     
      <ul class="nav nav-pills nav-stacked">
        
        <li><a class="fas fa-tachometer-alt" href="{{ route('dashboard') }}"> Dashboard</a></li>
        <li><a class="fas fa-user" href="{{ route('employeedetails') }}"> Employee Details</a></li>
        <li><a class="fas fa-folder-open" href="{{ route('projects') }}"> Projects</a></li>
        <li><a class="fas fa-users" href="{{ route('teams') }}"> Teams</a></li>
        <!-- <li><a class="far fa-clock" href="{{ route('timeattendance') }}"> <b>Time & Attendance</b></a></li>
        <li><a class="fas fa-money-bill" href="{{ route('expenditure') }}"> Expenditure</a></li> -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

      
        <li><a href="#"class="fas fa-sign-out-alt"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      </ul>
    </div>

    <div class="col-sm-9 main-content">
      <div class="row">
        <div class="col-sm-4">
          <a href="{{ route('projects') }}">
            <div class="dashboard-item box-blue">
              <h4> Projects</h4>
              <p>20</p>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="{{ route('employeedetails') }}">
            <div class="dashboard-item box-green">
              <h4>Employees</h4>
              <p>50</p>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="{{ route('teams') }}">
            <div class="dashboard-item box-orange">
              <h4> Teams</h4>
              <p>7</p>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <a href="#">
            <div class="dashboard-item box-purple">
              <h4>Value of Projects</h4>
              <p>INR</p>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="#">
            <div class="dashboard-item box-red">
              <h4>Report</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p style="text-align: left;">
          Admin Login: {{ session('username') }} 
          
        </p>
      </div>
    </div>
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  $('#logoutBtn').on('click',function(){

  });
</script>
</body>
</html>
