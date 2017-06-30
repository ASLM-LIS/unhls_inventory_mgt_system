@extends('layouts.app')

@section('content')
<div class="page_content">

  <ol class="breadcrumbs">
    <div class="container">
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
            <a href="{{{URL::route('ictasset.index')}}}">
              <div class="panel panel-default col-sm-3">
                <span class="icon ion-social-rss" style="font-size:80px"></span> <br><span class="nav_title">ICT</span>
              </span>
            </div>
            </a>

    <a href="#">
      <div class="panel panel-default col-sm-3">
        <span class="icon ion-ios-flask-outline" style="font-size:80px"></span> <br><span class="nav_title">LABORATORY</span>
      </span>
    </div>
  </a>

  <a href="#">
    <div class="panel panel-default col-sm-3">
      <span  class="icon ion-ios-people" style="font-size:80px"></span> <br><span class="nav_title">OPERATIONS</span>
    </span>
  </div>
</a>

<a href="#">
  <div class="panel panel-default col-sm-3">
    <span  class="icon ion-android-car" style="font-size:80px"></span> <br><span class="nav_title">TRANSPORT AND FLEET</span>
  </span>
</div>
</a>
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
