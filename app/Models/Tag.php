<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=['tag','user_id','post_id'];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
