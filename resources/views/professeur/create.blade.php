
<div class="container">
    <h1 class="text-center mtd-5">Ajouter un nouveau professeur</h1>
    <form action="{{ route('professeur.store')}}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" placeholder="entrer le nom du professeur">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Prenom :</label>
                <input type="text" name="prenom" class="form-control" placeholder="entrer le prenom du professeur">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Email :</label>
                <input type="text" name="email" class="form-control" placeholder="entrer l'email du professeur">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Specialite :</label>
                <input type="text" name="specialite" class="form-control" placeholder="entrer la specialité du professeur">
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-primary">AJOUTER</button>
        </div>
    </form>
