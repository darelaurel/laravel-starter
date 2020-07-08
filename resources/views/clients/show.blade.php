@extends('welcome')

@section('content')
   <div class="mt-2"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$client->id}} </li>
            </ol>
        </nav>
    </div>
        <div class="d-flex justify-content-start">
            <div class="media">
                <img src="{{asset('images/man.png')}}"  class="align-self-center mr-3">
                <div class="media-body">
                    <h5 class="card-title">Informations</h5>
                    <p class="card-text"> {{$client->nom}} </p>
                    <p class="card-text"> {{$client->email}} </p>
                    <p class="card-text"> {{$client->entreprise->nom}} </p>
                    <a href="/clients" class="btn btn-primary">Aller en arrière</a>
                </div>
            </div>
        </div>
        

@endsection


