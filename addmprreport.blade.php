<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Monthly Progress Report</title>
 <link href="{{ ('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ ('css/style.css') }}" rel="stylesheet">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }
  
  .container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  h1 {
    text-align: center;
    margin-bottom: 30px;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Monthly Progress Report</h1>
  
  <form id="mprForm" action="{{ route('mprreport') }}" method="post">
      @csrf

      <div class="form-group">
  <label for="employee_id">Employee ID</label>
  <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Enter Employee ID" required>
</div>


   
    
    <div class="form-group">
      <label for="vendor">Vendor:</label>
      <select class="form-control" id="vendor" name="vendor" required>
      <option value="">Select Vendor</option>
        <option value="Nippon data">Nippon data</option>
        <option value="Amity Technologies">Amity Technologies</option>
        
      </select>
    </div>
    
    <div class="form-group">
      <label for="month">Month:</label>
      <select class="form-control" id="month" name="month" required>
        <option value="">Select Month</option>
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
    </div> 

    <div class="form-group">
      <label for="Year">Year:</label>
      <select class="form-control" id="year" name="year" required>
        <option value="">Select year</option>
        @php
        $startYear = 2017;
        $endYear = 2025;
        @endphp
        @for($year = $startYear; $year <= $endYear; $year++)
            <option value="{{ $year }}">{{ $year }}</option>
        @endfor
      </select>
    </div>

   


    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>

</body>
</html>
