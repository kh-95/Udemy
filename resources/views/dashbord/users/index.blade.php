@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>الاسم</th>
									<th>الايميل</th>
									<th>رقم الجوال</th>
									<th>الوظيفه</th>
									<th>عدد التعليقات</th>
									<th>الحاله</th>
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($users as $user)
								<tr>
									<td>{{$user->id}}</td>
									<td><a href="#">{{$user->name}}</a></td>
									<td>{{$user->email}}</td>
									<td>{{$user->phone}}</td>
									<td><span class="label label-success">{{$user->role}}</span></td>
									<td>{{$user->comments->count()}}</td>
									<td><span class="label label-success" >{{$user->is_active}}</span></td>
									<td>
									
									<a href="{{route('admin.users.edit',['id'=>$user->id])}}">
									<i class="icon-pencil"></i>
									</a>

									<a href="{{route('admin.users.destroy',['id'=>$user->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
