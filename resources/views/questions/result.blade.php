@extends('layouts.app')

@section('title', 'Quiz Results')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h1>Quiz Results</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <span>Total Questions:</span>
                    <span>{{ $totalQuestions }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <span>Correct Answers:</span>
                    <span>{{ $correctAnswers }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($correctAnswers / $totalQuestions) * 100 }}%;" aria-valuenow="{{ ($correctAnswers / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <span>Wrong Answers:</span>
                    <span>{{ $wrongAnswers }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ ($wrongAnswers / $totalQuestions) * 100 }}%;" aria-valuenow="{{ ($wrongAnswers / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <span>Unanswered Questions:</span>
                    <span>{{ $unanswered }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($unanswered / $totalQuestions) * 100 }}%;" aria-valuenow="{{ ($unanswered / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <a href="{{ route('quizzes.index') }}" class="btn btn-primary mt-3">Back to Quizzes</a>
        </div>
    </div>
@endsection
