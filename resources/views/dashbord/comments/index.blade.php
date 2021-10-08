@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>التعليق</th>
                                    <th>رقم _المستخدم </th>
									<th>رقم البوست</th>
									<th>التاريخ</th>
									
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($comments as $comment)
                            
								<tr>
									<td>{{$comment->id}}</td>
									<td><a href="#">{{$comment->comment}}</a></td>
									<td>{{$comment->user_id}}</td>
									<td>{{$comment->post_id}}</td>
									<td><span class="label label-success">{{$comment->created_at}}</span></td>
								
									<td>
									
									

									<a href="{{route('admin.comments.destroy',['id'=>$comment->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>

									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
