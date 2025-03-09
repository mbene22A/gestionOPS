
<div class="container">
    <h1 class="text-center mtd-5">Ajouter un nouvel etablissement</h1>
    <form action="{{ route('etablissement.store')}}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" placeholder="entrer le nom de l'établissement">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Adresse :</label>
                <input type="text" name="adresse" class="form-control" placeholder="entrer l' adresse de l'établissement">

                
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Contact :</label>
                <input type="text" name="contact" class="form-control" placeholder="entrer le contact de l'établissement">
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
                <label>Nombre de Classes :</label>
                <input type="number" name="nbre_classes" class="form-control" placeholder="entrer le nombre de classes de l'établissement">
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-primary">AJOUTER</button>
        </div>
    </form>
