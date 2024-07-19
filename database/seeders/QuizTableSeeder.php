<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use Faker\Factory as Faker;

class QuizTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($j = 1; $j <= 3; $j++) { // 3 Quiz oluştur
            // Quiz oluştur
            $quiz = Quiz::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'time_limit' => 10 // dakika cinsinden zaman limiti
            ]);

            // Quiz'e ait 10 adet Question oluştur
            for ($i = 1; $i <= 10; $i++) {
                Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $faker->sentence . "?", // Faker ile rastgele soru cümlesi
                    'option1' => $faker->word, // Faker ile rastgele kelime
                    'option2' => $faker->word, // Faker ile rastgele kelime
                    'option3' => $faker->word, // Faker ile rastgele kelime
                    'option4' => $faker->word, // Faker ile rastgele kelime
                    'correct_option' => "Option A" // Örnek olarak her sorunun doğru cevabını A olarak atıyoruz
                ]);
            }
        }
    }
}
