@extends('layouts.frontend.frontend-base')

            @section('title1')
                News details
            @endsection
            @section('title2')
                Blog single
            @endsection
            @section('title3')
                News details
            @endsection


@section('content')
<div class="col-lg-12 mb-5 mx-5">

    <div class="single-blog-item">
        <div  style="margin-left: 350px" >
            @if ($blog->feature_image)
            <img src="{{ asset('/featuresImages/' . $blog->feature_image->path) }}"  width="540" height="350" alt="..."
             >
            @else
                <img width="540px" height="350" src="images/blog/2.jpg" alt="" class="img-fluid rounded">
            @endif
        </div>


        <div class="blog-item-content bg-white p-5">
            <div class="blog-item-meta bg-gray py-1 px-2">
                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
            </div>

            <h2 class="mt-3 mb-4"><a href="blog-single.html">{{ $blog->title }}</a></h2>
            <p class="lead mb-4">{!!Str::limit( html_entity_decode($blog->content) ,20,'...')!!}</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>

            <h3 class="quote">A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</h3>

            <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>

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


</section>
@endsection
