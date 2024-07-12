<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions'; // Veritabanındaki tablo adı

    protected $fillable = [
        'quiz_id',
        'question_text',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_option',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
