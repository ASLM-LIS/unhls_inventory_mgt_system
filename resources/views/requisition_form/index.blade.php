@extends('layouts.app')

@section('content')
<div class="page_content">

  <ol class="breadcrumbs">
  </ol>
  <span style="font-size:20px">Departments</span>
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
          <div class="sub_panel" style="left: -220px;">
            <div class="side_inner ps-ready ps-container" style="height: 620px;">
              <ul>
                <li>
                  <a href="{{ URL::route('vouchers.index')}}">
                    <span class="glyphicon glyphicon-tag"></span> ICT</a>
                  </li>
                  <li>
                    <a href="{{ URL::route('vouchers.index')}}">
                      <span class="glyphicon glyphicon-tag"></span> {{trans('LAB')}}</a>
                    </li>
                    <li>
                      <a href="{{ URL::route('vouchers.index')}}">
                        <span class="glyphicon glyphicon-tag"></span> {{trans('Transport and Fleet')}}</a>
                      </li>

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
