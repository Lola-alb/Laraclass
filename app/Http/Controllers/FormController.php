<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class FormController extends Controller
{
    public function addStudent(){
        return view('form');
    }

    public function saveChanges(){
        $student = Student::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'birth_date' => request('birth_date'),
            'address' => request('address'),
            'fk_classroom_id' => request('fk_classroom_id')
        ]);
    
        return view('confirmation',
    [
        'student' => $student
    ]);
    }
}
