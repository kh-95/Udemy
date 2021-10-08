@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>user_id</th>
                                    <th>Post_id</th>
									<th>Register_course</th>
									<th>التاريخ</th>
									
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($enrollments as $enrollment)
                            
								<tr>
									<td>{{$enrollment->id}}</td>
									<td><a href="#">{{$enrollment->user_id}}</a></td>
									<td>{{$enrollment->post_id}}</td>
									<td>{{$enrollment->is_confirmed}}</td>
									<td><span class="label label-success">{{$enrollment->created_at}}</span></td>
								
									<td>
									
									
									<a href="{{route('admin.enrollments.edit',['id'=>$enrollment->id])}}">
									<i class="icon-pencil"></i>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
