@extends('layout')
@section('title','Add an ore')
@section('main')
    <form action="/Ores/{{$specific_ore->id}}" method="patch">
        @csrf
        <input type="text" id="label" name="label" value="{{$specific_ore->label}}" required><br>
        <input type="text" id="price" name="price" value="{{$specific_ore->price}}" required><br>
        <textarea id="desc" name="desc" rows="4" required>{{$specific_ore->desc}}</textarea><br>
        <input id="image_path" name="image_path" value="{{$specific_ore->image_path}}" required><br>
        <input id="date_" name="date_" value="{{$specific_ore->date_}}" required><br><br>

        <button type="submit" name="btn_edit">Confirm edit</button>
    </form>
@endsection

