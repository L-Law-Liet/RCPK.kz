<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderSlide extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image'];
    public function getImgUrlAttribute(){
        return asset('/storage/'.str_replace("\\", "/", $this->image));
    }
}
