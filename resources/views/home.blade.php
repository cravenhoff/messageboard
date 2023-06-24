<!-- Name the file to extend -->
@extends('master')

<!-- Create the sections that yield blade template will reference -->
@section('title', 'Home - Message Board')

<!-- Main Content Section here -->
@section('content')
    <h5>Post a Message:</h5>
    <form action="/create" method="post" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h5>Recent Messages:</h5>
    <ul>
        @foreach ($messages as $message)
            <li class="mb-3">
                <strong>{{ $message->title }}</strong><br> 
                {{ $message->content }} <br>
                {{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
            </li>
        @endforeach
    </ul>
@endsection