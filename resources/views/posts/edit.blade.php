@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">

    @component('components.card')
        @slot('title')
            <h1>Update Post</h1>
        @endslot
        <form action="{{ route('posts.update', ['post' => $post]) }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input  type="title"
                        class="form-control form-control-lg"
                        id="title"
                        value="{{ $post->title }}"
                        name="title"
                    >

                <label for="body">Body</label>
                <textarea
                        type="body"
                        class="form-control"
                        id="body"
                        name="body"
                        rows=10
                    >{{ $post->body }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            @if ($post->user->id == Auth::id())
                <a href="{{ route('posts.destroy', ['post' => $post]) }}">
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </a>
            @endif

        </form>
    @endcomponent


</div>

@endsection
