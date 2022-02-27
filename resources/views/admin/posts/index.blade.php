@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>Lista dei posts</h1>

            <div class="row row-cols-3">
                @foreach ($posts as $post)
                    {{-- Single Post --}}
                    <div class="col">
                        <div class="card mt-2">
                            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->title }}</h5>
                              <p class="card-text">{{ Str::substr($post->content, 0, 70) }} ...</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                {{-- End Single Post --}}
                @endforeach

            </div>
        </div>
    </section>
@endsection