<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationBlock extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'percent', 'info1', 'info2'];
    public function getImgUrlAttribute(){
        return asset('/storage/'.str_replace("\\", "/", $this->image));
    }
}
