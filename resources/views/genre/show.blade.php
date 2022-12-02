@extends('layout.app')

@section('content')
    <h2>Affichage du genre {{ $genre->name }}{{ $genre->prenom }}</h2>
    <ul>
        <li>{{ $genre->id }}</li>
        <li>{{ $genre->name }}</li>
        <li>{{ $genre->created_at }}</li>
        <li>{{ $genre->updated_at }}</li>
    </ul>
@endcontent