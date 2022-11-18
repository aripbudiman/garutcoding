<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory,Sluggable;

    protected $table = 'post';

    protected $fillable = [
        'name'
    ];
    public $timestamps = true;


    public function PostComment(){
        return $this->hasMany(PostComment::class);
    }

    public function User(){
        return $this->belongsTo(User::class,'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'id_category');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
