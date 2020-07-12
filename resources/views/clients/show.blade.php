@extends('welcome')

@section('content')
   <div class="mt-2"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
                <li class="breadcrumb-item"><a href="/clients/{{$client->id}}">{{$client->id}}</a></li>
            </ol>
        </nav>
    </div>
        <div class="d-flex justify-content-start">
            <div class="mr-5">
                @if($client->image)
                    <img src="{{asset('storage/'.$client->image)}}" width="200" class=" rounded img-thumbnail">
                @endif
            </div>
            <div class="media">
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


