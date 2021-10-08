<div class="panel panel-flat">
									<div class="panel-heading">
@if(isset($lesson))

<h6 class="panel-title">Edit {{$lesson->name}}</h6>

@else

<h6 class="panel-title">Add new lesson</h6>


@endif

<div class="heading-elements">
									
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Title: </label>
                                
										{!!Form::text('title',null,['class'=>'form-control']) !!}
</div>
                                        <div class="form-group">
											<label>Description: </label>
											{!!Form::text('description',null,['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
											<label>url: </label>
											{!!Form::text('url',null,['class'=>'form-control']) !!}
										</div>

                                        <div class="form-group">
											<label>Duration: </label>
											{!!Form::text('duration',null,['class'=>'form-control']) !!}
										</div>



<div class="form-group">
											<label>Course: </label>
									{!! Form::select('course_id', courses(), null, ['placeholder' => 'Select course']) !!}
										</div>

<div class="form-group">
											
				
			<div class="text-right">
	<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-left13 position-right"></i></button>
										</div>
</div>
</div>
