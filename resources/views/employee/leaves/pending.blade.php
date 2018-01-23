@extends('layouts.app1')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br>
<div class="container">
  
  <div class="panel panel-default" style=" margin: auto;" >
    <div style="text-align:center;" class="panel-body"><h  ><strong>Pending Leaves</strong></h></div>
  </div>
</div>
<div class="container">
  <br>
   <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <br>
             
  
          
  <table class="table">
    <thead>
      <tr>
        <th>LeaveID</th>
        <th>Employee Name</th>
        <th>Email</th>
         <th>Leave Type</th>
          <th>Leave Date</th>
            
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
  <tr>
    @foreach($leavepend as $value)
    <?php if($value->AcceptReject==NULL){ ?>
      <tr>
        <td>{{  $value-> LeaveID}}</td>
        <td>{{  $value-> LastName}}</td>
        <td>{{  $value-> EmailAddress}}</td>
        <td>{{  $value-> LeaveTypeID}}</td>
        <td></td>

      

 <td width="10%"><a href="{{URL::to('pending/appr/'.$value->LeaveID)}}" onclick="return confirm('Are you sure to Approve?')"><button type="button" class="btn btn-info btn-xs ">Approve</button></a>
 <td width="10%"><a href="{{URL::to('pending/rej/'.$value->LeaveID)}}" onclick="return confirm('Are you sure to Reject?')"><button type="button" class="btn btn-danger btn-xs ">Reject</button></a></td>

 </td>
 <td>
   
  
 </td>

          
        </td>
      </tr>
      <?php } ?>
      @endforeach

  </tr>
    </tbody>

  </table>
</div>
</div>
</div>

</body>
</html>