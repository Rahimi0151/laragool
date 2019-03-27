@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-md-4">

    @component('components.card')
        @slot('title')
            <h1>Create a New Post</h1>
        @endslot
        <form action="{{ route('posts.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input  type="title"
                        class="form-control form-control-lg"
                        id="title"
                        name="title"
                    >

                <label for="body">Body</label>
                <textarea
                        type="body"
                        class="form-control"
                        id="body"
                        name="body"
                        rows=10
                    ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    @endcomponent


</div>

@endsection
