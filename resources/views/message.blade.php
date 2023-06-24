<!-- Name the file to extend -->
@extends('master')

<!-- Create the sections that yield blade template will reference -->
@section('title', $message->title)

<!-- Main Content Section here -->
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $message->title }}</h5>
            <p class="card-text">{{ $message->content }}</p>
            <div class="fw-light text-muted"><small>{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small></div>
        </div>
    </div>
@endsection