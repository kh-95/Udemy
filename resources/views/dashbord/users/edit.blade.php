@extends('dashbord.layout')

@section('title')
Edit user
@endsection

@section('content')
<div class="col-md-12">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

				        	<form action="{{route('admin.users.update',['id'=>$user->id])}}" method="get">
					          @csrf
							  @include('dashbord.Users.form')
				            </form>
						</div>
@endsection
