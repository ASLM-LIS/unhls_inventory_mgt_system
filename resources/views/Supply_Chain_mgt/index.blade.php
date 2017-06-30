@extends('layouts.app2')

@section('content')
<div class="page_content">

  <ol class="breadcrumbs">

  </ol>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-10">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <ul>

    <a href="purchase_order_forms">
      <div class="panel panel-default col-sm-3">
        <span class="ion-ios-cart-outline" style="font-size:80px"></span> <br><span class="nav_title">Ordering</span>
      </span>
    </div>
  </a>

  <a href="#">
    <div class="panel panel-default col-sm-3">
      <span  class="ion-ios-cart" style="font-size:80px"></span> <br><span class="nav_title">Receiving</span>
    </span>
  </div>
</a>

<a href="stock_level">
  <div class="panel panel-default col-sm-3">
    <span  class="icon ion-podium" style="font-size:80px"></span> <br><span class="nav_title">Stock Levels</span>
  </span>
</div>
</a>

<a href="vouchers">
  <div class="panel panel-default col-sm-3">
    <span class="ion-clipboard" style="font-size:80px"></span> <br><span class="nav_title">Vouchers & Forms</span>
  </span>
</div>
</a>
</div>
</div>

</div>

</div>
</div>
@endsection
