@extends('dashbord.layout')


@section('content')
				
              
						
						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>First_name</th>
                                    <th>Last_name</th>
									<th>Email</th>
									<th>Phone</th>
                                    <th>Message</th>
                                    <th>User_no</th>
                                    <th>Date</th>
                                    
                                    <th>العمليات</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($messages as $message)
                            
								<tr>
									<td>{{$message->id}}</td>
									<td><a href="#">{{$message->first_name}}</a></td>
									<td>{{$message->last_name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>{{$message->message}}</td>
									<td><span class="label label-success">{{$message->created_at}}</span></td>
								
									<td>
									
									

									<a href="{{route('admin.messages.destroy',['id'=>$message->id])}}">
										<i class="icon-trash text-danger"></i>
									</a>
                                    <a href="{{route('admin.messages.show',['id'=>$message->id])}}">
										<button class="form-control" >View Message</button>
									</a>
									
									
									</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					





@endsection
