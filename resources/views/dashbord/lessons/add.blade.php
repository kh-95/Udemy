@extends('dashbord.layout')

@section('title')
create new lesson

@endsection

@section('content')
<div class="col-md-12">

@if($errors->any())

<div class="alert alert-danger">
<ul>

@foreach($errors->all() as $error)

<li>{{$error}}

</li>

@endforeach

</ul>
</div>
@endif


{!! Form::open(['route' => 'admin.lessons.store', 'method' => 'post','files'=>true]) !!}
@csrf
@include('dashbord.lessons.form')

{!!Form::close()!!}




</div>

@endsection 