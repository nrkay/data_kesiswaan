<?php


namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $data = Student::with('classroom.homeroom_teacher', 'extracurriculars')->get();
        // dd($data);
        return view('Pages.Student', ['data_siswa' => $data]);
    }

    public function show($id)
    {
        $data = Student::with('classroom.homeroom_teacher', 'extracurriculars')->find($id);
        return view('Pages.detailStudent', ['data_siswa' => $data]);
    }

    public function add()
    {
        $data = Classroom::all();
        return view('Pages.addStudent', ['data' => $data]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->only(['name', 'NIS', 'kelas']);
        Student::create($data);
    }
}
