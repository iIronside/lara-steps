<?php

namespace App\Models;

use App\Models\Traits\Filterabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterabel;

    protected $fillable = [
        'title',
        'content',
        'image',
        'categories_id'
        ];

    protected $table = 'posts';



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }
}
