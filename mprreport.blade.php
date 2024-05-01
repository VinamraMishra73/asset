<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Monthly Progress Report</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .header {
    background-color: #007bff;
    color: #fff;
    padding: 10px 0;
    text-align: center;
  }

  .resizable-textarea {
    min-height: 150px; /* Set a minimum height */
    height: auto; /* Allow auto height */
  }
  .ck-editor__editable{
    height:200px;
  }

  .btn-container {
    text-align: right;
    margin-bottom: 10px;
  }

  .table-container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
  }

  /* Modal Style */
  .modal-content {
    border-radius: 10px;
  }

  .modal-header {
    background-color: #007bff;
    color: #fff;
    border-radius: 10px 10px 0 0;
  }

  .modal-title {
    font-size: 1.5rem;
    margin-bottom: 0;
  }

  .modal-body {
    padding: 20px;
  }

  .modal-footer {
    border-top: 1px solid #dee2e6;
    padding: 10px 20px;
  }

  /* Input and Textarea Style */
  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-weight: bold;
  }

  input[type="text"],
  input[type="int"],
  textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  input[type="text"]:focus,
  input[type="int"]:focus,
  textarea:focus {
    outline: none;
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

  /* Button Style */
  .btn {
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
  }

  .btn-secondary {
    background-color: #6c757d;
    color: #fff;
    border: none;
  }

  .btn-primary:hover,
  .btn-secondary:hover {
    opacity: 0.8;
  }
</style>
</head>
<body>

<header class="header">
  <h1>Monthly Progress Report</h1>
  <div class="btn-container">
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#previewModal">
      Add Report
    </button>
  </div>
</header>

<div class="container">
  <div class="table-container table-responsive">
   
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th>
          <th>Generate</th>
          <th>Download PDF</th>
        </tr>
      </thead>
      <tbody>
       
        <tr>
          <td></td>
          <td class="actions">
            <button class="btn btn-info btn-sm preview-btn" data-report-id="">Preview</button>
          </td>
          <td class="actions">
            <a href="example.pdf" class="btn btn-success btn-sm" download>Download</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Placeholder -->
<div id="previewModal" class="modal fade">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Monthly Progress Report</h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        
         
        <form id="reportForm" action="{{ route('savereport') }}" method="POST">
        @csrf
          <div class="form-group">
            <label for="empId">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" class="form-control" >
          </div>
          <div class="form-group">
            <label for="empName">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="vendorName">Vendor Name:</label>
            <input type="text" id="vendor_name" name="vendor_name" class="form-control">
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
            <label for="Totaleave">Total Leave:</label>
            <input type="text" id="total_leave" name="total_leave" class="form-control">
          </div>
          <div class="form-group">
            <label for="reportDetails">Report Details:</label>
            <textarea id="detail" name="detail" class="form-control resizable-textarea"></textarea>
          </div>
          
          
       
      </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" id="submitPreview" class="btn btn-primary">Generate MPR</button>
</div>
</form>
    </div>
  </div>
</div>

<footer class="footer">
  <p>&copy; 2024 Monthly Progress Report</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>

</body>
</html>


<!-- <script>
$(document).ready(function() {

  ClassicEditor
    .create(document.querySelector('#detail'))
    .then(editor => {
      console.log('CKEditor initialized successfully');
    })
    .catch(error => {
      console.error('Error initializing CKEditor:', error);
    });

  $(document).on('click', '.preview-btn', function() {
    const reportId = $(this).closest('tr').find('td:first-child').text();
    $('#employee_id').val(reportId);
    $('#previewModal').modal('show');
  });

  $(document).on('submit', '#reportForm', function(event) 
  {
    event.preventDefault();
alert(hi);
    const employee_id = $('#employee_id').val();
    const employee_name = $('#employee_name').val();
    const vendor_name = $('#vendor_name').val();
    const detail = CKEDITOR.instances.detail.getData();
    const month = $('#month').val();
    const total_leave = $('#total_leave').val();

    const formData = new FormData();
    formData.append('employee_id', employee_id);
    formData.append('employee_name', employee_name);
    formData.append('vendor_name', vendor_name);
    formData.append('detail', detail);
    formData.append('month', month);
    formData.append('total_leave', total_leave);

    $.ajax({
      url: '{{ route("savereport") }}',
      method: 'POST',
      data: formData,
      processData: false,  
      contentType: false,  
      success: function(response) {
          
          console.log(response);
          window.location.href = '{{ route("mprreport") }}';
      },
      error: function(xhr, status, error) {
          
          console.error(error);
      }
    });

    const doc = new jsPDF();
    doc.text('Monthly Progress Report', 10, 10);
    doc.text(`Employee ID: ${employee_id}`, 10, 20);
    doc.text(`Employee Name: ${employee_name}`, 10, 30);
    doc.text(`Vendor Name: ${vendor_name}`, 10, 40);
    doc.text(`detail: ${detail}`, 10, 50);
    doc.text(`Month: ${month}`, 10, 60);
    doc.text(`Total Leave: ${total_leave}`, 10, 70);
    doc.save('monthly_progress_report.pdf');

    const data = [
      ['Employee ID', 'Employee Name', 'Vendor Name', 'detail', 'Month', 'Total Leave'],
      [employee_id, employee_name, vendor_name, detail, month, total_leave] 
    ];
    const ws = XLSX.utils.aoa_to_sheet(data);
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, 'Monthly Progress Report');
    XLSX.writeFile(wb, 'monthly_progress_report.xlsx');

    $('#previewModal').modal('hide');
  });
  $('#submitPreview').click(function() {
    // Trigger the form submission when the button is clicked
    $('#reportForm').submit();
  });
});

</script> -->


