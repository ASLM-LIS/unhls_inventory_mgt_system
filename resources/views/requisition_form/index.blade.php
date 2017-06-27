@include('settings.delete_modal')
@extends('layouts.app')
@section('content')

<div <ol class="breadcrumbs">
<li><a href="home"><span>Home</span></li>
</ol>
</div>

<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-35">
                    <div class="panel panel-primary">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="requistions" data-form="deleteForm">
										<caption>

											<h4 class="pull-left"><span class="ion-clipboard"> STORES REQUISITION RECORDS</h4>
											<a type="button" href="{{ url('/requisition_form/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Make New Request</span></a>
                    </caption>

										  <thead>
										    <tr>
                          <th>#</th>
										      <th>Voucher No.</th>
                          <th>Voucher Date</th>
										      <th>Requesting Unit</th>
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
                      <tbody>
                      <?php $row=1; ?>
                      @foreach ($requisition_form as $requisition)
                        <tr>
                          <th>{{ $row }}</th>

                        <td class="text-left" >{{$requisition->voucher_no}}</td>
                        <td class="text-left" >{{$requisition->issue_date}}</td>
                        <td class="text-left" >{{$requisition->unit}}</td>
                        <td class="text-left" >{{$requisition->incharge_name}}</td>
                        <td class="text-left" >{{$requisition->folio_number}}</td>
                        <td class="text-left" >{{$requisition->description}}</td>
                        <td class="text-left" >{{$requisition->issue_unit}}</td>
                        <td class="text-left" >{{$requisition->quantity_required}}</td>
                        <td class="text-left" >{{$requisition->quantity_issued}}</td>
                        <td class="text-left" >{{$requisition->unit_cost}}</td>
                        <td class="text-left" >{{$requisition->total_issued}}</td>

                        <td class="text-left" >

                          {{ Form::open(array('url' => 'requisition/' . $requisition->id, 'class' => 'pull-right form-delete')) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
                          {{ Form::close() }}

                      <a href="{{ route('requisition_form.edit', $requisition->id) }}" class="btn btn-link form-control-static pull-right"><span class="ion-edit"></span> Edit</a>
                      </td>
                      </tr>
                      <?php $row++; ?>
                      @endforeach
                      </tbody>
                      </table>
                    	</div>
                    </div>
                </div>
</div>
</div>
@endsection
