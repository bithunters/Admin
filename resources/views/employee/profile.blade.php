@extends('layouts.app')
<div class="container">
	<div class="row">
		<div class="col-md-5  toppad  pull-right col-md-offset-3 ">

			<br>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


			<div class="panel panel-info">
				<div class="panel-heading">
					<tbody>
						@foreach($details as $data)
						<tr>
					<h3 class="panel-title">Name -</h3>
					<td>{{  $data-> FirstName}}</td>
					<td>{{  $data-> MiddleName}}</td>
					<td>{{  $data-> LastName}}</td>
					<br>
				</tr><br>
				
				
					<h3 class="panel-title">ID-</h3>
					<td>{{  $data-> EmployeeID}}</td>
				</div>

				<div class="panel-body">
					<div class="row">


						<!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                               <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                          </dl>
                        </div>-->
						<div class=" col-md-9 col-lg-9 ">
							<table class="table table-user-information">
								
								<tr>
									<td>Department:</td>
									<td>{{  $data-> Name}}</td>
								</tr>
								<tr>
									<td>Hire date:</td>
									<td>{{  $data-> StartDate}}</td>
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td>{{  $data-> DOB}}</td>
								</tr>

								<tr>
								<tr>
									<td>Email</td>
									<td>{{  $data-> EmailAddress}}</td>
								</tr>

								</tr>
							<td>Project Assigned</td>
									<td>{{  $data-> ProjectID}}</td>
								</tr>
								<tr>
									<td>Working Hours</td>
									<td>{{  $data-> WorkingHours}}</td>
								</tr>
								<tr>
									<td>Phone Number</td>
								<td>{{  $data-> Number}}</td>
								</td>
									
								</tr>
							<td>Description</td>
									<td>{{  $data-> Description}}</td>
								</tr>

								</tbody>
							</table>

							<a href="#" class="btn btn-primary">Edit</a>
							<a href="#" class="btn btn-primary">Delete</a>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Send <i class="glyphicon glyphicon-envelope"></i></a>
					
				</div>

			</div>
		</div>
	</div>
</div>
@endforeach
</html>
