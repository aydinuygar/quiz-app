@extends('layouts.app')

@section('title', $quiz->title)

@section('content')
    <h1>{{ $quiz->title }}</h1>
    <p>{{ $quiz->description }}</p>
    <a href="{{ route('questions.index', $quiz) }}">Show Questions</a>
@endsection
