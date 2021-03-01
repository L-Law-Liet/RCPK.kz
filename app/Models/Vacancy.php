<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_kz', 'title_en', 'salary', 'body', 'body_kz', 'body_en'];
}
