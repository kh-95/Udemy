@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Comment</th>
                                   
									<th>Rate</th>
									<th>user_id</th>
                                    <th>course_id</th>
                                
                                    <th>Date</th>
                                    
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($reviews as $review)
                            
								<tr>
									<td>{{$review->id}}</td>
									<td><a href="#">{{$review->comment}}</a></td>
									<td>{{$review->rate}}</td>
                                    <td>{{$review->user_id}}</td>
                                    <td>{{$review->course_id}}</td>
                                    
                                    
									<td><span class="label label-success">{{$review->created_at}}</span></td>
								
									<td>
									
									

									<a href="{{route('admin.reviews.destroy',['id'=>$review->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>
                                  
									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
