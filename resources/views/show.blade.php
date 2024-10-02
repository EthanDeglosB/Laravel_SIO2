@extends('layout')
@section('title',$specific_ore->label.' ore')
@section('main')
<table>
    <tr>
        <th><h1>Name</h1></th>
        <th><h1>Price</h1></th>
        <th><h1>Description</h1></th>
        <th><h1>img</h1></th>
        <th><h1>date</h1></th>
    </tr>
    <tr>
        <td><h1>{{$specific_ore->label}}</h1></td>
        <td><p>{{$specific_ore->price}}g</p></td>
        <td><p>{{$specific_ore->desc}}</p></td>
        <td><img src="/{{$specific_ore->image_path}}" alt="ore image"></td>
        <td><p>{{$specific_ore->date_}}</p></td>
        </tr>
</table>
<a href="/Ores">Back</a>
@endsection
