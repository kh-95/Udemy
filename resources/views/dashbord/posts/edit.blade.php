@extends('dashbord.layout')

@section('title')
Edit post
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

				        	<form action="{{route('admin.posts.update',['id'=>$post->id])}}" method="get">
					          @csrf
							  @include('dashbord.posts.form')
				            </form>
						</div>
@endsection
