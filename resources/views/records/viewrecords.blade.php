@extends('layouts.app')

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
  <div class="container">
  <br>
   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
              <p align="left">

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">

<table id="myTable">
  <tr class="header">
       <th scope="col">EmpID</th>
      <th scope="col">Record Time</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
  </tr>
<?php $a=0; $time=array(2);?>
<?php $x=0;?>
<?php $dif=0;?>
     <?php $y=0;?>
     <?php $date=0; ?>
     <?php 
     foreach($rec as $value){
      ?>
     <?php  
     $time[$a] = ($value->RecordTime);

     ?>
       
    <?php   

    if($a==0) {
    
      $x=$time[$a]; 
        
     } 
        

    ?>
     <?php   

    if($a==1) {
    
      $y=$time[$a]; 
     echo $y;
          
     } 
        
    ?>
          
       <?php 

      

         unset($value); 
      
       

            ?>
 
       <?php  } ?>

       
<?php  echo $x; ?>

    
      @foreach($rec as $value)
  <tr>
    <td>{{  $value-> EmpID}}</td>
        <td>{{  $value-> RecordTime}}</td>
        <td>{{  $value-> Date}}</td>
        <td>{{  $value-> Description}}</td>
        <td> 
          

           {{ Form::open(['url'=>'employee/dele/'.$value->RecordTime,'method'=>'delete'])}}
           <input type="submit" name="" value="delete" class="btn btn-danger">
          {{ Form::close() }}
        </td>


@endforeach

        
       
  <tr>
 <td>{{ Form::open(['url'=>'/calwork'.$value->EmpID,'method'=>'get'])}}
<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
           <input type="submit" name="" value="Calculate Working Hours" class="btn btn-info">
         </div></div>
          {{ Form::close() }}</td></tr>
</table>
 


</body>
</html>