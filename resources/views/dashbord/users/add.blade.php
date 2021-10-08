@extends('dashbord.layout')

@section('title')
create new user

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


{!! Form::open(['route' => 'admin.users.store', 'method' => 'post','files'=>true]) !!}
@csrf
@include('dashbord.users.form')

{!!Form::close()!!}




</div>

@endsection 