<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dpit Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet">
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #80BCBD;
      background-image: linear-gradient(120deg, #80BCBD, #d9eaff);
    }

    
    .navbar {
      background-color: #333;
      color: #fff;
      border-radius: 0;
      margin-bottom: 0;
    }

    .navbar-brand {
      font-size: 24px;
      padding: 15px 20px;
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

    /* Sidebar Styles */
    .sidenav {
  background-color: #828282;
  color: #333; 
  height: 100vh; 
  width: 250px; 
  position: fixed;
  top: 0; 
  left: 0;
  overflow-x: hidden; 
  padding-top: 20px;
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
  display: block; 
  padding: 10px 15px; 
  text-decoration: none;
}

.sidenav ul li a:hover {
  background-color: #f2f2f2; 
}


.main-content {
  margin-left: 250px;
  padding: 20px;
}


@media screen and (max-width: 768px) {
  .sidenav {
    width: 100%; 
    height: auto; 
    position: relative; 
    padding-top: 20px; 
  }

  .main-content {
    margin-left: 0; 
  }
}

    .main-content .well {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      margin-bottom: 20px;
    }

    .main-content .well h4 {
      font-size: 24px;
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .main-content .well p {
      font-size: 18px;
      margin-bottom: 0;
    }

    .main-content .row {
      margin-bottom: 20px;
    }

    
    .employee-details .panel-heading {
      background-color: #337ab7;
      color: #fff;
      border: none;
    }

    .employee-details .panel-body {
      padding: 20px;
    }

    .employee-details table {
      width: 100%;
      border-collapse: collapse;
    }

    .employee-details th, .employee-details td {
      padding: 8px;
      border: 1px solid #ddd;
    }

    .employee-details th {
      background-color: #f2f2f2;
      font-weight: bold;
      text-align: left;
    }

    .employee-details td {
      text-align: left;
    }
    .edit-btn, .delete-btn {
      padding: 5px 10px;
      border: none;
      color: white;
      cursor: pointer;
    }

    .edit-btn {
      background-color: #4CAF50; /* Green */
    }

    .delete-btn {
      background-color: #f44336; /* Red */
    }

    /* Heading Box Styles */
    .heading-box {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      cursor: pointer; /* Add cursor pointer */
    }

    .heading-box h4 {
      color: #fff;
      text-align: center;
      margin: 0;
      text-transform: uppercase;
      font-size: 24px;
    }

    /* Footer Styles */
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
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
      margin-left: 10px;
    }

    .back-btn:hover {
      background-color: #286090;
    }

    footer p {
      margin: 0;
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
      
      <form action="{{ route('employeedetails') }}" method="post">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href=""></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 sidenav">
            <h2>DPIT Department</h2>
            <!-- <a href="{{ url('dashboard') }}" class="back-btn">&#8249; Back</a> -->
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="{{ Request::is('personal-details*') ? 'active' : '' }}">
                    <a href="">Personal Details</a>
                </li>
                <li class="{{ Request::is('project-information*') ? 'active' : '' }}">
                    <a href= " {{ route('projects') }} "> Project Information </a>
                </li>
                <li class="dropdown">
                    <div id="calendar" style="display: none;"></div>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Leaves <span class="caret"></span></a>
    <ul class="dropdown-menu">
      
        <li><a href="#" id="applyLeaveBtn">Apply Leave</a></li> 
        <li><a href="#">Total Leaves</a></li>
    </ul>
</li>

            </ul><br>
        </div>
      
        
    </div>
</div>


    <div class="col-sm-9 main-content">
      <div class="row">
        <div class="col-md-3">
          <div class="well heading-box" style="background-color: rgba(255, 0, 0, 0.5);" onclick="showEmployees('Officers')">
            <h4>Officers</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="well heading-box" style="background-color: rgba(0, 255, 0, 0.5);" onclick="showEmployees('Managers')">
            <h4>Managers</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="well heading-box" style="background-color: rgba(0, 0, 255, 0.5);" onclick="showEmployees('Employees')">
            <h4>Employees</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="well heading-box" style="background-color: rgba(255, 255, 0, 0.5);" onclick="showEmployees('Interns')">
            <h4>Interns</h4>
          </div>
        </div>
      </div>

      <div class="well employee-details" id="employeeDetails">
        <div class="panel panel-default">
          <div class="panel-heading">Employee Details</div>
          <div class="panel-heading"><a href="{{ route('addemployeedetails.get') }}" style="color: black; font-weight: bold;">Add Employee</a></div>
          <div class="panel-body">
            <table>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Vendor</th>
                 <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
   
              <tbody id="employeeTableBody">


                @foreach($data as $val)
 
                <tr>
                  <td> {{ $loop->iteration }} </td> 
                  <td> <input type="text" value="{{ $val->name ??'' }}"> </td>
                  <td> <input type="text" value="{{ $val->email ??'' }}"> </td>
                  <td> <input type="text" value="{{ $val->department ??'' }}"> </td>
                  <td> <input type="text" value="{{ $val->position ??'' }}"></td>
                  <td> <input type="text" value="{{ $val->vendor ??'' }}"></td>
                  <td> <a class="edit-btn" href="{{route('edit.getEmployee',$val->id)}}">Edit</a> </td>
                  <td> <a class="delete-btn" data-employee-id="{{ $val->id }}">Delete</a> </td>
                </tr>

                @endforeach

               
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Edit Modal -->
      <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Employee Details</h4>
            </div>
            <div class="modal-body">
              <!-- Edit form goes here -->
              <p>Edit employee details here</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Modal -->
      <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete Employee</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this employee?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>

      <footer style="background-color: #333; color: #fff; text-align: center; padding: 20px 0;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p style="margin: 0;">
          Admin Login:<a href="#"> {{ session('username') }} </a> 
          Settings: <a href="#">Change Password</a>
        </p>
      </div>
    </div>
  </div>
</footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

   
       <script>
  function showEmployees(category) {
    var tableRows = document.querySelectorAll("#employeeTableBody tr");

    
    tableRows.forEach(function(row) {
      row.style.display = "none";
    });

    
    if (category === "Officers") {
      for (var i = 0; i < 2; i++) {
        tableRows[i].style.display = "table-row";
      }
    } else if (category === "Managers") {
      for (var i = 2; i < 9; i++) {
        tableRows[i].style.display = "table-row";
      }
    } else if (category === "Employees") {
      for (var i = 9; i < 46; i++) {
        tableRows[i].style.display = "table-row";
      }
    } else if (category === "Interns") {
      for (var i = 24; i < 28; i++) {
        tableRows[i].style.display = "table-row";
      }
    }
  }



  $('.delete-btn').on('click',function(e){
    e.preventDefault();

    let employeeId = $(this).data('employee-id');

    console.log(employeeId);

    let deleteUrl = "{{ route('deleteEmployee', ':id') }}".replace(':id', employeeId);

    $.ajax({

      url: deleteUrl,
      type:'POST',
      data: {
        _token: '{{ csrf_token() }}',
      },

      success: function(response) {
        location.reload();
      },
      error: function(error) {
        alert('Error');
      }
    });
  });

</script>
<script>
    $(document).ready(function() {
        $('#applyLeaveBtn').click(function(e) {
            e.preventDefault(); // Prevent default link behavior
            $('#calendar').toggle(); // Toggle calendar visibility
            // Initialize FullCalendar if not already initialized
            if ($('#calendar').is(':visible')) {
                $('#calendar').fullCalendar({
                    // FullCalendar options
                    // You can customize options like events, header, etc. here
                });
            }
        });
    });
</script>
</body>
</html>
     