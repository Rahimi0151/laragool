@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-md-4">

    <h1>Personal Info</h1>

    <form action="{{ route('profile.update') }}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email address</label>
        <input  type="email"
                class="form-control" 
                id="email" 
                name="email" 
                aria-describedby="emailHelp" 
                value="{{ $user->email }}"
            >
    </div>

    <div class="form-group">
        <label for="website">Website Address</label>
        <input  type="text"
                class="form-control" 
                id="website" 
                name="website" 
                aria-describedby="websiteHelp" 
                value="{{ $user->website }}"
            >
    </div>
    
    <h1>Social Accounts</h1>

    <div class="form-group">
        <label for="instagram-handle">Instagram ID</label>
        <input  type="text"
                class="form-control" 
                id="instagram-handle" 
                name="instagram-handle" 
                aria-describedby="instagramHelp" 
                placeholder="Example: @rahimi0151"
                value="{{ $user->instagram_handle }}"
            >
    </div>
    
    <div class="form-group">
        <label for="twitter-handle">Twitter ID</label>
        <input  type="text"
                class="form-control" 
                id="twitter-handle" 
                name="twitter-handle" 
                aria-describedby="twitterHelp" 
                value="{{ $user->twitter_handle }}"
            >
    </div>
    
    <div class="form-group">
        <label for="telegram-handle">Telegram ID</label>
        <input  type="text"
                class="form-control" 
                id="telegram-handle" 
                name="telegram-handle" 
                aria-describedby="telegramHelp" 
                value="{{ $user->telegram_handle }}"
            >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection