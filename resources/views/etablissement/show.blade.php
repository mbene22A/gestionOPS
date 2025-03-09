
    <h1>{{ $etablissement->nom }}</h1>
    <p>Adresse : {{ $etablissement->adresse }}</p>
    <p>Contact : {{ $etablissement->contact }}</p>
    <p>Nombre de classes : {{ $etablissement->nbre_classes }}</p>
    <a href="{{ route('etablissement.index') }}" class="btn btn-primary">Retour liste établissement</a>
