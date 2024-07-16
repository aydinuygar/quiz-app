@extends('layouts.app')

@section('title', 'Quiz List')

@section('jumbotron')
    <div class="jumbotron mt-4">
        <h1 class="display-4">Quiz Application</h1>
        <p class="lead">Welcome to the Quiz Application. Test your knowledge with various quizzes.</p>
        <hr class="my-4">
        <p>Select a quiz from the list below to get started.</p>
    </div>
@endsection

@section('content')
    <h1>Quiz List</h1>

    <div class="row">
        @foreach ($quizzes as $quiz)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $quiz->title }}</h5>
                        <p class="card-text">{{ $quiz->description }}</p>
                        <a href="{{ route('quizzes.show', $quiz) }}" class="btn btn-primary">Start Quiz</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
