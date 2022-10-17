@extends('layouts.admin.admin-base')

@section('stylesheets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@section('ariane')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>List</span>
    </li>
    <li class="breadcrumb-item active"><span>Posts</span></li>
@endsection

@section('content')
    <div>
        @foreach ($posts as $post)
            <div class="list-group mb-3">
                <div href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                    </div>

                    <div class="mt-3 d-flex justify-content-start">

                        <div class="p-2">

                            <a class="border-0 px-4 py-1 text-white mx-3 btn" href="{{ route('update-post', $post->slug) }}"
                                style="background-color: rgb(23, 162, 184)">Edit</a>

                        </div>
                        <div class="p-2">
                            <form action="{{ route('delete-post', $post->id) }}" method="POST">
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
