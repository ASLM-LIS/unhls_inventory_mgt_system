@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-12">


                                    <div class="panel panel-default">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="mauls" data-form="deleteForm">

										<caption>
											<h4 class="pull-left">MILDMAY PURCHASE REQUEST FORM</h4>
											<a type="button" href="{{ url('/mildmay/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">New Request</span></a>
										</caption>

										  <thead>
										    <tr>
										      <th >S/no</th>
										      <th >Description of Goods & services</th>
                          <th >Unit Cost</th>
										      <th >Qty</th>
                          <th>Estimated Unitcost</th>
                          <th>Funding Source</th>
                          <th>Cost Code</th>
                          <th>Dept Code</th>
										      <th ></th>

										    </tr>
										  </thead>

										</table>
									</div>

                    	</div>
                    </div>
                </div>
</div>
@endsection
