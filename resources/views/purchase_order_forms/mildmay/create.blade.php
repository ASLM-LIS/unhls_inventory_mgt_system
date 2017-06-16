@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

                            	<div>
		<ol class="breadcrumb">
		  <li><a href="/home">Home</a></li>
		  <li><a href="#">NMS Form</a></li>
        <li><a href="#">MildMay Form</a></li>
		  <li class="active">Maul Form</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">

			Make Purchase Request
		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->


			<form method="POST" action="localhost/logistics" accept-charset="UTF-8" id="form-create-patient"><input name="_token" value="cKEMctvlCWnWJGgVaN7cComnkv5QPC46PAItvyMR" type="hidden">

				<div class="form-group">
					<label for="Serial_number" class="required">Serial Numbers</label>
					<input class="form-control" readonly="true" name="Serial_number" value="01" id="ulin" type="text">
				</div>
				<div class="form-group">
					<label for="nin">Description of goods/item</label>
					<input class="form-control" name="description" id="description" type="text">
				</div>
				<div class="form-group">
					<label for="description" class="required">Unit Cost</label>
					<input class="form-control" name="unit_cost" id="unit_cost" type="text">
				</div>
				<div class="form-group">
          <label for="description" class="required">Estimated Unit Cost</label>
					<input class="form-control" name="estimated_unit_cost" id="estimated_unit_cost" type="text">
       		</div>
				<div class="form-group">
					<label class="required" for="age">Quantity</label>
					<input name="quantity" id="quantity" class="form-control input-sm" size="11" type="integer">

				</div>
				<div class="form-group">
					<label for="gender" class="required">Funding Source</label>
				  <input class="form-control" readonly="true" name="funder" value="MAUL" id="funder" type="text">

				</div>
				<div class="form-group">
					<label for="village_residence">Department</label>
					<input class="form-control" name="dept" id="dept" type="text">
				</div>
        <div class="form-group">
					<label for="patient_number">Prepared By::</label>
        </div>
        <div class="form-group">
					<label for="name">Name::</label>
          <input class="form-control" name="name" value="" id="name" type="text">
				</div>
        <div class="form-group">
					<label for="name">Job Title::</label>
          <input class="form-control" name="title" value="" id="title" type="text">
				</div>
        <div class="form-group">
					<label for="name">Date of purchase request::</label>
          <input class="form-control" name="name" value="" id="name" type="text">
				</div>
				<div class="form-group actions-row">
					<button class="btn btn-primary" onclick="submit()" type="button"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>

			</form>
		</div>
	</div>





                                    </div>
                                </div>




                </div>
            </div>
@endsection
