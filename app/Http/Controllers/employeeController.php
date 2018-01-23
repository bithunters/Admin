<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use App\Leaves;
use DB;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\serviceprovider;

class employeecontroller extends Controller
{

  
  
    //user login and register
  public function store(Request $request)
 {

     $this->validate($request, [

         'email' => 'unique:users'

     ]);


     $table = new User();
     $table->name = $request->input('name');
     $table->email = $request->input('email');
     $table->Password = ($request->input('password'));

     $table->save();
     return redirect()->back()->with('message', 'Registered successfully');
    
 }

 public function come(Request $request)
 {

     $data = $request->only('EmailAddress','Password');

     if (Auth::attempt($data)) {
       
        return view('employee/myhome');
     
}
return view('employee/myhome');
    // return "1";
     
 }

//password reset
   public function resetpass()
 {
    Mail::send(['text'=>'employee/password_reset'],['name','Admin'],function($message){
        $message->to('tsudaraka99@gmail.com','To you')->subject('ssss');
        $message->from('tsudaraka99@gmail.com','dsds');
    });


    

 }



//////////////////////////////////APPROVED///////////////////////////////////////////
       // Leave Views

 public function show()
 {
     $leave = DB::table('employees')
            ->join('Leaves', 'EmpID', '=', 'EmployeeID')
           // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('Leaves.*', 'Employees.*')
            ->where('AcceptReject',"Approved")
            ->get();

     return view('employee/leaves/approved',['leave'=> $leave]);


 }

 // Leave Edit Btn

 public function editl($LeaveID)
 {
     $leave =DB::table('leaves')->where('LeaveID','$LeaveID');
     return view('employee/editleave',['leave'=> $leave]);

 }
  // Leave update new

 public function update(Request $request,$LeaveID)
 {
     $leave = Leaves::find($LeaveID);

     $leave->AppliedTime = $request->input('AppliedTime');
     $leave->LeaveTypeID = $request->input('LeaveTypeID');
     $leave->AcceptReject = $request->input('AcceptReject');

    $leave ->save();
     return redirect('approved');


 }



 // Approved Leave delete
public function del($LeaveID)
 {
     
     DB::table('leaves')->where('LeaveID', '=',$LeaveID )->delete();

     
     return redirect('approved');


 }

////////////////////////////////////////////////////PENDING////////////////////////////////////////////

// view pending leaves
public function showpending()
 {
     $leavepend = DB::table('employees')
            ->join('Leaves', 'EmpID', '=', 'EmployeeID')
           // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('Leaves.*', 'Employees.*')
            ->get(); 

               //echo $leavepend->AcceptReject;
            //if( $leavepend->AcceptReject == "NULL")

//{   
     return view('employee/leaves/pending',['leavepend'=> $leavepend]);
//}

}
//Approve leave
public function ap($LeaveID)
 {
 
DB::table('Leaves')
            ->where('LeaveID', $LeaveID)
            ->update(['AcceptReject'=>"Approved"]);

      return redirect()->action('employeeController@showpending');


 }

 //Reject leave
 public function re($LeaveID)
 {
 
DB::table('Leaves')
            ->where('LeaveID', $LeaveID)
            ->update(['AcceptReject'=>"Rejected"]);

      return redirect()->action('employeeController@showpending');


 }


////////////////////////////////////////////////////Rejected////////////////////////////////////////////
      // Leave Views

 public function showrej()
 {
     $leave = DB::table('employees')
            ->join('Leaves', 'EmpID', '=', 'EmployeeID')
           // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('Leaves.*', 'Employees.*')
            ->where('AcceptReject',"Rejected")
            ->get();

     return view('employee/leaves/rejected',['leave'=> $leave]);


 }

 // Leave Edit Btn

 public function editrej($LeaveID)
 {
     $leave = leaves::find($LeaveID);
     return view('employee/editleave',['leave'=> $leave]);


 }
 
/////////////////////////////////////////////////show employee profiles////////////////////////////////////////
//view employees
public function showemps()
 {
     $emp = DB::table('employees')
            ->select('Employees.*')
            ->orderBy('WorkingHours', 'desc')
                        ->get();

     return view('employee/emp_profiles',['emp'=> $emp]);


 }
 //delete profile
 public function delem($EmployeeID)
 {
    DB::table('Employees')->where('EmployeeID',$EmployeeID)->delete();
   

     
     
     return redirect()->back();


 }
 /// View employee profile////

 public function showprof($EmployeeID)
 {
     $details = DB::table('employees')
            ->join('ContactNumbers', 'ContactNumbers.EmpID', '=', 'employees.EmployeeID')
            ->join('Departments', 'Departments.MgrEmployeeID', '=', 'employees.EmployeeID')
            ->join('ProjectAssigned', 'ProjectAssigned.EmpID', '=', 'employees.EmployeeID')
            ->select('ContactNumbers.*', 'Employees.*','Departments.*','ProjectAssigned.*')
            ->where('EmployeeID', '=', $EmployeeID)
            
            ->get();

     return view('employee/profile',['details'=> $details]);

}

/////////////////////Attendance Records//////////////////
 public function showrec()
 {
     $rec = DB::table('AttendanceRecords')
           
            ->select('AttendanceRecords.*')
            
            ->get();

     return view('records/viewrecords',['rec'=> $rec]);


 }
 //delete record
 public function delrec($RecordTime)
 {
    DB::table('AttendanceRecords')->where('RecordTime',$RecordTime)->delete();
 return redirect()->back();
}

public function cal($EmpID)
 {
     
     $time = DB::table('AttendanceRecords')
            ->select('AttendanceRecords.EmpID','AttendanceRecords.RecordTime','AttendanceRecords.Date')
            ->where('EmpID',$EmpID)
            ->get();

            return view('employee/records',['time'=>$time]);
 }          
}