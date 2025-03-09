


<h1>Modifier la classe</h1>

    <form action="{{ route('classe.update', $classe->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="nom">Nom de la classe</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $classe->nom) }}" required>
        </div>

        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" value="{{ old('niveau', $classe->niveau) }}" required>
        </div>

        <div class="form-group">
            <label for="effectif">Effectif</label>
            <input type="number" name="effectif" id="effectif" class="form-control" value="{{ old('effectif', $classe->effectif) }}" required>
        </div>

        <div class="form-group">
            <label for="nom_etablissement">Nom de l'etablissement</label>
            <select   name="etablissement" class="form-control" style="width:185px;">
                @foreach ($etablissements as $etablissement)
                  <option value="{{$etablissement->id}}" >{{$etablissement->nom}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('classe.index') }}" class="btn btn-secondary">Retour liste classes</a>
    </form>
