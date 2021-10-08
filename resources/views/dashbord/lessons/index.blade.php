@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Url</th>
									<th>Duration</th>
                                    
                                    <th>Course_id</th>
									 <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($lessons as $lesson)
								<tr>
									<td>{{$lesson->id}}</td>
                                    <td><a href="#">{{$lesson->title}}</a></td>
									<td>{{$lesson->description}}</td>
									<td>{{$lesson->url}}</td>
                                    <td>{{$lesson->duration}}</td>
									
                                     <td>{{$lesson->course_id}}</td>
									
									<td>
									
									<a href="{{route('admin.lessons.edit',['id'=>$lesson->id])}}">
									<i class="icon-pencil"></i>
									</a>

									<a href="{{route('admin.lessons.destroy',['id'=>$lesson->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
