@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">
                                    
                    <div class="row">
                    	<div class="col-md-12">


                                    <div class="panel panel-default">
										<table class="table table-striped dataTable no-footer display nowrap" id="facilities" data-form="deleteForm">

										<caption> 
											<h4 class="pull-left">Facilities</h4>
											<a type="button" href="{{ url('/facility/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Add facility</span></a>
										</caption>
										
										  <thead>
										    <tr>
										      <th >#</th>
										      <th >Facility</th>
										      <th >Level</th>
										      <th >Owner</th>										      
										      <th >District</th>
										      <th >Sub-district</th>
										      <th ></th>

										    </tr>
										  </thead>
										  <tbody>
										  	<?php $row=1; ?>
										  	@foreach($facilities as $facility)
										    <tr>
										      <th> {{ $row }} </th>
										      <td>{{ $facility->name }}</td>
										      <td>{{ $facility->level->level }}</td>
										      <td>{{ $facility->ownership->owner }}</td>			  
										      <td>{{ $facility->district->name }}</td>
										      <td>{{ $facility->subdistrict->name }}</td>										      
										      <td>

								                {{ Form::open(array('url' => 'facility/' . $facility->id, 'class' => 'pull-right form-delete')) }}
								                    {{ Form::hidden('_method', 'DELETE') }}
								                    {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
								                {{ Form::close() }}

										      	<a href="{{ route('facility.edit', $facility->id) }}" class="btn btn-link form-control-static pull-right"><span class="ion-edit"></span> Edit</a>
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