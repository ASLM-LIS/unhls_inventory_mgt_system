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
                      <tbody>
                        <?php $row=1; ?>
										  	@foreach($asset_mgr as $asset_mgt)
										    <tr>
										      <th> {{ $row }} </th>
										      <td class="text-left">{{ $asset_mgt->Asset_Name}}<br>{{$asset_mgt->Asset_Type}}<br>{{$asset_mgt->Asset_category}}<br>{{$asset_mgt->Serial_number}}<br>{{$asset_mgt->manufacturer}}</td>
                          <td class="text-center">{{ $asset_mgt->location}}<br>{{$asset_mgt->department}}</td>
                          <td class="text-left"> {{$asset_mgt->supplier}}<br>{{$asset_mgt->cost}}<br>{{$asset_mgt->funder}}<br>{{$asset_mgt->date_of_delivery}}</td>
                          <td class="text-left">{{$asset_mgt->installation_date}}<br>{{$asset_mgt->warranty_details}}<br>{{$asset_mgt->useful_life}}<br>{{$asset_mgt->disposal_date}}<br>{{$asset_mgt->method_of_disposal}}</td>
                          <td class="text-left">{{$asset_mgt->status}}<br>{{$asset_mgt->repair_detials}}<br>{{$asset_mgt->service_details}}<br>{{$asset_mgt->comments}}</td>
										      <td>

								                {{ Form::open(array('url' => 'asset_mgt/' . $asset_mgt->id, 'class' => 'pull-right form-delete')) }}
								                    {{ Form::hidden('_method', 'DELETE') }}
								                    {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
								                {{ Form::close() }}

										      	<a href="{{ route('asset_mgt.edit', $asset_mgt->id) }}" class="btn btn-link form-control-static pull-right"><span class="ion-edit"></span> Edit</a>
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
