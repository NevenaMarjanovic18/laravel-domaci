<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'from', 'to', 'student_group_id', 'classroom_id'];

    public function group()
    {
        return $this->hasMany(StudentGroup::class);
    }
}
