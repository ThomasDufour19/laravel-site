@extends('layout.app')

@section('content')
    <h2>Affichage du livre {{ $book->name }}</h2>
    <ul>
        <li>{{ $book->id }}</li>
        <li>{{ $book->name }}</li>
        <li>{{ $book->created_at }}</li>
        <li>{{ $book->updated_at }}</li>
    </ul>

    <h3>le genre du livre est : {{ $book->genre->name }}</h3>
    <h3>l' auteur du livre est : {{ $book->auteur->name }}</h3>
@endsection