@extends('layouts.app')

@section('content')

    <div class="col-md-6 offset-md-3">


            @component('components.card')
            @slot('title')
                <b><h1> All Users </h1></b>
            @endslot
            {{-- list of all posts --}}
            @foreach ($users->reverse(0) as $user)
                <p>
                    <a href="{{ route('profile.show', ['username' => $user->username]) }}">
                        {{ $user->username }}
                    </a>
                </p>
            @endforeach
        @endcomponent

    </div>

@endsection
