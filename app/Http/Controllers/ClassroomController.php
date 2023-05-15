<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        // $data = Student::all();
        // $classrooms = Classroom::with('student')->get();
        $data = Classroom::with('Student')->get();
        return view('Pages.Class', ['data' => $data]);
    }
}
