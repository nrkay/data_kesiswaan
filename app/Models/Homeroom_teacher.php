<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeroom_teacher extends Model
{
    use HasFactory;
    public function class()
    {
        return $this->hasMany(Classroom::class, 'wali_kelas', 'id');
    }
}
