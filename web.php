<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('addproject',[DashboardController::class,'projectform'])->name('addproject');
Route::post('addproject',[DashboardController::class,'addproject'])->name('addproject');
Route::get('registration',[RegistrationController::class,'registration'])->name('registration');
Route::post('logout',[DashboardController::class,'logout'])->name('logout');
Route::post('addregistration',[RegistrationController::class,'addregistration'])->name('addregistration');

Route::get('edit/{id}',[DashboardController::class,'editGet'])->name('edit.get');
Route::post('edit/{id}',[DashboardController::class,'editPost'])->name('edit.post');


Route::get('delete/{id}',[DashboardController::class,'deleteGet'])->name('delete.get');



Route::get('editEmployee/{id}',[DashboardController::class,'editGetEmployee'])->name('edit.getEmployee');
Route::post('editEmployee/{id}',[DashboardController::class,'editPostEmployee'])->name('edit.PostEmployee');
Route::post('/deleteEmployee/{id}',[DashboardController::class,'deleteEmployee'])->name('deleteEmployee');


Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('addlogin',[LoginController::class,'addlogin'])->name('addlogin');



Route::get('admin/login',[LoginController::class,'adminlogin'])->name('adminlogin');
Route::post('admin/addlogin',[LoginController::class,'addadminlogin'])->name('addadminlogin');

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('admin/dashboard',[DashboardController::class,'admindashboard'])->name('admindashboard');

Route::get('employeedetails', [DashboardController::class,'employeedetails'])->name('employeedetails');
Route::get('addemployeedetails',[DashboardController::class,'addemployeedetailsGet'])->name('addemployeedetails.get');
Route::post('addemployeedetails',[DashboardController::class,'addemployeedetailsPost'])->name('addemployeedetails.post');

Route::get('projects', [DashboardController::class,'projects'])->name('projects');



Route::get('teams', [DashboardController::class,'teams'])->name('teams');
Route::get('addteams', [DashboardController::class,'addteams'])->name('addteams');
Route::post('addteams', [DashboardController::class,'createteams'])->name('addteams');

Route::get('editTeams/{id}',[DashboardController::class,'editGetTeams'])->name('edit.getTeams');
Route::post('editTeams/{id}',[DashboardController::class,'editPostTeams'])->name('edit.PostTeams');
Route::get('/deleteTeams/{id}',[DashboardController::class,'deleteTeams'])->name('deleteTeams');

Route::get('timeattendance', [DashboardController::class,'timeattendance'])->name('timeattendance');
Route::get('timeform', [DashboardController::class,'timeform'])->name('timeform');
Route::post('import', [DashboardController::class,'import'])->name('import');

Route::post('showattandence',[DashboardController::class,'showattandence'])->name('showattandence');
Route::get('/get-month-data', [DashboardController::class,'getMonthData'])->name('get.month.data');



Route::get('expenditure', [DashboardController::class,'expenditure'])->name('expenditure');
Route::get('addexpenditure', [DashboardController::class,'addexpenditure'])->name('addexpenditure');
Route::post('addexpenditure', [DashboardController::class,'createexpenditure'])->name('createexpenditure');

Route::get('editExpenditure/{id}',[DashboardController::class,'editGetExpenditure'])->name('edit.getExpenditure');
Route::post('editExpenditure/{id}',[DashboardController::class,'editPostExpenditure'])->name('edit.PostExpenditure');
Route::get('/deleteExpenditure/{id}',[DashboardController::class,'deleteExpenditure'])->name('deleteExpenditure');



Route::get('mprreport', [DashboardController::class,'mprreport'])->name('mprreport');
Route::get('addmprreport', [DashboardController::class,'addmprreport'])->name('addmprreport');
Route::post('savereport',[DashboardController::class,'savereport'])->name('savereport');
