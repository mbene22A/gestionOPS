<?php
use App\Models\Etablissement;
use App\Models\Classe;
?>


<div class="container">
    <h1 class="text-center mt-5"><Articles></h1>
    <div class="d-flex justify-content-center">
      <a href="{{route('classe.create')}}" class="btn btn-info my-5">Ajouter une Classe</a>
    </div>
  <table class="table table-hover" style="border-spacing: 35px;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Niveau</th>
        <th scope="col">Effectif</th>
        <th scope="col">Etablissement</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    </tbody>
  
      @foreach($classes as $classe)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
             <tr class="table-active">
              <th scope="row">{{$classe->id}}</th>
                  <td>{{$classe->nom}}</td>
                    <td>{{$classe->niveau}}</td>
                    <td>{{$classe->effectif}}</td>
                    <td>{{$classe->etablissement->nom}}</td>
                    <td>
                      <a href="{{route('classe.show', $classe->id)}}" class="btn btn-info">Detail</a>
                      <a href="{{route('classe.edit',  ['id' => $classe->id])}}" class="btn btn-warning">Editer</a>
                      <form action="{{ route('classe.destroy', ['id' => $classe->id])}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                        </form>
                    </td>
                  </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
         @endforeach
              </tbody>
  </table>
  
  
  
  