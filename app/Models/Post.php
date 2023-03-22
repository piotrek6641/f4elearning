<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable=
        [
          'content',
            'title',
            'author_id',
            'category_id'
        ];
}

