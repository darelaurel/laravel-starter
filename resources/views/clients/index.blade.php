@extends('welcome')

@section('content')
    @can('create', 'App\Client::class')
        <a href="/clients/create" class="btn btn-primary mt-2 mb-2">Nouveau client</a>
    @endcan
    <table class="table table-hover table-bordered">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Entreprise</th>
              <th>Statut</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($clients as $value)
                  <tr>
                    <td width="5%">{{$value->id}}</td>
                    <td width="20%">
                        <img src="{{asset('storage/'.$value->image)}}" width="100" class=" rounded img-thumbnail">
                    </td>
                    <td width="10%"> <a href="/clients/{{$value->id}}">{{$value->nom}}</a></td>
                    <td width="15%">{{$value->email}}</td>
                    <td width="15%">{{$value->entreprise->nom}}</td>
                    <td width="10%">{{$value->status}}</td>
                    <td width="25%">
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
    <div class="row d-flex justify-content-center">
         {{$clients->links()}}    
    </div>

@endsection
