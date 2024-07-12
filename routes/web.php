<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;

// Quiz listesi
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

// Quiz detayı
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');

// Quiz'e ait soruların listesi
Route::get('/quizzes/{quiz}/questions', [QuestionController::class, 'index'])->name('questions.index');
