
<div class="container">
    <h1 class="text-center mt-5"><Articles></h1>
    <div class="d-flex justify-content-center">
      <a href="{{route('etablissement.create')}}" class="btn btn-info my-5">Ajouter un etablissement</a>
    </div>
  <table class="table table-hover" style="border-spacing: 35px;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Contact</th>
        <th scope="col">Nombre de classes</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    </tbody>
  
      @foreach($etablissements as $etablissement)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
             <tr class="table-active">
              <th scope="row">{{$etablissement->id}}</th>
                  <td>{{$etablissement->nom}}</td>
                    <td>{{$etablissement->adresse}}</td>
                    <td>{{$etablissement->contact}}</td>
                    <td>{{$etablissement->nbre_classes}}</td>
                    <td>
                      <a href="" class="btn btn-warning">Editer</a>
                      <a href="" class="btn btn-warning">Detail</a>
                      <a href="" class="btn btn-warning">Supprimer</a>
                      {{-- <button type="button" class="btn btn-warning">Supprimer</button> --}}
                    </td>
                  </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
         @endforeach
              </tbody>
  </table>
  
  
  
  