@extends('layouts.admin.admin-base')

@section('stylesheets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@section('ariane')
<li class="breadcrumb-item">
    <!-- if breadcrumb is single--><span>List</span>
</li>
<li class="breadcrumb-item active"><span>Category</span></li>

@endsection

@section('content')

    <div>
        @foreach ($categories as $category)
            <div class="list-group">
                <div href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $category->name }}</h5>
                </div>
                <p class="mb-1">{{ $category->desc }}</p>
                <div class="mt-3 d-flex justify-content-start">

                    <div class="p-2">
                        <form action="{{ route('edit', $category->id) }}" method="POST">
                            @csrf
                            <button class="border-0 px-4 py-1 text-white mx-3 " style="background-color: rgb(23, 162, 184)">Edit</button>
                        </form>
                    </div>
                    <div class="p-2" >
                        <form action="{{ route('delete',$category->id) }}" method="POST" >
                            @csrf
                            @method('delete')
                            <button class="border-0 px-3 py-1 text-white" style="background-color: rgb(252, 25, 17)">Delete</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
