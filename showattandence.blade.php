<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendance Details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 20px;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Attendance Details for Employee </h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Emp Id</th>
                        <th>Emp Name</th>
                        <!-- <th>In Time</th>
                        <th>Out Time</th>
                        <th>Duration</th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach($attendanceDetails as $data)
    <tr>
        <td>{{ $data->emp_id }}</td>
        <td>{{ $data->name }}</td>
        <!-- <td>{{ $data->in_time }}</td>
        <td>{{ $data->duration }}</td> -->
    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
