<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "image",
        "type_id",
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->belongToMany('App\Models\Technology');
    }

}


