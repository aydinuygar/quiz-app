@extends('layouts.app')

@section('title', 'Quiz Results')

@section('content')
    <h1>Quiz Results</h1>
    <p>Total Questions: {{ $totalQuestions }}</p>
    <p>Correct Answers: {{ $correctAnswers }}</p>
    <p>Wrong Answers: {{ $wrongAnswers }}</p>
    <p>Unanswered Questions: {{ $unanswered }}</p>
    <a href="{{ route('quizzes.index') }}" class="btn btn-primary">Back to Quizzes</a>
@endsection
