@extends('layouts.app')

@section('title', 'Quiz List')

@section('content')
    <h1>Quiz List</h1>

    <ul>
        @foreach ($quizzes as $quiz)
            <li><a href="{{ route('quizzes.show', $quiz) }}">{{ $quiz->title }}</a></li>
        @endforeach
    </ul>
@endsection
