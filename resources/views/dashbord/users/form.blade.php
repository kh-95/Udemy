<div class="panel panel-flat">
									<div class="panel-heading">
@if(isset($user))

<h6 class="panel-title">Edit {{$user->name}}</h6>

@else

<h6 class="panel-title">Add new user</h6>


@endif

<div class="heading-elements">
									
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Your name: </label>
                                
										{!!Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
											<label>Your Email: </label>
											{!!Form::email('email',null,['class'=>'form-control'])!!}
										</div>

										<div class="form-group">
											<label>Your Phone: </label>
											{!!Form::tel('phone',null,['class'=>'form-control']) !!}
										</div>
                                        <div class="form-group">
											<label>Your password: </label>
											{!!Form::password('password',null,['class'=>'form-control']) !!}
										</div>

										
										<div class="form-group">
											<label>Repeat Your password: </label>
											{!!Form::password('password_confirmation',null,['class'=>'form-control']) !!}
										</div>
<div class="form-group">
<label>Select status:</label>
{!! Form::select('status',status(), null, ['placeholder' => 'select user status'])!!}

</div>
<div class="form-group">
											<label>Select Role: </label>
											{!! Form::select('role', roles(), null, ['placeholder' => 'Select User Role']) !!}
										</div>
										<div class="form-group col-md-12">
										<label class="text-semibold"> User_img : </label>
										<div class="media no-margin-top">
											@if(isset($user))
											@if($user->image !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($user->image)}}"
                                     style="width: 58px; height: 58px; border-radius: 2px;" alt=""></a>
                </div>
            @endif
		@endif
		<div class="media-body">
            <input type="file" class="file-styled" name="image" data-height="200">
            <span class="help-block">الصيغ المسموح بها : gif, png, jpg , jpeg</span>
        </div>
    </div>
</div>

			<div class="text-right">
	<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-left13 position-right"></i></button>
										</div>
</div>
</div>
