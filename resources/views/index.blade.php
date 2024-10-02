@extends('layout')
@section('title','For sale')
@section('main')
    <table>
        <tr>
            <th><h1>Name</h1></th>
            <th><h1>Price</h1></th>
            <th><h1>Description</h1></th>
            <th><h1>img</h1></th>
            <th><h1>date</h1></th>
            <th><h1>More info</h1></th>
        </tr>
        @foreach($all_ores as $current_ore)
            <tr>
                <td><h1>{{$current_ore->label}}</h1></td>
                <td><p>{{$current_ore->price}}g</p></td>
                <td><p>{{$current_ore->desc}}</p></td>
                <td><img src="{{$current_ore->image_path}}" alt="ore image"></td>
                <td><p>{{$current_ore->date_}}</p></td>
                <td><a href="/Ores/{{$current_ore->id}}">More info</a></td>
                <br>
            </tr>
        @endforeach
    </table>
@endsection
