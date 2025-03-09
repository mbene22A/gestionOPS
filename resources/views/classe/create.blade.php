
<div class="container">
    <h1 class="text-center mtd-5">Ajouter un nouvelle classe</h1>
    <form action="{{ route('classe.store')}}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" placeholder="entrer le nom de la classe">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Niveau :</label>
                <input type="text" name="niveau" class="form-control" placeholder="entrer le niveau de la classe">

                
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Effectif :</label>
                <input type="number" name="effectif" class="form-control" placeholder="entrer l'effectif de la classe">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Etablissement :</label>
                <select name="etablissement_id" id="etablissement_id"  class="form-control" required>
                    <option value=""> --Choisir un etablissement--</option>
                    @foreach ($etablissements as $etablissement)
                    <option value="{{$etablissement->id }}">{{$etablissement->nom}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-primary">AJOUTER</button>
        </div>
    </form>
