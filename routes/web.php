<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\FormController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentsController::class, 'index']);

Route::get('/form', [FormController::class, 'addStudent']);

Route::post('/confirmation',[FormController::class, 'saveChanges']);

Route::get('/classroom', [ClassroomsController::class, 'displayStudents']);

Route::get('/delete/{id}', [StudentsController::class, 'destroyStudent']);



//Pour peupler manuellement la table des classes (mise en place de l'app)
Route::get('/addroom', function () {
    return view('addroom');
});

Route::post('/conf', function () {
    $student = App\Models\Classroom::create([
        'name' => request('name'),
        'level' => request('level')
    ]);

    return 'class added';
});
