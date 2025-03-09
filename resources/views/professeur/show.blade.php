
    <h1>{{ $professeur->nom }}</h1>
    <p>Prenom : {{ $professeur->prenom }}</p>
    <p>Email : {{ $professeur->email }}</p>
    <p>Specialite : {{ $professeur->specialite }}</p>
    <a href="{{ route('professeur.index') }}" class="btn btn-primary">Retour liste professeur</a>
