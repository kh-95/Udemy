@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>الاسم</th>
									<th>الصورة </th>
									
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($categories as $category)
								<tr>
									<td>{{$category->id}}</td>
									<td><a href="#">{{$category->name}}</a></td>
									<td>{{$category->image}}</td>
									
								
									<td>
									
									<a href="{{route('admin.categories.edit',['id'=>$category->id])}}">
									<i class="icon-pencil"></i>
									</a>

									<a href="{{route('admin.categories.destroy',['id'=>$category->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
