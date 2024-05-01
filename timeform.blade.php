<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dpit Information System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  header {
    background: linear-gradient(to right, #007bff, #0062cc);
    color: #fff;
    padding: 10px 0;
    text-align: center;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    border-bottom: 2px solid #0056b3;
  }

  .back-btn {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 6px 12px;
    background-color: #337ab7;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    font-size: 14px;
  }

  .main {
    margin-top: 60px;
    padding: 20px;
  }

  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
  }

  .attendance-form {
    margin-top: 20px;
  }
</style>
</head>
<body>
<header>
  <h1>DPIT Information System</h1>
  <a href="{{ url('timeattendance') }}" class="back-btn">&#8249; Back</a>
</header>

<div class="main">
  <div id="calendar"></div>

  <div class="attendance-form">
    <form id="attendanceForm" action= "{{ url('showattandence') }}" method="POST">
    @csrf
      <div class="form-group">
        <label for="emp_id">Employee ID:</label>
        <input type="text" class="form-control" id="emp_id" name="emp_id">
      </div>
      <div class="form-group">
        <label for="employeeName">Employee Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<footer>
  <p>Admin Login: {{ session('username') }}</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
