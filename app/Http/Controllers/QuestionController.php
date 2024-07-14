<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Quiz $quiz)
    {
        $questions = $quiz->questions;

        return view('questions.index', compact('quiz', 'questions'));
    }

    public function submit(Request $request, Quiz $quiz)
{
    $correctAnswers = 0;
    $wrongAnswers = 0;
    $unanswered = 0;
    $totalQuestions = $quiz->questions->count();

    foreach ($quiz->questions as $question) {
        $answer = $request->input("answers.{$question->id}");
        if ($answer === null) {
            $unanswered++;
        } elseif ($answer == $question->correct_option) {
            $correctAnswers++;
        } else {
            $wrongAnswers++;
        }
    }

    return view('questions.result', compact('correctAnswers', 'wrongAnswers', 'unanswered', 'totalQuestions'));
}

}
