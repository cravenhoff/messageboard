<!-- Name the file to extend -->
@extends('master')

<!-- Create the sections that yield blade template will reference -->
@section('title', 'Home - Message Board')

<!-- Main Content Section here -->
@section('content')
    <div>
        <h4>Post a Message:</h4>
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
    </div>

    <div>
        <h4>Recent Messages:</h4>
        @foreach ($messages as $message)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $message->title }}</h5>
                    <p class="card-text">{{ $message->content }}</p>
                    <div class="fw-light text-muted"><small>{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small></div>
                    <a href="/message/{{ $message->id }}" class="card-link">View</a>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection