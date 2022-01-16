<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 可允許使用者自行修改
    protected $fillable = [
        "name",
        "email",
        "sex",
        "personality",
    ];
}
