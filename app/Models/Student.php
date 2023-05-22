<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'address',
        'fk_classroom_id'       
    ];

    public function classrooms(){
        return $this->belongsTo(Classroom::class, 'fk_classroom_id');
    }
} 
