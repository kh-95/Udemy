@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Price</th>
									<th>Image</th>
									<th>Short_description</th>
                                    <th>Description</th>
                                    <th>Category_id</th>
									<th>Status</th>
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($courses as $course)
								<tr>
									<td>{{$course->id}}</td>
									<td><a href="#">{{$course->title}}</a></td>
									<td>{{$course->price}}</td>
									<td>{{$course->image}}</td>
									<td>{{$course->short_description}}</td>
                                    <td>{{$course->description}}</td>
                                    <td>{{$course->category_id}}</td>
									<td><span class="label label-success" >{{$course->is_active}}</span></td>
									<td>
									
									<a href="{{route('admin.courses.edit',['id'=>$course->id])}}">
									<i class="icon-pencil"></i>
									</a>

									<a href="{{route('admin.courses.destroy',['id'=>$course->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
