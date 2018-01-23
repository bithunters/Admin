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
    <div style="text-align:center;" class="panel-body"><h  ><strong>Approved Leaves</strong></h></div>
  </div>
</div>
<div class="container">
  <br>
   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
              <p align="left">
  
            
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
      <th scope="col">Leave date</th>
      <th scope="col">Content</th>
      <th scope="col">Accept/Reject</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($leave as $value)
      <tr>
        <td>{{  $value-> LeaveID}}</td>
        <td>{{  $value-> AppliedTime}}</td>
        <td>{{  $value-> LeaveTypeID}}</td>
        <td>{{  $value-> AcceptReject}}</td>
        <td> 
          <td width="10%"><a href="{{URL::to('employee/delete/'.$value->LeaveID)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-xs ">Delete</button></a></td>

          
        </td>
      </tr>
      @endforeach
    </tr>
     
    </tbody>

  </table>
</div>
</div>
</div>

</body>
</html>