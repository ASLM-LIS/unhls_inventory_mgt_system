@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-14">


                                    <div class="panel panel-default">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="goods_receiveds" data-form="deleteForm">
										<caption>
											<h4 class="pull-left">LIST OF GOODS RECEIVED</h4>
											<a type="button" href="{{ url('/goods/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Add goods received</span></a>
										</caption>

										  <thead>
										    <tr>
										      <th>#</th>
										      <th>Date of Receipt</th>
                          <th>Supplier</th>
                          <th>Serial No.</th>

                          <th>Invoice No.</th>
                          <th>Delivered at</th>
                          <th>Based on Order No.</th>
                          <th>Item Name & Particulars</th>
                          <th>Batch No.</th>
                          <th>Expirty Date</th>
                          <th>Quantity Received</th>
                          <th>Rate</th>
                          <th>Cost</th>
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
