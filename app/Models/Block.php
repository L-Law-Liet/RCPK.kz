<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $fillable = ['title_ru', 'title_kz', 'image', 'image_mobile', 'body_ru', 'body_kz'];
}
