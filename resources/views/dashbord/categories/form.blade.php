<div class="panel panel-flat">
									<div class="panel-heading">
@if(isset($category))

<h6 class="panel-title">Edit {{$category->name}}</h6>

@else

<h6 class="panel-title">Add new Category</h6>


@endif

<div class="heading-elements">
									
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Name: </label>
                                
<input type="text" class="form-control" name="name" value="{{isset($category)?$category->name:''}}">
<div class="panel-body">
<div class="form-group">
											<label>Image </label>
											<input type="file" class="form-control" name="image" value="{{isset($category)?$category->image:''}}">
										</div>

                                       



										<div class="text-right">
											<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-left13 position-right"></i></button>
										</div>
									</div
