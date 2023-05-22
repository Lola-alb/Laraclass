

@extends('layout')
@section('content')

<h1>Voir les élèves par classe</h1>
<section id="main-classrooms-section">
    @foreach($classrooms as $classroom)
    <section class ="classroom-section">
            <h2 id="classroom-{{$classroom->id}}">{{$classroom->name}}</h2>

        <div class="classroom-students">
        @foreach($classroom->students as $student)
            <article id="classroom-{{$student->fk_classroom_id}}">
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
        @endforeach
        <div>
    </section>
    @endforeach
</section>
@endsection