@extends('dashbord.layout')

@section('title')
Show {{$user->name}} Comments
@endsection

@section('content')
				<!-- Basic initialization -->
                <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Show {{$user->name}} Comments</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
						You Can Show All {{$user->name}} Comments And performs All operations like search , Edit , show And Delete
						</div>

						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>التعليق</th>
					
                                    <th>التاريخ</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($comments as $comment)
								<tr>
									<td>{{$comment->id}}</td>
									<td>{{$comment->comment}}</td>
									<td>{{$comment->created_at}}</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					</div>
					<!-- /basic initialization -->





@endsection
