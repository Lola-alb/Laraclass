@php
    use App\Models\Classroom;
    $classroom = new Classroom;
    $classroom_db = $classroom->get();
@endphp


@extends('layout')
@section('content')
<h1 id="form-title">Ajouter un élève</h1>
<form action="/confirmation" method="post">
    {{ csrf_field() }}
    <label for="fname">Nom de famille:</label>
    <input type="text" id="fname" name="first_name">

    <label for="lname">Prénom:</label>
    <input type="text" id="lname" name="last_name">

    <label for="address">Adresse:</label>
    <input type="text" id="address" name="address">

    <label for="bdate">Date de naissance (YYYY/MM/DD):</label>
    <input type="date" id="bdate" name="birth_date">

    <label for="croom">Numéro de classe :</label>
    <select name="fk_classroom_id" id="croom">
    <option value="{{ $classroom_db[0]->id; }}">{{ $classroom_db[0]->id; }}</option>
    <option value="{{ $classroom_db[1]->id; }}">{{ $classroom_db[1]->id; }}</option>
    <option value="{{ $classroom_db[2]->id; }}">{{ $classroom_db[2]->id; }}</option>
    <option value="{{ $classroom_db[3]->id; }}">{{ $classroom_db[3]->id; }}</option>
    </select> 

    <input type="submit" value="Add student">
</form>
@endsection