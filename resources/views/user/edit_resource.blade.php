@extends('admin_template')

@section('content')
	<section id="get-started" class="padd-section wow fadeInUp content container-fluid">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="box box-primary">
	          <div class="box-body">
	            <div class="feature-block">
	            	<h3 class=""><a href="/project/{{ Auth::user()->id }}/p/{{ $data_project->id }}" title="Back to Project"><i class="fa fa-chevron-circle-left fa-2x"></i></a> Data {{ $data_resource->name_resource }}</h3>
	            	<hr>
	            	<form role="form" method="POST" action="{{action('ProjectController@edit_resource_update')}}">
	            		{{ csrf_field() }}
	            		<input type="hidden" name="resource_id" value="{{ $data_resource->id }}">
	            		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<input type="hidden" name="project_id" value="{{ $data_project->id }}">
						<div class="form-group">
		                    <label>Schema</label>
		                    <div class="daftar-isi">
		                    	@php $no = 1; $rand = rand(1111,9999); @endphp
		                    	@foreach($data_skema as $data)
		                    		@if($data->type_schema == 'array')
		                    			@if($data->parent_id == '')
		                    			<div class="row skema">
		                    				@php $hiha = $data->field; @endphp
		                    				<div class="col-xs-4 col-md-3 col-lg-3">
					                        	<input type="text" class="form-control namefield" onkeyup="nospaces(this)" name="field[{{ $data->field }}][key]" value="{{ $data->name_schema }}" required="">
					                      	</div>
					                      	<div class="col-xs-4 col-md-3 col-lg-3">
					                      		<select class="form-control select2 select_type" name="field[{{ $data->field }}][value]" style="width: 100%;" id="type">
		                     						@isset($data_opsigroup) @foreach($data_opsigroup as $databaru)<optgroup label="{{ $databaru->option_grup }}">@isset($data_opsi) @foreach($data_opsi as $opsi) @if($opsi->skemaopsigroup_id == $databaru->id) @if($data->type_schema == $opsi->name_opsi) <option value="{{ $data->type_schema }}" selected="selected">{{ $opsi->value_opsi }} (Current)</option>  @else <option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}</option> @endif @endif  @endforeach @endisset</optgroup>@endforeach @endisset
		                     					</select>
					                      	</div>
					                      	<p class="add_array">
					                          <a class="remove_field">
					                            <button type="button" class="baten baten-danger"><i class="fa fa-remove"></i> Delete parents field</button>
					                          </a>
					                          <a class="skema_add_field" title="Add New Array"><button type="button" class="baten baten-primary"><i class="fa fa-plus"></i> New Child Field</button></a>
					                        </p>
					                        @php $nomor = 1; $nomor2 = 1; $nomor3 = 1; $generate = rand(0000,9999); @endphp    
		                     				@foreach($data_skema as $data2)	
		                     				@php $random = random_str(8); @endphp
		                     					@if($data2->parent_id != '' && $data2->field == $hiha && $data2->child_id == '')
		                     						<p class="input_array">
		                     							<div class="form-skema d{{ $nomor }}">
                											<div class="col-xs-3 col-md-3 col-lg-3"></div>
                											<div class="col-xs-4 col-md-3 col-lg-3 skema2">
                												<div class="new_form d{{ $nomor }} form-group">
												                    <input id="{{ $random }}" class="get_input form-control" name="field[{{ $data->field }}][value][key][{{ $random }}]" onkeyup="nospaces(this)" type="text" placeholder="New Field " value="{{ $data2->name_schema }}" required/>
												                  </div>
                											</div>
                											<div class="col-xs-4 col-md-3 col-lg-3 skema3">
                												<div data-id="d{{ $nomor }}" class="new_form2 d{{ $nomor }} wowd{{ $nomor }} form-group">
                													<p>
                														<select class="form-control new_select select2 d{{ $nomor }}" name="field[{{ $data->field }}][value][value][{{ $random }}]" style="width: 100%;" id="type">
													                        @isset($data_opsigroup) 
													                          @foreach($data_opsigroup as $databaru)
													                            <optgroup label="{{ $databaru->option_grup }}">
													                              @isset($data_opsi) 
													                                @foreach($data_opsi as $opsi)
													                                	@if($opsi->skemaopsigroup_id == $databaru->id) 
																							@if($data2->type_schema == $opsi->name_opsi) 
																								<option value="{{ $data2->type_schema }}" selected="selected">{{ $opsi->value_opsi }} (Current)</option> 
																							@elseif($opsi->name_opsi == 's') 
																							@else 
																								<option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}</option> 
																							@endif 
																						@endif  
													                                @endforeach
													                              @endisset
													                            </optgroup>
													                          @endforeach 
													                        @endisset
													                    </select>
                													</p>
                												</div>
                											</div>
                											<div class="col-md-2 col-lg-2 skema4">
											                  <p class="array3 ed{{ $nomor }}">
											                    <a href="#" class="baten baten-danger remove_array remove-button d{{ $nomor }}"><i class="fa fa-remove"></i></a>
											                    @if($data2->type_schema == 'array')
											                    <a class="baten baten-primary skema_new_field d{{ $nomor }}" title="Add New Array" data-key="{{ $random }}"><i class="fa fa-plus"></i></a>
											                    @endif
											                  </p>
											                </div>
											                <div class="col-xs-12 col-md-12 col-lg-12"></div>
                      										<div class="col-xs-6 col-md-6 col-lg-6"></div><div class="col-xs-6 col-md-6 col-lg-6"></div>
                      										<div class="form-baru-skema skmd{{ $nomor }}">
                      											@if($data2->type_schema == 'array')
                      												@foreach($data_skema_grandchild as $data3)
                      													@php $randomstr = random_str(8) @endphp
                      													@if($data3->child_id == $data2->id)

                      														<div class="col-xs-6 col-md-6 col-lg-6 si{{ $randomstr }}"></div>
			                      												<div class="col-md-2 col-lg-2 skema-baru2 d{{ $nomor }} si{{ $randomstr }}">
																		          <div class="form-group">
																		            <input class="get_input form-control" name="field[{{ $data2->field }}][value][value][{{ $random }}][key][]" onkeyup="nospaces(this)" type="text" placeholder="New Field array"  value="{{ $data3->name_schema }}" required/>
																		          </div>
																		        </div>
																		        <div class="col-md-3 col-lg-3 skema-baru3 d{{ $nomor }} si{{ $randomstr }}">
																		          <div class="form-group">
																		            <p><select class="form-control select2 d{{ $nomor }}" name="field[{{ $data2->field }}][value][value][{{ $random }}][value][]" style="width: 100%;" id="type">
																		              @isset($data_opsigroup) 
																		                @foreach($data_opsigroup as $databaru)
																		                  <optgroup label="{{ $databaru->option_grup }}">
																		                    @isset($data_opsi) 
																		                      @foreach($data_opsi as $opsi)
																                                	@if($opsi->skemaopsigroup_id == $databaru->id) 
																										@if($data3->type_schema == $opsi->name_opsi) 
																											<option value="{{ $data3->type_schema }}" selected="selected">{{ $opsi->value_opsi }} (Current)</option> 
																										@elseif($opsi->name_opsi == 'array') 
																										@else 
																											<option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}</option> 
																										@endif 
																									@endif  
																                                @endforeach
																		                    @endisset
																		                  </optgroup>
																		                @endforeach 
																		              @endisset
																		            </select></p>
																		          </div>
																		        </div>
																		        <div class="col-md-1 col-lg-1 skema-baru4 d{{ $nomor }} si{{ $randomstr }}">
																		          <div class="form-group">
																		            <p class="hps_child_child d{{ $nomor }}">
																		              <a class="baten baten-danger remove_array_child remove-button-child d{{ $nomor }} si{{ $randomstr }}"><i class="fa fa-remove"></i></a>
																		            </p>
																		          </div>
																		        </div>
                      													@endif
                      												@endforeach
                      											@endif
											                </div>
                										</div>
                        							</p>
		                     					@endif
		                     					@php $nomor++ @endphp
		                     				@endforeach      
		                    			</div>
		                    			@endif
		                    		@elseif($data->parent_id == '')
		                    			<div class="row skema">
		                    				<div class="col-xs-4 col-md-3 col-lg-3">
		                     					<input type="text" class="form-control namefield" onkeyup="nospaces(this)" name="field[{{ $data->field }}][key]" value="{{ $data->name_schema }}">
		                     				</div>
		                     				<div class="col-xs-4 col-md-3 col-lg-3">
		                     					@if($data->type_schema == 'ObjectID')
		                     						@php $disabled = "disabled" @endphp
		                     						<input type="hidden" name="field[{{ $data->field }}][value]" value="{{ $data->type_schema }}">
		                     						<select class="form-control select2 select_type" name="field[{{ $data->field }}][value]" style="width: 100%;" id="type" {{ $disabled }}>
							                     	<option value="{{ $data->type_schema }}">Object ID</option>
					                     			</select>
					                     			<br><br>
		                     					@else
		                     						@php $disabled = "" @endphp
		                     						<select class="form-control select2 select_type" name="field[{{ $data->field }}][value]" style="width: 100%;" id="type" {{ $disabled }}>
							                     		@isset($data_opsigroup) 
							                     			@foreach($data_opsigroup as $databaru)
							                     				<optgroup label="{{ $databaru->option_grup }}">
							                     					@isset($data_opsi) 
							                     						@foreach($data_opsi as $opsi) 
							                     						@if($opsi->skemaopsigroup_id == $databaru->id) 
								                     						@if($data->type_schema == $opsi->name_opsi) 
								                     							<option value="{{ $data->type_schema }}" selected="selected">{{ $opsi->value_opsi }} (Current)</option>  
								                     						@else 
								                     							<option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}</option> 
								                     						@endif 
								                     					@endif  
								                     					@endforeach 
							                     					@endisset</optgroup>
							                     			@endforeach 
							                     		@endisset
					                     			</select>
					                     			<br><br>
		                     					@endif		
		                     				</div>
		                     				@if($data->type_schema != 'ObjectID')
		                     				<p class="add_array">
					                          <a class="remove_field">
					                            <button type="button" class="baten baten-danger"><i class="fa fa-remove"></i> Delete parents field</button>
					                          </a>
					                        </p>
					                        <p class="input_array">
                        					</p>
					                        @endif
		                    			</div>
		                    		@endif
		                      	@endforeach
		                    </div>
		                    <hr>
                  			<button type="button" class="add_field_button btn btn-primary" title="Add New Field"><i class="fa fa-plus"></i> Add New Parents Field</button>
                  			<button type="submit" class="btn btn-primary pull-right">Save Changes</button>
		                </div>
	            	</form>
	           	</div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
@endsection