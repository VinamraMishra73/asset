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

  .attendance-btn {
    position: fixed;
    top: 20px;
    right: 20px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
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
    margin-top: 20px;
    padding: 5px;
  }

  .btn-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  .table {
    margin-bottom: 20px; /* Add some space below the table */
  }

  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 999; /* Ensure footer stays on top */
  }

  /* New styles for the form container, file input, and upload button */
  .form-container {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 50px; /* Adjusted margin to keep the form below the table */
  }

  .form-group input[type="file"] {
    margin-bottom: 10px;
  }

  .form-group .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .form-group .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }
</style>
</head>
<body>
<header>
  <h1>DPIT Information System</h1>
  <a href="{{ url('admin/dashboard') }}" class="back-btn">&#8249; Back</a>
  <div class="main">
  <button id="attendanceBtn" class="btn btn-primary attendance-btn">Attendance</button>
</div>
</header>

<div class="main">
  <div class="btn-container">
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="chooseMonthBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choose Month
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="chooseMonthBtn">
      
        <li><a class="dropdown-item" data-month="1" href="#">1-January</a></li>
        <li><a class="dropdown-item" data-month="2" href="#">2-February</a></li>
        <li><a class="dropdown-item" data-month="3" href="#">3-March</a></li>
        <li><a class="dropdown-item" data-month="4" href="#">4-April</a></li>
        <li><a class="dropdown-item" data-month="5" href="#">5-May</a></li>
        <li><a class="dropdown-item" data-month="6" href="#">6-June</a></li>
        <li><a class="dropdown-item" data-month="7" href="#">7-July</a></li>
        <li><a class="dropdown-item" data-month="8" href="#">8-August</a></li>
        <li><a class="dropdown-item" data-month="9" href="#">9-September</a></li>
        <li><a class="dropdown-item" data-month="10" href="#">10-October</a></li>
        <li><a class="dropdown-item" data-month="11" href="#">11-November</a></li>
        <li><a class="dropdown-item" data-month="12" href="#">12-December</a></li>
      </ul>
    </div> 
    <!-- <a href="{{ url('timeform') }}" button id="addBtn" class="btn btn-primary">Add</button></a> -->
    <!-- <button id="addBtn" class="btn btn-primary">Upload Excel</button> -->
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sl.no</th>
        <th>Attendance Id</th>
        <th>Employee Name</th>
        <th>Employee Designation</th>
        <th>In Time</th>
        <th>Out Time</th>
        <th>Duration</th>
        <th>Short Time</th> 
      </tr>
    </thead>
    <tbody>
   @foreach($data as $row)
   <tr>
   <td>{{ $row->id}}</td>
   <td>{{ $row->emp_id}}</td>
   <td>{{ $row->name}}</td>
   <td>{{ $row->employee_designation}}</td>
   <td>{{ $row->in_time}}</td>
   <td>{{ $row->out_time}}</td>
   <td>{{ $row->duration}}</td>
     <td>{{ $row->short_time}}</td>
   
</tr>
   @endforeach
   <tr id="noDetailsRow" style="display: none;">
        <td colspan="8">No details found</td>
      </tr>
    </tbody>
  </table>
</div>
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="form-container">
  @csrf
  <div class="form-group">
    <label for="excelFile">Choose Excel File (CSV):</label>
    <input type="file" name="file" class="form-control" accept=".csv">
  </div>
  <button type="submit" class="btn btn-primary">Upload Excel</button>
</form>

<div id="monthData">
  <!-- Data for selected month will be loaded here -->
</div>

<footer>
  <p>Admin Login: {{ session('username') }}</p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
<script>
  $(document).ready(function() {
    $('#attendanceBtn').click(function() {
      window.location.href = '{{ route('timeform') }}';
    });
  });
</script>
<script>
$(document).ready(function() {
  $('.dropdown-item').click(function(e) {
    e.preventDefault(); // Prevent default link behavior
    var selectedMonth = $(this).data('month'); // Get the selected month value
    // Send an AJAX request to fetch data for the selected month
    $.ajax({
      url: '{{ route('get.month.data') }}', // Update this route to your actual Laravel route
      method: 'GET',
      data: { month: selectedMonth }, // Pass the selected month as data
      success: function(response) {
        $('#monthData').html(response); // Display the fetched data in the #monthData container
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText); // Log any errors to the console
      }
    });
  });
});
</script> 

</body>
</html>