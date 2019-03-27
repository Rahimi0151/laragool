@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">

    @component('components.card')
        @slot('title')
            <h1>{{ $post->title }}</h1>
            <p>By: <a href={{ route('profile.show', ['username'=>$post->user->username]) }}>
                        {{ "@".$post->user->username }}</p>
                    </a>
                <p>Posted: {{ $post->created_at }}</p>
        @endslot
        <p>{{ $post->body }}</p>
        <hr>
        <p>{{ $post->claps }} claps! </p>
    @endcomponent

</div>

@endsection
