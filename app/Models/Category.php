<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    protected $fillable=
        [
          'title'
        ];
}
