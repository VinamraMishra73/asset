<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dpit Finance Employee Record Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Other meta tags and styles -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>

  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #80BCBD;
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }

    /* Header Styles */
    .navbar {
      border-radius: 0;
    }

    .navbar-brand {
      font-size: 24px;
    }

    .navbar-nav > li > a {
      font-size: 18px;
    }

    /* Main Content Styles */
    .main-content {
      padding: 20px;
    }

    .well {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Registration Form Styles */
    .registration-form {
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      font-weight: bold;
    }

    .btn-submit {
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    .btn-submit:hover {
      background-color: #555;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">DPIT Department</a> 
      <button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#addEmployeeModal">Add Employee</button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
        <li><a href="#">Menu 4</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container main-content">
  <div class="well">
    <h2>Welcome to Dpit Information Management System</h2>
    <p>This system allows you to manage employee records efficiently. You can add new employees, update their information, and view the existing employee details.</p>
  </div>
</div>

<div id="addEmployeeModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Employee</h4>
      </div>
      <div class="modal-body">
        <form id="employeeForm" action="{{ route('addemployeedetails.post') }}" method="post">
      @csrf
     
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" class="form-control" id="department" name="department" placeholder="Enter department" required>
          </div>
          <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" placeholder="Enter position" required>
          </div>
          <div class="form-group">
            <label for="aadhar">Aadhar No:</label>
            <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="Enter aadhar number" required maxlength="16">
          </div>
          <div class="form-group">        
              <label for="vendor">Vendor:</label>
              <select class="form-control" id="vendor" name="vendor"  required>
                <option value="vendor1">Vendor 1</option>
              </select>
          </div>
          
          <button type="submit" class="btn btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
