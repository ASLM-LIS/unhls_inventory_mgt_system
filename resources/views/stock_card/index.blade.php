@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-14">


                                    <div class="panel panel-default">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="user" data-form="deleteForm">

										<caption>
											<h4 class="pull-left">Laboratory Item Stock Card</h4>
											<a type="button" href="{{ url('/stock_card/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Add User</span></a>
										</caption>

										  <thead>
										    <tr>
										      <th >#</th>
										      <th >Group</th>
                          <th >Section</th>
										      <th >Location</th>
										      <th >Description</th>
                          <th>Card No.</th>
                          <th>Unit Issue</th>
                          <th>Storage Condition</th>
                          <th>Date</th>
                          <th>Receive/Vouch No.</th>
                          <th>From or to whom</th>
                          <th>Folio</th>
                          <th>Qty received</th>
                          <th>Qty Issued</th>
                          <th>Adjustment</th>
                          <th>Expiry Date</th>
                          <th>Batch/Lot No.</th>
                          <th>Stock Balance</th>
                          <th>Posted By</th>
                          <th>Max Stock</th>
                          <th>Min Stock</th>
                          <th>AMC</th>
                          <th>Re-Order Qty</th>
                          <th></th>
										    </tr>
										  </thead>
                    </table>
									</div>
                    	</div>
                    </div>
                </div>
</div>
@endsection
