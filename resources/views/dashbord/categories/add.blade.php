@extends('dashbord.layout')

@section('title')
create new category

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


<form action ="{{route('admin.categories.store')}}" enctype="multipart/form-data" method="post">
@csrf
@include('dashbord.categories.form')


</form>




</div>

@endsection 