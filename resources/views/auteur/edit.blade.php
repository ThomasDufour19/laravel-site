@extends('layout.app')

@section('content')
    <h2>Affichage du auteur {{ $auteur->name }}</h2>
    <form action="{{ route('auteur.update', $auteur->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="{{ $auteur->name }}">
        <button type="submit">Modifier le auteur !</button>
    </form>
@endsection