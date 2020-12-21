@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title', $profile->full_name)

@section('content')
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            @foreach($postsLatsTime as $post)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    {!! $post->content !!}
                                </p>
                            </div>
                            <img class="img-fluid" src="{{$post->image_url}}" alt="Card image cap">
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span>
                               <b>{{$post->count_likes}}</b>
                                                <i class="bx bxs-heart"></i>
                                                <b>{{$post->count_comments}}</b>
                                                <i class="bx bxs-comment"></i>
                            </span>
                            <a href="{{$post->link}}" class="btn btn-light-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Basic Card types section end -->
@endsection
