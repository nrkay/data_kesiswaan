<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{

    public function index()
    {
        $data = Extracurricular::all();
        return view('Pages.Ekskul', ['ekskul' => $data]);
        dd($data);
    }
}
