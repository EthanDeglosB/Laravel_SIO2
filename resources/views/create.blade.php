@extends('layout')
@section('title','Add an ore')
@section('main')
<form action="/Ores" method="post">
    @csrf
    <input type="text" id="label" name="label" placeholder="name of the object" required><br>
    <input type="text" id="price" name="price" placeholder="price" required><br>
    <textarea id="desc" name="desc" rows="4" placeholder="description" required></textarea><br>
    <input id="image_path" name="image_path" placeholder="image path" required><br>
    <input id="date_" name="date_" placeholder="date" required><br><br>

    <button type="submit" name="btn_create">Confirm</button>
</form>
@endsection

