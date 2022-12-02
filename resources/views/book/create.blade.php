@extends('layout.app')

@section('content')
    <h2>Formulaire de création d'un livre</h2>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name">
        <select name="genre_id">
            <option value="">ajouter un genre</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <select name="auteur_id">
            <option value="">ajouter un auteur</option>
            @foreach($auteurs as $auteur)
                <option value="{{ $auteur->id }}">{{ $auteur->name }}</option>
            @endforeach
        </select>
        <button type="submit">Créer un livre !</button>
    </form>
@endsection