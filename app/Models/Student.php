<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'NIS', 'kelas'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'kelas', 'id');
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'extracurricular_activities', 'siswa', 'extracurricular');
    }
}
