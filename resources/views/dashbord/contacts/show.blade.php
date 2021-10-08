@extends('dashbord.layout')

@section('title')
Show  Message
@endsection

@section('content')
				<!-- Basic initialization -->
                <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Show Messages</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
						You Can Show All  Messages And performs All operations like search , Edit , show And Delete
						</div>

						<table class="table datatable-button-init-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Message</th>
					
                                    <th>Date</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($contacts as $contact)
								<tr>
									<td>{{$contact->id}}</td>
									<td>{{$contact->message}}</td>
									<td>{{$contact->created_at}}</td>
								</tr>
								@endforeach
                                
							
                    
							</tbody>
						</table>
					</div>
					<!-- /basic initialization -->





@endsection
