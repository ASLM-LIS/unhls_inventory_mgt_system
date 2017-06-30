@extends('layouts.app2')

@section('content')
<div class="page_content">

  <div <ol class="breadcrumb">
    <li><a href="/home">Home</a></li>
    <li><a class="active"> Stock Levels</a></li>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-12">

  <div class="container-fluid">

    <div class="row">
      <div class="col-md-14">


                    <div class="panel panel-primary">
    <table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="goods_receiveds" data-form="deleteForm">
    <caption>
      <h4 class="panel panel-default"> STOCK LEVELS</h4>
      <a type="button" href="{{ url('/asset_mgt/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Add New Stock</span></a>
    </caption>

      <thead>
        <tr>
          <th>#</th>
          <th>Item Name & Item code</th>
          <th>Description</th>
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
@endsection
