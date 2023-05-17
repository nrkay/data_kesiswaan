<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::with('classroom', 'extracurriculars')->get();
        // dd($data);
        return view('Pages.Student', ['data_siswa' => $data]);
    }
}
