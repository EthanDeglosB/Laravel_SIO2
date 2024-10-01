<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<table>
    <tr>
        <th><h1>Name</h1></th>
        <th><h1>Price</h1></th>
        <th><h1>Description</h1></th>
        <th><h1>img</h1></th>
        <th><h1>date</h1></th>
    </tr>
    @foreach($all_ores as $current_ore)
        <tr>
            <td><h1>{{$current_ore->label}}</h1></td>
            <td><p>{{$current_ore->price}}g</p></td>
            <td><p>{{$current_ore->desc}}</p></td>
            <td><img src="{{$current_ore->image_path}}" alt="ore image"></td>
            <td><p>{{$current_ore->date_}}</p></td>
            <br>
        </tr>
    @endforeach
</table>
</body>

