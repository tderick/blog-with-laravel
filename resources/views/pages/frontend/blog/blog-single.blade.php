@extends('layouts.frontend.frontend-base')


@section('content')


    <div class="main-wrapper ">
        <section class="section blog-wrap bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <div  >
                                        @if ($blog->feature_image)
                                        <img src="{{ asset('/featuresImages/' . $blog->feature_image->path) }}" width="730" height="500" alt="..."
                                        >
                                        @else
                                            <img width="730px" height="500" src="{{ asset('../../images/blog/2.jpg') }}" alt="" class="img-fluid rounded">
                                        @endif
                                    </div>


                                    <div class="blog-item-content bg-white p-5">
                                        <div class="blog-item-meta bg-gray py-1 px-2">
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                                            <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                                        </div>

                                        <h2 class="mt-3 mb-4"><a href="blog-single.html">{{ $blog->title }}</a></h2>
                                        <p class="lead mb-4">{!!( html_entity_decode($blog->content))!!}</p>
                                        <div class="tag-option mt-5 clearfix">
                                            <ul class="float-left list-inline">
                                                <li>Tags:</li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Advancher</a></li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Landscape</a></li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
                                            </ul>

                                            <ul class="float-right list-inline">
                                                <li class="list-inline-item"> Share: </li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
