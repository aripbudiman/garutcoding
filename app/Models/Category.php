<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name','logo'
    ];
    public $timestamps = false;

    public function posts(){
        return $this->hasMany(Post::class,'id_category');
    }
}
