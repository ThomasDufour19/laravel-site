<nav>
    <ul>
        <li>
            <a href="{{ route('book.index') }}" titre="Liste des livres">Liste des livres</a>
        </li>
        <li>
            <a href="{{ route('book.create') }}" titre="Ajouter un livre">Ajouter un livre</a>
        </li>
        </br>
        <li>
            <a href="{{ route('genre.index') }}" titre="Liste des genres">Liste des genres</a>
        </li>
        <li>
            <a href="{{ route('genre.create') }}" titre="Ajouter un genre">Ajouter un genre</a>
        </li>
        </br>
        <li>
            <a href="{{ route('auteur.index') }}" titre="Liste des auteurs">Liste des auteurs</a>
        </li>
        <li>
            <a href="{{ route('auteur.create') }}" titre="Ajouter un auteur">Ajouter un auteur</a>
        </li>
    </ul>
</nav>
