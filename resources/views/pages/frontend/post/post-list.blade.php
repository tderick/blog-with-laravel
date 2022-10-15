
@extends('layouts.frontend.frontend-base')

@section('content')
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-6 col-md-6 mb-5">

                        <div class="blog-item">
                            <div class="blog-item">
                                @if ($post->feature_image)
                                    <img src="{{ asset('/featuresImages/' . $post->feature_image->path) }}"  width="540" height="350" alt="..."
                                     >
                                @else
                                    <img width="540" height="350" src="images/blog/2.jpg" alt="" class="img-fluid rounded">
                                @endif



                                <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray py-1 px-2">
                                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                                        {{-- <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span> --}}
                                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                                    </div>

                                    <h3 class="mt-3 mb-3"><a href="{{ route('detail',$post->slug) }}">{{ $post->title }}</a></h3>
                                    <p class="text-muted fs-5"> {{ $post->author->name }} </p>
                                    <p class="mb-4">{!!Str::limit( html_entity_decode($post->content) ,20,'...')!!}</p>
                                    <a href="{{route('detail',$post->slug)}}" class="btn btn-small btn-primary btn-main btn-round-full">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @include('includes.frontend.number-ppage')
        </div>
    </section>

@endsection
