<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CourseCode extends Model
{
    use HasFactory;
    public function __construct(array $attributes = [])
    {
        $this->creating([$this, 'onCreating']);
        parent::__construct($attributes);
    }

    protected $fillable = ['course_id', 'code', 'is_activated', 'result', 'user_id'];

    public function onCreating($row)
    {
        $row->setAttribute('code', rand(100000, 999999));
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
