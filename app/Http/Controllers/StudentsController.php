<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{   
    public function index(){
        $students = Student::all();
        return view('students-list',
    [
        'students' => $students
    ]);
    }

    public function destroyStudent($id){
        Student::destroy($id);
        return redirect('/');
    }
}
