
<div class="container">
    <h1 class="text-center mt-5"><Articles></h1>
    <div class="d-flex justify-content-center">
      <a href="{{route('professeur.create')}}" class="btn btn-info my-5">Ajouter un professeur</a>
    </div>
  <table class="table table-hover" style="border-spacing: 35px;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Spécialité</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    </tbody>
  
      @foreach($professeurs as $professeur)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
             <tr class="table-active">
              <th scope="row">{{$professeur->id}}</th>
                  <td>{{$professeur->nom}}</td>
                    <td>{{$professeur->prenom}}</td>
                    <td>{{$professeur->email}}</td>
                    <td>{{$professeur->specialite}}</td>
                    <td>
                      <a href="{{route('professeur.show', $professeur->id)}}" class="btn btn-info">Detail</a>
                      <a href="{{route('professeur.edit',  ['id' => $professeur->id])}}" class="btn btn-warning">Editer</a>
                      <form action="{{route('professeur.destroy', ['id' => $professeur->id])}}" method="POST">
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-warning">Supprimer</button> 
                    </form>
                    </td>
                  </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
         @endforeach
              </tbody>
  </table>
  
  
  
  