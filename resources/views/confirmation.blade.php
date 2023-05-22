@extends('layout')
@section('content')
<section id="confirmation-section">
    <h1>L'étudiant {{$student->first_name}} a bien été ajouté</h1>
    <a href="/form">Ajouter un étudiant</a>
</section>
@endsection