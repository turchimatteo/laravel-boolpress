@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>{{ $post->title }}</h1>

            <div class="mb-2"><strong>Slug:</strong>{{ $post->slug }}</div>

            <div class="mb-2"><strong>Categoria:</strong> {{ $post->category ? $post->category->name : 'nessuna' }}</div>

            {{-- <p>{{ $post->$content }}</p> --}}

            <div>
                <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}">Modifica post</a>
            </div>
    
            <div>
                <form action="{{ route('admin.post.destroy', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-danger">Cancella</button>
                </form>
            </div>
        </div>
    </section>
@endsection