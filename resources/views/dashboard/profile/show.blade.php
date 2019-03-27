@extends('layouts.app')

@section('content')

    <div class="col-md-6 offset-md-3">
        @component('components.card')
            @slot('title')
                <b><h1> {{ $user->username }} </h1></b>
            @endslot
            <ul>
                <li>
                    <b>Website:</b>
                    <a href="http://{{ $user->website }}">
                        {{ $user->website }}
                    </a>
                </li>
                <li>
                    <b>Email:</b>
                    <a href="mailto:{{ $user->email }}">
                        {{ $user->email }}
                    </a>
                </li>
                <li>
                    <b>
                        Twitter ID:
                    </b>
                    <a href="http://twitter.com/{{ $user->twitter_handle }}">
                        {{ "@".$user->twitter_handle }}
                    </a>
                </li>
                <li>
                    <b>
                        Telegram ID:
                    </b>
                    <a href="http://telegram.me/{{ $user->telegram_handle }}">
                        {{ "@".$user->telegram_handle }}
                    </a>
                </li>
                <li>
                    <b>Instagram ID:</b>
                    <a href="http://instagram.com/{{ $user->instagram_handle }}">
                        {{ "@".$user->instagram_handle }}
                    </a>
                </li>
            </ul>
        @endcomponent
            <br><hr><br>
        @component('components.card')
            @slot('title')
                <b><h1> Recent Posts: </h1></b>
            @endslot
            {{-- list of all posts --}}
            @foreach ($user->post->reverse(0) as $post)
                @component('components.card')
                    @slot('title')
                        <b><h2>
                            <a href="{{ route('posts.show', ['post' => $post]) }}"> {{ $post->title }}
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
