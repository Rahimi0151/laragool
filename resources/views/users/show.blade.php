@extends('layouts.app')

@section('content')

    <div class="col-md-6 offset-md-3">

        @component('components.card')
            @slot('title')
                <b><h1> All Users </h1></b>
            @endslot
            {{-- list of all posts --}}
            @foreach ($user->reverse(0) as $user)
                @component('components.card')
                    @slot('title')
                        <b><h2>
                            <a href="{{ route('user.show', ['user' => $user]) }}"> {{ $user->username }}
                        </a></h2></b>

                        {{-- user can delete his/her posts --}}
                        @if ($user->id == Auth::id())
                            <a href="{{ route('posts.edit', ['post' => $post]) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        @endif

                        <hr>
                        <p>Posted: {{ $post->created_at }}</p>
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
