@extends('layouts.admin.admin-base')

@section('stylesheets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@section('ariane')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Post</span>
    </li>
    <li class="breadcrumb-item active"><span>New</span></li>
@endsection

@section('content')
    <div class="row">
        <div>
            <div class="card-body">
                <form method="post" action="{{ route('create-post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" />
                    </div>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary border-0 text-white" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
