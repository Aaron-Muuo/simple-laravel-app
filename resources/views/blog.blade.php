@extends('layouts.master')
@section('pageTitle', 'Blog')

@section('content')
<div class="row mt-5">
    <div class="row">
        <div class="col-12">
        <h3>Blog posts</h3>
        <p class="text-muted">My blog posts</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

        @if($posts->isEmpty())

        <div class="" style="display: flex;flex-direction:column; justify-content:center; align-items:center">
            <lottie-player src="{{asset('json/post.json')}}"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
            <p class="text-muted fs-small fw-bold">Nothing has been posted yet. You can create a post.</p>
            <a href="/signin" class="btn btn-sm btn-primary">Sign in</a>
        </div>
        

        @else
            @foreach ($posts as $post)

            <div class="card selectable">
                <div class="card-body">
                    <h3>{{$post->post_title}}</h3>
                    <p class="text-muted fs-small">Posted on: {{$post->created_at}}</p>
                    <p>{{$post->post_body}}</p>
                </div>
            </div>
                
            @endforeach
        @endif

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/lottie-player.min.js')}}"></script>
@endsection
