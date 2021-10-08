<div class="panel panel-flat">
									<div class="panel-heading">
@if(isset($post))

<h6 class="panel-title">Edit {{$post->name}}</h6>

@else

<h6 class="panel-title">Add new post</h6>


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
											{!!Form::text('description',null,['class'=>'form-control'])!!}
										</div>

										

										
										

<div class="form-group">
											<label>Select Category: </label>
											{!! Form::select('category_id', categories(), null, ['placeholder' => 'Select Category']) !!}
										</div>
										<div class="form-group col-md-12">
										<label class="text-semibold"> Post_img : </label>
										<div class="media no-margin-top">
											@if(isset($post))
											@if($post->image !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($post->image)}}"
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
