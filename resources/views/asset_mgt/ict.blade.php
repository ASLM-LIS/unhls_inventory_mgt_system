@include('settings.delete_modal')
@extends('layouts.app')
@section('content')
<div>
  <ol class="breadcrumb">
    <li><a href="{{{URL::route('home.index')}}}"> {{trans('Home')}} </a></li>
    <li><a href="{{{URL::route('vouchers.index')}}}"> {{trans('Asset Management')}} </a></li>
  </ol>
</div>
<div>
  <!--<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download as Excel</button></a>-->
  <!--<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>-->
  <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Export as CSV </button></a>
</div>
<div class="page_content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-14">
        <div class="panel panel-primary">
          <table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="asset_mgts" data-form="deleteForm">
            <caption>
              <h4 class="pull-left">ITAM REGISTER</h4>
              <a type="button" href="{{ url('ictasset/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Add New Equipment</span></a>
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

              </tr>
            </thead>
            <tbody>
              <?php $row=1; ?>
              @foreach($asset_mgr as $asset_mgt)
              <tr>
                <th> {{ $row }} </th>
                <td class="text-left">Name: {{ $asset_mgt->Asset_Name}}<br>Item Type: {{$asset_mgt->Asset_Type}}<br>Category: {{$asset_mgt->Asset_Category}}<br>S/No: {{$asset_mgt->Serial_number}}<br>Manufacturer- {{$asset_mgt->manufacturer}}</td>
                <td class="text-left">Location-{{$asset_mgt->location}}<br>Department- {{$asset_mgt->department}}</td>
                <td class="text-left">Supplier- {{$asset_mgt->supplier}}<br>Cost- {{$asset_mgt->cost}}<br>Funding Source- {{$asset_mgt->funder}}<br>Delivery date- {{$asset_mgt->date_of_delivery}}</td>
                <td class="text-left">Installation Date- {{$asset_mgt->installation_date}}<br> Warranty Info- {{$asset_mgt->warranty_details}}<br>Useful life- {{$asset_mgt->useful_life}}<br>Disposal Date- {{$asset_mgt->disposal_date}}<br>Disposal Method- {{$asset_mgt->method_of_disposal}}</td>
                <td class="text-left">Status- {{$asset_mgt->status}}<br>Repair Info- {{$asset_mgt->repair_details}}<br>Sevice Info- {{$asset_mgt->service_details}}<br>Remarks- {{$asset_mgt->comments}}</td>

                <td>

                  <div class="btn-group">
                  {{ Form::open(array('url' => 'ictasset/' . $asset_mgt->id, 'class' => 'pull-right form-delete')) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
                  {{ Form::close() }}
                  <a href="#" class="btn btn-link form-control-static pull-right"><span class="ion-edit"></span> Edit</a>
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
</div>
@endsection
