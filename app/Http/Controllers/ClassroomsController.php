<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Student;


class ClassroomsController extends Controller
{
    public function displayStudents(){
        $classrooms = Classroom::all();
        $students = Student::all();
        return view('classroom',
    [
        'classrooms' => $classrooms,
        'students' => $students
    ]);
    }
}
