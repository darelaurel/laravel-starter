@extends('welcome')

@section('content')
    
    <a href="/clients/create" class="btn btn-primary mt-2 mb-2">Nouveau client</a>
    <table class="table table-hover">
        <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Entreprise</th>
              <th scope="col">Statut</th>
              <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($clients as $value)
                  <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td> <a href="/clients/{{$value->id}}">{{$value->nom}}</a></td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->entreprise->nom}}</td>
                    <td>{{$value->status}}</td>
                    <td>
                      <a class="btn btn-warning" href="/clients/{{$value->id}}/edit">Editer</a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                          Supprimer
                      </button>
                      @include('includes.modal')
                    </td>
                  </tr>
            @endforeach  
        </tbody>
    </table>
    
@endsection
