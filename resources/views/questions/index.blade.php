@extends('layouts.app')

@section('title', 'Questions for Quiz: ' . $quiz->title)

@section('content')
    <h1>Questions for Quiz: {{ $quiz->title }}</h1>

    <form action="{{ route('questions.submit', $quiz) }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div class="question">
                <p>{{ $question->question_text }}</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option1_{{ $question->id }}" value="Option A">
                    <label class="form-check-label" for="option1_{{ $question->id }}">
                        {{ $question->option1 }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option2_{{ $question->id }}" value="Option B">
                    <label class="form-check-label" for="option2_{{ $question->id }}">
                        {{ $question->option2 }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option3_{{ $question->id }}" value="Option C">
                    <label class="form-check-label" for="option3_{{ $question->id }}">
                        {{ $question->option3 }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option4_{{ $question->id }}" value="Option D">
                    <label class="form-check-label" for="option4_{{ $question->id }}">
                        {{ $question->option4 }}
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary mt-3">Submit Answers</button>
    </form>
@endsection
