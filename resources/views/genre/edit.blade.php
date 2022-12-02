@extends('layout.app')

@section('content')
    <h2>Affichage du livre {{ $genre->name }}</h2>
    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="{{ $genre->name }}">
        <button type="submit">Modifier le livre !</button>
    </form>
@endsection