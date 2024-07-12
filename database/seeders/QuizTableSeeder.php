<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizTableSeeder extends Seeder
{
    public function run()
    {
        // Quiz oluştur
        $quiz = Quiz::create([
            'title' => 'Sample Quiz',
            'description' => 'This is a sample quiz.'
        ]);

        // Quiz'e ait 10 adet Question oluştur
        for ($i = 1; $i <= 10; $i++) {
            Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => "Question $i?",
                'option1' => "Option A for Question $i",
                'option2' => "Option B for Question $i",
                'option3' => "Option C for Question $i",
                'option4' => "Option D for Question $i",
                'correct_option' => "Option A" // Örnek olarak her sorunun doğru cevabını A olarak atıyoruz
            ]);
        }
    }
}
