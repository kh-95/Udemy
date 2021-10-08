@extends('dashbord.layout')

@section('title')
Edit Lesson
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

				        	<form action="{{route('admin.lessons.update',['id'=>$lesson->id])}}" method="get">
					          @csrf
							  @include('dashbord.lessons.form')
				            </form>
						</div>
@endsection
