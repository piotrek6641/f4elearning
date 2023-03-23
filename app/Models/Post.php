<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;

class Post extends Model implements Likeable
{
    use Likes;
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

