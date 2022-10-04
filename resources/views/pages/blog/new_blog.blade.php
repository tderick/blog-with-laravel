@extends('layouts.admin.admin-base')

@section('stylesheets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@section('ariane')
<li class="breadcrumb-item">
    <!-- if breadcrumb is single--><span>New</span>
</li>
<li class="breadcrumb-item active"><span>Category</span></li>

@endsection

@section('content')
    <div class="mx-5 my-3">
        <form action="{{route('verification')}}" method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Category name" class="my-3">
            <br/>
            <textarea class="my-3 form-control" name="desc" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <br/>
            <button type="submit" class="px-4 py-2 text-white border-0" style='background-color:rgb(23, 162, 184)'>Submit</button>
        </form>
    </div>
@endsection
