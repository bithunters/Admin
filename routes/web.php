<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/home1', function () {
    return view('home1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


				//APPROVED
//approved leaves view
route::get('/approved','employeeController@show');
//approved leaves edit btn
route::get('/approved/edit/{LeaveID}','employeeController@editl');
//approved ->update new values
route::post('employee/updateleave/{LeaveID}',['uses'=>'employeeController@update']);
//delete Apprved
route::get('employee/delete/{LeaveID}',['uses'=>'employeeController@del']);


	
				//PENDING
//pending leaves view
route::get('/pending','employeeController@showpending');
//Approve leave
route::get('/pending/appr/{LeaveID}','employeeController@ap');
//reject leave
route::get('/pending/rej/{LeaveID}','employeeController@re');

				//Rejected
//rejected leaves view
route::get('/rejected','employeeController@showrej');
//rejected leaves edit btn
route::get('/rejected/edit/{LeaveID}','employeeController@editrej');
   




    //Employee profiles view table
route::get('/emp','employeeController@showemps');
route::get('employee/del/{EmployeeID}',['uses'=>'employeeController@delem']);
		//Profile view
route::get('/emppro/view/{EmployeeID}','employeeController@showprof');


    ////////Attendence Records///////
//show records
route::get('/attrecords','employeeController@showrec');
//delete record
route::delete('employee/dele/{RecordTime}',['uses'=>'employeeController@delrec']);
//calculate working hours
route::get('/calwork/{EmpID}','employeeController@cal');
Auth::routes();

