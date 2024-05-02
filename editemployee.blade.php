<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dpit Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
      margin-bottom: 20px; /* Add margin below navbar */
    }

    .navbar-brand {
      font-size: 24px;
    }

    .navbar-btn {
      margin-top: 8px; /* Adjust margin top for button alignment */
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
    <h2>Welcome to DPIT Information System</h2>
    <p>This system allows you to manage employee records efficiently. You can add new employees, update their information, and view the existing employee details.</p>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="well registration-form">
        <h3>Edit Employee Details</h3>
        <form action="{{ route('edit.PostEmployee',$data->id) }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" class="form-control" id="department" name="department" value="{{$data->department}}" placeholder="Department">
          </div>
          <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" value="{{$data->position}}" placeholder="Position">
          </div>
          <div class="form-group">
            <label for="vendor">Vendor:</label>
            <input type="text" class="form-control" id="vendor" name="vendor" value="{{$data->vendor}}" placeholder="vendor">
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