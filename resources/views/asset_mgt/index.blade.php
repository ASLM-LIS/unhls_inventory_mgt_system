@include('settings.delete_modal')

@extends('layouts.app')
@section('content')
<div>
<ol class="breadcrumb">
  <li><a href="{{{URL::route('asset_mgt.create')}}}">{{trans('Register New Equipment')}}

</ol>
</div>
<div>
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-14">


                                    <div class="panel panel-default">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="goods_receiveds" data-form="deleteForm">
										<caption>
											<h4 class="pull-left">EQUIPMENT, INFRASTRUCTURE & ASSET MANAGEMENT</h4>
											<a type="button" href="{{ url('/asset_mgt/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Add New Equipment</span></a>
										</caption>

										  <thead>
										    <tr>
										      <th>#</th>
										      <th>Asset Description</th>
                          <th>Asset Location</th>
                          <th>Purchase Details</th>
                          <th>Asset Life Details</th>
                          <th>Functional Status</th>
                          <th> Actions</th>
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
