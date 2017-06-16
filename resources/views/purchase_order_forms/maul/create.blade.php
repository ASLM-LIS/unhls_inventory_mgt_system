@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

                            	<div>
		<ol class="breadcrumb">
		  <li><a href="home">Home</a></li>
		  <li><a href="#">NMS P.R Form</a></li>
        <li><a href="#">MildMay P.R Form</a></li>
		  <li class="active">Maul P.R Form</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">

			Make Purchase Request
		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->


    {!! Form::open(array('url' => 'maul','autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator')) !!}

        {{ csrf_field() }}

				<div class="form-group">
					<label for="id" class="required">Serial Numbers</label>
          		<input class="form-control" name="id" id="id" type="integer">
				</div>
				<div class="form-group">
					<label for="description">Description of goods/item</label>
					<input class="form-control" name="description" id="description" type="text">
				</div>
				<div class="form-group">
					<label for="unit_cost" class="required">Unit Cost</label>
					<input class="form-control" name="unit_cost" id="unit_cost" type="integer">
				</div>
				<div class="form-group">
          <label for="estimated_unit_cost" class="required">Estimated Unit Cost</label>
					<input class="form-control" name="estimated_unit_cost" id="estimated_unit_cost" type="integer">
       		</div>
				<div class="form-group">
					<label for="quantity" class="required">Quantity</label>
					<input name="quantity" id="quantity" class="form-control input-sm" size="11" type="integer">

				</div>
				<div class="form-group">
					<label for="funder" class="required">Funding Source</label>
				  <input class="form-control" readonly="true" name="funder" value="MAUL" id="funder" type="text">

				</div>
				<div class="form-group">
					<label for="dept">Department</label>
					<input class="form-control" name="dept" id="dept" type="text">
				</div>

				<div class="form-group actions-row">
					<button class="btn btn-primary" onclick="submit()" type="submit"><span class="glyphicon glyphicon-save"></span> Save</button>

              <button class="btn btn-primary" onclick="print()" type="button"><span class="glyphicon glyphicon-print"></span> Print P.R Form</button>
				</div>

			</form>
		</div>
  </div>
</div>
</div>
</div>
</div>
@endsection
