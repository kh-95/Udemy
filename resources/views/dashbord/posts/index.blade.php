@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Image</th>
									<th>Description</th>
									<th>Category_id</th>
									<th>Date</th>
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($posts as $post)
								<tr>
									<td>{{$post->id}}</td>
									<td><a href="#">{{$post->title}}</a></td>
									<td>{{$post->image}}</td>
									<td>{{$post->description}}</td>
									<td><span class="label label-success">{{$post->category_id}}</span></td>
									<td>{{$post->created_at}}</td>
									
									<td>
									
									<a href="{{route('admin.posts.edit',['id'=>$post->id])}}">
									<i class="icon-pencil"></i>
									</a>

									<a href="{{route('admin.posts.destroy',['id'=>$post->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
