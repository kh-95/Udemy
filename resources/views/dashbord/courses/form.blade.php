<div class="panel panel-flat">
									<div class="panel-heading">
@if(isset($course))

<h6 class="panel-title">Edit {{$course->name}}</h6>

@else

<h6 class="panel-title">Add new course</h6>


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
											<label>Price: </label>
											{!!Form::number('price',null,['class'=>'form-control'])!!}
										</div>

										<div class="form-group">
											<label>Short_description: </label>
											{!!Form::text('short_description',null,['class'=>'form-control']) !!}
										</div>
                                        <div class="form-group">
											<label>Description: </label>
											{!!Form::text('description',null,['class'=>'form-control']) !!}
										</div>

										
										
<div class="form-group">
<label>Select status:</label>
{!! Form::select('status',status(), null, ['placeholder' => 'select course status'])!!}

</div>



<div class="form-group">
											<label>Category: </label>
									{!! Form::select('category_id', categories(), null, ['placeholder' => 'Select Category']) !!}
										</div>

<div class="form-group">
											
										<div class="form-group col-md-12">
										<label class="text-semibold"> Course_img : </label>
										<div class="media no-margin-top">
											@if(isset($course))
											@if($course->image !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($course->image)}}"
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
