@extends('layouts.app')

@section('title', 'Questions for Quiz: ' . $quiz->title)

@section('content')
    <h1>Questions for Quiz: {{ $quiz->title }}</h1>

    <ul>
        @foreach ($questions as $question)
            <li>{{ $question->question_text }}</li>
        @endforeach
    </ul>
@endsection
