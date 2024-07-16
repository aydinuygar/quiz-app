@extends('layouts.app')

@section('title', $quiz->title)

@section('jumbotron')
    <div class="jumbotron mt-4">
        <h1 class="display-4">{{ $quiz->title }}</h1>
        <p class="lead">{{ $quiz->description }}</p>
    </div>
@endsection

@section('content')
    <a href="{{ route('questions.index', $quiz) }}" class="btn btn-primary">Show Questions</a>
@endsection
