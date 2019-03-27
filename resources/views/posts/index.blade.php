@extends('layouts.app')

@section('content')

    <div class="col-md-6 offset-md-3">

        @component('components.card')
            @slot('title')
                <b><h1> Recent Posts: </h1></b>
            @endslot
            {{-- list of all posts --}}
            @foreach ($posts->reverse() as $post)
                @component('components.card')
                    @slot('title')
                        <b><h2>
                            <a href="{{ route('posts.show', ['post' => $post]) }}"> {{ $post->title }}
                        </a></h2></b>
                        <hr>
                        <p>Posted: {{ $post->created_at }}</p>
                        <p>By: <a href={{ route('profile.show', ['username'=>$post->user->username]) }}>
                            {{ "@".$post->user->username }}</p></a>
                    @endslot
                    <p>{{ $post->body }}</p>
                    <hr>
                    <p>{{ $post->claps }} claps!</p>
                @endcomponent
                <br>
            @endforeach
        @endcomponent

    </div>

@endsection
