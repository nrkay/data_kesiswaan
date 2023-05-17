<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Classroom extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasMany(Student::class, 'kelas', 'id');
    }

    public function homeroom_teacher()
    {
        return $this->belongsTo(Homeroom_teacher::class, 'wali_kelas', 'id');
    }
}
