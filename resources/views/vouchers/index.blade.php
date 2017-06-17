@extends('layouts.app2')

@section('content')
<div class="page_content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

    <a href="requisition_form.index">
      <div class="panel panel-primary col-sm-3">
        <span class="ion-clipboard"></span> <br><span class="nav_title">Requisition Form(Internal)</span>
      </span>
    </div>
  </a>

  <a href="#">
    <div class="panel panel-primary col-sm-3">
      <span class="icon ion-ios-cart"></span> <br><span class="nav_title">Stock Card</span>
    </span>
  </div>
</a>

<a href="#">
  <div class="panel panel-primary col-sm-3">
    <span class="ion-document"></span> <br><span class="nav_title">Goods Received Note</span>
  </span>
</div>
</a>

<div class="container-fluid">

    <div class="row">
      <div class="col-md-14">


                    <div class="panel panel-default">
    <table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="goods_receiveds" data-form="deleteForm">
    <caption>
      <h4 class="pull-left">STOCK LEVELS</h4>
      <a type="button" href="{{ url('/asset_mgt/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Add New Stock</span></a>
    </caption>

      <thead>
        <tr>
          <th>#</th>
          <th>Commodity</th>
          <th>Description</th>
          <th>Item Code</th>
          <th>Storage Condtion</th>
          <th>Quantity Available</th>
          <th>Minimum Level</th>
          <th >Maximum Level</th>
        </tr>
      </thead>
      <tbody>

</div>
</div>

</div>

</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
