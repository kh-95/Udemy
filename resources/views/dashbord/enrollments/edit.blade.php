@extends('dashbord.layout')

@section('title')
Edit Enrollment
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

				        	<form action="{{route('admin.enrollments.update',['id'=>$enrollment->id])}}" method="get">
					          @csrf
							  @include('dashbord.enrollments.form')
				            </form>
						</div>
@endsection
