<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_kz', 'title_en', 'image', 'paragraph1', 'paragraph1_kz', 'paragraph1_en', 'paragraph2'];
}
