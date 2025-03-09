


<h1>Modifier l'établissement</h1>

    <form action="{{ route('etablissement.update', $etablissement->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="nom">Nom de l'établissement</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $etablissement->nom) }}" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse', $etablissement->adresse) }}" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact', $etablissement->contact) }}" required>
        </div>

        <div class="form-group">
            <label for="nbre_classes">Nombre de classes</label>
            <input type="number" name="nbre_classes" id="nbre_classes" class="form-control" value="{{ old('nbre_classes', $etablissement->nbre_classes) }} " required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('etablissement.index') }}" class="btn btn-secondary">Retour liste établissements</a>
    </form>
