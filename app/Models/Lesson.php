<?php

namespace App\Models;

use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model implements Likeable
{
    use Likes;
    use HasFactory;
    public function  category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable=[
      'title',
      'description',
      'category_id',
        'link'
    ];

}
