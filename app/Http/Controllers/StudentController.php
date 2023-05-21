<?php


namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\ExtracurricularActivity;


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
        $student = Student::create($data);

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('massage', 'Berhasil menambahkan data');
            return redirect('/student');
        }
    }
    public function edit($id)
    {
        $class = Classroom::all();
        $data = Student::with('classroom.homeroom_teacher', 'extracurriculars')->find($id);
        return view('Pages.editStudent', ['data' => $data, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'NIM', 'kelas']);
        $model = Student::find($id);
        $model->update($data);
    }

    public function delete($id)
    {
        $data = Student::find($id);
        return view('Pages.deleteStudent', ['data' => $data]);
    }

    public function cancelDelete()
    {
        return redirect('/student');
    }

    public function deleteData(Request $request, $id)
    {
        $data = Student::find($id);
        if ($data) {
            $data->extracurriculars()->delete();
            $deleted = $data->delete();
            if ($deleted) {
                return redirect('/student');
            }
        }
    }

    public function deletedStudentList()
    {
        $data = Student::onlyTrashed()->with('classroom.homeroom_teacher', 'extracurriculars')->get();
        return view('Pages.deletedList', ['data' => $data]);
    }

    public function restoreStudent($id)
    {
        $data = Student::withTrashed()->where('id', $id)->restore();
        if ($data) {
            Session::flash('status', 'berhasil');
            Session::flash('massage', 'Berhasil memulihkan data');

            return redirect('/student');
        }
    }
}
