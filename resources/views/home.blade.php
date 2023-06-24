<!-- Name the file to extend -->
@extends('master')

<!-- Create the sections that yield blade template will reference -->
@section('title', 'Home - Message Board')

<!-- Main Content Section here -->
@section('content')
    <h5>Recent Messages:</h5>
    <ul>
        @foreach ($messages as $message)
            <li>{{ $message->title }} - {{ $message->content }}</li>
        @endforeach
    </ul>
@endsection