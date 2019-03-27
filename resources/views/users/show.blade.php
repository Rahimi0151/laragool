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

                        <hr>
                @endcomponent
                <br>
            @endforeach
        @endcomponent

    </div>

@endsection
