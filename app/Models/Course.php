<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];

    public function tests(){
        return $this->hasMany(Test::class);
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }
}
