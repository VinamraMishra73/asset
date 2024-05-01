<?php

namespace App\Http\Controllers;

use App\Models\employeedetail;
use App\Models\Project;
use App\Models\teams;
use App\Models\expenditure;
use App\Models\mprreport;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use DateTime;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Timeattendance;
// use Illuminate\Contracts\Session\Session;



class DashboardController extends Controller
{
    public function dashboard()
    {
        return view("erms.dashboard");
    }
    public function admindashboard()
    {
        return view("erms.admindashboard");
    }
    
    public function  employeedetails(Request $request)
    {
        $data = DB::table('employeedetails')->get();

        

        return view("erms.dashboard.employeedetails",['data'=>$data]);
    }

    public function addemployeedetailsGet(){
        return view('erms.dashboard.addemployeedetails');
    }

    public function addemployeedetailsPost(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employeedetails,email',
            'department' => 'required',
            'position'=> 'required',
       
        ]);

       
        $employeedetails = new Employeedetail();
        $employeedetails->name = $request->name;
        $employeedetails->email = $request->email;
        $employeedetails->department = $request->department;
        $employeedetails->position = $request->position;
        $employeedetails->vendor = $request->vendor;
        $employeedetails->identity_id = $request->aadhar;

        
        $employeedetails->save();
        $data = DB::table('employeedetails')->get();
        
        return redirect()->route('employeedetails')->with('success', 'Employee details added successfully.');
    }

    public function editGetEmployee(Request $request,$id){
        // dd($id,$request);
        $data = Employeedetail::find($id);

        // dd($data);

        // return(response()->json()));

        return  view('erms.dashboard.editemployee',compact('data'));

    }

    public function editPostEmployee(Request $request,$id){
        // dd($id,$request);
        $data = Employeedetail::find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->department= $request->department;
        $data->position= $request->position;
        $data->vendor= $request->vendor;
        $data->save();


        return redirect()->route('employeedetails')->with('success','Data Updated Successfully');

    //  return redirect()->route('editemployee.post',$id)->with(['success'=>'Data Updated Successfully']);

    }

    public function deleteEmployee(Request $request,$id){
        //dd($id);
        $data = Employeedetail::find($id);

        // dd($data);


        if($data){
            $data->delete($id);

            return redirect()->route('employeedetails')->with(['success'=>'Data Deleted Successfully']);
        }else{
            return redirect()->route('employeedetails')->with(['success'=>'Something went wrong']);
        }
    }
    
    


    public function  projects(Request $request)
    {
        $data = DB::table('projects')->get();


        return view("erms.dashboard.projects",['data'=>$data]);
    }
 
    public function  projectform(Request $request)
    {
        return view("erms.dashboard.addproject");
    }



    public function addproject(Request $request)
    {
   
        
        
        $project = new Project();
        
        $project->project_id = $request->project_id;
        $project->project_name = $request->project_name;
        $project->employee_name = $request->employee_name;
        $project->budget = $request->budget;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->purpose = $request->purpose;
        $project->procedure = $request->procedure;
        $project->maintenance = $request->maintenance;
        $project->upload_doc = $request->upload_doc;



       



         $project->save();
        
        
        return redirect()->route('projects')->with(['success'=> 'Project added successfully.',]);
    }

    public function editGet(Request $request,$id){
        
        $data = Project::find($id);

        return  view('erms.dashboard.editprojects',compact('data'));

    }

    public function editPost(Request $request,$id){
        
        $data = Project::find($id);
        $data->project_id= $request->project_id;
        $data->project_name= $request->project_name;
        $data->employee_name= $request->employee_name;
        $data->budget= $request->budget;
        







        $data->save();


     return redirect()->route('edit.post',$id)->with(['success'=>'Data Updated Successfully']);

    }

    public function deleteGet(Request $request,$id){
        //dd($id);
        $data = Project::find($id);
        if($data){
            $data->delete($id);
            return redirect()->route('projects')->with(['success'=>'Data Deleted Successfully']);
        }else{
            return redirect()->route('projects')->with(['success'=>'Something went wrong']);
        }
    }

    
    public function  teams(Request $request)
    {
        $data = DB::table('teams')->get(); 
    
        return view("erms.dashboard.teams",['data'=>$data]);
    }
    public function  addteams(Request $request)
    {
        return view("erms.dashboard.addteams");
    }
    public function createteams(Request $request)
{
   
   
    $team = new teams();
    
    $team->project_id = $request->project_id;
    $team->project_name = $request->project_name;
    $team->employee_name = $request->employee_name;
   
    $team->save();
    

    
    return redirect()->route('teams')->with('success', 'Team added successfully.');
}
    //   
    public function editGetTeams(Request $request,$id){
        $data = Teams::find($id);
        return  view('erms.dashboard.editTeams',compact('data'));

    }

    public function editPostTeams(Request $request,$id){
        // dd($id,$request);
        $data = Teams::find($id);
        $data->project_id= $request->project_id;
        $data->project_name= $request->project_name;
        $data->employee_name= $request->employee_name;
        
        $data->save();


        return redirect()->route('teams')->with('success','Data Updated Successfully');

    }
    public function deleteTeams(Request $request,$id){
        //dd($id);
        $data = Teams::find($id);

        // dd($data);


        if($data){
            $data->delete($id);

            return redirect()->route('teams')->with(['success'=>'Data Deleted Successfully']);
        }else{
            return redirect()->route('teams')->with(['success'=>'Something went wrong']);
        }
    }



    public function timeattendance(Request $request)
{
    $data = DB::table('timeattendance')->get(); 
    
    
        return view('erms.dashboard.timeattendance',['data'=>$data]); 
   
}

public function timeform(Request $request)
{
      return view('erms.dashboard.timeform'); 
   
}




public function showattandence(Request $request)
{ 
    
    $emp_id = $request->input('emp_id');
   
    $name = $request->input('name');
    

    $attendanceDetails = TimeAttendance::where('emp_id', $emp_id)
                                        ->where('name', $name)
                                        ->get();
                                        
  
    return view('erms.dashboard.showattandence', compact('attendanceDetails'));
}


public function import(Request $request)
{
    $file = $request->file('file');
    if ($file && $file->isValid()) {
        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $key => $row) {
            if (count($row) >= 6 && $row[0] != "" && $key != 0) 
            {

                $in_time_date = date('Y-m-d H:i:s', strtotime($row[4]));
                $out_time_date = date('Y-m-d H:i:s', strtotime($row[5]));
                $duration = null;
                if (isset($row[6]) && trim($row[6]) !== '') {
                    $duration = $row[6];
                }
                try {
                    Timeattendance::create([
                        'emp_id' => $row[1],
                        'name' => $row[2],
                        'employee_designation' => $row[3],
                        'in_time' => $in_time_date,
                        'out_time' => $out_time_date,
                        'duration' => $duration,
                         //'short_time' => $short_time, 
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                } catch (\Exception $e) {
                    
                    return redirect()->back()->with('error', 'Error importing CSV file.');
                }
            }
        }

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }

    return redirect()->back()->with('error', 'File upload failed.');
}

    
      
         
public function getMonthData(Request $request)
 {
    $selectedMonth = $request->input('month');
    
    $data = timeattendance::whereMonth('created_at', $selectedMonth)->get();
    
    return view('month_data', compact('data'));
}
    public function  expenditure(Request $request)
    {
        $data = DB::table('expenditure')->get(); 

        return view("erms.dashboard.expenditure",['data'=>$data]);
    }

    public function  addexpenditure(Request $request)
    {
        return view("erms.dashboard.addexpenditure");
    }
 
    public function createexpenditure(Request $request)
    {
        $expend = new expenditure();
    
    $expend->Item_name = $request->Item_name;
    $expend->Amount = $request->Amount;
    
    $expend->save();
    return redirect()->route('expenditure')->with('success', 'expenditure added successfully.');
    }

    public function editGetExpenditure(Request $request,$id){
        $data = Expenditure::find($id);
        return  view('erms.dashboard.editExpenditure',compact('data'));

    }

    public function mprreport(Request $request)
    {
        $data = DB::table('mprreport')->get(); 
        
            return view('erms.dashboard.mprreport',['data'=>$data]); 
       
    }
    
    public function addmprreport(Request $request)
    {
        
            return view('erms.dashboard.mprreport'); 
       
    }

    public function savereport(Request $request)
    { 
        // echo('jii'); die;
        // Validate the incoming request data if needed
        // $validatedData = $request->validate([
        //     'employee_id' => 'required',
        //     'employee_name' => 'required',
        //     'vendor_name' => 'required',
        //     'month' => 'required',
        //     'total_leave' => 'required',
        //     'detail' => 'required',
        // ]);

        
        $report = new MPRReport();
        
        $report->employee_id = $request->input('employee_id');
        $report->employee_name = $request->input('employee_name');
        $report->vendor_name = $request->input('vendor_name');
        $report->month = $request->input('month');
        $report->total_leave = $request->input('total_leave');
        $report->detail = $request->input('detail');
        
        $report->save();

       
        return redirect()->route('mprreport')->with('success', 'MPR Report saved successfully');
    }



    public function logout(Request $request)
{
    ($request->session()->all()); 
    $request->session()->flush();
    return redirect()->route("login");
}
}




























