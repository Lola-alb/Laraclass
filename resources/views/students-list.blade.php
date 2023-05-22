@php
use App\Models\Student;
@endphp

@extends('layout')
@section('content')

<h1>Liste de tous les étudiants</h1>

<section>
    <article class="student-add-new">
            <div>
                <a href="/form">
                    <span></span>
                    <span></span>       
                </a>
            </div>
    </article>

    @foreach($students as $student)
    <article>
        <p class="display-modal" id="student-{{$student->id}}" onclick="modalConfirmation('student-{{$student->id}}')">Supprimer</p>
        <header>
            <div class='student-profile-pic'></div>
            <h2>{{$student->first_name}} {{$student->last_name}}</h2>
        </header>
        <div class="student-description">
            <p>Classe {{$student->fk_classroom_id}}</p>
            <p>Né(e) le {{$student->birth_date}}</p>
            <p>{{$student->address}}</p>
        </div>
    </article>
    <div class="modal-confirmation" id="student-{{$student->id}}">
        <div>
            <h2>Supprimer cet élève ?</h2>
            <div>
                <a href="/delete/{{$student->id}}" class="close-modal">Confirmer</a>
                <a href="#" class="close-modal" onclick="modalClose('student-{{$student->id}}')">Annuler</a>
            </div>
        </div>
    </div>
    @endforeach

</section>
<script>
function modalConfirmation(id){
    modal = document.querySelector('#' + id + '.modal-confirmation');
    console.log(modal)
    modal.style.display = "block";
}

function modalClose(id){
    modal = document.querySelector('#' + id + '.modal-confirmation')
    modal.style.display = "none";
}

function preventScroll(event) {
    event.preventDefault();
  };
  document.querySelector('.modal-confirmation a:last-child').addEventListener('click', preventScroll);


</script>

@endsection