<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;

class LessonComment extends Model implements Likeable
{
    use Likes;
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
