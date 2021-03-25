<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockGoals extends Model
{
    use HasFactory;
    protected $fillable = ['body_ru', 'body_kz', 'block_id'];
}
