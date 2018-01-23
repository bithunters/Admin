@extends('layouts.app1')

@section('body')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
  <br><br><br>
  <div class="container">
  
  <div class="panel panel-default" style=" margin: auto;" >
    <div style="text-align:center;" class="panel-body"><h  ><strong>Employee Profiles</strong></h></div>
  </div>
</div>
  <div class="container">
  <br>
   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
              <p align="left">


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">

<table id="myTable">
  <tr class="header">
       <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">EmailAddress</th>
      <th scope="col">Action</th>
      <th></th>
  </tr>

      @foreach($emp as $value)
  <tr>
    <td>{{  $value-> EmployeeID}}</td>
        <td>{{  $value-> FirstName}}</td>
        <td>{{  $value-> LastName}}</td>
        <td>{{  $value-> EmailAddress}}</td>
        
          
            <td width="10%"><a href="{{URL::to('emppro/view/'.$value->EmployeeID)}}"><button type="button" class="btn btn-success btn-xs ">View</button></a></td>
           
          <td width="10%"><a href="{{URL::to('employee/del/'.$value->EmployeeID)}}" onclick="return confirm('Are you sure delete?')"><button type="button" class="btn btn-danger btn-xs ">Delete</button></a></td>
        </td>@endforeach
  </tr>
 
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>