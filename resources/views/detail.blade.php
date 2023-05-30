@extends('layout.master')
@section('title', 'Detail Post')

@section('content')
    <div class="container-fluid mx-auto" style="width:80vw;">
        <h6 class="pb-2 text-black" style="border-bottom:2px black solid; width:fit-content;">
            {{ $post->subtitle }}</h6>

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>

        <div class="d-flex flex-row">
            <p>By <span style="font-weight:bold">{{ $post->detail->author }}</span> |&nbsp;</p>
            <p> {{ date('j F, Y', strtotime($post->date)) }} &nbsp;&nbsp;</p>
            <p class="text-white bg-primary py-1 px-3 rounded"> {{ $post->detail->reading_time }}</p>
        </div>

        <img src="{{ $post->image }}" style="width: 100%; height:30vw" alt="">

        <div>
            <a href="https://www.linkedin.com/">linked in</a>
            <a href="https://www.twitter.com/">twitter</a>
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://www.instagram.com/">instagram</a>
        </div>

        <p>{{ $post->detail->content }}</p>

        <h6>Video Section</h6>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/HqAMb6kqlLs" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

    </div>

@endsection
