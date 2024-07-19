@extends('layouts.app')

@section('title', 'Questions for Quiz: ' . $quiz->title)

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $quiz->title }}</h1>
                <p>{{ $quiz->description }}</p>
                @if ($quiz->time_limit)
                    <div class="alert alert-info" role="alert">
                        Time Limit: <span id="countdown">{{ $quiz->time_limit }}:00</span> minutes
                    </div>
                @endif

                <form id="quiz-form" action="{{ route('questions.submit', $quiz) }}" method="POST">
                    @csrf
                    <div class="row">
                        @foreach ($questions as $question)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
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
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit Answers</button>
                </form>
            </div>
        </div>
    </div>

    @if ($quiz->time_limit)
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var timeLimit = {{ $quiz->time_limit }};
                var countdown = timeLimit * 60;
                var countdownElement = document.getElementById('countdown');

                var timerInterval = setInterval(function() {
                    countdown--;
                    var minutes = Math.floor(countdown / 60);
                    var seconds = countdown % 60;
                    countdownElement.textContent = minutes + ":" + (seconds < 10 ? '0' : '') + seconds;

                    if (countdown <= 0) {
                        clearInterval(timerInterval);
                        document.getElementById('quiz-form').submit();
                    }
                }, 1000);
            });
        </script>
    @endif
@endsection
