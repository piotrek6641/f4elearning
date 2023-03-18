<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonComment extends Model
{
    use HasFactory;
    public function  Lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable=[
      'content',
      'user_id',
      'lesson_id'
    ];

}
