@extends('layouts.admin.admin-base')

@section('stylesheets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="row">
        <div>
            <div class="card-body">
                <form method="post" action="{{ route('name', $post->slug) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title"
                            value="{{ $post->title }}" />
                    </div>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="content">{{ $post->content }}</textarea>
                    </div>
                    <button type="submit">Save</button>
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
