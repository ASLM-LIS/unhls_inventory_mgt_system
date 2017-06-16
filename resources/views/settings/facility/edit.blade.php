@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">
                                    
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Edit Facility</div>
                <div class="panel-body">
                    {!! Form::model($facility, array('route' => array('facility.update', $facility->id),'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator', 'method' => 'PUT')) !!}


                        {{ csrf_field() }}

                            <fieldset> 

                                <div class="form-group">
                                {{ Form::label('district', 'District', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('district', $district_list, $facility->district_id, ['data-placeholder' => 'Select a district','class'=>'form-control', 'required' => 'required'  ]) }}

                                        @if ($errors->has('district'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('district') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>

                                <div class="form-group">
                                {{ Form::label('sub_district', 'Sub-district', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('sub_district', $sub_district_list, $facility->subdistrict_id, ['data-placeholder' => 'Select a sub district','class'=>'form-control' ,'required' => 'required'  ]) }}

                                        @if ($errors->has('sub_district'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('sub_district') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>

                                <div class="form-group">
                                {{ Form::label('level', 'Level', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('level', $level_list, $facility->level_id, ['data-placeholder' => 'Select facility level','class'=>'form-control', 'required' => 'required' ]) }}

                                        @if ($errors->has('level'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('level') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>      

                                <div class="form-group">
                                {{ Form::label('ownership', 'Ownership', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('ownership', $ownership_list, $facility->ownership_id, ['data-placeholder' => 'Select ownership','class'=>'form-control', 'required' => 'required' ]) }}

                                        @if ($errors->has('ownership'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('ownership') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>      


                                <div class="form-group">
                                {{ Form::label('facility_name', 'Facility', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('facility_name',$facility->name,['class' => 'form-control','placeholder' => 'Facility', 'required' => 'true']) }}

                                        @if ($errors->has('facility_name'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('facility_name') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>
                           


                                <div class="form-group">
                                {{ Form::label('in_charge', 'In-charge', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('in_charge', $in_charge_list, $facility->in_charge_id, ['data-placeholder' => 'Select in-charge','class'=>'form-control', 'required' => 'required' ]) }}

                                        @if ($errors->has('in_charge'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('in_charge') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>                            


                                <div class="form-group">
                                {{ Form::label('responsible_lss', 'Responsible LSS', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::select('responsible_lss', $responsible_lss_list, $facility->responsible_lss_id, ['data-placeholder' => 'Select responsible LSS','class'=>'form-control', 'required' => 'required' ]) }}

                                        @if ($errors->has('responsible_lss'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('responsible_lss') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>


                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="{{url('/facility')}}" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                </div>                                

                            </fieldset>

                {!! Form::close() !!}
                </div>
            </div>

                    	</div>
                    </div>
                </div>
</div>
@endsection