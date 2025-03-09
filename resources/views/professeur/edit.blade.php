


<h1>Modifier le professeur</h1>

    <form action="{{ route('professeur.update', $professeur->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="nom">Nom du professeur</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $professeur->nom) }}" required>
        </div>

        <div class="form-group">
            <label for="adresse">Prenom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom', $professeur->prenom) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $professeur->email) }}" required>
        </div>

        <div class="form-group">
            <label for="specialite">Specialite</label>
            <input type="text" name="specialite" id="specialite" class="form-control" value="{{ old('specialite', $professeur->specialite) }} " required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('professeur.index') }}" class="btn btn-secondary">Retour liste professeurs</a>
    </form>
