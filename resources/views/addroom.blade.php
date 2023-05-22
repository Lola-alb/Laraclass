@extends('layout')
@section('content')
<form action="/conf" method="post">
    {{ csrf_field() }}
    <label for="fname">nom:</label>
    <input type="text" id="fname" name="name">

    <label for="lname">level:</label>
    <input type="text" id="lname" name="level">

    <input type="submit" value="Add class">
</form>
@endsection