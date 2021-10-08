@extends('dashbord.layout')

@section('title')
Edit Course
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

				        	<form action="{{route('admin.courses.update',['id'=>$course->id])}}" method="get">
					          @csrf
							  @include('dashbord.courses.form')
				            </form>
						</div>
@endsection
