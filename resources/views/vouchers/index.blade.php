@extends('layouts.app2')

@section('content')
<div class="page_content">
  <div class="container-fluid">
    <div <ol class="breadcrumb">
      <li><a href="/home">Home</a></li>
      <li><a href="Supply_Chain_mgt"> Supply Chain Management</a></li>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-12">

    <a href="requisition_form">
      <div class="panel panel-primary col-sm-4">
        <span class="ion-clipboard" style="font-size:80px"></span> <br><span class="nav_title">Requisition Form(Internal)</span>
      </span>
    </div>
  </a>

  <a href="stock_card">
    <div class="panel panel-primary col-sm-4">
      <span class="ion-ios-cart" style="font-size:80px"></span> <br><span class="nav_title">Stock Card</span>
    </span>
  </div>
</a>

<a href="goods">
  <div class="panel panel-primary col-sm-4">
    <span class="ion-document-text" style="font-size:80px"></span> <br><span class="nav_title">Goods Received Note</span>
  </span>
</div>
</a>

</div>
</div>
</div>
</div>
</div>
@endsection
