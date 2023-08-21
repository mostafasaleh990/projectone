<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonImage extends Model
{
    use HasFactory;

    protected $table = 'lesson_images';

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

}
