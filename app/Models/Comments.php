<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    public $table = 'post_comment';

    public function User(){
        return $this->belongsTo(User::class,'author_id');
    }
}