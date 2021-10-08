<div class="panel panel-flat">
									<div class="panel-heading">


<h6 class="panel-title">Edit {{$enrollment->id}}</h6>






<div class="heading-elements">
									
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>uuser_id: </label>
                                
										{!!Form::text('user_id',null,['class'=>'form-control']) !!}
</div>
                                        <div class="form-group">
											<label>course_id: </label>
											{!!Form::text('course_id',null,['class'=>'form-control']) !!}
                                        </div>
                                        




<div class="form-group">
<label>Confirm_Registeration:</label>
{!! Form::select('is_confirmed',status(), null, ['placeholder' => 'Confirm_Registeration'])!!}

</div>

<div class="form-group">
											
				
			<div class="text-right">
	<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-left13 position-right"></i></button>
										</div>
</div>
</div>
