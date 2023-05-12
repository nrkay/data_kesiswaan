<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::all();
        return view('Pages.Student', ['data_siswa' => $data]);
        dd($data);
    }
}
