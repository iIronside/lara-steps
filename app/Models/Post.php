<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'categories_id'
        ];

    protected $table = 'posts';

    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }
}
