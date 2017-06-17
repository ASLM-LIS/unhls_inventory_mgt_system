@include('settings.delete_modal')

@extends('layouts.app2')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-15">


                                    <div class="panel panel-primary">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="requistions" data-form="deleteForm">
										<caption>

											<h4 class="pull-left"><span class="ion-clipboard"> STORES REQUISITION RECORDS</h4>
											<a type="button" href="{{ url('/requisition/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Make New Request</span></a>
                    </caption>


										  <thead>
										    <tr>
										      <th>Voucher No.</th>
                          <th>Date</th>
										      <th>Unit</th>
                          <th>In-charge Names</th>
                          <th>Folio No.</th>
                          <th>Description of commodity</th>
                          <th>Issue Unit</th>
                          <th>Qty Required</th>
                          <th>Qty Issued</th>
                          <th>Unit Cost</th>
                          <th>Total</th>
                        </tr>

										  </thead>
                      </table>


                    	</div>
                    </div>
                </div>
</div>
</div>
@endsection
