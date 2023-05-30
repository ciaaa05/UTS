@extends('layout.master')
@section('title', 'Home')

@section('content')
    <div class="mx-auto" style="width:90vw;">
        <div class="highlight mb-2" style="border:5px black solid">
            <div class="card px-5 py-1" style="border:none">
                <a href="/detail/{{ $highlight->id }}" style="text-decoration: none;">
                    <div class="d-flex flex-row">
                        <div class="">
                            <img src="{{ $highlight->image }}" class="img-fluid" alt="...">
                        </div>
                        <div class="">
                            <div class="card-body">
                                <h5 class="pb-2 text-black" style="border-bottom:2px black solid; width:fit-content;">
                                    {{ $highlight->subtitle }}</h5>
                                <h1 class="text-black">{{ $highlight->title }}</h1>
                                <p class="card-text text-black">{{ $highlight->description }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="latest-review mb-2" style="border:5px black solid">
            <h6 class="pb-2 mx-5 mt-2" style="border-bottom:2px black solid; width:fit-content;">LATEST BOOK REVIEWS</h6>
            <div class="d-flex flex-row px-5 py-1">
                @foreach ($latests as $latest)
                    <a href="/detail/{{ $latest->id }}" style="text-decoration: none">
                        <div class="card me-5" style="width: 18rem; border:none;">
                            <img src={{ $latest->image }} class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $latest->title }}</h5>
                                <p class="card-text">{{ $latest->title }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="series-review mb-2" style="border:5px black solid">
            <h6 class="pb-2 mx-5 mt-2" style="border-bottom:2px black solid; width:fit-content;">Book Series Review</h6>
            <div class="row px-5 py-1">
                @foreach ($posts as $post)
                <div class="col-4 mb-5">
                    <a href="/detail/{{ $post->id }}" style="text-decoration: none">
                        <div class="card me-5" style="width: 24rem; border:none;">
                            <img src={{ $post->image }} class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </div>
                        </div>
                    </a>

                    <a href="/detail/{{ $post->id }}" style="text-decoration: none">
                        <button type="button" class="btn btn-light" style="border:grey 1px solid">Read post</button>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
