<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityBlock extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'body', 'footer'];
    public function getImgUrlAttribute(){
        return asset('/storage/'.str_replace("\\", "/", $this->image));
    }
}
